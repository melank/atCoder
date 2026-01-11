import math

n = int(input())
answer = set()
for i in range(1, math.floor(math.sqrt(n)) + 1):
    if n % i == 0:
        answer.add(i)
        answer.add(n / i)

for a in sorted(answer):
    print(int(a))