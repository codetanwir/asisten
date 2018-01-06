<?php
session_start();
if (!empty($_SESSION['username'])) {
    header("location:index.php");
}

?>
<html>
    <head>
        <title>Login</title>
    </head>
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/bootstrap-social.css" rel="stylesheet" type="text/css"/>
    <link href="assets/animate.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="assets/parsley/parsley.css" rel="stylesheet" type="text/css"/>

    <body>
        <div class="container animated shake">
            <div class="col-md-4 col-lg-offset-4" style="padding-top: 10%">
                <div class="panel panel-default">
                    <div class="panel panel-heading">
                        <h3>Login</h3>
                    </div>
                    <div class="panel panel-body">
                        <form action="index.php?p=login" method="POST" id="frmlogin">
                            <div class="form-group">
                                <label>USERNAME</label>
                                <input required type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>PASSWORD</label>
                                <input required type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="btnLogin" class="btn btn-primary" value="Login">
                            </div>
                        </form>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</body>
<script src="assets/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.js" type="text/javascript"></script>
<script src="assets/parsley/parsley.min.js" type="text/javascript"></script> 
<script>
    $('#frmlogin').parsley();
</script>
</html>

