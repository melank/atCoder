h, w = map(int, input().split())
pixels = []
for i in range(h):
    pixels.append(list(input().split()))
for line in pixels:
    print(''.join(line))
    print(''.join(line))