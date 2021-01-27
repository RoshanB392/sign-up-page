$(document).ready( function() {

    $('#btn-edit-profile').click(function (event){
        
        // Stop form from submitting normally
        event.preventDefault();

        window.location = "../php/user_edit.php";
    });

    $('#btn-update-profile').click(function (event){
        
        // Stop form from submitting normally
        event.preventDefault();
        
        const firstname = $('#firstname').val();
        const lastname = $('#lastname').val();
        const email = $('#email').val();
        const password = $('#password').val();
        const profession = $('#profession').val();
        const bio = $('#bio').val();
        const dob = $('#dob').val();
        const phone = $('#phone').val();
        const uid = $('#uid').val();

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


        // get the form data
        var formData = {
            'firstname': firstname,
            'lastname': lastname,
            'email': email,
            'password': password,
            'profession' : profession,
            'bio' : bio,
            'dob' : dob,
            'phone' : phone,
            'uid': uid
        };
        
    if(formData['.firstname'] !== '' || formData['.lastname'] !== '' || formData['.email'] !== '') {
        
        // process the form
        $.ajax({
            type: 'POST',
            url: 'update_profile.php',
            data: formData,
            dataType: 'json',               
            encode: true
        })
        .done(function(feedback){
            if(feedback.status === "success"){    
                window.location = 'user_profile.php';
            }
        })
        .fail(function(feedback){
            console.log(feedback);
        });

    }

});
});
