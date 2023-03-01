$(document).ready(function() {
    $('form').submit(function(event) {
        // Prevent the form from submitting normally
        event.preventDefault();

        // Get the form data
        var formData = {
            'email' : $('input[name=email]').val(),
            'password' : $('input[name=password]').val()
        };

        // Send the data to the server using AJAX
        $.ajax({
            type : 'POST',
            url : 'php/register.php',
            data : formData,
            dataType : 'json',
            encode : true
        })
        .done(function(data) {
            // If the login was successful, redirect the user to the dashboard
            if (data.success) {
                window.location.replace('login.php');
            } else {
                // If the login was unsuccessful, display an error message
                alert('Invalid email or password');
            }
        });
    });
});