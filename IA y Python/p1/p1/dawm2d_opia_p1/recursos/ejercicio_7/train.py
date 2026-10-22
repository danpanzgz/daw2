"""Ejercicio 7 - Entrenamiento, evaluación y guardado del modelo.

Autor: Alejandro Gracia
"""
import sys
from pathlib import Path

import joblib
from sklearn.ensemble import RandomForestRegressor
from sklearn.metrics import mean_absolute_error, mean_squared_error

sys.path.insert(0, str(Path(__file__).resolve().parents[1] / "ejercicio_5"))
from functions import RANDOM_STATE, load_data, split_data  # noqa: E402

MODEL_PATH = Path(__file__).resolve().parent / "modelo_california.pkl"


def compute_errors(y_true, y_pred):
    """Devuelve (MAE, MSE) y los muestra por pantalla."""
    mae = mean_absolute_error(y_true, y_pred)
    mse = mean_squared_error(y_true, y_pred)
    print(f"MAE: {mae:.4f}")
    print(f"MSE: {mse:.4f}")
    return mae, mse


def main():
    X_train, X_test, y_train, y_test = split_data(load_data().dropna())
    model = RandomForestRegressor(
        n_estimators=100, max_depth=15, random_state=RANDOM_STATE, n_jobs=-1)
    model.fit(X_train, y_train)
    compute_errors(y_test, model.predict(X_test))
    joblib.dump(model, MODEL_PATH, compress=3)
    print(f"Modelo guardado en {MODEL_PATH.name}")


if __name__ == "__main__":
    main()
