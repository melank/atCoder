n = int(input())
s = input()
max_ = 0
x = 0
for c in s:
    if c == 'I':
        x += 1
        if max_ < x:
            max_ = x
    elif c == 'D':
        x -= 1
print(max_)