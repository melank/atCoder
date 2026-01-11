n = int(input())
seq_a = list(map(int, input().split()))
seq_b = list(map(int, input().split()))
seq_c = [0] * n
# print(seq_c)
max_ = seq_a[0]
seq_c[0] = seq_a[0] * seq_b[0]
for i in range(1, n):
    max_ = max(max_, seq_a[i])
    seq_c[i] = max(seq_c[i - 1], max_ * seq_b[i])

for i in range(n):
    print(seq_c[i])