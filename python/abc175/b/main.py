import itertools

n = int(input())
lengths = sorted(list(map(int, input().split())))

result = 0

for i in range(n):
    for j in range(i):
        for k in range(j):
            if (lengths[k] != lengths[j]) and (lengths[i] != lengths[j]) and (lengths[k] + lengths[j] > lengths[i]):
                result += 1

print(result)