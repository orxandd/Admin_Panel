<?php $this->load->view("backend/includes_for_whole/head");?>

<?php $this->load->view("backend/includes_for_whole/menu");?>

<div class="page-content">
    <div class="content">
        <h1 class="c_title">Portfellər</h1>
        <div class="grid simple ">
            <div class="row" style="margin-top: 50px">
                <div class="grid-body no-border c_grid_padding">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="grid simple">
                                <div class="grid-body">
                                    <div class="row-fluid">
                                        <div data-height="220px" class="c_portfolio_btn_div">
                                            <h1>Portfolio Kateqoriyaları</h1>
                                            <br>
                                            <a href="<?php echo base_url("utech_admin_panel_portfolio_category")?>" class="btn btn-primary c_portfolio_btn">Get</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="grid simple">
                                <div class="grid-body">
                                    <div class="row-fluid">
                                        <div data-height="220px" class="c_portfolio_btn_div">
                                            <h1>Portfolioların Listi</h1>
                                            <br>
                                            <a href="<?php echo base_url("utech_admin_panel_portfolio_list")?>" class="btn btn-primary c_portfolio_btn">Get</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


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
