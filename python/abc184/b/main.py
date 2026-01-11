n, x = map(int, input().split())
row = input()

for c in row:
    if c == 'o':
        x += 1
    else:
        x = max(0, x - 1)

print(x)