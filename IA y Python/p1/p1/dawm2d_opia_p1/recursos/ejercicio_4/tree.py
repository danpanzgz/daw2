"""Ejercicio 4 - Árbol de decisión pequeño y su visualización.

Autor: Dan Bolocan
"""
import sys
from pathlib import Path

import matplotlib.pyplot as plt
from sklearn.tree import DecisionTreeRegressor, plot_tree

sys.path.insert(0, str(Path(__file__).resolve().parents[1] / "ejercicio_5"))
from functions import RANDOM_STATE, load_data, split_data  # noqa: E402

OUT = Path(__file__).resolve().parent
TREE_DEPTH = 3

if __name__ == "__main__":
    df = load_data().dropna()
    X_train, X_test, y_train, y_test = split_data(df)
    tree = DecisionTreeRegressor(max_depth=TREE_DEPTH, random_state=RANDOM_STATE)
    tree.fit(X_train, y_train)

    plt.figure(figsize=(20, 9))
    plot_tree(tree, feature_names=list(X_train.columns), filled=True, rounded=True, fontsize=10)
    plt.title("Árbol de decisión (max_depth=3) - Dan Bolocan P1")
    plt.savefig(OUT / "arbol_decision.png", dpi=150, bbox_inches="tight")
    plt.close()
    print(f"Árbol guardado: {tree.get_n_leaves()} hojas, profundidad {tree.get_depth()}")
