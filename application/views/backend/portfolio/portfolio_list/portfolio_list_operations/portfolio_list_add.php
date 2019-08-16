<?php $this->load->view("$this->parent_folder/$this->includes_for_whole/head");?>


<?php $this->load->view("$this->parent_folder/$this->includes_for_whole/menu");?>




    <div class="page-content">


        <div class="content">
            <h1 class="c_title">Yeni Portfelin Yaradılması</h1>
            <div class="grid simple ">
                <div class="row" style="margin-top: 50px">
                    <div class="grid-body no-border c_grid_padding">
                        <div class="row">

                            <form action="<?php echo base_url("utech_admin_panel_portfolio_add_act")?>" method="post">
                                <label for="name">Portfolionun Adı</label>
                                <input id="name" type="text" class="form-control" name="name">
                                <br>


                                <label>Portfolionun Kateqoriyası</label>
                                <select name="category" class="form-control">
                                    <?php foreach ($categories as $item) {?>
                                        <option>
                                            <?php echo $item["name"];?>
                                        </option>
                                    <?php }?>
                                </select>
                                <br><br>


                                <label>Portfolio Haqqında</label>
                                <textarea id="editor1" name="desc">Portfolio Haqqında Məlumat</textarea>
                                <br><br>
                                <button type="submit" class="btn btn-primary">Əlavə Et</button>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php $this->load->view("$this->parent_folder/$this->includes_for_whole/footer");?>

<!--melumat alerti-->
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








