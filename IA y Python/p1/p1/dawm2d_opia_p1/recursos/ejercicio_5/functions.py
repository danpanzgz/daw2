"""Ejercicio 5 - Funciones de carga y división del dataset.

Autor: Alejandro Gracia
"""
from pathlib import Path

import pandas as pd
from sklearn.datasets import fetch_california_housing
from sklearn.model_selection import train_test_split

TARGET = "MedHouseVal"
RANDOM_STATE = 42
TEST_SIZE = 0.2
CSV_PATH = Path(__file__).resolve().parents[1] / "datos" / "housing.csv"


def load_data() -> pd.DataFrame:
    """Carga el dataset California Housing como DataFrame.

    Usa recursos/datos/housing.csv (versión CSV del dataset) convertido al
    esquema de scikit-learn. Si no existe, descarga el dataset con scikit-learn.
    """
    if not CSV_PATH.exists():
        return fetch_california_housing(as_frame=True).frame
    raw = pd.read_csv(CSV_PATH)
    return pd.DataFrame({
        "MedInc": raw["median_income"],
        "HouseAge": raw["housing_median_age"],
        "AveRooms": raw["total_rooms"] / raw["households"],
        "AveBedrms": raw["total_bedrooms"] / raw["households"],
        "Population": raw["population"],
        "AveOccup": raw["population"] / raw["households"],
        "Latitude": raw["latitude"],
        "Longitude": raw["longitude"],
        TARGET: raw["median_house_value"] / 100_000,
    })


def split_data(df: pd.DataFrame):
    """Divide el DataFrame en X_train, X_test, y_train, y_test (80/20)."""
    X = df.drop(columns=[TARGET])
    y = df[TARGET]
    return train_test_split(X, y, test_size=TEST_SIZE, random_state=RANDOM_STATE)
