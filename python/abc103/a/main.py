tasks = sorted(list(map(int, input().split())))
print(tasks[2] - tasks[1] + tasks[1] - tasks[0])