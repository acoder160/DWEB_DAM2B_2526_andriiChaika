"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.Empresa = void 0;
var Empresa = /** @class */ (function () {
    function Empresa(empleados, programadores) {
        this.empleados = empleados;
        this.programadores = programadores;
    }
    Empresa.prototype.addEmpleado = function (empleado) {
        this.empleados.push(empleado);
    };
    Empresa.prototype.addProgramador = function (programador) {
        this.programadores.push(programador);
    };
    Empresa.prototype.calcularCosteTotalAnual = function () {
        var coste = 0;
        for (var i = 0; i < this.empleados.length; i++) {
            coste += this.empleados[i].calcularSalarioAnual();
        }
        for (var i = 0; i < this.programadores.length; i++) {
            coste += this.programadores[i].calcularBonus();
        }
        return coste;
    };
    return Empresa;
}());
exports.Empresa = Empresa;
