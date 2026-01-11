n = input()
if int(n) %3 == 0:
    print(0)
    exit()

l = len(n)
span = 1
# print(n[:0], n[1:])
while(span < l):
    cursor = 0
    for i in range(l):
        test = n[:cursor] + n[cursor + span:]
        if int(test) %3 == 0:
            print(span)
            exit()
        cursor += 1
    #     print("{}:{}".format(cursor, test))
    # print('-----')
    span += 1
print(-1)