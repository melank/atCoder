import itertools
import math

def calc_distance(town1, town2):
    return math.sqrt((town2[0] - town1[0]) ** 2 + (town2[1] - town1[1]) ** 2)

n = int(input())
towns = []
for i in range(n):
    towns.append(list(map(int, input().split())))

patterns = list(itertools.permutations(range(n)))
total_distance = 0
for p in patterns:
    for i in range(len(p) - 1):
        start = p[i]
        goal = p[i + 1]
        total_distance += calc_distance(towns[start], towns[goal])
print(total_distance / len(patterns))