h = int(input())
cnt = 1
def battle(n):
    global cnt
    if n == 1:
        print(cnt)
        exit()
    else:
        n //= 2
        cnt *= 2
        cnt += 1
        # print(n, cnt)
        battle(n)

battle(h)