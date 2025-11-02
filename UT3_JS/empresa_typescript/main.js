"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
var empleado_1 = require("./empleado");
var programador_1 = require("./programador");
var empresa_1 = require("./empresa");
var empleados = [
    new empleado_1.Empleado("Juan", 31, 2000), new empleado_1.Empleado("Alberto", 26, 2200), new empleado_1.Empleado("Oleg", 40, 1800), new empleado_1.Empleado("Sebas", 19, 600)
];
var programadores = [
    new programador_1.Programador("Andrii", 21, 1600, "TypeScript", 3),
    new programador_1.Programador("Moha", 43, 1800, "JavaScript", 1),
    new programador_1.Programador("Igor", 24, 2000, "Java", 10)
];
var google = new empresa_1.Empresa(empleados, programadores);
console.log("Lista de los empleados:");
var costeAnual = 0;
for (var i = 0; i < google.empleados.length; i++) {
    console.log(google.empleados[i].toString());
    costeAnual += google.empleados[i].calcularSalarioAnual();
}
for (var i = 0; i < google.programadores.length; i++) {
    console.log(google.programadores[i].toString());
    costeAnual += google.programadores[i].calcularBonus();
}
console.log("Coste total anual: ".concat(costeAnual, ".00 \u20AC"));
