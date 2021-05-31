<!doctype html>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mustache Enthusiast</title>
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<link rel="stylesheet" type="text/css" href="/css/mobile.css" media="screen and (max-width : 568px)">
	<script type="text/javascript" src="js/mobile.js"></script>
</head>
<body>

  <div id="header">
    <a href="index.html" class="logo">
      <img src="images/logo.jpg" alt="">
    </a>
    <ul id="navigation">
      <li class="{{ Request::path() === '/' ? 'selected' : ''}}">
        <a href="index.html">home</a>
      </li>
      <li class="{{ Request::path() === 'about' ? 'selected': ''}}">
        <a href="/about">about</a>
      </li>
      <li class="{{ Request::path() === 'about' ? 'selected': ''}}">
        <a href="gallery.html">Articles</a>
      </li>
      <li>
        <a href="blog.html">blog</a>
      </li>
      <li class="{{ Request::path() === 'contact' ? 'selected': ''}}">
        <a href="/contact">contact</a>
      </li>
    </ul>
  </div>

  @yield('content')
</body>
</html>
