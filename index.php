 <?php session_start(); ?>
<html>
    <head>
        <title>
            Facebook Login
        </title>
    </head>
    
    <body>
        <script type="text/javascript" src="./fbapp/fb.js"></script>
        <div>
            <h2>
                Welcome <?php if (isset($_SESSION['name'])){ echo $_SESSION['name']; }?>
            </h2>
        </div>
        <div>
            <?php if (isset($_sSESSION['name'])){ }
            else { ?><div class="fb-login-button" data-scope="public_profile,email" onlogin="checkLoginState();"}?>
        </div>
            <?php } ?>
        </div>
    </body>
</html>
