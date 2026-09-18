import numpy as np
import pandas as pd
from sklearn.datasets import fetch_california_housing
from sklearn.model_selection import train_test_split
from sklearn.preprocessing import StandardScaler
from sklearn.linear_model import LinearRegression
from sklearn.metrics import mean_squared_error, r2_score

# 1. Cargar el dataset
housing = fetch_california_housing(as_frame=True)
X = housing.data
y = housing.target  # Precio medio de la vivienda (en miles de $100k)

# 2. Dividir los datos (80% entrenamiento, 20% prueba)
X_train, X_test, y_train, y_test = train_test_split(
    X, y, test_size=0.2, random_state=42
)

# 3. Escalar las características (Estandarización)
scaler = StandardScaler()
X_train_scaled = scaler.fit_transform(X_train)
X_test_scaled = scaler.transform(X_test)

# 4. Crear y entrenar el modelo de Regresión Lineal
model = LinearRegression()
model.fit(X_train_scaled, y_train)

# 5. Realizar predicciones
y_pred = model.predict(X_test_scaled)

# 6. Evaluar el modelo
mse = mean_squared_error(y_test, y_pred)
rmse = np.sqrt(mse)
r2 = r2_score(y_test, y_pred)

print(f"Raíz del Error Cuadrático Medio (RMSE): {rmse:.4f}")
print(f"Coeficiente de Determinación (R²): {r2:.4f}")

# Mostrar coeficientes más influyentes
coefficients = pd.DataFrame({
    'Característica': X.columns,
    'Coeficiente': model.coef_
}).sort_values(by='Coeficiente', ascending=False)

print("\nImportancia de las características (Coeficientes):")
print(coefficients.to_string(index=False))