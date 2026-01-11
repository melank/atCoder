s = input()
line = list(s)
cnt = 0
current = ''
first = True
for c in s:
    if first and current != c:
        cnt += 1
        current = c
        # print(current)
    # 2連続で続いた場合
    else:
        if first:
            first = False
            current += c
        else:
            # print(current + c)
            current = ''
            first = True
            cnt += 1

print(cnt)