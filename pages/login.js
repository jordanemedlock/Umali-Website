
$(function() {
  $.getScript("jquery.validate.min.js", function(){
    $("#signup-form").validate({
      rules: {
        username: "required",
        email: {
          required: true,
          email: true
        },
        password: {
          required: true,
          minlength: 6
        },
        confirm: {
          required: true,
          minlength: 6,
          equalTo: "#spassword"
        }
      },
      messages: {
        username: "Please specify your username",
        email: "Please enter a valid email",
        password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 6 characters long"
        },
        confirm: {
          equalTo: "Passwords do not match"
        }
      }
    });
    $("#login-form").validate({
      rules: {
        username: "required",
        password: {
          required: true,
          minlength: 6
        }
      },
      messages: {
        username: "Please specify your username",
        password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 6 characters long"
        }
      }
    });
  });
});