n = int(input())
values = list(map(int, input().split()))
def count(v):
    return len(list(filter(lambda x:x%2==0, v)))
cnt = 0
while True:
    if count(values) != len(values):
        break
    values = list(map(lambda x: x // 2, values))
    cnt += 1

print(cnt)