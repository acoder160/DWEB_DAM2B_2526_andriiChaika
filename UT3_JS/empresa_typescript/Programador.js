"use strict";
var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (Object.prototype.hasOwnProperty.call(b, p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        if (typeof b !== "function" && b !== null)
            throw new TypeError("Class extends value " + String(b) + " is not a constructor or null");
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
Object.defineProperty(exports, "__esModule", { value: true });
exports.Programador = void 0;
var Empleado_1 = require("./Empleado");
var Programador = /** @class */ (function (_super) {
    __extends(Programador, _super);
    function Programador(nombre, edad, salario, lenguajePrincipal, proyectosAsignados) {
        var _this = _super.call(this, nombre, edad, salario) || this;
        _this.lenguajePrincipal = lenguajePrincipal;
        _this.proyectosAsignados = proyectosAsignados;
        return _this;
    }
    Programador.prototype.toString = function () {
        return "".concat(_super.prototype.toString.call(this), ", lenguaje: ").concat(this.lenguajePrincipal, ", proyectos asignados: ").concat(this.proyectosAsignados);
    };
    Programador.prototype.calcularBonus = function () {
        return this.calcularSalarioAnual() + ((Number(this.calcularSalarioAnual()) * ((2 * this.proyectosAsignados) / 100))); //2% mas al salario anual por cada proyecto
    };
    return Programador;
}(Empleado_1.Empleado));
exports.Programador = Programador;
