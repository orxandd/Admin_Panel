<?php $this->load->view("$this->parent_folder/$this->includes_for_whole/head");?>

<?php $this->load->view("$this->parent_folder/$this->includes_for_whole/menu");?>

    <div class="page-content">


        <div class="content">
            <h1 class="c_title"><?php echo $model["name_az"]?> Modelinin Yenilənməsi</h1>
            <div class="grid simple ">
                <div class="row" style="margin-top: 50px">
                    <div class="grid-body no-border c_grid_padding">
                        <div class="row">

                            <form action="<?php echo base_url("secure_admin_panel_car_model_update_act/$model[brand_id]/$model[id]")?>" method="post" enctype="multipart/form-data">

                                <!--                                3 dilin linki-->
                                <ul class="nav nav-pills">
                                    <li class="active"><a data-toggle="pill" href="#az">Azərbaycan</a></li>
                                    <li><a data-toggle="pill" href="#en">İngilis</a></li>
                                    <li><a data-toggle="pill" href="#ru">Rus</a></li>
                                </ul>
                                <!--                                3 dilin linki-->


                                <!--                                3 dilde olan divler-->
                                <div class="tab-content">

                                    <!--                                        Azerbaycanca olan hisse-->
                                    <div id="az" class="tab-pane fade in active">
                                        <label for="name">Brendin Adı</label>
                                        <input id="name" type="text" class="form-control" name="category_name_az" value="<?php echo $model["name_az"]?>">
                                        <br>
                                    </div>
                                    <!--                                        Azerbaycanca olan hisse-->



                                    <!--                                        Ingilisce olan hisse-->
                                    <div id="en" class="tab-pane fade">
                                        <label for="name">Name of Brand</label>
                                        <input id="name" type="text" class="form-control" name="category_name_en" value="<?php echo $model["name_en"]?>">
                                        <br>
                                    </div>
                                    <!--                                        Ingilisce olan hisse-->




                                    <!--                                        Rusca olan hisse-->
                                    <div id="ru" class="tab-pane fade">
                                        <label for="name">Наименование Бренда</label>
                                        <input id="name" type="text" class="form-control" name="category_name_ru" value="<?php echo $model["name_ru"]?>">
                                        <br>
                                    </div>
                                    <!--                                        Rusca olan hisse-->

                                </div>
                                <!--                                3 dilde olan divler-->

                                <center>
                                    <img style="margin-left: 18px; object-fit: contain;" width="600px" height="300px" src="<?php echo base_url("uploads/car_model/$model[img]")?>" alt="Şəkil Yüklənmədi">
                                </center>
                                <br><br>

                                <label style="margin-left: 18px">Brendin Klası</label>
                                <select style="margin-left: 18px" name="class_category" class="">

                                    <option value="
                                        <?php
                                        if ($model_class["id"] != null){
                                            echo $model_class["id"];
                                        }else{
                                            echo 0;
                                        }
                                    ?>
                                    ">
                                        <?php
                                            if ($model_class["id"] != null){
                                                echo $model_class["name_az"];
                                            }else{
                                                echo "Heç biri";
                                            }
                                        ?>
                                    </option>

                                    <?php if ($model_class["id"] != null){?>
                                        <option value="0">Heç biri</option>
                                    <?php }?>

                                    <?php foreach ($classes as $item) { ?>
                                        <?php if ($model_class["name_az"] != $item["name_az"]){ ?>
                                            <option value="<?php echo $item["id"]?>">
                                                <?php echo $item["name_az"]?>
                                            </option>
                                        <?php }?>
                                    <?php }?>

                                </select>
                                <br><br><br>


                                <input name="file" style="margin-left: 18px; line-height: 0px!important;" type="file" class="form-control">
                                <br>
                                <button type="submit" class="btn btn-primary c_marginleft_20px">Əlavə Et</button>



                            </form>

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
        iziToast.warning({
            icon: 'icon-person',
            message: '<?php echo $this->session->flashdata("alert")?>',
            position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
            // progressBarColor: 'rgb(0, 255, 184)',
        });
    </script>
<?php }?>
