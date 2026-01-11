import math
x = int(input())

current = 100
cnt = 0
while(current < x):
    current = math.floor(current * 101 // 100)
    cnt += 1

print(cnt)