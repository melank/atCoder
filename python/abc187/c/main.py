n = int(input())
strings = set(input() for i in range(n))

for s in strings:
    if "!" + s in strings:
        print(s)
        exit()

print("satisfiable")