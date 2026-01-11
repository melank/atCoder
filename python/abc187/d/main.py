n = int(input())
threshold = 0
votes = []
for i in range(n):
    a, b = map(int, input().split())
    threshold -= a
    votes.append(a + a + b)

votes.sort()
result = 0
while threshold <= 0:
    threshold += votes.pop()
    result += 1
print(result)