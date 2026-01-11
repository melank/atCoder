s = input()
k = int(input())

rle = []
pre = 'A'
chain = 1

for c in s:
    if c == pre:
        chain += 1
    else:
        if pre != 'A':
            rle.append([pre, chain])

        pre = c
        chain = 1
rle.append([pre, chain])

if len(rle) == 1:
    print(rle[0][1] * k // 2)
    exit()

result = 0
if s[0] == s[-1]:
    result += rle[0][1] // 2
    result += rle[-1][1] // 2
    rle[0][1] += rle[-1][1]
    rle[-1][1] = 0
    result += rle[0][1] // 2 * (k - 1)

    mid_chains = 0
    for i in range(1, len(rle)):
        mid_chains += rle[i][1] // 2
    result += mid_chains * k
else:
    mid_chains = 0
    for i in range(len(rle)):
        mid_chains += rle[i][1] // 2
    result += mid_chains * k

print(result)