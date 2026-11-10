// Ejercicio 1: función flecha + operador Spread/Rest
const analizar = (...params) => {
  console.log(`Número total de parámetros recibidos: ${params.length}`);

  if (params.length > 2) {
    console.log("Antes:", [...params]);

    const [primero, segundo, tercero, ...resto] = params;
    const resultado = [tercero, segundo, primero, ...resto];

    console.log("Después:", resultado);
    return resultado;
  }

  return [...params];
};

// Pruebas
analizar();
analizar("a");
analizar(1, 2);
analizar(1, 2, 3);
analizar("rojo", "verde", "azul", "amarillo", "negro");

// Spread al llamar la función con un array
const valores = [10, 20, 30, 40];
analizar(...valores);
