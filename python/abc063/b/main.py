s = input()
charas = set()
for c in s:
    charas.add(c)
if len(s) == len(charas):
    print('yes')
else:
    print('no')