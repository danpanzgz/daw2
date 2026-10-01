import pandas as pd
import matplotlib.pyplot as plt
from sklearn.datasets import fetch_california_housing

# 1. Cargar el dataset directamente desde scikit-learn
print("Cargando dataset...")
california = fetch_california_housing()
df = pd.DataFrame(california.data, columns=california.feature_names)
df['MedHouseVal'] = california.target

# 2. Comprobar si hay valores nulos
print("\n--- Valores nulos en el dataset ---")
nulos = df.isnull().sum()
print(nulos)
print("\nAutor: Dan Bolocan P1") # Obligatorio para la captura

# 3. Representar gráficamente la distribución de la variable objetivo
plt.figure(figsize=(8, 6))
plt.hist(df['MedHouseVal'], bins=50, color='skyblue', edgecolor='black')
plt.title('Distribución de MedHouseVal (Precios)\nDan Bolocan P1', fontsize=14, fontweight='bold')
plt.xlabel('MedHouseVal (en cientos de miles de $)')
plt.ylabel('Frecuencia')

# Mostrar el gráfico por pantalla
plt.tight_layout()
plt.show()