n = int(input())
students = list(map(int, input().split()))
order = {}
for i, s in enumerate(students):
    order[s] = i + 1

result = ''
for i in range(1, n + 1):
    result += str(order[i]) + ' '
print(result[:-1])