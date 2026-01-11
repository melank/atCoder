import functools
def lcm_r(a, b):
    remainder = a % b
    if remainder == 0:
        return a
    return a * lcm_r(b, remainder) / remainder

nums = list(range(2, int(input()) + 1))
result = functools.reduce(lcm_r, nums) + 1
print(int(result))