from functools import reduce
from operator import mul
n, k = map(int, input().split())
scores = list(map(int, input().split()))
for i in range(len(scores) - k):
    if scores[i + k] > scores[i]:
        print('Yes')
    else:
        print('No')