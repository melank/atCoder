import itertools

n = int(input())
p = tuple(map(int, input().split()))
q = tuple(map(int, input().split()))

permutation_p = list(itertools.permutations(sorted(p)))
permutation_q = list(itertools.permutations(sorted(q)))

# print(permutation_p)
# print(permutation_q)

print(abs(permutation_p.index(p) - permutation_q.index(q)))