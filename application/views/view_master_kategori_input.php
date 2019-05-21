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
                <li class="active">Kategori</li>
              </ul>

               <section class="panel panel-default">
             
                <div class="row wrapper">
                    <section class="scrollable padder">
                     
                      <div class="row">
                        <div class="col-sm-6">
                       <!--    <form data-validate="parsley" method="post" action="input_simpan"> -->
                          <?php
                            $datetime=date('Y-m-d H:i:s');
                            $attributes = array('data-validate' => 'parsley');
                            echo form_open('kategori/input_simpan',$attributes );
                            echo form_hidden('update_date',$datetime);
                            echo form_hidden('username','admin');
                          ?>  
                            <section class="panel panel-default">
                              <header class="panel-heading">
                                <span class="h4">Tambah kategori</span>
                              </header>
                              <div class="panel-body">
                         
                                <div class="form-group">    
                                    <label>Nama kategori</label>
                                    <input type="text" class="form-control" name="nama" data-required="true" id="nama">  
                                </div>
                               
                              </div>
                              <footer class="panel-footer text-right bg-light lter">
                                <button type="submit" class="btn btn-success btn-s-xs">Simpan</button>
                              </footer>
                            </section>
                     <!--      </form> -->
                           <?php echo form_close();?>
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
