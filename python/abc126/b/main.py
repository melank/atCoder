s = input()
mae = int(s[:2])
ato = int(s[2:])

if 1 <= mae <= 12:
    if 1 <= ato <= 12:
        print('AMBIGUOUS')
    else:
        print('MMYY')
else:
    if 1 <= ato <= 12:
        print('YYMM')
    else:
        print('NA')