import { Libro } from "./Libro"
import { Cliente } from "./Cliente"

export interface Tienda{

    listarLibros(): Libro[];
    venderLibro(cliente: Cliente, tituloLibro: string): string;
    mostrarCarrito(cliente: Cliente): void;
}