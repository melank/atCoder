h, w = map(int, input().split())
min_ = 100
boxes = []
for i in range(h):
    row = map(int, input().split())
    for v in row:
        boxes.append(v)
        if v < min_:
            min_ = v

answer = 0
for v in boxes:
    answer += v - min_
print(answer)