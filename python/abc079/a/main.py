n = input()
good = ['000', '111', '222', '333', '444', '555', '666', '777', '888', '999']

for g in good:
    if g in n:
        print('Yes')
        exit()
print('No')