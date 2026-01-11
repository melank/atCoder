def sieve_of_eratosthenes(upper, typecode="L"):
    import array
    import textwrap

    assert upper > 1
    # 整数iが素数であるかをis_prime[i]が示す
    # 最初はすべてTrueで初期化しておく
    # 最終的にprimesではなくこれを返してもよい
    is_prime = array.array("B", (True for i in range(upper)))
    # 0, 1はいずれも素数ではない
    is_prime[0] = False
    is_prime[1] = False
    # 素数を格納する配列
    primes = array.array(typecode)
    # 篩う
    for i in range(2, upper):
        if is_prime[i]:  # iが素数であるとき
            primes.append(i)  # 素数の配列に加える
            for j in range(2 * i, upper, i):  # iを超えるiの倍数について
                is_prime[j] = False  # 素数ではないため除外する
    return primes

x = int(input())
upper = 100004
primes_to_upper = sieve_of_eratosthenes(upper)
primes_to_x = sieve_of_eratosthenes(x)
# trim = primes[len(primes_to_x)]
print(primes_to_upper[len(primes_to_x)])