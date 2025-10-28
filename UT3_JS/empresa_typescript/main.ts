import { Empleado } from "./Empleado"
import { Programador } from "./Programador"
import { Empresa } from "./empresa"

let empleados: Empleado[] = [
    new Empleado("Juan", 31, 2000), new Empleado("Alberto", 26, 2200), new Empleado("Oleg", 40, 1800), new Empleado("Sebas", 19, 600)
]
let programadores: Programador[] = [

new Programador("Andrii", 21, 1600, "TypeScript", 3),
new Programador("Moha", 43, 1800, "JavaScript", 1),
new Programador("Igor", 24, 2000, "Java", 10)
]

const google: Empresa = new Empresa(empleados, programadores)

console.log("Lista de los empleados:")

for (let i = 0; i < google.empleados.length; i++) {
    console.log(google.empleados[i].toString())
}

for (let i = 0; i < google.programadores.length; i++) {
    console.log(google.programadores[i].toString())
}




