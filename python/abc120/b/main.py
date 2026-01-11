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

from math import gcd
a, b, k = map(int, input().split())
print(get_divisors(gcd(a, b), True)[-k])