$(document).ready( function() {

        // process the form
        $('#sign_up_form').submit(function (event) {

            
            // // Stop form from submitting normally
            // event.preventDefault();

            const firstname = $('#firstname').val();
            const lastname = $('#lastname').val();
            const email = $('#email').val();
            const password = $('#password').val();
        
            if(firstname.length == ""){
                $(".firstname").addClass("is-invalid");
            } else {
                $(".firstname").removeClass("is-invalid");
            }
            
            if(lastname.length == ""){
                $(".lastname").addClass("is-invalid");
            } else {
                $(".lastname").removeClass("is-invalid");
            }

            if(email.length == ""){
                $(".email").addClass("is-invalid");
            } else {
                $(".email").removeClass("is-invalid");
            }
    
            if(password.length == ""){
                $(".password").addClass("is-invalid");
            } else {
                $(".password").removeClass("is-invalid");
            }

            // get the form data
            var formData = {
                'firstname': firstname,
                'lastname': lastname,
                'email': email,
                'password': password
            };

            if(formData['firstname'] != '' || formData['lastname'] != '' || formData['email'] != '' || formData['password'] != '' ) {

                // process the form
                $.ajax({
                    type: 'POST',
                    url: './assets/php/sign_up.php',
                    data: formData,
                    dataType: 'json',
                    encode: true,
                    success : function(feedback){
                        if(feedback.status === "error"){
                            $(".email").addClass("is-invalid");
                            $(".emailError").html(feedback.message);
                        } else if(feedback.status === "success"){
                            window.location = "./assets/html/signin.html";
                        }
                    }
                })
            }
        })



        
        // User login


            $("#btn-signin").sumbit(function(){
                
                const email = $("#email").val();
                const password = $("#password").val();
                
                if(email.length == ""){
                    $(".email").addClass("is-invalid");
                } else {
                    $(".email").removeClass("is-invalid");
                }

                if(password.length == ""){
                    $(".password").addClass("is-invalid");
                } else {
                    $(".password").removeClass("is-invalid");
                }

                if(email.length != "" && password.length != "") {
                    $.ajax({
                        type : 'POST',
                        url  : './assets/php/user_login.php',
                        data : {'email': email, 'password': password},
                        dataType : 'json',
                        success : function(feedback){
                            if(feedback.status === "success"){
                                window.location = "./assets/html/user_profile.php";
                            } else if(feedback.status === "passwordError"){
                                $(".password").addClass("is-invalid");
                                $(".passwordError").html(feedback.message);
                                $(".email").removeClass("is-invalid");
                                $(".emailError").html("");
                            } else if(feedback.status === "emailError"){
                                $(".password").removeClass("is-invalid");
                                $(".passwordError").html("");
                                $(".email").addClass("is-invalid");
                                $(".emailError").html(feedback.message);
                            }
                        }
                    })
                }
            })

        })


        });

    });