from collections import Counter
w = list(input())
counter = Counter(w)
for value in counter.values():
    if value %2 != 0:
        print('No')
        exit()

print('Yes')