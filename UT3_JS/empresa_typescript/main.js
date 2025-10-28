"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
var Empleado_1 = require("./Empleado");
var Programador_1 = require("./Programador");
var empresa_1 = require("./empresa");
var empleados = [
    new Empleado_1.Empleado("Juan", 31, 2000), new Empleado_1.Empleado("Alberto", 26, 2200), new Empleado_1.Empleado("Oleg", 40, 1800), new Empleado_1.Empleado("Sebas", 19, 600)
];
var programadores = [
    new Programador_1.Programador("Andrii", 21, 1600, "TypeScript", 3),
    new Programador_1.Programador("Moha", 43, 1800, "JavaScript", 1),
    new Programador_1.Programador("Igor", 24, 2000, "Java", 10)
];
var google = new empresa_1.Empresa(empleados, programadores);
console.log("Lista de los empleados:");
for (var i = 0; i < google.empleados.length; i++) {
    console.log(google.empleados[i].toString(), " ", google.empleados[i].calcularSalarioAnual());
}
for (var i = 0; i < google.programadores.length; i++) {
    console.log(google.programadores[i].toString(), " ", google.programadores[i].calcularBonus());
}
