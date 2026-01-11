n = int(input())
p = map(int, input().split())
for i, a in enumerate(p):
    # 左が自分より小さいなら交換
    # 右が自分より大きいなら交換