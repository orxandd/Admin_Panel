<?php $this->load->view("backend/includes_for_whole/head");?>

<?php $this->load->view("backend/includes_for_whole/menu");?>

    <div class="page-content">


        <div class="content">
            <h1 class="c_title">Portfellər</h1>
            <div class="grid simple ">
                <div class="row" style="margin-top: 50px">



                    <div class="grid-body no-border c_grid_padding">

                        <select name="category_filter" id="c_filter" data-url = <?php echo base_url("secure_admin_panel_portfolio_filter")?> >

                            <option value="all">Hamısı</option>
                            <?php foreach ($portfolio_categories as $portfolio_category) { ?>

                                <option value="<?php echo $portfolio_category["name"]?>"><?php echo $portfolio_category["name"]?></option>

                            <?php }?>
                        </select>
                        <i class="fa fa-spinner fa-spin" id="c_spinner" style="margin-left: 10px; font-size: 20px"></i>

                        <a href="<?php echo base_url("secure_admin_panel_portfolio_add")?>" class="btn btn-success c_right">
                            <i class="fa fa-plus"></i>
                            <span class="c_add_text">Əlavə Et</span>
                        </a>


                        <div class="c_resfresh_portfolio_category">
                            <?php $this->load->view("$this->parent_folder/$this->sub_folder/portfolio_list/portfolio_list_render_page/portfolio_table");?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


<?php $this->load->view("backend/includes_for_whole/footer");?>



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
