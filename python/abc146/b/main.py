n = int(input())
s = input()
charas = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
char = ''
for c in s:
    index = charas.index(c) + n
    # print(index)
    char += charas[index % 26]
print(char)