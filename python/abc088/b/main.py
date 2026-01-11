n = int(input())
cards = sorted(list(map(int, input().split())))
alice = 0
bob = 0
for i in range(n):
    point = cards[i]
    if i %2 == 0:
        alice += point
    else:
        bob += point
print(abs(alice - bob))