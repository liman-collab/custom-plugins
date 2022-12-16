<?php
///**
// * Template Name: Sidora Custom Password Template
// * Template Post Type: page
// *
// */
//
//
//
//wp_head();
//?>
<!---->
<!---->
<!--<head>-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--</head>-->
<!--<section class="my_login_form">-->
<!---->
<!--    <div class="d-flex justify-content-center h-100 align-items-center">-->
<!--        <div class="card-wrapper">-->
<!--            <div class="text-center mb-3">-->
<!--                <img src="http://sidora_plugins.test/wp-content/plugins/sidora-login/assets/images/logo.svg" alt="logo"-->
<!--                     width="80">-->
<!--            </div>-->
<!--            <div class="card" style="width: 350px">-->
<!--                <div class="card-body" >-->
<!---->
<!--<!--                    <form method="post">-->-->
<!--<!--                        <div class="form-group">-->-->
<!--<!--                            -->--><?php ////$user_login = isset( $_POST['user_login'] ) ? $_POST['user_login'] : ''; ?>
<!--<!--                            <input type="email" placeholder="Enter your email"   class="form-control" name="user_login" id="user_login" value="-->--><?php ////echo $user_login; ?><!--<!--" >-->-->
<!--<!--                        </div>-->-->
<!--<!--                        <div class="form-group m-0">-->-->
<!--<!--                            <input type="hidden" name="action" value="reset" />-->-->
<!--<!--                            <button type="submit" name="btn_reset" id="btn_reset" class="btn btn-primary btn-block">-->-->
<!--<!--                                Get New Password-->-->
<!--<!--                            </button>-->-->
<!--<!--                            <br>-->-->
<!--<!--                            -->--><?php //// $page = get_page_by_path( 'custom-login-template' ); ?>
<!--<!---->-->
<!--<!--                            <a href="-->--><?php ////echo get_permalink($page->ID)?><!--<!--" class="float-left">-->-->
<!--<!--                                Back to Login-->-->
<!--<!--                            </a>-->-->
<!--<!--                        </div>-->-->
<!--<!--                    </form>-->-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!---->
<!---->
<?php
//
//global $wpdb;
//
//$error = '';
//$success = '';
//$email = $user_login;
//
//// check if we're in reset form
//if( isset( $_POST['action'] ) && 'reset' == $_POST['action'] )
//{
//    $user_info = trim($_POST['user_login']);
//
//    $user_by_email = get_user_by( 'email', $user_info );
//    $user_by_username = get_user_by( 'login', $user_info );
//
//    if( !empty( $user_by_email ) || !empty( $user_by_username ) ) {
//        $valid_user = true;
//    } else {
//        $valid_user = false;
//    }
//
//    if( !$valid_user ) {
//        $error = 'There is no user registered with that username or email address.';
//    } else {
//
//        $random_password = wp_generate_password( 12, false );
//        $user = get_user_by( 'email', $email );
//
//        $update_user = wp_update_user( array (
//                                           'ID' => $user->ID,
//                                           'user_pass' => $random_password
//                                       )
//        );
//
//        // if  update user return true then lets send user an email containing the new password
//        if( $update_user ) {
//            $to = $email;
//            $subject = 'Your new password';
//            $sender = get_option('name');
//
//            $message = 'Your new password is: '.$random_password;
//
//            $headers[] = 'MIME-Version: 1.0' . "\r\n";
//            $headers[] = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//            $headers[] = "X-Mailer: PHP \r\n";
//            $headers[] = 'From: '.$sender.' < '.$email.'>' . "\r\n";
//
//            $mail = wp_mail( $to, $subject, $message, $headers );
//            if( $mail )
//                $success = 'Check your email address for you new password.';
//
//        } else {
//            $error = 'Oops something went wrong updaing your account.';
//        }
//
//    }
//
//    if( ! empty( $error ) )
//        echo '<div class="message"><p class="error"><strong>ERROR:</strong> '. $error .'</p></div>';
//
//    if( ! empty( $success ) )
//        echo '<div class="error_login"><p class="success">'. $success .'</p></div>';
//}
//
//
//
//
//wp_footer();
//
//
//?>
<!---->
<!---->
