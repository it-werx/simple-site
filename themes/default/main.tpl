<link href="themes/default/style/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="header"><h2>Fly Web Design :: <small>Don't get caught in the web of confusion.</small></h2></div>
<div id ="nav-left">Nav stuff</div>
<div id="nav-right">Nav stuffNav stuffNav stuffNav stuffNav stuffNav stuffNav stuffNav stuffNav stuffNav stuffNav stuffNav stuffNav stuff</div>
<div id="content"><p><?php $render = new File_handler(DOC_ROOT ."/data/home.xml"); $render->publish(); ?></p></div>

<div id="footer">{include file="footer.tpl"}</div>

