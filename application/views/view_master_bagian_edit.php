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
  <!--[if lt IE 9]>
    <script src="../../js/ie/html5shiv.js"></script>
    <script src="../../js/ie/respond.min.js"></script>
    <script src="../../js/ie/excanvas.js"></script>
  <![endif]-->
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
                         <!--  <form data-validate="parsley" method="post" action="edit_simpan"> -->

                            <?php
                            $attributes = array('data-validate' => 'parsley');
                            echo form_open('bagian/edit_simpan',$attributes );
                            echo form_hidden('id',$this->uri->segment(3));


                                $kode=$bagian['kode_bag'];
                                $nama=$bagian['nama_bag'];
                                $divisi=$bagian['kode_divisi'];
                                $status=$bagian['status'];
                            ?>
                            <section class="panel panel-default">
                              <header class="panel-heading">
                                <span class="h4">Edit bagian</span>
                              </header>
                              <div class="panel-body"> 
                                <div class="form-group">
                                  <label>Kode</label>
                                  <input type="text" class="form-control" name="kode" data-required="true" 
                                  value="<?php echo $kode ?>">                        
                                </div>
                              
                                <div class="form-group">
                                  <label>Nama Bagian</label>
                                  <input type="text" class="form-control" name="nama" value="<?php echo $nama ?>">  
                                </div>
                                 <div class="form-group">    
                                    <label>Divisi</label>
                                    <select name="divisi" class="form-control" name="divisi" data-required="true" id="divisi"> 
                                        <option value="">Pilih</option> 
                                        <?php   foreach ($selectdivisi as $row) {?>
                                                    <option value="<?php echo  $row->id; ?>" 
                                                      <?php if($divisi==$row->id){echo"selected";}?> >
                                                      <?php echo $row->nama;?>
                                                    </option>
                                        <?php } ?>
                                    </select>                                  
                                </div>
                                <div class="form-group">
                                  <label>Status</label>
                                  <select data-required="true" class="form-control m-t" name="status">
                                      <?php if ($status==1){?>
                                        <option value="1" selected="">Aktif</option>
                                        <option value="0">Tidak aktif</option>
                                      <?php } else {?>
                                        <option value="1">Aktif</option>
                                        <option value="0" selected="">Tidak aktif</option>
                                      <?php }?>  
                                  
                                  </select>
                                </div>
                              </div>
                              <footer class="panel-footer text-right bg-light lter">
                                <button type="submit" class="btn btn-success btn-s-xs">Edit</button>
                              </footer>
                            </section>
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
