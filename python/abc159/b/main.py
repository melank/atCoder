s = input()
n = len(s)
area = (n-1)//2
area_string = s[:area]
if s == s[::-1] and area_string == area_string[::-1]:
    print('Yes')
else:
    print('No')