import itertools

n, m = map(int, input().split())
conditions = [tuple(map(int, input().split())) for _ in range(m)]

k = int(input())
choice = [tuple(map(int, input().split())) for _ in range(k)]

result = 0

for balls in itertools.product(*choice):
    balls = set(balls)
    cnt = sum(a in balls and b in balls for a, b in conditions)
    if result < cnt:
        result = cnt

print(result)