h, w = map(int, input().split())
characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'

rows = []
for i in range(h):
  rows.append(list(input().split()))

for i, r in enumerate(rows):
  for j, c in enumerate(r):
    if c == 'snuke':
      print(characters[j]+str(i+1))