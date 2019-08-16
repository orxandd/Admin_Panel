<?php $this->load->view("$this->parent_folder/$this->includes_for_whole/head"); ?>


<body class="error-body no-top lazy" data-original="assets/img/work.jpg" style="background-image: url('assets/img/work.jpg')">
<div class="container">
    <div class="row login-container animated fadeInUp">
        <div class="col-md-7 col-md-offset-2 tiles white no-padding">
            <div class="tiles grey p-t-20 p-b-20 no-margin text-black tab-content">
                <div role="tabpanel" class="tab-pane active" id="tab_login">
                    <form class="animated fadeIn validate" method="post" action="<?php echo base_url("utech_admin_panel_login_page_act")?>">
                        <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">

                            <h1 class="text-center">Utech Admin Panel</h1>
                            <br><br>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" id="login_username" name="usr" placeholder="İsdifadəçi Adı" type="text" required>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" id="login_pass" name="psw" placeholder="Şifrə" type="password" required>
                            </div>
                        </div>

                        <div class="p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10">
                            <div role="tablist">
                                <button type="submit" class="btn btn-primary btn-cons">Login</button> &nbsp;&nbsp;
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $this->load->view("$this->parent_folder/$this->includes_for_whole/footer"); ?>

<!--melumat alerti-->
<?php if($this->session->flashdata("alert")){ ?>
    <script>
        iziToast.warning({
            icon: 'icon-person',
            message: '<?php echo $this->session->flashdata("alert")?>',
            position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
            // progressBarColor: 'rgb(0, 255, 184)',
        });
    </script>
<?php }?>
