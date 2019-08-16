<?php if (!empty($gallery)){?>
<!--                            portfoliolarin listi-->
<table class="table no-more-tables table-bordered">

    <!--                                tablenin basliqi-->
    <thead>
    <th style="width:1%; vertical-align: middle;">

        <div class="checkbox check-default c_float_left ">
            <input id="checkbox" type="checkbox" value="1" class="c_check_all" data-cond="true">
            <label for="checkbox"></label>
        </div>

    </th>
    <th style="width:22%; vertical-align: middle">Şəklin Adı</th>
    <th style="width:7%; vertical-align: middle">Şəklin Görünüşü</th>
    <th style="width:3%; vertical-align: middle">Profil Şəkli</th>
    <th style="width:6%; vertical-align: middle">Yüklənmə Tarixi</th>
    <th style="width:8%; vertical-align: middle">
        Əməliyatlar

        <button data-url="<?php echo base_url("utech_admin_panel_portfolio_gallery_delete_group/$portfolio[id]")?>"
                data-url2="<?php echo base_url("utech_admin_panel_portfolio_gallery_delete_all/$portfolio[id]")?>"
                class="btn btn-danger c_all_delete_portfolio"
                title="Seçilən elementləri sil">
            <i class="fa fa-trash"></i>
            Toplu Sil
        </button>

    </th>
    </thead>
    <!--                                tablenin basliqi-->


    <!--                                tablenin bodysi-->
    <tbody>
    <?php foreach ($gallery as $item) {?>
        <tr class="change_color">
            <td class="v-align-middle c_vertical_align_middle">
                <div class="checkbox check-default">
                    <input class="isChoosed_portfolio" id="<?php echo $item["id"]?>" type="checkbox" value="1" data-cond = "true">
                    <label for="<?php echo $item["id"]?>"></label>
                </div>
            </td>
            <td class="v-align-middle c_vertical_align_middle">
                <?php echo $item["name"]?>
            </td>
            <td class="v-align-middle c_vertical_align_middle text-center">
                <img width="120px" height="100px" src="<?php echo base_url("uploads/portfolio/$item[name]")?>" alt="Şəkil Yüklənmədi">
            </td>
            <td class="v-align-middle c_vertical_align_middle text-center">

                <input type="checkbox"
                       class="js-switch isPrimary"
                       data-switchery
                        data-url="<?php echo base_url("utech_admin_panel_portfolio_gallery_primary/$portfolio[id]/$item[id]")?>"
                        <?php if ($item["is_primary"] == 1){
                            echo "checked";
                        } ?>
                />

            </td>
            <td class="c_vertical_align_middle text-center">
                <?php echo $item["upload_date"]?>
            </td>
            <td class="v-align-middle c_vertical_align_middle text-center">
                <button data-url="<?php echo base_url("utech_admin_panel_portfolio_gallery_delete/$portfolio[id]/$item[id]")?>" class="btn btn-danger c_delete_portfolio_category">
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
    <div class="alert alert-info text-center">
        <h3>Məlumat daxil edilməmişdir</h3>
    </div>
<?php }?>


<script>
    //silme islemine alert verme
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

                        // multiple switchler ucun kod
                        isPrimary = {
                            color             : '#8307bd',
                            className         : 'switchery'

                        };

                        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

                        elems.forEach(function(html) {

                            var switchery = new Switchery(html, isPrimary);


                        });lems = Array.prototype.slice.call(document.querySelectorAll('.js-switch-dfcolor'));

                    })
                }
            });
    });

    //switchlernen birden cox elementi secmek
    var idler = [];
    $(".isChoosed_portfolio").change(function () {

        var $data_portfolio = $(this).prop("checked");

        if ($data_portfolio == true){
            idler.push($(this).attr('id'));
        }else{
            var removeItem = $(this).attr('id');

            idler = jQuery.grep(idler, function(value) {
                return value != removeItem;
            });
        }

    });

    //butun elementleri secmek
    var idArray = [];
    var counter = 0;
    $('.c_check_all').click(function () {

        if (counter % 2 === 0){
            $(".isChoosed_portfolio").prop("checked" ,true);


            $('.isChoosed_portfolio').each(function () {
                idArray.push(this.id);
            });

            $(".isChoosed_portfolio").click(function () {

                var isCheck = $(this).prop("checked");

                if (isCheck == false){
                    var removeItem = $(this).attr("id");

                    idArray = jQuery.grep(idArray, function(value) {
                        return value != removeItem;
                    });
                }else{
                    idArray.push($(this).attr("id"))
                }

            });



        } else{
            $(".isChoosed_portfolio").prop("checked" ,false);
        }
        counter++;
    });


    //portfoliodaki birden cox elementi silmek
    $('.c_all_delete_portfolio').click(function () {

        $data_url_2 = $(this).data("url");
        $data_url = $(this).data("url2");

        swal({
            title: "Əminsiniz?",
            text: "Silinən məlumatlar geri qaytarılmayacaq!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {

                    if (counter % 2 === 0){

                        $.post($data_url_2, {data: idler}, function (response) {

                            $('.c_resfresh_portfolio_category').html(response);

                            // multiple switchler ucun kod
                            isPrimary = {
                                color             : '#8307bd',
                                className         : 'switchery'

                            };

                            var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

                            elems.forEach(function(html) {

                                var switchery = new Switchery(html, isPrimary);


                            });lems = Array.prototype.slice.call(document.querySelectorAll('.js-switch-dfcolor'));


                        })
                    }else{

                        $.post($data_url, {data: idArray}, function (response) {

                            $('.c_resfresh_portfolio_category').html(response);

                            // multiple switchler ucun kod
                            isPrimary = {
                                color             : '#8307bd',
                                className         : 'switchery'

                            };

                            var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

                            elems.forEach(function(html) {

                                var switchery = new Switchery(html, isPrimary);


                            });lems = Array.prototype.slice.call(document.querySelectorAll('.js-switch-dfcolor'));


                        })

                    }

                }
            });
        event.preventDefault();
    });



    //tablede switche basanda rowunn renginin deyismesi
    $(".isChoosed_portfolio").click(function () {

        if ($(this).data("cond") == true){
            $(this)
                .closest( ".change_color" )
                .css("background-color", "#FFFF66");
            $(this).data("cond", false);
        } else{

            $(this)
                .closest( ".change_color" )
                .css("background-color", "white");
            $(this).data("cond", true);
        }

    });


    //tablede switche basanda butun rowlarin renginin deyismesi
    $(".c_check_all").click(function () {

        if ($(this).data("cond") == true){
            $(".change_color").css("background-color", "#FFFF66");
            $(this).data("cond", false);

            $(".isChoosed_portfolio").data("cond", false);


        } else{
            $(".change_color").css("background-color", "white");
            $(this).data("cond", true);

            $(".isChoosed_portfolio").data("cond", true);

        }

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