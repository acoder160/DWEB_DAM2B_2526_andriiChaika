import { Libro } from "./Libro"

export interface Cliente{
    nombre: string
    email: string
    carrito: Libro[]
}