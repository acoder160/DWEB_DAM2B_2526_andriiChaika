"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
var process = require("process");
var readline = require("readline");
// Crear interfaz para leer desde la consola
var rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout,
});
var libro1 = {
    titulo: "Biblia", autor: "Jesus", precio: 10, stock: 18
};
var libro2 = {
    titulo: "DesarolloWeb", autor: "el profe", precio: 5, stock: 56
};
var libro3 = {
    titulo: "Coran", autor: "Mohammed", precio: 45, stock: 32
};
var libros = [];
libros.push(libro1);
libros.push(libro2);
libros.push(libro3);
var tienda = {
    listarLibros: function () {
        return libros;
    },
    venderLibro: function (cliente, tituloLibro) {
        for (var i = 0; i < libros.length; i++) {
            if (libros[i].titulo === tituloLibro && libros[i].stock > 0) {
                cliente.carrito.push(libros[i]);
                libros[i].stock--;
                return "El libro ".concat(tituloLibro, " fue agregado al carrito");
            }
        }
        return "El libro ".concat(tituloLibro, " no ha sido encontrado o fuera del stock");
    },
    mostrarCarrito: function (cliente) {
        for (var i = 0; i < cliente.carrito.length; i++) {
            console.log("Libro en el carrito: Autor - ".concat(cliente.carrito[i].autor, ", precio: ").concat(cliente.carrito[i].precio));
        }
    }
};
var cliente = {
    nombre: "", email: "", carrito: []
};
function pedirDatosCliente() {
    rl.question("Escribe tu nombre: ", function (nombre) {
        cliente.nombre = nombre;
        rl.question("Escribe tu email: ", function (email) {
            cliente.email = email;
            menuPrincipal();
        });
    });
}
function menuPrincipal() {
    console.log("\n--- Menú Principal ---");
    console.log("1: Mostrar libros");
    console.log("2: Comprar libro");
    console.log("3: Mostrar carrito");
    console.log("4: Salir");
    rl.question("Elige una opción: ", function (opcion) {
        switch (opcion) {
            case "1":
                console.log("Mostrar libros");
                var totalLibros = tienda.listarLibros();
                var texto = "";
                for (var i = 0; i < totalLibros.length; i++) {
                    texto += "\n".concat(totalLibros[i].titulo, ", autor: ").concat(totalLibros[i].autor, ", precio: ").concat(libros[i].precio, "\u20AC, stock: ").concat(libros[i].stock);
                }
                console.log(texto);
                menuPrincipal(); // Llama de nuevo al menú después de la acción
                break;
            case "2":
                console.log("Comprar libro");
                // La pregunta para comprar libro ahora llama a 'menuPrincipal' en su callback, 
                // manteniendo el flujo asíncrono.
                rl.question("Escibe el titulo del libro que deseas añadir al carrito de compras: ", function (titulo) {
                    console.log(tienda.venderLibro(cliente, titulo));
                    menuPrincipal(); // Llama de nuevo al menú después de la compra
                });
                break;
            case "3":
                console.log("Mostrar carrito");
                tienda.mostrarCarrito(cliente);
                menuPrincipal(); // Llama de nuevo al menú después de mostrar
                break;
            case "4":
                console.log("Saliendo del sistema...");
                rl.close(); // Ahora rl.close() solo se llama al salir
                return;
            default:
                console.log("Opción inválida. Intenta de nuevo.");
                menuPrincipal(); // Llama de nuevo al menú si la opción es inválida
        }
    });
}
pedirDatosCliente();
