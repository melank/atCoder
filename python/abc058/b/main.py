o = input()
e = input()
password = [0] * (len(o) + len(e))
password[::2] = o
password[1::2] = e
print(''.join(password))