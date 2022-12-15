<?php
/**
 * Template Name: Sidora Custom Login Template
 * Template Post Type: page
 *
 */



wp_head();
?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<section class="my_login_form">

    <div class="d-flex justify-content-center h-100 align-items-center">
        <div class="card-wrapper">
            <div class="text-center mb-3">
                <img src="http://sidora_plugins.test/wp-content/plugins/sidora-login/assets/images/logo.svg" alt="logo"
                     width="80">
            </div>
            <div class="card" style="width: 350px">
                <div class="card-body">

                    <form method="POST" id="wp_login_form" action="javascript:void(0)">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input id="username" type="text" class="form-control" name="user_login" value="" required
                                   autofocus>

                            <!--                                <div class="form-invalid text-danger font-size-xs user-valid-form">-->
                            <!--                                    Username is invalid-->
                            <!--                                </div>-->

                        </div>

                        <div class="form-group">
                            <label for="password">Password

                            </label>
                            <input id="password" type="password" class="form-control" name="user_password" required data-eye>

                            <!--                                <div class="form-invalid text-danger font-size-xs password-valid-form">-->
                            <!--                                    Password is invalid-->
                            <!--                                </div>-->

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
                            <br>

                         <?php   $password = get_page_by_path( 'custom-password-template' ); ?>

                            <a href="<?php echo get_permalink($password->ID)?>" class="float-left">
                                Forgot Password?
                            </a>
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


