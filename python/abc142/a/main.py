n = int(input())
if n == 1:
    print(1)
elif n %2 == 0:
    print(n // 2 / n)
else:
    print(1 - n // 2 / n)