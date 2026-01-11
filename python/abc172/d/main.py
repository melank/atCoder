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
sum_ = 0
for k in range(1, n + 1):
    f = len(get_divisors(k, True))
    sum_ += k * f
print(sum_)