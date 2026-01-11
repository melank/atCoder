from collections import Counter
from functools import reduce
n = int(input())

counter = Counter(list(map(int, input().split())))
# print(counter)
q = int(input())
result = 0
for i in range(q):
    b, c = map(int, input().split())
    counter[c] += counter[b]
    result += (c - b) * counter[b]
    counter[b] = 0
    if i == 0:
        result = sum([a * b for a, b in zip(counter.keys(), counter.values())])
    print(result)