import collections
n = int(input())
balls = list(map(int, input().split()))
counter = collections.Counter(balls)

x = 0
for a in counter.values():
    x += int(a * (a - 1) / 2)
for k in range(n):
    print(x - counter[balls[k]] + 1)