s = input()
correct = 'CODEFESTIVAL2016'
cnt = 0
for i, c in enumerate(s):
    if c != correct[i]:
        cnt += 1

print(cnt)