<a href="<?php echo base_url("secure_admin_panel_car_brand_class")?>" class="btn btn-primary">Geriyə</a>


<?php if (!empty($classes)){?>
    <a href="<?php echo base_url("secure_admin_panel_car_class_add/$brand_id")?>" class="btn btn-success">Əlavə Et</a>
    <br><br>

    <table class="table no-more-tables table-bordered table-hover">
        <thead>
        <th style="width:20%">Klasın adı AZ</th>
        <th style="width:20%">Klasın adı EN</th>
        <th style="width:20%">Klasın adı RU</th>
        <th style="width:20%; text-align: center">Klasın Şəkli</th>
        <th style="width:19%; text-align: center">Əməliyyatlar</th>
        </thead>

        <tbody>

        <?php foreach ($classes as $item) {?>
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
                    <img width="130px" height="100px" src="<?php echo base_url("uploads/car_classes/$item[img]")?>" alt="Şəkil Tapılmadı">
                </td>
                
                <td class="v-align-middle c_vertical_align_middle">
                    <center>
                        <a href="<?php echo base_url("secure_admin_panel_car_class_update/$item[brand_id]/$item[id]")?>" class="btn btn-warning">Yenilə</a>
                        <button data-url="<?php echo base_url("secure_admin_panel_car_class_delete/$item[id]")?>" class="btn btn-danger c_delete_portfolio_category_redirect">Sil</button>
                    </center>
                </td>
            </tr>
        <?php }?>

        </tbody>
    </table>
<?php }else{?>
    <a href="<?php echo base_url("secure_admin_panel_car_class_add/$brand_id")?>" class="btn btn-success">Əlavə Et</a>
    <br><br>

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
