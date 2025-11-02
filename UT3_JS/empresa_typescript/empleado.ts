

export class Empleado {
    nombre: string
    edad: number
    salario: number


    constructor(nombre:string, edad: number, salario: number){
        this.nombre = nombre
        this.edad = edad
        this.salario = salario
    }

    toString(): string{
        return `${this.nombre} (${this.edad}) - ${this.salario}€/mes`
    }

    calcularSalarioAnual(): number {
        return this.salario * 12
    }
}