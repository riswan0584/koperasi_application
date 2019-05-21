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
                <li class="active">Divisi</li>
              </ul>

               <section class="panel panel-default">
             
                <div class="row wrapper">
                    <section class="scrollable padder">
                     
                      <div class="row">
                        <div class="col-sm-6">
                       <!--    <form data-validate="parsley" method="post" action="input_simpan"> -->
                          <?php
                            $attributes = array('data-validate' => 'parsley');
                            echo form_open('bagian/input_simpan',$attributes );
                          ?>  
                            <section class="panel panel-default">
                              <header class="panel-heading">
                                <span class="h4">Tambah Bagian</span>
                              </header>
                              <div class="panel-body">
                               
                                <div class="form-group">
                                  <label>Kode Bagian</label>
                                  <input type="text" class="form-control" name="kode" data-required="true" id="kode">                        
                                </div>
                                <div class="form-group">    
                                    <label>Nama bagian</label>
                                    <input type="text" class="form-control" name="bagian" data-required="true" id="bagian">  
                                </div>
                                <div class="form-group">    
                                    <label>Divisi</label>
                                    <select name="divisi" class="form-control" name="divisi" data-required="true" id="divisi"> 
                                        <option value="">Pilih</option> 
                                        <?php   foreach ($selectdivisi as $d) {?>
                                                    <option value="<?php echo  $d->id; ?>"><?php echo $d->nama;?></option>
                                        <?php } ?>
                                    </select>                                  
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
