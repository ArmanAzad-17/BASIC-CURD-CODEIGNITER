

<body>
    <div class="wrapper">
        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-offset-2 col-lg-offset-2 col-lg-5 col-md-6 col-xs-9 col-xs-offset-2 col-sm-6 col-sm-offset-3">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">User Loign</h4>
                                </div>
                                <div class="card-content">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Email address</label>
                                                    <input type="email" name="userEmail" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Password</label>
                                                    <input type="password" name="userPassword" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">SIGN IN</button>
                                        <a href="<?php echo site_url('login/signup');?>" class="btn btn-primary pull-right">Register</a>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>