n = int(input())
a = sorted(list(map(int, input().split())), reverse=True)
total = 0
for i in range(n):
    two = a[i*2 + 1]
    total += two
print(total)