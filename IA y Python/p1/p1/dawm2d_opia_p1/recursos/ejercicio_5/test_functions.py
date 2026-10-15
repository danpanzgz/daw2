"""Ejercicio 5 - Pequeña prueba de load_data() y split_data().

Autor: Alejandro Gracia
Ejecutar: python test_functions.py
"""
from functions import TARGET, TEST_SIZE, load_data, split_data


def test_load_data():
    df = load_data()
    assert len(df) > 0
    assert TARGET in df.columns
    print(f"load_data OK: {df.shape[0]} filas, {df.shape[1]} columnas")
    return df


def test_split_data(df):
    X_train, X_test, y_train, y_test = split_data(df)
    assert len(X_train) + len(X_test) == len(df)
    assert len(X_train) == len(y_train) and len(X_test) == len(y_test)
    assert TARGET not in X_train.columns
    assert abs(len(X_test) / len(df) - TEST_SIZE) < 0.01
    print(f"split_data OK: train={len(X_train)}, test={len(X_test)}")


if __name__ == "__main__":
    test_split_data(test_load_data())
    print("Todas las pruebas han pasado")
