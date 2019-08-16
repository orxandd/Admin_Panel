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
                                    <div class="">
                                        <h1 id="emailheading">
                                            <?php echo $message['name'] ?>
                                        </h1>
                                        <br>
                                        <div class="control">
                                            <div class="pull-left">
                                                <label class="inline"><span class="muted">&nbsp;&nbsp;from</span> <span class="bold small-text"><?php echo $message['mail'] ?></span></label>
                                                <br>
                                                <label class="inline"><span class="muted">&nbsp;&nbsp;phone:</span> <span class="bold small-text"><?php echo $message['phone'] ?></span></label>
                                            </div>
                                            <div class="pull-right">
                                                <span class="muted small-text"> <?php echo $message['date'] ?></span>
                                            </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="email-body">
                                            <p>
                                                <?php echo $message['message'] ?>
                                            </p>
                                        </div>
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
        <div class="clearfix">
        </div>

    </div>






<?php $this->load->view("backend/includes_for_whole/footer");?>