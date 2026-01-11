n = int(input())

values = set()
for i in range(1, 10):
    for j in range(1, 10):
        values.add(i * j)
if n in values:
    print('Yes')
else:
    print('No')