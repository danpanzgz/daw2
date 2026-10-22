"""Ejercicio 6 - Comparación de LinearRegression y RandomForestRegressor.

Autor: Alejandro Gracia
"""
import sys
import time
from pathlib import Path

from sklearn.ensemble import RandomForestRegressor
from sklearn.linear_model import LinearRegression
from sklearn.metrics import mean_absolute_error

sys.path.insert(0, str(Path(__file__).resolve().parents[1] / "ejercicio_5"))
from functions import RANDOM_STATE, load_data, split_data  # noqa: E402

if __name__ == "__main__":
    X_train, X_test, y_train, y_test = split_data(load_data().dropna())
    models = {
        "LinearRegression": LinearRegression(),
        "RandomForestRegressor": RandomForestRegressor(
            n_estimators=100, max_depth=15, random_state=RANDOM_STATE, n_jobs=-1),
    }
    for name, model in models.items():
        t0 = time.perf_counter()
        model.fit(X_train, y_train)
        fit_time = time.perf_counter() - t0
        mae = mean_absolute_error(y_test, model.predict(X_test))
        print(f"{name}: entrenamiento {fit_time:.2f} s | MAE {mae:.4f}")
