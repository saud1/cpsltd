$(function() {
  // Get the form
  var form = $('#comments_form');

  //  if the form is found...
  if (form) {

    // input error function for the error messages
    var addError = function (field, msg) {
        field.addClass('error'); // Add error class to field
        var error = field.parent().find('span') || $('<span>', {'class': 'error'}); // add error message if not already placed
        error.html(msg); // error text msg
        field.after(error); // Insert error message after field
    };

    // detach error function used to delete any error messages and remove the error class
    var removeError = function (field) {
        field.removeClass('error'); // Remove error class from form fields
        var error = field.parent().find('span'); // find any existing error messages

        // destroy if error message
        if (error) {
            error.remove();
        }
    };

    //  insert submit form event
    form.on('submit', function (e) {


        // Set the default status
        var isValid = true;

        // Test name length
        var name = $("#fullname");
        if (name.val().length === 0) {
            isValid = false;
            addError(name, nameError);
        } else {
            removeError(name);
        }

        // check email length
        var email = $("#email");
        var emailVal = email.val();
        if (emailVal.length === 0) {
            isValid = false;
            addError(email, emailError);
        // check email validity
        } else if (!/^([a-zA-Z0-9\+_\-]+)(\.[a-zA-Z0-9\+_\-]+)*@([a-zA-Z0-9\-]+\.)+[a-zA-Z]{2,6}$/.test(emailVal)) {
            isValid = false;
            addError(email, emailError);
        } else {
            removeError(email);
        }

        // check comment length
        var comment = $("#comment");
        console.log(comment.val())
        if (comment.val().length === 0) {
            isValid = false;
            addError(comment, commentError);
        } else {
            removeError(comment);
        }

        // If form invalid then stop event happening
        if (!isValid) {
            e.preventDefault();
        }
    });
  }   
});
