h, n = map(int, input().split())
skills = list(map(int, input().split()))
if sum(skills) >= h:
    print('Yes')
else:
    print('No')