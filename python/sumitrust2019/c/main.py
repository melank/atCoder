x = int(input())
if x < 100:
    print(0)
    exit()
if x >= 2000:
    print(1)
    exit()

for i in range(20):
    for j in range(20):
        for k in range(20):
            for l in range(20):
                for m in range(20):
                    for n in range(20):
                        price = 100 * i + 101 * j + 102 * k + 103 * l + 104 * m + 105 * n
                        if price == x:
                            print(1)
                            exit()

print(0)