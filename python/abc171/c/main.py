import math
n = int(input())
alphabet = 'abcdefghijklmnopqrstuvwxyz'
digits = math.floor(math.log(n, 26)) + 1
result = ''
for i in range(digits):
    cursor, n = divmod(n, 26 ** (digits - 1))
    result += alphabet[cursor - 1]
    digits -= 1
print(result)