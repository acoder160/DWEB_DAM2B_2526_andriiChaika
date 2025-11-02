import * as process from "process";
import { Cliente } from "./Cliente";
import { Libro } from "./Libro";
import { Tienda } from "./Tienda";

import * as readline from "readline";

// Crear interfaz para leer desde la consola
const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout,
});

const libro1: Libro = {
    titulo: "Biblia", autor: "Jesus", precio: 10, stock: 18
}
const libro2: Libro = {
    titulo: "DesarolloWeb", autor: "el profe", precio: 5, stock: 56
}
const libro3: Libro = {
    titulo: "Coran", autor: "Mohammed", precio: 45, stock: 32
}

let libros: Libro[] = []
libros.push(libro1)
libros.push(libro2)
libros.push(libro3)

const tienda: Tienda = {
    listarLibros() {
        return libros
    },
    venderLibro(cliente: Cliente, tituloLibro: string){
        for (let i = 0; i < libros.length; i++) {
            if (libros[i].titulo === tituloLibro && libros[i].stock > 0){
                cliente.carrito.push(libros[i])
                libros[i].stock --
                return `El libro ${tituloLibro} fue agregado al carrito`
            }
        }
    return `El libro ${tituloLibro} no ha sido encontrado o fuera del stock`
},
    mostrarCarrito(cliente) {
        let precio: number = 0
        for (let i = 0; i < cliente.carrito.length; i++) {
            console.log(`Libro en el carrito: Autor - ${cliente.carrito[i].autor}, precio: ${cliente.carrito[i].precio}`)
            precio += cliente.carrito[i].precio
        }
        console.log(`El precio total: ${precio}€`)
    }
}

let cliente: Cliente = {
    nombre: "", email: "", carrito: []
}


function pedirDatosCliente() {
    rl.question("Escribe tu nombre: ", (nombre: string) => {
        cliente.nombre = nombre
        rl.question("Escribe tu email: ", (email: string) => {
            cliente.email = email
            menuPrincipal(); 
        })
    })
}

function menuPrincipal() {
    console.log("\n--- Menú Principal ---");
    console.log("1: Mostrar libros");
    console.log("2: Comprar libro");
    console.log("3: Mostrar carrito");
    console.log("4: Salir");
    rl.question("Elige una opción: ", (opcion: string) => {
        switch(opcion) {
            case "1":
                console.log("Mostrar libros");
                let totalLibros: Libro[] = tienda.listarLibros()
                let texto: string = ``
                for (let i = 0; i < totalLibros.length; i++) {
                    texto += `\n${totalLibros[i].titulo}, autor: ${totalLibros[i].autor}, precio: ${libros[i].precio}€, stock: ${libros[i].stock}`
                }
                console.log(texto)
                menuPrincipal(); 
                break;
            case "2":
                console.log("Comprar libro");
                rl.question("Escibe el titulo del libro que deseas añadir al carrito de compras: ", (titulo: string) => {
                    console.log(tienda.venderLibro(cliente, titulo))
                    menuPrincipal(); // 
                })
                break;
            case "3":
                console.log("Mostrar carrito")
                tienda.mostrarCarrito(cliente)
                menuPrincipal();
                break;
            case "4":
                console.log("Saliendo del sistema...");
                rl.close(); 
                return;
            default:
                console.log("Opción inválida. Intenta de nuevo.");
                menuPrincipal();
        }
    });
}

pedirDatosCliente();

