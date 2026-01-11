n, a, b = map(int, input().split())
if a == 0:
    print(0)
    exit()
if b == 0:
    print(n)
    exit()

total = a + b
cnt, mod = divmod(n, total)
print(a * cnt + min(mod, a))