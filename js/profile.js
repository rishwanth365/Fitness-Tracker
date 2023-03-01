$(document).ready(function(){
    $('form').submit(function(e){
      e.preventDefault();
      var form_data = $(this).serialize();
      $.ajax({
        type: "POST",
        url: "php/profile.php",
        data: form_data,
        dataType: "json",
        success: function(data){
          if(data.status == 'success'){
            alert("Profile updated successfully!");
          } else {
            alert(data.message);
          }
        },
        error: function(){
          alert("Error occurred while updating profile.");
        }
      });
    });
  });
  