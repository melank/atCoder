s = input()
characters = list('a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z'.split(','))
for c in s:
    if c in characters:
        characters.remove(c)
    if len(characters) == 0:
        print('None')
        exit()
print(characters[0])