<header class="header">
        <nav id="nav" class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container relative-nav-container"><a class="toggle-button visible-xs-block" data-toggle="collapse" data-target="#navbar-collapse"><i class="fa fa-navicon"></i></a>
                <a class="navbar-brand scroll" href="/"><img class="normal-logo hidden-xs" src="/theme/home/assets/images/logo.png" alt="logo" /><img class="inverse-logo hidden-xs" src="/theme/home/assets/images/logo-w.png" alt="logo" /><img class="visible-xs-block" src="/theme/home/assets/images/logo-sign2.png" width="40" height="44" alt="logo" /></a>
                <ul class="nav navbar-nav navbar-right nav-icons wrap-user-control">
                    <li><a id="search-open" href="#fakelink"><i class="fa fa-search"></i></a></li>
                    <li class="open-signup"><a href="#fakelink"><i class="fa fa-user"></i></a>
                        


                        <div id="loginPanel" class="wrap-login-signup">
                            <div role="tabpanel">
                                <ul class="nav nav-tabs-alt nav-tabs-one" role="tablist">
                                    <li role="presentation"><a href="#signup" aria-controls="signup" role="tab" data-toggle="tab">Sign Up</a></li>
                                    <li role="presentation"  class="active"><a href="#login" aria-controls="login" role="tab" data-toggle="tab">Log In</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane  text-center" id="signup">
                                        <div class="signup-content">
                                            <h5>Register Customer</h5><a href="#" class="signup-facebook"><i class="fa fa-facebook-square">&nbsp;&nbsp;</i>Sign in with Facebook</a><span class="or-sep">or</span>
                                            <form class="form">
                                                <div class="form-group">
                                                    <input placeholder="Enter your e-mail" type="text" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <input type="submit" class="submit-button form-control" value="Create new account" />
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane active" id="login">
                                        <div class="signup-content">
                                            <h5>Your Account</h5>
                                            <form class="form" action="/auth/login/homepage" method="post">
                                                <div class="form-group">
                                                    <input placeholder="Login" type="text" class="form-control" id="txtEmail" name="email">
                                                </div>
                                                <div class="form-group">
                                                    <input placeholder="Password" type="password" class="form-control" id="txtPwd" name="password">
                                                </div>
                                                <div class="form-group">
                                                    <input type="submit" class="submit-button form-control" value="Login" id="btnLogin" />
                                                </div>
                                            </form><span class="forgot">Forgot <a href="#">password or login</a>?</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="navbar-collapse collapse floated" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-with-inside clearfix navbar-right with-border">
                        <li class=" "><a href="/"> <i class="fa fa-home"></i> </a></li>
                        <li class=" "><a href="/friend"> Friends </a></li>
                        <li class=" "><a href="/blog"> Articles </a></li>
                    </ul>
                </div>
            </div>
            <div class="navbar-search">
                <div class="container">
                    <form role="search">
                        <div class="input-group">
                            <input type="text" placeholder="Type your search..." class="form-control" autocomplete="off"><span class="input-group-btn"><button type="reset" class="btn search-close" id="search-close"><i class="fa fa-close"></i></button></span></div>
                    </form>
                </div>
            </div>
        </nav>
    </header>