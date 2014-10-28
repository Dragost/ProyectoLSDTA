<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url('img/favicon.ico'); ?>">

    <title>Acceso panel de control</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('css/admin/signin.css'); ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
     <?php $attributes = array('role' => 'form', 'class' => 'form-signin'); ?>
     <?php echo form_open('admin/verifylogin', $attributes); ?>
        <img src="">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="email" id="username" name="username" class="form-control" placeholder="Email address" required autofocus>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
     	<?php echo validation_errors('<div class="alert alert-warning">', '</div>'); ?>
     	<!--
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
		-->
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
     </form>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url('js/ie10-viewport-bug-workaround.js'); ?>"></script>
  </body>
</html>
