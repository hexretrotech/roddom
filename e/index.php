<html>
<head>
<link rel="stylesheet" href="./app/editor/css/smoothness/jquery-ui-1.8.13.custom.css" type="text/css" media="screen" charset="utf-8">
<link rel="stylesheet" href="./app/editor/css/elrte.min.css" type="text/css" media="screen" charset="utf-8">

<script src="./app/editor/js/jquery-1.6.1.min.js"           type="text/javascript" charset="utf-8"></script>
<script src="./app/editor/js/jquery-ui-1.8.13.custom.min.js" type="text/javascript" charset="utf-8"></script>
<script src="./app/editor/js/elrte.min.js"                  type="text/javascript" charset="utf-8"></script>
<script src="./app/editor/js/i18n/elrte.ru.js"              type="text/javascript" charset="utf-8"></script>

<script src="./app/filemanager/js/elfinder.min.js" type="text/javascript" charset="utf-8"></script>
<script src="./app/filemanager/js/i18n/elfinder.ru.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="./app/filemanager/css/elfinder.min.css" type="text/css" media="screen" charset="utf-8">

<script type="text/javascript" charset="utf-8">

      $().ready(function() {
            var opts = {
                absoluteURLs: false,
                cssClass : 'el-rte',
                lang     : 'en',
                height   : 420,
                toolbar  : 'maxi',
                cssfiles : ['./app/editor/css/elrte-inner.css'],
				fmOpen : function(callback) {
    				$('<div />').dialogelfinder({
     					url: './app/filemanager/php/connector.php',
     					commandsOptions: {
       						getfile: {
         						oncomplete: 'destroy' // destroy elFinder after file selection
        					}
						},
						getFileCallback: callback // pass callback to file manager
					});
  				}
            }
 $('#editor').elrte(opts);
      });
</script>
</head>
<body>
<div id="editor">lsd</div>
<div id="myelfinder" />
</body>
</html>
