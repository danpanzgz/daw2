# Predicción del precio de casas en California (servicio web)

Servicio web (FastAPI) que predice el precio medio de la vivienda en una zona censal de California a partir de ocho variables
(`MedInc`, `HouseAge`, `AveRooms`, `AveBedrms`, `Population`, `AveOccup`, `Latitude`, `Longitude`). El modelo es un
`RandomForestRegressor` de scikit-learn entrenado con el dataset California Housing (MAE en prueba: 0,3403, en cientos de
miles de dólares). Está desplegado en Render con plan gratuito y expone `GET /` (health-check) y `POST /predict`.

Autores: Alejandro Gracia, Dan Bolocan

## Contenido del repositorio
- `app.py`: servicio FastAPI; si no encuentra `modelo_california.pkl` en local, lo descarga de GitHub al arrancar.
- `model_training.py` y `housing.csv`: código y datos que generan el modelo.
- `modelo_california.pkl`: modelo entrenado.
- `requirements.txt`: dependencias de producción.
- `medir_tiempos.py`: mide el tiempo de respuesta del servicio desplegado.

## Pasos del despliegue
1. Crear una cuenta en [render.com](https://render.com) iniciando sesión con GitHub.
2. Subir este proyecto a un repositorio público de GitHub (rama `main`), con el modelo incluido.
3. En Render: **New +** → **Web Service** → conectar el repositorio y elegir el plan **Free**.
4. Configurar el *Build Command* `pip install -r requirements.txt`.
5. Configurar el *Start Command* `uvicorn app:app --host 0.0.0.0 --port $PORT`.
6. Pulsar **Deploy**; en cada `git push` Render vuelve a desplegar. Probar con `python medir_tiempos.py <URL>`.

En local: `pip install -r requirements.txt` y `uvicorn app:app --reload`.

## URL final
<https://tu-servicio.onrender.com>
