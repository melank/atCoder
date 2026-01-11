n, a, b = map(int, input().split())
if n == 2:
  print('Borys')
elif (b - a) %2 == 0:
  print('Alice')
else:
  print('Borys')