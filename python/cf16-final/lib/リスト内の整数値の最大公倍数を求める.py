import functools

def lcm(nums):
    return functools.reduce(multiple, nums)

num = list(map(int, input().split()))