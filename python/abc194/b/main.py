n = int(input())
time_a = []
time_b = []
for i in range(n):
    a, b = map(int, input().split())
    time_a.append(a)
    time_b.append(b)
index = time_a.index(min(time_a))
time_b[index] += time_a[index]
if time_b.index(min(time_b)) == index:
    print(time_b[index])
else:
    print(max(min(time_a), min(time_b)))