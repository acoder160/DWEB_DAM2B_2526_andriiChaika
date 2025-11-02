import { Empleado } from "./empleado"

export class Programador extends Empleado {
    lenguajePrincipal: string
    proyectosAsignados: number

    constructor(nombre:string, edad: number, salario: number, lenguajePrincipal: string, proyectosAsignados: number){
        super(nombre, edad, salario)
        this.lenguajePrincipal = lenguajePrincipal
        this.proyectosAsignados = proyectosAsignados
    }

    toString(): string {
        return `${this.nombre} (${this.lenguajePrincipal}) - ${this.salario} €/mes - ${this.proyectosAsignados} - proyectos`
    }

    calcularBonus(): number{
        return this.calcularSalarioAnual() + ((Number(this.calcularSalarioAnual()) * ((2 * this.proyectosAsignados) / 100))) //2% mas al salario anual por cada proyecto
    }
}