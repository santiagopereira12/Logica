#Calculadora con las operaciones basicas

def operaciones (numeroA, numeroB, operacion):
  resultado = None
  if operacion == "suma":
    resultado = numeroA + numeroB
    print('El resultado es:', resultado)
  elif operacion == "resta":
    if numeroA > numeroB:
      resultado = numeroA - numeroB
      print('El resultado es:', resultado)
    else:
      print('El primer numero debe ser mayor que el segundo')
  elif operacion == "multiplicacion":
    resultado = numeroA * numeroB
    print('El resultado es:', resultado)
  elif operacion == 'division':
    if numeroA > numeroB and numeroB != 0:
      resultado = numeroA / numeroB
      print('El resultado es:', resultado)
    else:
      print('El primer numero debe ser mayor que el segundo y el segundo debe ser diferente de 0')
  else:
    print('Operacion no valida')

num1 = int(input('Ingrese el primer numero: '))
num2 = int(input('Ingrese el segundo numero: '))
operacion = input('Ingrese la operacion: ')

operaciones(num1, num2, operacion)