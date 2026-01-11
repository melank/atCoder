#!/user/local/bin/pypy3
import sys
readline = sys.stdin.buffer.readline

def solve():
    l, r = map(int, readline().split())
    n = r - l * 2
    if n < 0:
        print(0)
        return
    print((n + 1) * (n + 2) // 2)

t = int(readline())
for _ in range(t):
    solve()