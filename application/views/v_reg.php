<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Sign Out</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="<?= base_url('auth/registration'); ?>" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Your name" name="name" type="text">
                                    <?= form_error('name', '<small class="text-danger pl-3 mt-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="text">
                                    <?= form_error('email', '<small class="text-danger pl-3 mt-3">', '</small>'); ?>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Password" name="password1" type="password">
                                            <?= form_error('password1', '<small class="text-danger pl-3 mt-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Repeat Password" name="password2" type="password">
                                        </div>
                                    </div>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button href="" class="btn btn-lg btn-success btn-block">Sign Out</button>
                            </fieldset>
                            <hr>
                            <div class="text-center"><a href="<?= base_url('auth'); ?>">Already Account.? Login Here</a></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>