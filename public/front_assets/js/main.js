$(document).ready(function() {
    $("#selSize").change(function() {
        var idSize = $(this).val();
        if (idSize == "") {
            return false;
        }
        $.ajax({
            type: "get",
            url: "/get-product-price",
            data: { idSize: idSize },
            success: function(resp) {
                // alert(resp);
                var arr = resp.split("#");
                $("#getPrice").html("Item Price : €uro " + arr[0]);
                $("#price").val(arr[0]);
            },
            error: function() {
                alert("error");
            }
        });
    });

    // Password strength
    $("#Password").passtrength({
        minChars: 4,
        passwordToggle: true,
        eyeImg: "front_assets/images/eye.svg", // toggle icon
        tooltip: true
    });
});
