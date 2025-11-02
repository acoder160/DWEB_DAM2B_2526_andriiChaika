"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.Empleado = void 0;
var Empleado = /** @class */ (function () {
    function Empleado(nombre, edad, salario) {
        this.nombre = nombre;
        this.edad = edad;
        this.salario = salario;
    }
    Empleado.prototype.toString = function () {
        return "".concat(this.nombre, " (").concat(this.edad, ") - ").concat(this.salario, "\u20AC/mes");
    };
    Empleado.prototype.calcularSalarioAnual = function () {
        return this.salario * 12;
    };
    return Empleado;
}());
exports.Empleado = Empleado;
