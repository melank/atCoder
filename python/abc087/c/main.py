n = int(input())
line_top = list(map(int, input().split()))
line_bottom = list(map(int, input().split()))
max_ = 0
for i in range(n):
    value = sum(line_top[0:i+1]) + sum(line_bottom[i:])
    # print(line_top[:i+1], line_bottom[i:])
    if value > max_:
        max_ = value
print(max_)