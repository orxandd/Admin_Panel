<?php $this->load->view("$this->parent_folder/$this->includes_for_whole/head");?>

<?php $this->load->view("$this->parent_folder/$this->includes_for_whole/menu");?>

    <div class="page-content">


        <div class="content">
            <h1 class="c_title">Portfellərin Kateqoriyaları</h1>
            <div class="grid simple ">
                <div class="row" style="margin-top: 50px">
                    <div class="grid-body no-border c_grid_padding">

                        <input data-url = "<?php echo base_url("secure_admin_panel_portfolio_category_search")?>" id="c_search" value="" type="text" class="c_search_input" placeholder="Axtarış">
                        <i class="fa fa-spinner c_spinner fa-spin"></i>

                        <a style="margin-bottom: 20px; float: right;" href="<?php echo base_url("secure_admin_panel_portfolio_category_add")?>" class="btn btn-success">Əlavə Et</a>



                        <div class="row c_resfresh_portfolio_category">


                            <?php $this->load->view("$this->parent_folder/$this->sub_folder/portfolio_category/portfolio_category_delete_render_page/portfolio_category_table");?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php $this->load->view("$this->parent_folder/$this->includes_for_whole/footer");?>
<!--melumat alerti-->
<?php if($this->session->flashdata("alert")){ ?>
    <script>
        iziToast.success({
            icon: 'icon-person',
            message: '<?php echo $this->session->flashdata("alert")?>',
            position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
            // progressBarColor: 'rgb(0, 255, 184)',
        });
    </script>
<?php }?>



