<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="<?php echo asset_url().'css/main.css' ?>" rel="stylesheet" type="text/css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<title>Carlos 2017</title>
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
</head>
<body>
    <section class="material-half-bg">
        <div class="cover"></div>
    </section>
    <section class="login-content">
		<div class="logo">
            <h1>Vali</h1>
        </div>
		<?php if($this->session->flashdata('message')) : ?>
			<p class="text-danger"><?php echo $this->session->flashdata('message'); ?></p>
		<?php endif; ?>
		<div class="login-box">
			<form class="login-form" action="<?php echo site_url('login'); ?>" method="post">
				<h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
                <div class="form-group">
                    <label class="control-label">USERNAME</label>
                    <input class="form-control" type="text" name="identity" placeholder="Email" autofocus>
					<?php echo form_error('identity', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label class="control-label">PASSWORD</label>
                    <input class="form-control" type="password" name="password" placeholder="Password">
					<?php echo form_error('password',  '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <div class="utility">
                        <div class="animated-checkbox">
                            <label class="semibold-text">
                                <input type="checkbox" name="remember" value="1"><span class="label-text">Stay Signed in</span>
                            </label>
                        </div>
                        <p class="semibold-text mb-0"><a data-toggle="flip">Forgot Password ?</a></p>
                    </div>
                </div>
                <div class="form-group btn-container">
                    <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
                </div>
            </form>
            <form class="forget-form" action="index.html">
                <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
                <div class="form-group">
                    <label class="control-label">EMAIL</label>
                    <input class="form-control" type="text" placeholder="Email">
                </div>
                <div class="form-group btn-container">
                    <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
                </div>
                <div class="form-group mt-20">
                    <p class="semibold-text mb-0"><a data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
                </div>
            </form>
        </div>
    </section>

    <!-- Javascripts-->
    <script src="<?php echo asset_url().'js/jquery-2.1.4.min.js'; ?>"></script>
    <script src="<?php echo asset_url().'js/bootstrap.min.js'; ?>"></script>
    <script src="<?php echo asset_url().'js/plugins/pace.min.js'; ?>"></script>
    <script src="<?php echo asset_url().'js/main.js'; ?>"></script>

</body>
</html>
