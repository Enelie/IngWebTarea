# Cálculo del factorial
n = int(input("Ingresa un número: "))
factorial = 1

for i in range(1, n + 1):
    factorial *= i

print("El factorial de", n, "es:", factorial)