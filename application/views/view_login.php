<!DOCTYPE html>
<html lang="en" class="bg-dark">
<head>
  <meta charset="utf-8" />
  <title>Koperasi | Application</title>
  <?php  $this->load->view("rell_top"); ?>
  <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
</head>
<body>
  <section id="content" class="m-t-lg wrapper-md animated fadeInUp">    
    <div class="container aside-xxl">
      <a class="navbar-brand block" href="index.html">Koperasi Application</a>
      <section class="panel panel-default bg-white m-t-lg">
        <header class="panel-heading text-center">
         <!--   <strong>Login</strong>  -->
        </header>
        
        <form action="<?php echo site_url('login/ceklogin')?>" method="post" class="panel-body wrapper-lg">
          <div class="form-group">
            <label class="control-label">Username</label>
            <input type="text" name="username" placeholder="Username" class="form-control input-lg">
          </div>
          <div class="form-group">
            <label class="control-label">Password</label>
            <input type="password" name="password"  placeholder="Password" class="form-control input-lg">
          </div>
          <a href="#" class="pull-right m-t-xs"><small>Forgot password?</small></a>
          <button type="submit" class="btn btn-primary">Sign in</button>
          <div class="line line-dashed"></div>     
        </form>
      
      </section>
    </div>
  </section>
  <!-- footer -->
  <footer id="footer">
    <div class="text-center padder">
      <p>
        <small>Web app framework base on Bootstrap<br>&copy; 2013</small>
      </p>
    </div>
  </footer>
  <!-- / footer -->
 <?php  $this->load->view("rell_bottom"); ?>
  
</body>
</html>