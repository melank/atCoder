import numpy

# long long gcd(long long a, long long b) { // 2つの場合の最大公約数
#     if (b == 0) {
#         return a;
#     } else {
#         return gcd(b, a % b);
#     }
# }
# long long gcd_vec(vector<long long> const &A) { // N個の要素に対する最大公約数
#     int size = (int)A.size();
#     long long ret = A[0];
#     for (int i = 1; i < size; i++) {
#         ret = gcd(ret, A[i]);
#     }
#     return ret;
# }

# ユークリッド互除法
def gcd(a, b):
    if b == 0:
        return a
    else:
        return gcd(b, a % b)

# 配列内の値の最大公約数を求める
def gcd_list(values):
    size = len(values)
    result = values[0]
    for i in range(size):
        result = gcd(result, values[i])
    return result

n, x = map(int, input().split())
if n == 1:
    print(abs(x - int(input())))
    exit()
else:
    coords = list(map(int, input().split()))
    diffs = []
    for c in coords:
        diffs.append(abs(x - c))
    # print(diffs)
    print(gcd_list(diffs))
