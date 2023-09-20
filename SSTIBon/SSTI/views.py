from django.shortcuts import render
from django.http import HttpResponse
from django.http import HttpResponseForbidden
from jinja2.exceptions import TemplateSyntaxError
from django.template import Template, Context, Engine
import os
import re
#{{ ''.__class__.__mro__[1].__subclasses__()[40]('/home/mint/Documents/Projet/CTF/SSTI/hello.txt', 'w').write('Hello here !') }}

from django.template import engines

def index(request):
    engine = engines["jinja2"]
    if request.GET.get("params"):
        exploit = request.GET.get("params")
        print(exploit)
        bad_chars = "_.'/"
        if any(char in bad_chars for char in exploit):
            return HttpResponseForbidden('<!DOCTYPE html>'\
'<html lang="en">'\
'<head>'\
'  <meta charset="UTF-8">'\
'  <meta name="viewport" content="width=device-width, initial-scale=1.0">'\
'  <meta http-equiv="X-UA-Compatible" content="ie=edge">'\
'  <link href="https://fonts.googleapis.com/css?family=Raleway:500,800" rel="stylesheet">'\
'  <link rel="stylesheet" href="/static/css/403.css" type="text/css">'\
'  <title>Document</title>'\
'</head>'\
'<body>'\
'  <use>'\
'  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve" class="whistle">'\
'<metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata>'\
'<g><g transform="translate(0.000000,511.000000) scale(0.100000,-0.100000)">'\
'<path d="M4295.8,3963.2c-113-57.4-122.5-107.2-116.8-622.3l5.7-461.4l63.2-55.5c72.8-65.1,178.1-74.7,250.8-24.9c86.2,61.3,97.6,128.3,97.6,584c0,474.8-11.5,526.5-124.5,580.1C4393.4,4001.5,4372.4,4001.5,4295.8,3963.2z"/><path d="M3053.1,3134.2c-68.9-42.1-111-143.6-93.8-216.4c7.7-26.8,216.4-250.8,476.8-509.3c417.4-417.4,469.1-463.4,526.5-463.4c128.3,0,212.5,88.1,212.5,224c0,67-26.8,97.6-434.6,509.3c-241.2,241.2-459.5,449.9-488.2,465.3C3181.4,3180.1,3124,3178.2,3053.1,3134.2z"/><path d="M2653,1529.7C1644,1445.4,765.1,850,345.8-32.7C62.4-628.2,22.2-1317.4,234.8-1960.8C451.1-2621.3,947-3186.2,1584.6-3500.2c1018.6-501.6,2228.7-296.8,3040.5,515.1c317.8,317.8,561,723.7,670.1,1120.1c101.5,369.5,158.9,455.7,360,553.3c114.9,57.4,170.4,65.1,1487.7,229.8c752.5,93.8,1392,181.9,1420.7,193.4C8628.7-857.9,9900,1250.1,9900,1328.6c0,84.3-67,172.3-147.4,195.3c-51.7,15.3-790.8,19.1-2558,15.3l-2487.2-5.7l-55.5-63.2l-55.5-61.3v-344.6V719.8h-411.7h-411.7v325.5c0,509.3,11.5,499.7-616.5,494C2921,1537.3,2695.1,1533.5,2653,1529.7z"/></g></g>'\
'</svg>'\
'</use>'\
'<h1>403</h1>'\
'<h2>Not this time, access forbidden!</h2>'\
'</body>'\
'</html>')
        if exploit:
            #engine = Engine(builtins=['django.templatetags.static'])
            template = engine.from_string('<html lang="fr">'\
            '<head>'\
                '<meta charset="UTF-8">'\
                '<meta name="description" content="Anime Template">'\
                '<meta name="keywords" content="Anime, unica, creative, html">'\
                '<meta name="viewport" content="width=device-width, initial-scale=1.0">'\
                '<meta http-equiv="X-UA-Compatible" content="ie=edge">'\
                '<title>Trouver les contraintes</title>'\
                '<!-- Google Font -->'\
                '<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">'\
                '<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap rel="stylesheet">'\
                '<!-- Css Styles -->'\
                '<link rel="stylesheet" href="/static/css/bootstrap.min.css" type="text/css">'\
                '<link rel="stylesheet" href="/static/css/font-awesome.min.css" type="text/css">'\
                '<link rel="stylesheet" href="/static/css/elegant-icons.css" type="text/css">'\
                '<link rel="stylesheet" href="/static/css/plyr.css" type="text/css">'\
                '<link rel="stylesheet" href="/static/css/nice-select.css" type="text/css">'\
                '<link rel="stylesheet" href="/static/css/owl.carousel.min.css" type="text/css">'\
                '<link rel="stylesheet" href="/static/css/slicknav.min.css" type="text/css">'\
                '<link rel="stylesheet" href="/static/css/style.css" type="text/css">'\
            '</head>'\
            '<body>'\
                '<!-- Page Preloder -->'\
                '<div id="preloder">'\
                '    <div class="loader"></div>'\
                '</div>'\
                '<!-- Header Section Begin -->'\
                '<header class="header">'\
                '    <div class="container">'\
                '        <div class="row">'\
                '            <div class="col-lg-2">'\
                '                <div class="header__logo">'\
                '                </div>'\
                '            </div>'\
                '            <div class="col-lg-8">'\
                '                <div class="header__nav">'\
                '                    <nav class="header__menu mobile-menu">'\
                '                        <ul>'\
                '                            <li class="active"><a href="/">Homepage</a></li>'\
                '                        </ul>'\
                '                    </nav>'\
                '                </div>'\
                '            </div>'\
                '        </div>'\
                '        <div id="mobile-menu-wrap"></div>'\
                '    </div>'\
                '</header>'\
                '<!-- Header End -->'\
                '<p style="text-align: center; color: white; font-size: 30px; margin-top:50px;">Aucun résultat trouvé pour :<br><br>'+exploit+'</p>'\
                                    '<!-- Js Plugins -->'\
                '<script src="/static/js/jquery-3.3.1.min.js"></script>'\
                '<script src="/static/js/bootstrap.min.js"></script>'\
                '<script src="/static/js/player.js"></script>'\
                '<script src="/static/js/jquery.nice-select.min.js"></script>'\
                '<script src="/static/js/mixitup.min.js"></script>'\
                '<script src="/static/js/jquery.slicknav.js"></script>'\
                '<script src="/static/js/owl.carousel.min.js"></script>'\
                '<script src="/static/js/main.js"></script>')
            print(template)
            context = {"exploit": exploit}
            rendered_template = template.render(context)
            return HttpResponse(rendered_template)
    return HttpResponse(render(request, "jinja2/index.html"))

