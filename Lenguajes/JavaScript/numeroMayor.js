//Encontrar numero mayor en un array

let numeros = [8, 5, 10, 15, 20, 25, 30, 35, 40, 45, 50]
let numeroMaximo = 0

for (let i = 0; i < numeros.length; i++){
  if(numeroMaximo < numeros[i]){
    numeroMaximo = numeros[i]
  }
}

console.log('el numero maximo es: '+numeroMaximo)

//Función para realizar este ejercicio
let maximo = Math.max(8, 5, 10, 15, 20, 25, 30, 35, 40, 45, 50)
console.log(maximo)