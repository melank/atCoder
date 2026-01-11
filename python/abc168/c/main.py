import math
a, b, h, m = map(int, input().split())

# 2辺の中心核を求める
theta = float(abs(m*6 - h*30 -m*0.5))
# degree->radianにしてからcos(θ)を求める
cos_theta = math.cos(math.radians(theta))
# print(a, b, cosign)
print(math.sqrt(a**2 + b**2 - 2*a*b*cos_theta))