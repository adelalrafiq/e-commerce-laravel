$(document).ready(function () {
    $('#table_id').DataTable({
        "paging": false
    });

    //Update Product Status
    $('.ProductStatus').change(function () {
        var id = $(this).attr('rel');
        if ($(this).prop('checked') == true) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'post',
                url: '/admin/update-product-status',
                data: { status: '1', id: id },
                success: function (data) {
                    $("#message_success").show();
                    setTimeout(function () {
                        $("#message_success").fadeOut('slow');
                    }, 2000);
                },
                error: function () {
                    alert('Error');
                }
            });
        } else {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'post',
                url: '/admin/update-product-status',
                data: { status: '0', id: id },
                success: function (resp) {
                    $("#message_error").show();
                    setTimeout(function () {
                        $("#message_error").fadeOut('slow');
                    }, 2000);
                },
                error: function () {
                    alert('Error');
                }
            });
        }
    });
    //Update Featured Status
    $('.FeaturedStatus').change(function () {
        var id = $(this).attr('rel');
        if ($(this).prop('checked') == true) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'post',
                url: '/admin/update-featured-product-status',
                data: { status: '1', id: id },
                success: function (data) {
                    $("#message_success").show();
                    setTimeout(function () {
                        $("#message_success").fadeOut('slow');
                    }, 2000);
                },
                error: function () {
                    alert('Error');
                }
            });
        } else {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'post',
                url: '/admin/update-featured-product-status',
                data: { status: '0', id: id },
                success: function (resp) {
                    $("#message_error").show();
                    setTimeout(function () {
                        $("#message_error").fadeOut('slow');
                    }, 2000);
                },
                error: function () {
                    alert('Error');
                }
            });
        }
    });
    //Update Category Status
    $('.CategoryStatus').change(function () {
        var id = $(this).attr('rel');
        if ($(this).prop('checked') == true) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'post',
                url: '/admin/update-category-status',
                data: { status: '1', id: id },
                success: function (data) {
                    $("#message_success").show();
                    setTimeout(function () {
                        $("#message_success").fadeOut('slow');
                    }, 2000);
                },
                error: function () {
                    alert('Error');
                }
            });
        } else {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'post',
                url: '/admin/update-category-status',
                data: { status: '0', id: id },
                success: function (resp) {
                    $("#message_error").show();
                    setTimeout(function () {
                        $("#message_error").fadeOut('slow');
                    }, 2000);
                },
                error: function () {
                    alert('Error');
                }
            });
        }
    });
    //Update Banner Status
    $('.BannerStatus').change(function () {
        var id = $(this).attr('rel');
        if ($(this).prop('checked') == true) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'post',
                url: '/admin/update-banner-status',
                data: { status: '1', id: id },
                success: function (data) {
                    $("#message_success").show();
                    setTimeout(function () {
                        $("#message_success").fadeOut('slow');
                    }, 2000);
                },
                error: function () {
                    alert('Error');
                }
            });
        } else {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'post',
                url: '/admin/update-banner-status',
                data: { status: '0', id: id },
                success: function (resp) {
                    $("#message_error").show();
                    setTimeout(function () {
                        $("#message_error").fadeOut('slow');
                    }, 2000);
                },
                error: function () {
                    alert('Error');
                }
            });
        }
    });

    //Add Remove Fields Dynamically
    $(document).ready(function () {
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.field_wrapper'); //Input field wrapper
        var fieldHTML = '<div style="display:flex;"><input type="text" name="sku[]" id="sku" placeholder="SKU" class="form-control" style="width:120px;margin-right:5px;margin-top:5px;" /><input type="text" name="size[]" id="size" placeholder="Size" class="form-control" style="width:120px;margin-right:5px;margin-top:5px;" /><input type="text" name="price[]" id="price" placeholder="Price" class="form-control" style="width:120px;margin-right:5px;margin-top:5px;" /><input type="text" name="stock[]" id="stock" placeholder="Stock" class="form-control" style="width:120px;margin-right:5px;margin-top:5px;" /><a href="javascript:void(0);" class="remove_button">Remove</a></div>'; //New input field html
        var x = 1; //Initial field counter is 1

        //Once add button is clicked
        $(addButton).click(function () {
            //Check maximum number of input fields
            if (x < maxField) {
                x++; //Increment field counter
                $(wrapper).append(fieldHTML); //Add field html
            }
        });
        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function (e) {
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });


    function dash() {
        // single bar chart
        var ctx = document.getElementById("singelBarChart");
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Sun", "Mon", "Tu", "Wed", "Th", "Fri", "Sat"],
                datasets: [
                    {
                        label: "My First dataset",
                        data: [40, 55, 75, 81, 56, 55, 40],
                        borderColor: "rgba(0, 150, 136, 0.8)",
                        width: "1",
                        borderWidth: "0",
                        backgroundColor: "rgba(0, 150, 136, 0.8)"
                    }
                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
        //monthly calender
        $('#m_calendar').monthly({
            mode: 'event',
            //jsonUrl: 'events.json',
            //dataType: 'json'
            xmlUrl: 'events.xml'
        });

        //bar chart
        var ctx = document.getElementById("barChart");
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July", "august", "september", "october", "Nobemver", "December"],
                datasets: [
                    {
                        label: "My First dataset",
                        data: [65, 59, 80, 81, 56, 55, 40, 65, 59, 80, 81, 56],
                        borderColor: "rgba(0, 150, 136, 0.8)",
                        width: "1",
                        borderWidth: "0",
                        backgroundColor: "rgba(0, 150, 136, 0.8)"
                    },
                    {
                        label: "My Second dataset",
                        data: [28, 48, 40, 19, 86, 27, 90, 28, 48, 40, 19, 86],
                        borderColor: "rgba(51, 51, 51, 0.55)",
                        width: "1",
                        borderWidth: "0",
                        backgroundColor: "rgba(51, 51, 51, 0.55)"
                    }
                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
        //counter
        $('.count-number').counterUp({
            delay: 10,
            time: 5000
        });
    }
    dash();
});
