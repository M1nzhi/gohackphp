import os

da = []

with open('domain.tx','r')as f:
	for domain in f.readlines():
		result = os.system('ping -c 4 %s' % domain)
		if result:
			pass
		else:
			da.append(domain)
	print(da)