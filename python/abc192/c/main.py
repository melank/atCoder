n, k = map(int, input().split())

def get_sorted_value(v, reverse_):
    return int(''.join(sorted(list(str(v)), reverse = reverse_)))

# cnt = 0
# def func(v):
#     global cnt
#     g1 = get_sorted_value(v, True)
#     g2 = get_sorted_value(v, False)
#     cnt += 1
#     if cnt == k:
#         print(g1 - g2)
#         exit()
#     elif g1 - g2 == v:
#         print(g1 - g2)
#         exit()
#     else:
#         func(g1 - g2)

# func(n)

for i in range(k):
    g1 = get_sorted_value(n, True)
    g2 = get_sorted_value(n, False)
    if g1 - g2 == n:
        break
    n = g1 - g2

print(n)