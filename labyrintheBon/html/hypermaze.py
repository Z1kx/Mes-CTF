import urllib.request
import re


page = 'file:///home/mint/Documents/Projet/CTF/labyrinthe/page_0.html'

def parse(page):
	url =  urllib.request.urlopen(page)
	#print(url)
	for line in url:
		#print(str(line))
		href = re.search(r'.*href=(page.*html)',line.decode())
		#print(href)
		if href == None:
			pass
		else:
			#print(href.group(1))
			page = "file:///home/mint/Documents/Projet/CTF/labyrinthe/"+href.group(1)
			print(page)
			parse(page)
			
	return page


parse(page)
