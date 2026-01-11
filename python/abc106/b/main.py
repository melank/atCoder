def get_divisors(num, except_self=False):
    if num < 1:
        return []
    elif num == 1:
        return [1]
    else:
        divisor_list = []
        divisor_list.append(1)
        for i in range(2, num // 2 + 1):
            if num % i == 0:
                divisor_list.append(i)
        if except_self:
            divisor_list.append(num)

        return divisor_list

n = int(input())
cnt = 0
for i in range(9, n + 1, 2):
    d = get_divisors(i, True)
    if len(d) == 8:
        cnt += 1

print(cnt)