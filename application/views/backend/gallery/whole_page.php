<?php $this->load->view("backend/includes_for_whole/head");?>

<?php $this->load->view("backend/includes_for_whole/menu");?>

    <div class="page-content">


        <div class="content">
            <h1 class="c_title">Qalereya</h1>
            <div class="grid simple ">
                <div class="row" style="margin-top: 50px">


                    <form action   =   "<?php echo base_url("secure_admin_panel_gallery_add")?>"
                          data-url =   "<?php echo base_url("secure_admin_panel_gallery_refresh")?>"
                          class="dropzone c_dropzone"
                          enctype="multipart/form-data"
                          id="dropzone">
                        <div class="fallback">
                            <input name="file" type="file" multiple style="visibility: hidden;"/>
                        </div>

                    </form>

                    <div class="grid-body no-border c_grid_padding c_resfresh_portfolio_category">


                        <?php $this->load->view("$this->parent_folder/$this->sub_folder/gallery_list_render_page/gallery_table");?>

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
