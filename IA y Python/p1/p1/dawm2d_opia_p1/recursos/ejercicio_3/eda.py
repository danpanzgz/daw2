"""Ejercicio 3 - Análisis exploratorio: nulos y distribución de MedHouseVal.

Autor: Dan Bolocan
"""
import sys
from pathlib import Path

import matplotlib.pyplot as plt

sys.path.insert(0, str(Path(__file__).resolve().parents[1] / "ejercicio_5"))
from functions import TARGET, load_data  # noqa: E402

OUT = Path(__file__).resolve().parent


def check_nulls(df):
    """Muestra por pantalla el número de valores nulos por columna."""
    print("Valores nulos por columna:")
    print(df.isnull().sum())


def plot_target_distribution(df):
    """Histograma de la variable objetivo, guardado como .png."""
    plt.figure(figsize=(8, 5))
    plt.hist(df[TARGET], bins=50, edgecolor="black")
    plt.title("Distribución de MedHouseVal - Dan Bolocan P1")
    plt.xlabel("MedHouseVal (x100.000 $)")
    plt.ylabel("Frecuencia")
    plt.tight_layout()
    plt.savefig(OUT / "histograma_objetivo.png", dpi=150)
    plt.close()


if __name__ == "__main__":
    data = load_data()
    check_nulls(data)
    plot_target_distribution(data)
