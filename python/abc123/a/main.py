p = [0] * 5
for i in range(5):
    p[i] = int(input())
k = int(input())
if max(p) - min(p) > k:
    print(':(')
else:
    print('Yay!')