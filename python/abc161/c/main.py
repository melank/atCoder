n, k = map(int, input().split())

result, n = divmod(n, k)

if n % k == 0:
    print(0)
    exit()

if n < k :
    if n < abs(n - k):
        print(n)
    else:
        print(abs(n - k))
    exit()