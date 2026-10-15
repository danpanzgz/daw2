"""Entrena el modelo de precios de casas en California y lo guarda en disco.

Autores: Alejandro Gracia, Dan Bolocan
Uso: python model_training.py   (genera modelo_california.pkl)
"""
from pathlib import Path

import joblib
import pandas as pd
from sklearn.datasets import fetch_california_housing
from sklearn.ensemble import RandomForestRegressor
from sklearn.metrics import mean_absolute_error
from sklearn.model_selection import train_test_split

TARGET = "MedHouseVal"
RANDOM_STATE = 42
TEST_SIZE = 0.2
CSV_PATH = Path(__file__).resolve().parent / "housing.csv"
MODEL_PATH = Path(__file__).resolve().parent / "modelo_california.pkl"


def load_data() -> pd.DataFrame:
    """Carga housing.csv convertido al esquema de scikit-learn (o lo descarga)."""
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


def main():
    df = load_data().dropna()
    X, y = df.drop(columns=[TARGET]), df[TARGET]
    X_train, X_test, y_train, y_test = train_test_split(
        X, y, test_size=TEST_SIZE, random_state=RANDOM_STATE)
    model = RandomForestRegressor(
        n_estimators=100, max_depth=15, random_state=RANDOM_STATE, n_jobs=-1)
    model.fit(X_train, y_train)
    print(f"MAE: {mean_absolute_error(y_test, model.predict(X_test)):.4f}")
    joblib.dump(model, MODEL_PATH, compress=3)
    print(f"Modelo guardado en {MODEL_PATH.name}")


if __name__ == "__main__":
    main()
