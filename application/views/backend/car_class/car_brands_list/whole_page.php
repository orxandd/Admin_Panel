<?php $this->load->view("$this->parent_folder/$this->includes_for_whole/head");?>

<?php $this->load->view("$this->parent_folder/$this->includes_for_whole/menu");?>

<div class="page-content">

    <div class="content">
        <h1 class="c_title">Brendlər</h1>
        <div class="grid simple ">
            <div class="row" style="margin-top: 50px">
                <div class="grid-body no-border c_grid_padding">
                    <div class="row c_resfresh_portfolio_category">

                        <a href="<?php echo base_url("secure_admin_panel_car_main")?>" class="btn btn-primary">Geriyə</a>
                        <br><br>

                        <?php if (!empty($brands)){?>

                            <table class="table no-more-tables table-bordered table-hover">
                                <thead>
                                <th style="width:20%">Brendin adı AZ</th>
                                <th style="width:20%">Brendin adı EN</th>
                                <th style="width:20%">Brendin adı RU</th>
                                <th style="width:20%; text-align: center">Brendin Şəkli</th>
                                <th style="width:19%; text-align: center">Brendin Klası</th>
                                </thead>

                                <tbody>

                                <?php foreach ($brands as $item) {?>
                                    <tr>
                                        <td class="v-align-middle c_vertical_align_middle">
                                            <?php echo $item["name_az"]?>
                                        </td>

                                        <td class="v-align-middle c_vertical_align_middle">
                                            <?php echo $item["name_en"]?>
                                        </td>

                                        <td class="v-align-middle c_vertical_align_middle">
                                            <?php echo $item["name_ru"]?>
                                        </td>


                                        <td style="text-align: center" class="v-align-middle c_vertical_align_middle">
                                            <img width="130px" height="100px" src="<?php echo base_url("uploads/car_brands/$item[img]")?>" alt="Şəkil Tapılmadı">
                                        </td>

                                        <td class="v-align-middle c_vertical_align_middle">
                                            <center>
                                                <a href="<?php echo base_url("secure_admin_panel_car_class_list/$item[id]")?>" class="btn btn-info">Klassları</a>
                                            </center>
                                        </td>
                                    </tr>
                                <?php }?>

                                </tbody>
                            </table>
                        <?php }else{?>

                            <div class="alert alert-info text-center">
                                <h3>Məlumat daxil edilməmişdir</h3>
                            </div>
                        <?php }?>



                        <!--sehifenin islemesi ucun lazim olan scriptler-->
                        <script>
                            //galereyadaki silme islemine alert verme
                            $('.c_delete_portfolio_category').click(function () {


                                $data_url_portfolio_category = $(this).data("url");

                                swal({
                                    title: "Əminsiniz?",
                                    text: "Silinən məlumatlar geri qaytarılmayacaq!",
                                    icon: "warning",
                                    buttons: true,
                                    dangerMode: true,
                                })
                                    .then((willDelete) => {
                                        if (willDelete) {
                                            // window.location.href = $data_url;
                                            $.post($data_url_portfolio_category, {}, function (response) {

                                                $('.c_resfresh_portfolio_category').html(response);

                                            })
                                        }
                                    });

                            });

                        </script>
                        <!--sehifenin islemesi ucun lazim olan scriptler-->

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

