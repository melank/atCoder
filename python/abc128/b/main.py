n = int(input())
lines = []
dict_index = {}
dict_reference = {}
points = []
for i in range(1, n+1):
    line = input()
    s, n = line.split()
    if s not in dict_reference:
        dict_reference[s] = len(dict_reference.keys())
        points.append([])
    points[dict_reference[s]].append(line)
    dict_index[line] = i

for point in sorted(points):
    scores = []
    for line in point:
        shop, point = line.split()
        scores.append(int(point))
    for score in sorted(scores, reverse=True):
        print(dict_index[shop + ' ' + str(score)])