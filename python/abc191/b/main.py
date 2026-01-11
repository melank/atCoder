n, x = map(int, input().split())
a = list(map(int, input().split()))

test = [v for v in a if v != x]
if test == []:
    print()
    exit()

print(' '.join(map(str, test)))