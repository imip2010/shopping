<div class="col-lg-2 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="myadmin-dd dd" id="nestable">
                    <div class="d-flex no-block align-items-center ">
                        <div class="">
                            <img src="<?php echo base_url()?>assets/images/users/1.jpg" alt="user" class="rounded-circle" width="50">
                        </div>
                        <div class="m-l-10">
                            <h4 class="m-b-0"><?php echo $dataDiri['nama'];?></h4>
                            <p class=" m-b-0"><?php echo $dataDiri['email'];?></p>
                        </div>
                    </div><br>

                    <ul class="list-style-none el-info" >
                        <li class="el-item">
                            <a href="<?php echo base_url()?>labelbarang" > Akun Saya</a>
                        </li>
                        <div class="dropdown-divider"></div>

                        <li  class="el-item">
                            <a href="<?php echo base_url()?>labelbarang" style="color: #4798e8;" > Belanjaan Saya </a> 
                        </li>
                        <div class="dropdown-divider"></div>

                        <li  class="el-item">
                            <a href="<?php echo base_url()?>labelbarang"> Group Saya </a> 
                        </li>
                        <div class="dropdown-divider"></div>

                        <li class="el-item">
                            <a href="<?php echo base_url()?>labelbarang"> Notifikasi </a>    
                        </li>
                        <div class="dropdown-divider"></div>

                        <li class="el-item">
                            <a href="<?php echo base_url()?>labelbarang"> Voucer Saya </a>   
                        </li>
                        <div class="dropdown-divider"></div>
                    
                    </ul><br>
                </div>
            </div>
        </div>
    </div>