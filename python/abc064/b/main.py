n = int(input())
a = sorted(list(map(int, input().split())))
diff = [0] * len(a)
for i in range(1, len(a)):
    diff[i] = a[i] - a[i - 1]
print(sum(diff))