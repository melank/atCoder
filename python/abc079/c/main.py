s = input()
a, b, c, d = map(int, [s[0], s[1], s[2], s[3]])

if a + b + c + d == 7:
    op1 = '+'
    op2 = '+'
    op3 = '+'
elif a + b + c - d == 7:
    op1 = '+'
    op2 = '+'
    op3 = '-'
elif a + b - c + d == 7:
    op1 = '+'
    op2 = '-'
    op3 = '+'
elif a + b - c - d == 7:
    op1 = '+'
    op2 = '-'
    op3 = '-'
elif a - b + c + d == 7:
    op1 = '-'
    op2 = '+'
    op3 = '+'
elif a - b + c - d == 7:
    op1 = '-'
    op2 = '+'
    op3 = '-'
elif a - b - c + d == 7:
    op1 = '-'
    op2 = '-'
    op3 = '+'
elif a - b - c - d == 7:
    op1 = '-'
    op2 = '-'
    op3 = '-'


print('{}{}{}{}{}{}{}=7'.format(a, op1, b, op2, c, op3, d))