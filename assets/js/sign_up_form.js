$(document).ready( function() {

    // process the form
    $('#btn-signup').click(function (event) {

        
        // Stop form from submitting normally
        event.preventDefault();

        const firstname = $('#firstname').val();
        const lastname = $('#lastname').val();
        const email = $('#email').val();
        const password = $('#password').val();
    
        // form validation
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
                encode: true
            })
            .done(function(feedback){
                if(feedback.status === "success"){    
                    window.location = './assets/php/sign_in.php';
                }
            })
            .fail(function(feedback){
                if(feedback.status === "error"){
                    $(".email").addClass("is-invalid");
                    $(".emailError").html(feedback.message);
                }
            })
        }

    })

})


