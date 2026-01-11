n = int(input())
p = list(map(int, input().split()))

list1 = []
list2 = []

winner = p.index(max(p))
pivot = len(p) // 2

for i in range(pivot):
    list1.append(p[i])
    list2.append(p[i + pivot])

print(p.index(min(max(list1), max(list2))) + 1)