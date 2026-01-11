h, w = map(int, input().split())
width = w + 2
height = h + 2

lines = [[] for _ in range(h)]
for i in range(h):
    lines[i] = input()
print('#' * width)
for l in lines:
    print("#{}#".format(l))
print('#' * width)