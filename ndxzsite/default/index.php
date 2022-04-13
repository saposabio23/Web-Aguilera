<!doctype html>
<html lang='{{site_lang}}'>
<head>
<meta charset='utf-8'>
<title><last:ndxz_title /> </title>
<last:page:meta />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel='alternate' type='application/rss+xml' title='RSS' href='{{baseurl}}/xml/' />
<link rel='stylesheet' href='{{baseurl}}/ndxzsite/{{obj_theme}}/reset.css<last:page:version: />' type='text/css' />
<link rel='stylesheet' href='{{baseurl}}/ndxzsite/{{obj_theme}}/base.css<last:page:version: />' type='text/css' />
<link rel='stylesheet' href='{{baseurl}}/ndxzsite/{{obj_theme}}/style.css<last:page:version />' type='text/css' />
<link rel='stylesheet' href='{{baseurl}}/ndxzsite/{{obj_theme}}/mobile.css<last:page:version: />' type='text/css' />
<link rel="icon" type="image/x-icon" href="{{baseurl}}/favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="{{baseurl}}/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="{{baseurl}}/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="{{baseurl}}/favicon-16x16.png">
<link rel="manifest" href="{{baseurl}}/site.webmanifest">
<link rel="mask-icon" href="{{baseurl}}/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#ffc40d">
<meta name="theme-color" content="#ffffff">
<last:page:css />
<last:page:javascript />
<last:page:onready /><plugin:backgrounder />
</head>
<svg id="fader" class="fade-out">::before</svg>

<div class='line'></div>
<div class='bottomcache'></div>

<body class='{{object}} section-{{section_id}} exhibit-{{id}} format-{{format}}'>
<div id='index'>
<div class='container'>

<div class='top'>{{obj_itop}}</div>
<plugin:index:load_index />
<div class='bot'>{{obj_ibot}}</div>

<last:page:append_index />
</div>
</div>

<div id='exhibit'>
<div class='container'>


<div class='top'><!-- --></div>
<!-- text and image -->

<plugin:page:exhibit />
<!-- end text and image -->

</div>
</div>
<plugin:page:append_page />
<plugin:page:closing />

<script src='{{baseurl}}/ndxzsite/{{obj_theme}}/script.js'></script>

</body>
</html>
