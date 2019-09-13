<!--        HEAD NAVBAR                -->
<div class="navbar-inner">
    <div class="header-seperation">
        <a>
           <h3 style="color: white; margin-left: 10px"> Admin Panel </h3>
        </a>


    </div>

    <div class="header-quick-nav">
        <div class="pull-left">
            <ul class="nav quick-section">
                <li class="quicklinks">
                    <a href="#" class="" id="layout-condensed-toggle">
                        <i class="material-icons">menu</i>
                    </a>
                </li>
            </ul>
        </div>
    </div>

</div>
<!--        HEAD NAVBAR                -->


</div>


<div class="page-container row-fluid">

    <div class="page-sidebar " id="main-menu">

        <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">



            <!--                Admin profile-->
            <div class="user-info-wrapper sm">
                <div class="profile-wrapper sm">
                    <img src="<?php echo base_url("public/assets_for_backend")?>/img/avatar.png" alt="" data-src="<?php echo base_url("public/assets_for_backend")?>/img/avatar.png" data-src-retina="<?php echo base_url("public/assets_for_backend")?>/img/avatar.png" width="69" height="69" />
                </div>
                <div class="user-info sm">
                    <div class="username" style="margin-top: 12px;">Admin
                        <a href="<?php echo base_url("secure_admin_panel_login_page_logout")?>" title="Çıxış" class="fa fa-sign-out c_cursor_pointer" style="margin-left: 10px"></a>
                    </div>
                </div>
            </div>
            <!--                Admin profile-->

            <br>





            <!--                Left menu side-->
            <ul>

                <li class="start  open active ">
                    <a href="<?php echo base_url("secure_admin_panel_portfolio")?>">
                        <i class="material-icons">web</i>

<!--                        Portfel-->
                        <span class="title">Portfel (Kateqoriyali Tek Dilli)</span>

                        <span class="selected"></span>
                    </a>
                </li>


                <li class="start  open active ">
                    <a href="<?php echo base_url("secure_admin_panel_portfolio_ml")?>">
                        <i class="material-icons">web</i>

                        <!--                        Portfel-->
                        <span class="title">Portfel (Kateqoriyali 3 Dilli)</span>

                        <span class="selected"></span>
                    </a>
                </li>


                <li class="start  open active ">
                    <a href="<?php echo base_url("secure_admin_panel_portfolio_list_woc")?>">
                        <i class="material-icons">web</i>

                        <!--                        Portfel-->
                        <span class="title">Portfel (Kateqoriyasiz Tek Dilli)</span>

                        <span class="selected"></span>
                    </a>
                </li>



                <li class="start  open active ">
                    <a href="<?php echo base_url("secure_admin_panel_portfolio_list_woc_ml")?>">
                        <i class="material-icons">web</i>

                        <!--                        Portfel-->
                        <span class="title">Portfel (Kateqoriyasiz 3 Dilli)</span>

                        <span class="selected"></span>
                    </a>
                </li>

                      
                <li class="open active">
                    <a href="<?php echo base_url("secure_admin_panel_message")?>">
                        <i class="material-icons">email</i>
                        <span class="title">Kontakt 1</span>
                        <span class=" badge badge-disable pull-right "></span>

                    </a>
                </li>



                <li class="start  open active ">
                    <a href="<?php echo base_url("secure_admin_panel_gallery")?>">
                        <i class="material-icons">image</i>

                        <!--                        galereya-->
                        <span class="title">Dropzonlu Galereya</span>

                        <span class="selected"></span>
                    </a>
                </li>




                <li class="start  open active ">
                    <a href="<?php echo base_url("secure_admin_panel_about")?>">
                        <i class="material-icons">info</i>

                        <!--                        About-->
                        <span class="title">About 1</span>

                        <span class="selected"></span>
                    </a>
                </li>


                <li class="start  open active ">
                    <a href="<?php echo base_url("secure_admin_panel_about_ml")?>">
                        <i class="material-icons">info</i>

                        <!--                        About-->
                        <span class="title">About (3 dilli)</span>

                        <span class="selected"></span>
                    </a>
                </li>





                <li class="open active">
                    <a href="<?php echo base_url("secure_admin_panel_admin_update")?>">
                        <i class="material-icons">update</i>
                        <span class="title">Admin Yeniləməsi</span>
                        <span class=" badge badge-disable pull-right "></span>
                    </a>
                </li>



<!--=================================================Car Repair sayti ucun olan hisse===========================================-->

                <hr>
                <span>Car repair sayti ucun lazim olan hisse</span>

                <li class="open active">
                    <a href="<?php echo base_url("secure_admin_panel_car_main")?>">
                        <i class="material-icons">directions_car</i>
                        <span class="title">Maşın Akksesuarları</span>
                        <span class=" badge badge-disable pull-right "></span>
                    </a>
                </li>

                <li class="open active">
                    <a href="<?php echo base_url("secure_admin_panel_car_parts")?>">
                        <i class="material-icons">directions_car</i>
                        <span class="title">Maşın Hissələri</span>
                        <span class=" badge badge-disable pull-right "></span>
                    </a>
                </li>



<!--=================================================Car Repair sayti ucun olan hisse===========================================-->

            </ul>
            <!--                Left menu side-->




            <div class="clearfix"></div>
        </div>
    </div>
