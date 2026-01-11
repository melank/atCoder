n = int(input())
colors = input()
color_list = []
for i in range(n):
    if colors[i] == 'W':
        color_list.append(0)
    else:
        color_list.append(1)
r_count = sum(color_list)
print(r_count - sum(color_list[0:r_count]))