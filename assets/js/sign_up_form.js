$(document).ready(function() {

    // process the form
    $('form').submit(function(event) {

        // get the form data
        var formData = {
            'username' : $('input[name=username]').val(),
            'email' : $('input[name=email]').val(),
            'password' : $('input[name=password]').val()
        };

        // process the form
        $.ajax({
            type : 'POST', 
            url : './php/process.php', 
            data : formData, // our data object
            dataType : 'json', 
            encode : true
        })
            // using the done promise callback
            .done(function(data) {

                console.log(data);
                
                // here we will handle errors and validation messages
            });

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });

});