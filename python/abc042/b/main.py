n, l = map(int, input().split())
lines = []
for i in range(n):
    lines.append(input())
print(''.join(sorted(lines)))