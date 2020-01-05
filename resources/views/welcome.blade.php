<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>

        <style media="screen">
            .error {
                color: red;
            }
        </style>

    </head>
    <body style="background-color: #d2e1ff;">
        <div id="app">
            <div class="flex-center position-ref full-height">
                <div class="container">
                    <div class="row">
                        <div class="offset-md-2 col-md-8 mt-5">
                            @include('includes.registration_form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(function() {
                $('.step-one-btn').on('click', function() {
                    var fname = $('#firstname').valid();
                    var lname = $('#lastname').valid();
                    var email = $('#email').valid();
                    if (fname && lname && email) {
                        $( ".step-two" ).trigger( "click" );
                    }
                });

                $('.step-two-btn').on('click', function() {
                    var phone = $('#phone').valid();
                    var gender = $('#gender').valid();
                    var day = $('#day').valid();
                    var month = $('#month').valid();
                    var year = $('#year').valid();

                    if (phone && gender && day && month && year) {
                        $( ".step-three" ).trigger( "click" );
                    }
                });

                $('#registration').validate({
                    rules: {
                        firstname: "required",
                        lastname: "required",
                        phone: "required",
                        gender: "required",
                        email: {
                            required: true,
                            email: true
                        },
                        day: {
                            required: true,
                            range: [1, 31]
                        },
                        month: {
                            required: true,
                            range: [1, 12]
                        },
                        year: {
                            required: true,
                            range: [1900, 2020]
                        },
                        phone: {
                            required: true,
                            validate_phone: true
                        }
                    },
                    messages: {
                        first_name: "Please enter your firstname",
                        last_name: "Please enter your lastname",
                        email: "Please enter a valid email address",
                        phone: "Please enter phone",
                        gender: "Please select gender",
                        day: "Please enter valid day of birth",
                        month: "Please enter valid month of birth",
                        year: "Please enter valid year of birth",
                        phone: "Please enter phone",
                    },
                    invalidHandler: function(event, validator) {
                        if (validator.numberOfInvalids() > 0) {
                            alert('Please fix the errors');
                        }
                    },
                    ignore: [],
                    submitHandler: function(form) {
                        $.ajax({
                            url: form.action,
                            type: form.method,
                            data: $(form).serialize(),
                            success: function(data) {
                                console.log(data);
                                $('.submit').prop('disabled', true);
                                alert('Success');
                            },
                            error:function(data){
                                console.log(data.responseText);
                                alert('Error has occurred!, please check console log')
                             }
                        });
                        return false;
                    }
                });
            });

            $.validator.addMethod("validate_phone", function(value) {
                var regex = /((07)|((\+|00)447)){1}[0-9]{9}\b/;
                var number = $('#phone').val();
                result = regex.test(number);
                return result;
            }, "Incorrect number");
        </script>
    </body>
</html>
