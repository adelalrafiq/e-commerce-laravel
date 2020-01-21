$(document).ready(function () {
    $("#selSize").change(function () {
        var idSize = $(this).val();
        if (idSize == "") {
            return false;
        }
        $.ajax({
            type: "get",
            url: "/get-product-price",
            data: { idSize: idSize },
            success: function (resp) {
                // alert(resp);
                var arr = resp.split("#");
                $("#getPrice").html("Item Price : €uro " + arr[0]);
                $("#price").val(arr[0]);
            },
            error: function () {
                alert("error");
            }
        });
    });

    // Validate Register form on keyup and submit
    $('#registerForm').validate({
        rules: {
            username: {
                required: true,
                minlength: 2,
                accept: "[a-zA-Z]+"
            },
            password: {
                required: true,
                minlength: 6
            },
            repeatpassword: {
                required: true,
                equalTo: "#password"
            },
            email: {
                required: true,
                email: true,
                remote: "/check-email"
            }
        },
        messages: {
            username: {
                required: "Please enter your Username",
                minlength: "Your Username must be atleast 2 characters long",
                accept: "Your Username must contain letters only"
            },
            password: {
                required: "Please enter your Password",
                minlength: "Your password must be atleast 6 characters long"
            },
            repeatpassword: {
                required: "Please retype your Password",
                equalTo: "Please retype the same password"
            },
            email: {
                required: "Please enter your Email",
                email: "Please enter valid Email",
                remote: "Email already exists!"
            }
        }
    });

    // Password strength
    $("#myPassword").passtrength({
        minChars: 4,
        passwordToggle: true,
        eyeImg: "front_assets/images/eye.svg", // toggle icon
        tooltip: true
    });

});
