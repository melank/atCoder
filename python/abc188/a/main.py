a, b = map(int, input().split())
res = min(a, b) + 3 > max(a, b)
if res:
    print("Yes")
else:
    print("No")