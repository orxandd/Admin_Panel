<?php $this->load->view("$this->parent_folder/$this->includes_for_whole/head");?>

<?php $this->load->view("$this->parent_folder/$this->includes_for_whole/menu");?>

    <div class="page-content">


        <div class="content">
            <h1 class="c_title">Admin Məlumatlarının Yenilənməsi</h1>
            <div class="grid simple ">
                <div class="row" style="margin-top: 50px">
                    <div class="grid-body no-border c_grid_padding">
                        <div class="row">

                            <form action="<?php echo base_url("utech_admin_panel_admin_update_act")?>" method="post">
                                <label for="name">İsdifadəçi Adı</label>
                                <input id="name" type="text" class="form-control" name="usr" value="<?php echo $user["username"] ?>">
                                <br>


                                <label for="name">Yeni Şifrə</label>
                                <input id="name" type="password" class="form-control" name="psw">
                                <br>


                                <button type="submit" class="btn btn-primary">Yenilə</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php $this->load->view("$this->parent_folder/$this->includes_for_whole/footer");?>

<!--melumat alerti-->
<?php if($this->session->flashdata("alert_success")){ ?>
    <script>
        iziToast.success({
            icon: 'icon-person',
            message: '<?php echo $this->session->flashdata("alert_success")?>',
            position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
            // progressBarColor: 'rgb(0, 255, 184)',
        });
    </script>
<?php }?>


<?php if($this->session->flashdata("alert_danger")){ ?>
    <script>
        iziToast.warning({
            icon: 'icon-person',
            message: '<?php echo $this->session->flashdata("alert_danger")?>',
            position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
            // progressBarColor: 'rgb(0, 255, 184)',
        });
    </script>
<?php }?>
