<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <?= $this->session->flashdata('msgi');  ?>
                        <form role="form" action="<?= base_url('auth'); ?>" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email">
                                    <?= form_error('email', '<small class="text-danger pl-3 mt-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                            <hr>
                            <!-- <div class="text-center"><a href="<?= base_url('auth/registration'); ?>">Not Ready Account?, Registered Here!</a></div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>