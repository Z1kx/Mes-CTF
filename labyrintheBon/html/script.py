import random

listElements = ["p","div","a","input"]
arrayColors = ["blue","red","green","gray","pink"]
classes = ["carre","rectangle","rond","ovale","triangle","trapeze","etoile"]
mots = ["Boue","Autonome","Chaussettes","Pomme","Ecriture","Dentifrice","Portrait","Papier","Prier","Cerises","Van","Bateau","Camionnette","Camion","Transports", "transports_publics","transports_prives","Chameau","Radeau","Voiture","Taxi","Moto","ducks","queen","seal","plan","trucks","superb","equable","island","delirious","supply","muddle","glue","learn","smelly","unpack","aberrant","chubby","peel","connect","quickest","scent","idiotic","fit","lacking","dull","employ","handsome","bomb","furry","humorous"]

nbPages = 50
pages = []
for i in range(0,nbPages):
    print(i)
    if i == 0 :
        pageName = "page_"+str(i)+".html"
        pages.append(pageName)
    else:
        pageName = "page_"+random.choice(mots)+"_"+random.choice(classes)+"_"+str(i)+".html"
        pages.append(pageName)
    

print(pages)

for i in range(0,nbPages):
    if i ==0:
        file_html = open(pages[i], "w")
        file_html.write('''<html>
        <head>
        <title>Premiere page</title>
        <link rel="stylesheet" href="style.css">
        <script type="text/javascript" src="test.js"></script>
        </head>
        <body>''')
        ligneHref = random.randint(75, 300)
        for j in range(0,300):
            element = random.choice(listElements)
            file_html.write('<'+element+' class='+random.choice(classes)+' background='+random.choice(arrayColors)+' width='+str(random.randint(10,100))+'%;>'+random.choice(mots)+'</'+element+'>\n')

            if j == ligneHref:
                file_html.write('<a href='+pages[i+1]+' class='+random.choice(classes)+' background='+random.choice(arrayColors)+'>'+random.choice(mots)+'</'+element+'>\n')

        file_html.write('''
        </body>
        </html>''')
        file_html.close()
        
    elif i == nbPages-1:
        file_html = open(pages[i], "w")
        file_html.write('''<html>
        <head>
        <title>HTML File</title>
        <link rel="stylesheet" href="style.css">
        <script type="text/javascript" src="test.js"></script>
        </head>
        <body>
        <p>Voici le flag : NHM2I{4710-4807-5327-0697}</p>
        </body>
        </html>''')
        file_html.close()
    elif i != 0 and i != nbPages-1:
        file_html = open(pages[i], "w")
        file_html.write('''<html>
        <head>
        <title>HTML File</title>
        <link rel="stylesheet" href="style.css">
        <script type="text/javascript" src="test.js"></script>
        </head>
        <body>''')
        ligneHref = random.randint(75, 300)
        for j in range(75,300):
            element = random.choice(listElements)
            file_html.write('<'+element+' href='+str(random.choice(mots))+str(random.randint(0,300))+' class='+random.choice(classes)+' background='+random.choice(arrayColors)+' width='+str(random.randint(10,100))+'%;>'+random.choice(mots)+'</'+element+'>\n')
            if j == ligneHref:
                file_html.write('<a href='+pages[i+1]+' class='+random.choice(classes)+' background='+random.choice(arrayColors)+'>'+random.choice(mots)+'</'+element+'>\n')

        file_html.write('''
        </body>
        </html>''')
        file_html.close()

