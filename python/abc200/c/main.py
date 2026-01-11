n = int(input())
values = list(map(int, input().split()))
diff = []

for i in range(n-1):
  diff.append(values[i+1] - values[i])
print(diff)