const PIN_CORRECTO = "1234";
const MAX_INTENTOS = 3;

let saldo = 10000;
let intentos = 0;

const pantalla = document.getElementById("pantalla");
const entrada = document.getElementById("entrada");
const importe = document.getElementById("importe");
const login = document.getElementById("login");
const menu = document.getElementById("menu");

const formatear = (n) =>
  n.toLocaleString("es-ES", { style: "currency", currency: "EUR" });

const mostrar = (texto, error = false) => {
  pantalla.textContent = texto;
  pantalla.classList.toggle("error", error);
};

// Teclado numérico del PIN
document.querySelectorAll(".tecla").forEach((btn) =>
  btn.addEventListener("click", () => {
    if (entrada.value.length < 4) entrada.value += btn.textContent;
  })
);

document.getElementById("borrar").addEventListener("click", () => {
  entrada.value = "";
});

// Validar PIN
const validarPin = () => {
  if (entrada.value === PIN_CORRECTO) {
    intentos = 0;
    login.hidden = true;
    menu.hidden = false;
    mostrar("Bienvenido. Elige una opción");
  } else {
    intentos++;
    entrada.value = "";
    if (intentos >= MAX_INTENTOS) {
      document.querySelectorAll("#login button").forEach((b) => (b.disabled = true));
      mostrar("Tarjeta bloqueada", true);
    } else {
      mostrar(`PIN incorrecto (${intentos}/${MAX_INTENTOS})`, true);
    }
  }
};
document.getElementById("validar").addEventListener("click", validarPin);

// Consultar saldo
const consultarSaldo = () => mostrar(`Saldo disponible: ${formatear(saldo)}`);
document.getElementById("btnSaldo").addEventListener("click", consultarSaldo);

// Sacar dinero
const sacarDinero = () => {
  const cantidad = Number(importe.value);

  if (!cantidad || cantidad <= 0) {
    mostrar("Introduce un importe válido", true);
  } else if (cantidad > saldo) {
    mostrar(`Saldo insuficiente. Disponible: ${formatear(saldo)}`, true);
  } else {
    saldo -= cantidad;
    mostrar(`Has retirado ${formatear(cantidad)}. Saldo: ${formatear(saldo)}`);
  }
  importe.value = "";
};
document.getElementById("btnSacar").addEventListener("click", sacarDinero);

// Salir
document.getElementById("btnSalir").addEventListener("click", () => {
  menu.hidden = true;
  login.hidden = false;
  entrada.value = "";
  mostrar("Introduce tu PIN");
});
