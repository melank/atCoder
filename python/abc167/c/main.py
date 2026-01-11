import itertools

n, m, x = map(int, input().split())
prices = [0]*n
each_skills = [[0 for i in range(m)] for j in range(n) ]

for i in range(n):
    values = list(map(int, input().split()))
    prices[i] = values[0]
    del values[0]
    for j, v in enumerate(values):
        each_skills[i][j] = v

for c in itertools.product([False, True], repeat = n):
    print(c)