<?php
/**
 * Template Name: Sidora Custom Password Template
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
                <div class="card-body" >

                    <form method="POST" id="wp_login_form" action="javascript:void(0)">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control" name="email" value="" required
                                   autofocus>

                        </div>

                        <div class="form-group m-0">
                            <button type="submit" name="btn_submit" id="btn_submit" class="btn btn-primary btn-block">
                                Get New Password
                            </button>
                            <br>
                            <?php   $password = get_page_by_path( 'custom-login-template' ); ?>

                            <a href="<?php echo get_permalink($password->ID)?>" class="float-left">
                                Back to Login
                            </a>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</section>

<?php
wp_footer();


?>


