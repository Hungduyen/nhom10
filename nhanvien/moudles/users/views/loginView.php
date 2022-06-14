<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
	<title>Trang quản trị</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

	<!-- <link href="public/css/bootstrap.css" rel='stylesheet' type='text/css' /> -->
	<link href="public/css/style.css" rel='stylesheet' type='text/css' />
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

	<script src="public/js/jquery-1.11.1.min.js"></script>
<style text="html/css">

</style>
</head>

<body class="login-bg">

	<div class="login-body">
		<div class="login-heading">
			<h1>Login</h1>
		</div>
		<div class="login-info">
			<form action="?modules=users&controllers=index&action=login" method="post">
				<input type="text" class="user" name="username" placeholder="Mời nhập tài khoản">
				<input type="password" name="password" class="lock" placeholder="Mời nhập mật khẩu">
				<div class="forgot-top-grids">
					<div class="forgot-grid">
						<ul>
							<li>
								<input type="checkbox" id="brand1" value="">
								<label for="brand1"><span></span>Nhớ mật khẩu</label>
							</li>
						</ul>
					</div>
					<div class="forgot">
						<a href="#"></a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<input type="submit" name="SignIn" value="Đăng nhập">
				<hr>
			</form>
		</div>
	</div>
	<!-- <div class="copyright login-copyright">
           <p>© 2021 NHÓM 11 | WEBNANGAO</a></p>    
		</div> -->
</body>

</html>