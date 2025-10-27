class Empleado {
    nombre: string
    edad: number
    salario: number


    constructor(nombre:string, edad: number, salario: number){
        this.nombre = nombre
        this.edad = edad
        this.salario = salario
    }

    toString(): string{
        return `empleado: ${this.nombre}, edad: ${this.edad}, salario: ${this.salario}`
    }

    calcularSalarioAnual(): number {
        return this.salario * 12
    }
}