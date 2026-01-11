n, a, b = map(int, input().split())
distance = b - a

if distance %2 == 0:
    print(distance // 2)
    exit()

near = min(a - 1, n - b)
print(near + (1 + distance) // 2)