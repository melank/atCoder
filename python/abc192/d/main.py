x = input()
m = int(input())

def base_n_to_10(x,n):
    out = 0
    for i in range(1, len(str(x)) + 1):
        out += int(x[-i]) * (n ** (i - 1))
    return out

d = int(max(list(x))) + 1

cnt = 0

# xの値がmより大きい場合、10進数以上はありえない
if d == 10 and int(x) > m:
    print(cnt)
    exit()

first = d
while(True):
    v = base_n_to_10(x, d)

    if int(x) > m and d >= 10:
        print(cnt)
        exit()

    if d >= 100 and int(x) <= m :
        diff_b = (base_n_to_10(x, d+2) - base_n_to_10(x, d + 1)) - (base_n_to_10(x, d+1) - base_n_to_10(x, d))
        diff_a = (base_n_to_10(x, first+1) - base_n_to_10(x, first))
        # int(x) + diff_a + diff_b * cnt <= m
        # cnt <= (m - (int(x) + diff_a)) / diff_b
        print((m - (int(x) + diff_a)) // diff_b)
        exit()

    elif v <= m:
        cnt += 1

    else:
        print(cnt)
        exit()
    d += 1