k, n = map(int, input().split())
distances = list(map(int, input().split()))
diffs = [0]
for i in range(1, len(distances)):
    diffs.append(distances[i] - distances[i - 1])
diffs.append(distances[0] + k - distances[-1])
print(k - max(diffs))