v, s, t, d = map(int, input().split())
far = v * t
near = v * s

if near <= d and d <= far:
    print('No')
else:
    print('Yes')