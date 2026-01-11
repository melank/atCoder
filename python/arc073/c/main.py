n, t = map(int, input().split())
times = list(map(int, input().split()))
total = t
for i in range(len(times) - 1):
    d = times[i + 1] - times[i]
    total += min(d, t)
print(total)