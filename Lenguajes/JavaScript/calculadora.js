//Operaciones Basicas
//Suma, resta, multiplicacion, division

function operaciones(numero1, numero2, operacion) {
    let resultado = null
    switch (operacion) {
        case 'suma':
            resultado = numero1 + numero2
            console.log('El resultado es: ' + resultado)
            break
        case 'resta':
            if (numero1 > numero2) {
                resultado = numero1 - numero2
                console.log('El resultado es: ' + resultado)
            } else {
                console.log('El primer numero debe ser mayor que el segundo')
            }
            break
        case 'multiplicacion':
            resultado = numero1 * numero2
            console.log('El resultado es: ' + resultado)
            break
        case 'division':
            if (numero1 > numero2 && numero2 != 0) {
                resultado = numero1 / numero2
                console.log('El resultado es: ' + resultado)
            } else {
                console.log('El primer numero debe ser mayor que el segundo y el segundo numero debe ser diferente de cero')
            }
            break
        default:
            console.log('La operacion no es valida')
    }
}

let num1 = parseInt(prompt('Ingrese el primer numero'))
let num2 = parseInt(prompt('Ingrese el segundo numero'))
let eleccion = prompt('Ingrese la operacion que desea realizar')

operaciones(num1, num2, eleccion)