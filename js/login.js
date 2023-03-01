$(document).ready(function() {
    $('form').submit(function(event) {
      event.preventDefault(); // prevent default form submission

      // get form data
      var formData = {
        email: $('input[name=email]').val(),
        password: $('input[name=password]').val()
      };

      // submit form data with AJAX
      $.ajax({
        type: 'POST',
        url: 'php/login.php',
        data: formData,
        dataType: 'json',
        encode: true
      })
      .done(function(data) {
        if (data.success) {
          // redirect to dashboard page if login is successful
          window.location.href = 'profile.php';
        } else {
          // display error message if login is unsuccessful
          alert(data.message);
        }
      });
    });
  });