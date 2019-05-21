<?php
$username=$this->session->userdata("username");
// if (empty($username)){
//   redirect('login');
// echo"nama user : $username";

?>

<!DOCTYPE html>
<html lang="en" class="app">
<head>
  <meta charset="utf-8" />
  <title>Notebook | Web Application</title>
  <?php  $this->load->view("rell_top"); ?>
</head>
<body>
  <section class="vbox">
   <?php  $this->load->view("view_header"); ?> 
   
    <section>
      <section class="hbox stretch">
        <!-- .aside -->
        <?php  $this->load->view("view_menu"); ?> 
        <!-- /.aside -->
        <section id="content">
          <section class="vbox">
            <section class="scrollable padder">
               <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="#">Master</a></li>
                <li class="active">User</li>
              </ul>

               <section class="panel panel-default">
             
                <div class="row wrapper">
                    <section class="scrollable padder">
                     
                      <div class="row">
                        <div class="col-sm-6">
                          <form data-validate="parsley" method="post" action="input_simpan">
                            <section class="panel panel-default">
                              <header class="panel-heading">
                                <span class="h4">Tambah user</span>
                              </header>
                              <div class="panel-body">
                               
                                <div class="form-group">
                                  <label>Username</label>
                                  <input type="text" class="form-control" name="username" data-required="true">                        
                                </div>
                                <div class="form-group">    
                                    <label>password</label>
                                    <input type="password" class="form-control" name="pass" data-required="true" id="pwd">  
                                </div>
                                <div class="form-group">
                                  <label>Nama</label>
                                  <input type="text" class="form-control" name="nama">  
                                </div>
                                <div class="form-group">
                                  <label>Email</label>
                                  <input type="text" class="form-control" name="email" data-type="email" data-required="true">  
                                </div>
                                <div class="form-group">
                                  <label>Level user</label>
                                  <select data-required="true" class="form-control m-t" name="level">
                                      <option value="">--pilih--</option>
                                      <option value="1">Superuser</option>
                                      <option value="2">User</option>
                                  </select>
                                </div>
                              </div>
                              <footer class="panel-footer text-right bg-light lter">
                                <button type="submit" class="btn btn-success btn-s-xs">Submit</button>
                              </footer>
                            </section>
                          </form>
                        </div>
                       
                      </div>
                      
                    </section>
                  
                </div>
                
                
              </section>
            </section>  
          </section>   
          <?php  $this->load->view("rell_bottom"); ?> 
        </section>
        <aside class="bg-light lter b-l aside-md hide" id="notes">
          <div class="wrapper">Notification</div>
        </aside>
      </section>
    </section>
  </section>
 
</body>
</html>
