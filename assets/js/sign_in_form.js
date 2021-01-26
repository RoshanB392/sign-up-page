$(document).ready( function() {

    $("#btn-signin").click(function(){
        
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
        
        // get the form data
        var formData = {
            'email': email, 
            'password': password
        };

        if(email.length != "" && password.length != "") {
            console.log(formData);
            
            $.ajax({
                type : 'POST',
                url  : './assets/php/user_login.php',
                data : formData,
                dataType : 'json',
                encode: true
            })
            .done(function(feedback) {
                console.log(feedback);
                if(feedback.status === "success"){    
                    window.location = './assets/php/user_profile.php';
                }
            })
            .fail(function(feedback) {
                console.log(feedback);
                if(feedback.status === "passwordError"){
                    $(".password").addClass("is-invalid");
                    $(".passwordError").html(feedback.message);
                    $(".email").removeClass("is-invalid");
                    $(".emailError").html("");
                }
                if(feedback.status === "emailError"){
                    $(".password").removeClass("is-invalid");
                    $(".passwordError").html("");
                    $(".email").addClass("is-invalid");
                    $(".emailError").html(feedback.message);
                }
            })
        }

    })

})
