n = int(input())
bottom_p = 10**10
bottom_r = 0
for i in range(n):
    r, p = map(int, input().split())
    if bottom_r < r:
        bottom_r = r
        bottom_p = p

print(bottom_r + bottom_p)
