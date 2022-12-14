<?php
/**
 * Template Name: Custom Login Template
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */



wp_head();
?>

<section class="my_login_form">

    <div class="row justify-content-center h-100" style="width: 500px;margin: auto">
        <div class="card-wrapper" style="width: 360px; position: absolute; top: 20%;">
            <div class="text-center mb-3">
                <img src="http://sidora_plugins.test/wp-content/plugins/sidora-login/assets/images/logo.svg" alt="logo"
                     width="80">
            </div>
            <div class="card fat">
                <div class="card-body">
                    <h4 class="card-title">Login</h4>
                    <form method="POST" id="wp_login_form" action="javascript:void(0)">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input id="username" type="text" class="form-control" name="user_login" value="" required
                                   autofocus>
                            <?php
                            if ($error == true): ?>
                                <div class="form-invalid text-danger font-size-xs">
                                    Username is invalid
                                </div>
                            <?php
                            endif; ?>
                        </div>

                        <div class="form-group">
                            <label for="password">Password
                                <!--                                    <a href="forgot.html" class="float-right">-->
                                <!--Forgot Password?-->
                                <!--                                    </a>-->
                            </label>
                            <input id="password" type="password" class="form-control" name="user_password" required data-eye>
                            <?php
                            if ($error == true): ?>
                                <div class="form-invalid text-danger font-size-xs">
                                    Password is invalid
                                </div>
                            <?php
                            endif; ?>
                        </div>

                        <div class="form-group">
                            <div class="custom-checkbox custom-control">
                                <input type="checkbox" name="remember" id="remember" class="custom-control-input">
                                <label for="remember" class="custom-control-label">Remember Me</label>
                            </div>
                        </div>

                        <div class="form-group m-0">
                            <button type="submit" name="btn_submit" id="btn_submit" class="btn btn-primary btn-block">
                                Login
                            </button>
                        </div>
                        <!--                            <div class="mt-4 text-center">-->
                        <!--Don't have an account? <a href="register.html">Create One</a>-->
                        <!--                            </div>-->
                    </form>

                </div>
            </div>
            <div class="footer">
                <!--                    Copyright &copy; 2017 &mdash; Your Company-->
            </div>
        </div>
    </div>
</section>

<?php
wp_footer();


?>


