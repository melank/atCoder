import itertools
s = input()
nearest = 1000
for i in range(len(s) - 2):
    n = abs(int(s[i] + s[i+1] + s[i+2]) - 753)
    if n < nearest:
        nearest = n
print(nearest)