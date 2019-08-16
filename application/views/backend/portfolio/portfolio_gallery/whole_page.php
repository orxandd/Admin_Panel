<?php $this->load->view("backend/includes_for_whole/head");?>

<?php $this->load->view("backend/includes_for_whole/menu");?>

    <div class="page-content">


        <div class="content">
            <h1 class="c_title">Portfellər</h1>
            <div class="grid simple ">
                <div class="row" style="margin-top: 50px">


                    <form action   =   "<?php echo base_url("utech_admin_panel_portfolio_gallery_add/$portfolio[id]")?>"
                          data-url =   "<?php echo base_url("utech_admin_panel_portfolio_gallery_refresh/$portfolio[id]")?>"
                          class="dropzone c_dropzone"
                          enctype="multipart/form-data"
                          id="dropzone">
                        <div class="fallback">
                            <input name="file" type="file" multiple style="visibility: hidden;"/>
                        </div>

                    </form>

                    <div class="grid-body no-border c_grid_padding c_resfresh_portfolio_category">


                        <?php $this->load->view("$this->parent_folder/$this->sub_folder/portfolio_gallery/portfolio_list_render_page/portfolio_gallery_table");?>

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
<?php if($this->session->flashdata("alert_danger")){ ?>
    <script>
        iziToast.success({
            icon: 'icon-person',
            message: '<?php echo $this->session->flashdata("alert_danger")?>',
            position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
            // progressBarColor: 'rgb(0, 255, 184)',
        });
    </script>
<?php }?>
