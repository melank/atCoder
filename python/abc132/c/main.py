n = int(input())
difficulties = sorted(list(map(int, input().split())))
list_low = difficulties[:len(difficulties)//2]
list_high = difficulties[len(difficulties)//2:]
print(list_high[0] - list_low[-1])