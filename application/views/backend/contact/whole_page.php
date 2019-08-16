<?php $this->load->view("backend/includes_for_whole/head");?>

<?php $this->load->view("backend/includes_for_whole/menu");?>

        <div class="page-content">

            <div class="clearfix">
            </div>
            <div class="content">
                <div class="page-title" style="display:none">
                    <a href="#" id="btn-back"><i class="icon-custom-left"></i></a>
                    <h3>
                        Back- <span class="semi-bold">Inbox</span>
                    </h3>
                </div>
                <div class="row" id="inbox-wrapper">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="grid simple">
                                    <div class="grid-body no-border email-body">
                                        <br>
                                        <div class="row-fluid">
                                            <div class="row-fluid dataTables_wrapper">
                                                <h2 class=" inline">
                                                    Mesajlar
                                                </h2>
                                                <div class="clearfix">
                                                </div>
                                            </div>
                                            <div id="email-list">
                                                <table class="table table-striped table-fixed-layout table-hover" id="emails">
                                                    <thead>
                                                    <tr>
                                                        <th class="small-cell">
                                                        </th>
                                                        <th class="small-cell">
                                                        </th>
                                                        <th class="medium-cell">
                                                        </th>
                                                        <th>
                                                        </th>
                                                        <th class="medium-cell">
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <?php if ($this->session->flashdata('sccs')) {?>
                                                    <div class="alert alert-success">
                                                        <button class="close" data-dismiss="alert"></button>
                                                        Uğurlu:&nbsp; <?php echo $this->session->flashdata('sccs')?>
                                                    </div>
                                                     <?php }?>
                                                    <tbody>
                                                    <?php if (!empty($messages)) {?>
                                                    <?php foreach ($messages as $message) { ?>
                                                        <tr>
                                                                <td class="small-cell v-align-middle">
                                                                    <div class="checkbox check-success">
                                                                        <a  href="<?php echo base_url("utech_admin_panel_message_delete/").$message['id']?>"><i class="fa fa-trash-o"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td class="small-cell v-align-middle">

                                                                </td>
                                                                <td class="clickable v-align-middle">
                                                                    <?php echo $message["name"]?>
                                                                </td>

                                                                <td class="clickable v-align-middle">
                                                                    <a href="<?php echo base_url("utech_admin_panel_message_single/").$message['id']?>">
                                                                    <?php echo substr($message['message'], 0,60)?>
                                                                    </a>
                                                                </td>

                                                            <td class="clickable v-align-middle">
                                                                    <span class="muted"> <?php echo $message["date"]?></span>
                                                                </td>
                                                        </tr>
                                                        <?php } ?>

                                                    <?php }else{ ?>
                                                        <p style="text-align:center;     font-size: 25px;  margin-top: 10px; " >Mesaj yoxdur</p>
                                                    <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix">
                </div>
            </div>
        </div>


<?php $this->load->view("backend/includes_for_whole/footer");?>