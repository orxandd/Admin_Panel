<a href="<?php echo base_url("secure_admin_panel_car_brand_model")?>" class="btn btn-primary">Geriyə</a>


<?php if (!empty($models)){?>
    <a href="<?php echo base_url("secure_admin_panel_car_model_add/$brand_id")?>" class="btn btn-success">Əlavə Et</a>
    <br><br>

    <table class="table no-more-tables table-bordered table-hover">
        <thead>
        <th style="width:17%">Modelin adı AZ</th>
        <th style="width:17%">Modelin adı EN</th>
        <th style="width:17%">Modelin adı RU</th>
        <th style="width:17%">Modelin Klası</th>
        <th style="width:20%; text-align: center">Modelin Şəkli</th>
        <th style="width:19%; text-align: center">Əməliyyatlar</th>
        </thead>

        <tbody>


        <?php function searchForId($id, $array) {
            foreach ($array as $key => $val) {
                if ($val['id'] === $id) {
                    return $key;
                }
            }
            return null;
        }?>

        <?php foreach ($models as $item) {?>
            <tr>
                <td data-name = "az" data-url = "<?php echo base_url("secure_admin_panel_car_model_update_ajax/$item[id]")?>" class="v-align-middle c_vertical_align_middle c_editable_text" contenteditable="true"><?php echo $item["name_az"]?></td>

                <td data-name = "en" data-url = "<?php echo base_url("secure_admin_panel_car_model_update_ajax/$item[id]")?>" class="v-align-middle c_vertical_align_middle c_editable_text" contenteditable="true"><?php echo $item["name_en"]?></td>

                <td data-name = "ru" data-url = "<?php echo base_url("secure_admin_panel_car_model_update_ajax/$item[id]")?>" class="v-align-middle c_vertical_align_middle c_editable_text" contenteditable="true"><?php echo $item["name_ru"]?></td>

                <td class="v-align-middle c_vertical_align_middle c_dinamic_select" >

                    <span class="c_span_select">
                        <?php
                            $class_number_of_model = searchForId($item["class_id"],$classes);
                            echo ($class_number_of_model >= -1) ? $classes[$class_number_of_model]["name_az"] : "Klası yoxdur";
                        ?>
                    </span>

                    <select style="display: none;" name="class_category" class="c_dinamic_select_tag" data-url="<?php echo base_url("secure_admin_panel_car_model_update_ajax_select_tag/$item[id]")?>">

                        <option value="<?php
                        if ($class_number_of_model >= -1){
                            echo $classes[$class_number_of_model]["id"];
                        }else{
                            echo null;
                        }
                        ?>">
                            <?php
                            if ($class_number_of_model >= -1){
                                echo $classes[$class_number_of_model]["name_az"];
                            }else{
                                echo "Heç biri";
                            }
                            ?>
                        </option>

                        <?php if ($class_number_of_model >= -1){?>
                            <option value="0">Heç biri</option>
                        <?php }?>

                        <?php foreach ($classes as $item2) { ?>
                            <?php if ($classes[$class_number_of_model]["name_az"] != $item2["name_az"]){ ?>
                                <option value="<?php echo $item2["id"]?>">
                                    <?php echo $item2["name_az"]?>
                                </option>
                            <?php }?>
                        <?php }?>

                    </select>

                </td>

                <td style="text-align: center" class="v-align-middle c_vertical_align_middle " data-url = "<?php echo base_url("secure_admin_panel_car_model_update_ajax_img/$item[id]")?>">

                    <form class="c_form" enctype="multipart/form-data" data-s = "ads">

                        <input name="file" class="c_input_file_ajax" type="file" style="display: none;" >

                        <img class="c_input_file_img"
                             width="130px"
                             data-url = "<?php echo base_url("secure_admin_panel_car_model_update_ajax_img/$item[id]")?>"
                             height="100px"
                             src="<?php echo base_url("uploads/car_model/$item[img]")?>"
                             alt="Şəkil Tapılmadı">

                    </form>


                </td>
                
                <td class="v-align-middle c_vertical_align_middle">
                    <center>
                        <a href="<?php echo base_url("secure_admin_panel_car_model_update/$item[brand_id]/$item[id]")?>" class="btn btn-warning">Yenilə</a>
                        <button data-url="<?php echo base_url("secure_admin_panel_car_model_delete/$item[id]")?>" class="btn btn-danger c_delete_portfolio_category_redirect">Sil</button>
                    </center>
                </td>
            </tr>
        <?php }?>

        </tbody>
    </table>
<?php }else{?>
    <a href="<?php echo base_url("secure_admin_panel_car_model_add/$brand_id")?>" class="btn btn-success">Əlavə Et</a>
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
