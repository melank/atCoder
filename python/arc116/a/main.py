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
        if not except_self:
            divisor_list.append(num)

        return divisor_list

t = int(input())
for i in range(t):
  n = int(input())
  if n == 2:
    print('Same')
  elif n %2 != 0:
    print('Odd')
  else:
    print('Even')