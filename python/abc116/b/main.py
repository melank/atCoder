s = input()
values = [0, int(s)]
cursor = 2
while(True):
    v = values[cursor - 1]
    if v %2 == 0:
        v = v // 2
    else:
        v = 3 * v + 1
    if v in values:
        break
    values.append(v)
    cursor += 1
print(cursor)