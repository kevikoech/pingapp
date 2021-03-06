<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Ping App | Log In</title>
  <link rel="stylesheet" href="/media/css/app.css">
  <script src="/media/js/vendor/custom.modernizr.js"></script>
</head>
<body>
	<div class="main-content-login-row">
		<div class="main-content-login">
			<div class="logo-image">
				<h2>Ping App</h2>
			</div>
			<?php if (isset($errors)): ?>
			<div data-alert class="warning-alert-box">
				<?php foreach ($errors as $error): ?>
				<?php echo $error; ?><br />
				<?php endforeach; ?>
				<a href="#" class="close">&times;</a>
			</div>
			<?php endif; ?>

			<?php echo Form::open(NULL, array('class' => 'custom')); ?>
				<?php echo Form::hidden('token', Security::token()); ?>
				<fieldset>
					<legend>Login</legend>

						<div class="login-box-username">
							<input type="text" name="username" value="<?php echo (isset($username)) ? $username : ''; ?>" id="username" placeholder="username / email">
						</div>

						<div class="login-box-password">
							<input type="password" name="password" id="password" placeholder="password">
						</div>

				</fieldset>
				
				<div class="login-action">
					<button class="login-action-button">Login</button>
				</div>
				<div class="register-action">
					<p>Don't have an account?<a onclick="window.location = '/register'; return false;"> Register</a></p>
				</div>
			<?php echo Form::close(); ?>
		</div>
	</div>

	<script>
		document.write('<script src=' +
		('__proto__' in {} ? '/media/js/vendor/zepto' : '/media/js/vendor/jquery') +
		'.js><\/script>')
	</script>

	<script src="/media/js/foundation/foundation.js"></script>
	<script src="/media/js/foundation/foundation.abide.js"></script>
	<script src="/media/js/foundation/foundation.alerts.js"></script>
	<script src="/media/js/foundation/foundation.clearing.js"></script>
	<script src="/media/js/foundation/foundation.cookie.js"></script>
	<script src="/media/js/foundation/foundation.dropdown.js"></script>
	<script src="/media/js/foundation/foundation.forms.js"></script>
	<script src="/media/js/foundation/foundation.interchange.js"></script>
	<script src="/media/js/foundation/foundation.joyride.js"></script>
	<script src="/media/js/foundation/foundation.magellan.js"></script>
	<script src="/media/js/foundation/foundation.orbit.js"></script>
	<script src="/media/js/foundation/foundation.placeholder.js"></script>
	<script src="/media/js/foundation/foundation.reveal.js"></script>
	<script src="/media/js/foundation/foundation.section.js"></script>
	<script src="/media/js/foundation/foundation.tooltips.js"></script>
	<script src="/media/js/foundation/foundation.topbar.js"></script>
	<script>
		$(document).foundation();
	</script>
</body>
</html>
