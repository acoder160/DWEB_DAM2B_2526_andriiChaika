import { Empleado } from "./empleado"
import { Programador } from "./programador"

export class Empresa {
    public empleados: Empleado[]
    public programadores: Programador[]

    constructor( empleados: Empleado[], programadores: Programador[]){
        this.empleados = empleados
        this.programadores = programadores
    }

    addEmpleado(empleado: Empleado){
        this.empleados.push(empleado)
    }

    addProgramador(programador: Programador){
        this.programadores.push(programador)
    }

    calcularCosteTotalAnual(): number{
        let coste: number = 0
        for (let i = 0; i < this.empleados.length; i++) {
           coste += this.empleados[i].calcularSalarioAnual()
        }
        for (let i = 0; i < this.programadores.length; i++) {
           coste += this.programadores[i].calcularBonus()
        }
        return coste
    }

}