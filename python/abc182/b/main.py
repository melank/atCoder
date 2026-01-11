n = int(input())
row = list(map(int, input().split()))

def divisor(n):
    i = 2
    table = []
    while i * i <= n:
        if n%i == 0:
            table.append(i)
            table.append(n//i)
        i += 1
    table.append(n)
    table = list(set(table))
    return table

table = {}
for r in row:
    div_ = divisor(r)
    for d in div_:
        if d not in table:
            table[d] = 1
        else:
            table[d] += 1
print(max(table, key=table.get))