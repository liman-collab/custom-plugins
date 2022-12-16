$(document).ready(function () {
    window.Listeners = {

        init: function () {
            this.loginForm();
        },

        loginForm: function () {

            $('#btn_submit').click( function () {

                // e.preventDefault();
                var formdata = $('#wp_login_form').serialize();
                formdata += "&action=custom_login&param=login_test"

                $.ajax({
                    url: "/wp-admin/admin-ajax.php",
                    type: "POST",
                    data: formdata,
                    success:function (res){
                        var data = $.parseJSON(res);
                        if(data.status === 1){
                            window.location =  window.location.origin
                        }else{
                         alert('Invalid users')

                        }

                    }
                })

            })

        },
    }
    Listeners.init();

})