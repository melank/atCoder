s = input()
while len(s) >= 1 and s[-1] == '0':
  s = s[:len(s)-1]

if s == s[::-1]:
  print('Yes')
else:
  print('No')