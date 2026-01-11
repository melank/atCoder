x = int(input())
if x == 1:
    print(1)
    exit()

max_ = 0
for b in range(1, x + 1):
    for p in range(2, x + 1):
        # print(b, p)
        v = b ** p
        if v > x:
            break
        if v > max_:
            max_ = v
print(max_)