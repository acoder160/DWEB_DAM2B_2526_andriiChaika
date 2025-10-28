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
        return "empleado: ".concat(this.nombre, ", edad: ").concat(this.edad, ", salario: ").concat(this.salario);
    };
    Empleado.prototype.calcularSalarioAnual = function () {
        return this.salario * 12;
    };
    return Empleado;
}());
exports.Empleado = Empleado;
