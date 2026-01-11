def calc_digit(num):
    assert(num > 0)
    return int(log10(abs(num)) + 1)