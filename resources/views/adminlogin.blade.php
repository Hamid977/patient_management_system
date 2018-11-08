
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Login</title>
	<link rel="icon" type="image/x-icon" href="uploads/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/style.css" />
	<script src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
</head>
<body>
	
	<div class="lgn-wrapper">
		<div class="lgn-logo text-center">
			<a href="../"><img src="uploads/logo.png" alt="Clinical"></a>
		</div>
                <p class="text-center">UserName:  demo</p>
		<p class="text-center">Password:  demo@test</p>
		<div id="login-form" class="lgn-form ">
			<form class="form-vertical" action="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=login" method="post">
								<input type="hidden" name="_token" value="413ccea5ca6b8ce59e0da0d74a15110a305317f742542dcc5f09cc85ddf4f25288776a66377494dbf3154612b21c29b49cdcd6ee235b8ea2b77355d52eef0188">
				<div class="lgn-input form-group">
					<label class="control-label col-sm-12">Username</label>
					<div class="col-sm-12">
						<input class="form-control" type="text" name="username" id="lgn-mail" placeholder="Enter your Username" autocomplete="off">
					</div>
				</div>
				<div class="lgn-input form-group">
					<label class="control-label col-sm-12">Password</label>
					<div class="col-sm-12">
						<input type="password" name="password" id="lgn-pass" class="form-control" placeholder="Enter your Password" autocomplete="off">
					</div>	
				</div>
				<div class="lgn-input form-group">
					<label class="control-label col-sm-12">What is 6 plus 5 =</label>
					<div class="col-sm-12">
						<input type="text" id="lgn-bot" class="form-control" placeholder="Answer" autocomplete="off">
					</div>
				</div>
				<div class="lgn-forgot">
					<a href="http://pepdev.com/theme-preview/klinikal/index.php?route=forgot">Forgotten Password?</a>
				</div>
				<div class="lgn-submit">
					<button type="submit" id="lgn-submit" class="btn btn-primary btn-lg" name="login">Login</button>
				</div>
			</form>
		</div>
	</div>
<script>  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-93901876-1', 'auto');
  ga('send', 'pageview');</script>


</div>

<script type="text/javascript">
var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || 
{widgetcode:"b0707d67168a123a4b74ffaaa713d80d766a387e66055ee6c3b075720a1e3e1b", values:{},ready:function(){}};
var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;
s.src="https://salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);d.write("<div id='zsiqwidget'></div>");
</script>
</body>
</html>


