<aside class="bg-dark lter aside-md hidden-print" id="nav">          
          <section class="vbox">
            <header class="header bg-primary lter text-center clearfix">
              <div class="btn-group">
                Welcome admin 
              </div>
            </header>
            <section class="w-f scrollable">
              <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
                
                <!-- nav -->
                <nav class="nav-primary hidden-xs">
                  <ul class="nav">
                    <li  class="active">
                      <a href="index.html"   class="active">
                        <i class="fa fa-dashboard icon">
                          <b class="bg-danger"></b>
                        </i>
                        <span>Home</span>
                      </a>
                    </li>
                    <li >
                      <a href="#layout"  >
                        <i class="fa fa-columns icon">
                          <b class="bg-warning"></b>
                        </i>
                        <span class="pull-right">
                          <i class="fa fa-angle-down text"></i>
                          <i class="fa fa-angle-up text-active"></i>
                        </span>
                        <span>Master</span>
                      </a>
                      <ul class="nav lt">
                        <li >
                          <a href="<?php echo base_url(); ?>user" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>User</span>
                          </a>
                        </li>
                        <li >
                          <a href="<?php echo base_url(); ?>divisi" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Divisi</span>
                          </a>
                        </li>
                        <li >
                          <a href="<?php echo base_url(); ?>bagian" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Bagian</span>
                          </a>
                        </li>
                        <li >
                          <a href="<?php echo base_url(); ?>kategori" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Kategori pinjaman</span>
                          </a>
                        </li>
                         <li >
                          <a href="layout-h.html" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Kriteria klasifikasi</span>
                          </a>
                        </li>
                        <li >
                          <a href="layout-h.html" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Anggota</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li >
                      <a href="#pages"  >
                        <i class="fa fa-file-text icon">
                          <b class="bg-primary"></b>
                        </i>
                        <span class="pull-right">
                          <i class="fa fa-angle-down text"></i>
                          <i class="fa fa-angle-up text-active"></i>
                        </span>
                        <span>Transaksi</span>
                      </a>
                      <ul class="nav lt">
                        <li >
                          <a href="gallery.html" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Pengajuan Pinjaman</span>
                          </a>
                        </li>
                        <li >
                          <a href="invoice.html" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Data Training</span>
                          </a>
                        </li>
                        <li >
                          <a href="profile.html" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Proses klasifikasi</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li >
                      <a href="mail.html"  >
                       
                        <i class="fa fa-envelope-o icon">
                          <b class="bg-primary dker"></b>
                        </i>
                        <span class="pull-right">
                          <i class="fa fa-angle-down text"></i>
                          <i class="fa fa-angle-up text-active"></i>
                        </span>
                        <span>Laporan</span>
                      </a>
                       <ul class="nav lt">
                        <li >
                          <a href="gallery.html" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Pinjaman</span>
                          </a>
                        </li>
                        <li >
                          <a href="invoice.html" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Angsuran</span>
                          </a>
                        </li>
                        <li >
                          <a href="profile.html" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Saldo koperasi</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li >
                      <a href="notebook.html"  >
                        <i class="fa fa-pencil icon">
                          <b class="bg-info"></b>
                        </i>
                        <span>Bantuan</span>
                      </a>
                    </li>
                  </ul>
                </nav>
                <!-- / nav -->
              </div>
            </section>
            
           <!--  <footer class="footer lt hidden-xs b-t b-dark">
              <div id="chat" class="dropup">
                <section class="dropdown-menu on aside-md m-l-n">
                  <section class="panel bg-white">
                    <header class="panel-heading b-b b-light">Active chats</header>
                    <div class="panel-body animated fadeInRight">
                      <p class="text-sm">No active chats.</p>
                      <p><a href="#" class="btn btn-sm btn-default">Start a chat</a></p>
                    </div>
                  </section>
                </section>
              </div>
              <div id="invite" class="dropup">                
                <section class="dropdown-menu on aside-md m-l-n">
                  <section class="panel bg-white">
                    <header class="panel-heading b-b b-light">
                      John <i class="fa fa-circle text-success"></i>
                    </header>
                    <div class="panel-body animated fadeInRight">
                      <p class="text-sm">No contacts in your lists.</p>
                      <p><a href="#" class="btn btn-sm btn-facebook"><i class="fa fa-fw fa-facebook"></i> Invite from Facebook</a></p>
                    </div>
                  </section>
                </section>
              </div>
              <a href="#nav" data-toggle="class:nav-xs" class="pull-right btn btn-sm btn-dark btn-icon">
                <i class="fa fa-angle-left text"></i>
                <i class="fa fa-angle-right text-active"></i>
              </a>
              <div class="btn-group hidden-nav-xs">
                <button type="button" title="Chats" class="btn btn-icon btn-sm btn-dark" data-toggle="dropdown" data-target="#chat"><i class="fa fa-comment-o"></i></button>
                <button type="button" title="Contacts" class="btn btn-icon btn-sm btn-dark" data-toggle="dropdown" data-target="#invite"><i class="fa fa-facebook"></i></button>
              </div>
            </footer> -->
          </section>
        </aside>