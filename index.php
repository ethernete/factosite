<!DOCTYPE html>
<html>
    <head>
        <title>FACTOSITE</title>
        <meta charset="UTF-8"><!--
        <meta name="description" content="Free Web tutorials">
        <meta name="keywords" content="HTML,CSS,XML,JavaScript">
        <meta name="author" content="Someone">
        -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--
        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet/less" type="text/css" href="/variables.less"/>
        <link rel="stylesheet/less" type="text/css" href="/bootswatch.less"/>
        <script src="https://cdn.jsdelivr.net/npm/less"></script>
        -->
        <link rel="stylesheet" href="/bootstrap.css">
        <link rel="stylesheet" href="/bootstrap-responsive.css">
        <script src="https://code.jquery.com/jquery-1.7.js"></script>
        <script src="/bootstrap.js"></script>
        <style>
            .content {
                max-width:1024px;
                margin:auto;
            }
            /* body {
              background: url('../img/snow.gif') top left;
              -webkit-font-smoothing: none;
            } */
            .img-center {
              display: block;
              margin-left: auto;
              margin-right: auto;
              width: 50%;
            }
            body {
                background-image: url("/img/gradient_bg.png");
                background-repeat: repeat-x;
            }
        </style>
    </head>
    <body>
        <!-- Navbar start -->
        <?php require './nav.php'; ?>
        <!-- Navbar end -->
        <div class="content">
            <!--<h1 class="text-center"><span style="color:#FF0000">F</span><span style="color:#FFAA00">A</span><span style="color:#AAFF00">C</span><span style="color:#00FF00">T</span><span style="color:#00FFAA">O</span><span style="color:#00AAFF">S</span><span style="color:#0000FF">I</span><span style="color:#AA00FF">T</span><span style="color:#FF00AA">E</span></h1>-->
            <hr>
                <h1>Welcome to FACTOSITE</h1>
                <p>Stuff completed:</p>
				<ul>
					<li>Login form</li>
				</ul>
        </div>
    </body>
</html>