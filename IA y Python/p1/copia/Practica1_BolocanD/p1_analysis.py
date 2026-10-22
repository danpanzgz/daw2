"""p1_analysis.py

Soporta los puntos 1-4 de la práctica:
- Punto 1: breve memoria.
- Punto 2: dependencias (requirements.txt).
- Punto 3: EDA (nulos + histograma).
- Punto 4: árbol de regresión pequeño y visualización.

Coloca `housing.csv` en la carpeta del proyecto (o en `recursos/`) y
ejecuta `python p1_analysis.py` desde un entorno con las dependencias
instaladas. El script crea los recursos en `recursos/` y `figures/`.
"""

import json
import os
from pathlib import Path
import matplotlib.pyplot as plt
import numpy as np
import pandas as pd
from sklearn.datasets import fetch_california_housing
from sklearn.model_selection import train_test_split


def punto1_text():
    """Devuelve una memoria corta que responde Punto 1.

    El texto resultante se escribe en `p1_memoria.txt`.
    """
    return (
        "IA es un campo que crea sistemas que realizan tareas inteligentes; "
        "Machine Learning es una subárea que aprende modelos a partir de datos.\n"
        "El problema California Housing es supervisado y de regresión, "
        "porque la variable objetivo `MedHouseVal` es continua y se predice a partir de características.")


def setup_dirs(base):
    """Crea las carpetas de salida necesarias (`recursos/`, `figures/`)."""
    os.makedirs(base / 'recursos', exist_ok=True)
    os.makedirs(base / 'figures', exist_ok=True)


def punto2_create_requirements(base):
    """Devuelve la ruta al fichero `requirements.txt`.

    En este proyecto `requirements.txt` fue creado manualmente y lista las
    librerías necesarias para reproducir el ejercicio.
    """
    return base / 'requirements.txt'


def cargar_dataset(base: Path = None):
    """Carga el dataset.

    Prioriza un CSV local (`housing.csv`) en la carpeta del proyecto. Si no
    se encuentra, busca cualquier CSV en la raíz que contenga
    `median_house_value` y lo renombra a `MedHouseVal`. Si no hay CSV válidos,
    usa el dataset de `sklearn.datasets`.
    """
    # Base debe ser la carpeta del proyecto; por defecto usamos el directorio
    if base is None:
        base = Path(__file__).parent

    # Prefer explicit `housing.csv` placed by the user in the project root
    preferred = base / 'housing.csv'
    if preferred.exists():
        df = pd.read_csv(preferred)
        # Normalize common Kaggle column name to expected `MedHouseVal`
        if 'median_house_value' in df.columns and 'MedHouseVal' not in df.columns:
            df = df.rename(columns={'median_house_value': 'MedHouseVal'})
        if 'MedHouseVal' in df.columns:
            return df

    # Try any CSV in the project root
    for p in base.glob('*.csv'):
        try:
            df = pd.read_csv(p)
            if 'median_house_value' in df.columns and 'MedHouseVal' not in df.columns:
                df = df.rename(columns={'median_house_value': 'MedHouseVal'})
            if 'MedHouseVal' in df.columns:
                return df
        except Exception:
            continue

    # Fallback: fetch from sklearn
    data = fetch_california_housing(as_frame=True)
    df = data.frame
    return df


def split_dataset(df, test_size=0.2, random_state=42):
    """Separa `df` en `X` (features) e `y` (objetivo) y aplica `train_test_split`.

    Se espera que la columna objetivo se llame `MedHouseVal`.
    """
    X = df.drop(columns=['MedHouseVal'])
    y = df['MedHouseVal']
    return train_test_split(X, y, test_size=test_size, random_state=random_state)


def exploratory_analysis(df, out_dir):
    """Realiza análisis exploratorio básico.

    - Guarda el recuento de valores nulos en `recursos/nulls.txt`.
    - Guarda un histograma de la variable objetivo `MedHouseVal` en `figures/`.

    Retorna las rutas a los ficheros generados.
    """
    # Check nulls
    nulls = df.isnull().sum()
    nulls_path = out_dir / 'recursos' / 'nulls.txt'
    nulls.to_csv(nulls_path, header=True)

    # Histogram of MedHouseVal
    fig, ax = plt.subplots()
    df['MedHouseVal'].hist(bins=30, ax=ax)
    ax.set_title('Distribution of MedHouseVal')
    hist_path = out_dir / 'figures' / 'medhouseval_hist.png'
    fig.savefig(hist_path)
    plt.close(fig)
    return nulls_path, hist_path


def train_small_tree(X_train, y_train, max_depth=3, out_dir=Path('.')):
    try:
        from sklearn.tree import DecisionTreeRegressor, plot_tree
        SKLEARN_AVAILABLE = True
    except Exception:
        SKLEARN_AVAILABLE = False

    if SKLEARN_AVAILABLE:
        model = DecisionTreeRegressor(max_depth=max_depth, random_state=42)
        model.fit(X_train, y_train)

        fig, ax = plt.subplots(figsize=(12, 8))
        plot_tree(model, filled=True, feature_names=X_train.columns, max_depth=max_depth, ax=ax)
        tree_path = Path(out_dir) / 'figures' / f'decision_tree_d{max_depth}.png'
        fig.savefig(tree_path)
        plt.close(fig)
        return model, tree_path

    # Fallback: simple pure-Python regression tree (CART-like) for small depths
    class Node:
        def __init__(self, prediction=None, feature=None, threshold=None, left=None, right=None, depth=0):
            self.prediction = prediction
            self.feature = feature
            self.threshold = threshold
            self.left = left
            self.right = right
            self.depth = depth

    def variance(y):
        return float(np.var(y))

    def best_split(X, y):
        best = (None, None, -1)
        n, m = X.shape
        current_var = variance(y)
        if n <= 1:
            return best
        for col in X.columns:
            # skip non-numeric features
            if not pd.api.types.is_numeric_dtype(X[col]):
                continue
            vals = np.unique(X[col].dropna())
            if len(vals) == 0:
                continue
            if len(vals) > 50:
                candidates = np.quantile(vals, np.linspace(0.05, 0.95, 10))
            else:
                candidates = (vals[:-1] + vals[1:]) / 2.0 if len(vals) > 1 else []
            for thr in candidates:
                left_mask = X[col] <= thr
                if left_mask.sum() == 0 or left_mask.sum() == n:
                    continue
                y_left = y[left_mask]
                y_right = y[~left_mask]
                var_reduction = current_var - (len(y_left)/n)*variance(y_left) - (len(y_right)/n)*variance(y_right)
                if var_reduction > best[2]:
                    best = (col, float(thr), var_reduction)
        return best

    def build_tree(X, y, depth=0, max_depth=3):
        pred = float(np.mean(y))
        node = Node(prediction=pred, depth=depth)
        if depth >= max_depth or len(y) <= 5 or variance(y) == 0.0:
            return node
        feat, thr, gain = best_split(X, y)
        if feat is None or gain <= 0:
            return node
        left_mask = X[feat] <= thr
        node.feature = feat
        node.threshold = thr
        node.left = build_tree(X[left_mask], y[left_mask], depth+1, max_depth)
        node.right = build_tree(X[~left_mask], y[~left_mask], depth+1, max_depth)
        return node

    # train
    X_train = X_train.reset_index(drop=True)
    y_train = y_train.reset_index(drop=True)
    root = build_tree(X_train, y_train, depth=0, max_depth=max_depth)

    # simple plotting: compute x positions by leaf counts
    def count_leaves(n):
        if n is None:
            return 0
        if n.feature is None:
            return 1
        return count_leaves(n.left) + count_leaves(n.right)

    def assign_coords(n, x0=0, y0=0, depth=0, coords=None, x_scale=1.0):
        if coords is None:
            coords = {}
        if n.feature is None:
            coords[n] = (x0 + 0.5 * x_scale, -depth)
            return coords, 1
        left_leaves = count_leaves(n.left)
        right_leaves = count_leaves(n.right)
        left_coords, lcount = assign_coords(n.left, x0, y0, depth+1, coords, x_scale * (left_leaves/(left_leaves+right_leaves)))
        right_coords, rcount = assign_coords(n.right, x0 + x_scale * (left_leaves/(left_leaves+right_leaves)), y0, depth+1, coords, x_scale * (right_leaves/(left_leaves+right_leaves)))
        coords[n] = ((coords[n.left][0] + coords[n.right][0]) / 2.0, -depth)
        return coords, lcount + rcount

    coords, _ = assign_coords(root, x0=0, y0=0, depth=0, coords=None, x_scale=1.0)

    fig, ax = plt.subplots(figsize=(12, 8))
    def draw_node(n):
        x, y = coords[n]
        if n.feature is None:
            txt = f"leaf\nval={n.prediction:.2f}"
            ax.text(x, y, txt, ha='center', va='center', bbox=dict(boxstyle='round', facecolor='lightgray'))
        else:
            txt = f"{n.feature}\n<= {n.threshold:.2f}"
            ax.text(x, y, txt, ha='center', va='center', bbox=dict(boxstyle='round', facecolor='lightblue'))
            # draw edges
            lx, ly = coords[n.left]
            rx, ry = coords[n.right]
            ax.plot([x, lx], [y, ly], 'k-')
            ax.plot([x, rx], [y, ry], 'k-')
            draw_node(n.left)
            draw_node(n.right)

    draw_node(root)
    ax.set_axis_off()
    tree_path = Path(out_dir) / 'figures' / f'decision_tree_d{max_depth}.png'
    fig.savefig(tree_path, bbox_inches='tight')
    plt.close(fig)
    return root, tree_path


if __name__ == '__main__':
    base = Path(__file__).parent
    setup_dirs(base)

    # Punto 1
    text = punto1_text()
    with open(base / 'p1_memoria.txt', 'w', encoding='utf-8') as f:
        f.write(text)

    # Punto 2
    req = punto2_create_requirements(base)

    # Punto 3
    df = cargar_dataset(base)
    nulls_path, hist_path = exploratory_analysis(df, base)

    # Punto 4
    X_train, X_test, y_train, y_test = split_dataset(df)
    model, tree_path = train_small_tree(X_train, y_train, max_depth=3, out_dir=base)

    print('Done')
