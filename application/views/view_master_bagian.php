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
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
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
                <li class="active">Divisi</li>
              </ul>

               <section class="panel panel-default">
                <header class="panel-heading">
                  List Divisi
                </header>
                <div class="row wrapper">
                  <div class="col-sm-5 m-b-xs">
                   <button class="btn btn-sm btn-info" ><?php echo anchor('bagian/input','tambah');?></button>
                  </div>
                  
                </div>
                <div class="table-responsive">
                  <table class="table table-striped b-t b-light">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Kode Bagian</th>
                        <th>Bagian</th>
                        <th>Divisi</th>
                        <th>Status</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $no=0;
                    foreach ($bagian as $b) { 
                      $no++; 
                      $kode=$b->kode;
                      $nama=$b->nama;
                      $divisi=$b->divisi;
                      $status=$b->status;
                      ?>
                      <tr>
                       <td><?php echo $no ?></td>
                       <td><?php echo $kode; ?></td>
                       <td><?php echo $nama; ?></td>
                       <td><?php echo $divisi; ?></td>
                       <td><?php if ($status==1){echo "aktif";} else {echo"tidak aktif";}?></td>
                       <td><a href="<?php echo base_url(); ?>bagian/edit/<?php echo $kode;?>"><img src="<?php echo base_url(); ?>images/edit.png"></a></td>
                      </tr>
                    <?php } ?>
                    </tbody>

                  </table>
                </div>
                <footer class="panel-footer">
                  <div class="row">
                    <div class="col-sm-4 hidden-xs">
                                     
                    </div>
                    <div class="col-sm-4 text-center">
                      <!-- <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small> -->
                    </div>
                    <div class="col-sm-4 text-right text-center-xs">                
                      <ul class="pagination pagination-sm m-t-none m-b-none">
                        <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </footer>
              </section>
            </section>  
          </section>   
       
        </section>
        <aside class="bg-light lter b-l aside-md hide" id="notes">
          <div class="wrapper">Notification</div>
        </aside>
      </section>
    </section>
  </section>
 <?php  $this->load->view("rell_bottom"); ?> 
</body>
</html>
