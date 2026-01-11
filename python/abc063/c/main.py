n = int(input())
scores = [0] * n
for i in range(n):
    scores[i] = int(input())
scores = sorted(scores)
total = sum(scores)
if total %10 != 0:
    print(total)
    exit()
for score in scores:
    if score % 10 != 0:
        print(total - score)
        exit()
print(0)