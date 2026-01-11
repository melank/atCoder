k = int(input())
s = list(input())
t = list(input())

def calc(deck):
    point = 0
    for i in range(1, 10):
        point += i * (10 ** deck[i])
    return point

s_deck = {1: 0,2: 0,3: 0,4: 0,5: 0,6: 0,7: 0,8: 0,9: 0}
s_current = 0
t_deck = {1: 0,2: 0,3: 0,4: 0,5: 0,6: 0,7: 0,8: 0,9: 0}
t_current = 0
rest = {1: k,2: k,3: k,4: k,5: k,6: k,7: k,8: k,9: k}
for n in s:
    if n == '#':
        break
    n = int(n)
    s_deck[n] += 1
    rest[n] -= 1

for n in t:
    if n == '#':
        break
    n = int(n)
    t_deck[n] += 1
    rest[n] -= 1

# 相手の手札から予測される増分
case = 0
win_case = 0
for k, v in rest.items():
    if v == 0:
        continue
    # 最後のカードを開示する
    rest[k] -= 1
    t_deck[k] += 1
    # 点数を再計算
    t_current = calc(t_deck)
    for a, b in rest.items():
        if b == 0:
            continue
        case += b
        s_deck[a] += 1
        # 点数を再計算
        s_current = calc(s_deck)
        if s_current > t_current:
            win_case += b
        s_deck[a] -= 1

    rest[k] += 1
    t_deck[k] -= 1

# print(win_case, case)
print(win_case / case)