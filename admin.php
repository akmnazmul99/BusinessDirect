<?php include './header.php'; ?>
<style type="text/css">
    .msg-panel-box{
        display: none;
    }
</style>
<div id="header" class="container-fluid">
    <div class="container">
        <div class="row margin-top-bottom-10px">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <img src="images/logo.png" class="img-responsive" alt="Logo" >
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <ul class="phone-number-ul">
                    <li><h1>01612341234</h1></li>
                    <li><img class="img-responsive phone" src="images/phone.png" alt="phone"/></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="wrapper">
    <div id="admin-login" class="container">
        <div class="row form-group">
            <div class="col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
                <div class="login-layout margin-top-100px">
                    <div class="login-form-header-pagelet">
                        <div class="row form-group">
                            <div class="col-md-12">
                                <h1 class="text-center">Login</h1>
                            </div>
                        </div>
                    </div>
                    <div class="login-form-body-pagelet">
                        <div class="row form-group  margin-top-60px">
                            <div class="col-md-12">
                                <form>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                            <input type="text" class="form-control" id="username" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-briefcase"></i></div>
                                            <input type="password" class="form-control" id="password" placeholder="Password">
                                        </div>
                                    </div>
                                    <a id="login-submit" href="admin-contant.php" class="anchor-holder custom-button margin-top-20px pull-right">Submit</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="push"></div>
</div>
<?php include './footer.php'; ?>
