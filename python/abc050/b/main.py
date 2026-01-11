import copy
n = int(input())
tests = list(map(int, input().split()))
m = int(input())
for i in range(m):
    p, x = map(int, input().split())
    temp = copy.deepcopy(tests)
    temp[p-1] = x
    print(sum(temp))