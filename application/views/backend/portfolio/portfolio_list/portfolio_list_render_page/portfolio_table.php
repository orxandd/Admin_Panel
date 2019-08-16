
<a href="<?php echo base_url("utech_admin_panel_portfolio_add")?>" class="btn btn-success c_right">
    <i class="fa fa-plus"></i>
    <span class="c_add_text">Əlavə Et</span>
</a>


<?php if (!empty($portfolio)){?>

    <!--                            portfoliolarin listi-->
    <table class="table no-more-tables table-bordered table-hover">

        <!--                                tablenin basliqi-->
        <thead>
        <th style="width:22%;">Proyektin Adı</th>
        <th style="width:9%; text-align: center">Proyektin Ana Şəkli</th>
        <th style="width:6%; text-align: center">Yüklənmə Tarixi</th>
        <th style="width:5%; text-align: center">Qalereya</th>
        <th style="width:5%; text-align: center">Əməliyatlar</th>
        </thead>
        <!--                                tablenin basliqi-->





        <!--                                tablenin bodysi-->
        <tbody>
        <?php for ($x = 0; $x < count($portfolio); $x++){?>
            <?php $item = $portfolio[$x]?>


    <!--        bunu tapana qeder oldum :D-->
            <?php

                for ($y = 0; $y < count($all_gallery); $y++){
                    $cond = array_search($portfolio[$x]["id"], $all_gallery[$y]);


                    if ($cond == "portfolio_id"){
                        $gallery = $all_gallery[$y]["name"];
                        break;
                    }else{
                        $gallery = "default.png";
                    }


                }

                if (empty($all_gallery)){
                    $gallery = "default.png";
                }

            ?>
    <!--        bunu tapana qeder oldum :D-->




            <tr>
                <td class="v-align-middle c_vertical_align_middle">
                    <?php echo $item["name"]?>
                </td>
                <td class="v-align-middle c_vertical_align_middle text-center">
                    <img width="120px" height="100px" src="<?php echo base_url("uploads/portfolio/$gallery")?>" alt="Şəkil Yüklənmədi">
                </td>
                <td class="c_vertical_align_middle text-center">
                    <?php echo $item["upload_date"]?>
                </td>
                <td class="v-align-middle c_vertical_align_middle text-center">
                    <a href="<?php echo base_url("utech_admin_panel_portfolio_gallery/$item[id]")?>" class="btn btn-primary">
                        <i class="fa fa-image"></i>
                        Qalereya
                    </a>
                </td>
                <td class="v-align-middle c_vertical_align_middle text-center">
                    <a href="<?php echo base_url("utech_admin_panel_portfolio_update/$item[id]")?>" class="btn btn-warning">
                        <i class="fa fa-pencil-square-o"></i>
                        Yenilə
                    </a>
                    <button data-url="<?php echo base_url("utech_admin_panel_portfolio_delete/$item[id]")?>" class="btn btn-danger c_delete_portfolio_category">
                        <i class="fa fa-trash"></i>
                        Sil
                    </button>
                </td>
            </tr>
        <?php }?>
        </tbody>
        <!--                                tablenin bodysi-->


    </table>
    <!--                            portfoliolarin listi-->

<?php }else{?>
    <br><br><br><br>
    <div class="alert alert-info text-center">
        <h3>Məlumat daxil edilməmişdir</h3>
    </div>
<?php }?>


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