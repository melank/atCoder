card = []
for i in range(3):
    a1, a2, a3 = map(int, input().split())
    card.append(a1)
    card.append(a2)
    card.append(a3)

n = int(input())
for i in range(n):
    b = int(input())
    if b in card:
        card[card.index(b)] = 0

if card.count(0) < 3:
    print('No')
    exit()

# ビンゴのチェック
# 横列
if card[0] == card[1] == card[2] == 0:
    print('Yes')
    exit()
elif card[3] == card[4] == card[5] == 0:
    print('Yes')
    exit()
elif card[6] == card[7] == card[8] == 0:
    print('Yes')
    exit()
# 縦列
elif card[0] == card[3] == card[6] == 0:
    print('Yes')
    exit()
elif card[1] == card[4] == card[7] == 0:
    print('Yes')
    exit()
elif card[2] == card[5] == card[8] == 0:
    print('Yes')
    exit()
# 斜め列
elif card[0] == card[4] == card[8] == 0:
    print('Yes')
    exit()
elif card[6] == card[4] == card[2] == 0:
    print('Yes')
    exit()

print('No')