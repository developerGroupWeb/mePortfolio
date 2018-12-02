$(function(){

    $('span').css('font-size', 14);
    var error_name    = false;
    var error_email   = false;
    var error_subject  = false;
    var error_message = false;

    $(document).on('keyup', '#name', function () {

        var idname = $('#name');
        var name   = idname.val();
        $(this).val(name.toUpperCase()).css('color', '#5c41f4');

        if(name == '')
        {
            $(this).next('.error').html('Enter your name').show();
            error_name = false;
        }else {

            $(this).next('.error').hide();
            error_name = true;
        }
    });

    $(document).on('keyup', '#email', function () {

        var idemail = $('#email');
        var email   = idemail.val();
        var filter  = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

        $(this).val(email.toUpperCase()).css('color', '#5c41f4');

        if(email == '')
        {
            $(this).next('.error').html('Enter your e-mail').show();
            error_email = false;

        }else if(!filter.test(email))
        {
            $(this).next('.error').html('Invalid e-mail').show();
            error_email = false;

        }else{

            $(this).next('.error').hide();
            error_email = true;
        }
    });


    $(document).on('keyup', '#subject', function () {

        var idsubject = $('#subject');
        var subject   = idsubject.val();
        $(this).val(subject.toUpperCase()).css('color', '#5c41f4');

        if(subject == '')
        {
            $(this).next('.error').html('Enter the subject of your message ').show();
            error_subject = false;
        }else {

            $(this).next('.error').hide();
            error_subject = true;
        }
    });


    $(document).on('keyup', '#message', function () {

        var idmessage = $('#message');
        var message   = idmessage.val();
        $(this).val(message.toUpperCase()).css('color', '#5c41f4');

        if(message == '')
        {
            $(this).css('border-color', 'red');
            error_message = false;
        }else {

            $(this).css('border-color', 'white');
            error_message = true;
        }
    });


    $(document).on('submit', '#submit', function (event) {

        event.preventDefault();

        if(error_name == false || error_email == false || error_subject == false || error_message == false)
        {
            $('#name').add('#email, #subject').next('.error').html('Field is required');
            $('#message').css('border-color', 'red');

            return false;
        }else{

            $.ajax({

                url: "submit.php",
                method: "POST",
                async: true,
                data: $(this).serialize(),
                success: function (data) {

                    if(data != '')
                    {
                        $('#error').html(data).show();
                        $('#success').hide()
                    }else {

                        $('#success').html('Your message has been sent successfully').show();
                        $('#name').add('#email, #subject, #message').val('');
                        $('#error').hide();
                        //$('body').delay(150000).load('index.php');

                    }

                }
            });

            return false;
        }

    });




});