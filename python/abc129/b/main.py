n = int(input())
weights = list(map(int, input().split()))
total = 0
rest = sum(weights)
pre = 0
for w in weights:
    total += w
    rest -= w
    current = abs(rest - total)
    if total >= rest:
        print(min(pre, current))
        exit()
    pre = current
