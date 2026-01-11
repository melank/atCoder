n, l = map(int, input().split())
tastes = []
for i in range(1, n+1):
    tastes.append(l + i - 1)
exception = min(map(abs, tastes))
if exception not in tastes:
    exception = -exception
print(sum(tastes) - exception)
