s = input()
if 'E' in s and 'W' not in s:
    print('No')
    exit()
if 'W' in s and 'E' not in s:
    print('No')
    exit()

if 'N' in s and 'S' not in s:
    print('No')
    exit()

if 'S' in s and 'N' not in s:
    print('No')
    exit()

print('Yes')