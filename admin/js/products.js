$(document).ready(function() {
    $.ajax({
        "url": "core/get_products.php",
        "type": "GET",
        "datatype": 'json',
        "success": function(data) {
            table_data = JSON.parse(data)
            console.log(table_data)
            for (i = 0; i < table_data.length; i++) {
                // if (table_data[i][5] == "1")
                //     table_data[i][5] = '<i class="fas fa-check-circle text-success"></i>';
                // else
                //     table_data[i][5] = '<i class="fas fa-check-circle text-danger"></i>';
                table_data[i].push(`<a href="#" data-rowid=` + table_data[i][0] + ` class="delete_product"> <i class="fas fa-trash-alt text-danger"></i> </a> &nbsp; <a href="#" data-rowid=` + table_data[i][0] + ` class="delete_user"> <i class="fas fa-edit text-primary"></i> </a> </td>`)
                table_data[i][3] = `<img src ="` + table_data[i][3] + `" alt="Shahsbrothers" class="img-fluid" width="5%" height="25%" />`
            }
            $('#products_table').DataTable({
                data: table_data,
                "lengthMenu": [
                    [8, 16, 100, -1],
                    [8, 16, 100, "All"]
                ],
                'columnDefs': [{
                        "targets": 0, // your case first column
                        "className": "text-center",

                    },
                    {
                        "targets": 3,
                        "className": "text-center",
                        "width": "4%"
                    },
                    {
                        "targets": 4,
                        "className": "text-center",

                    },
                    {
                        "targets": 5,
                        "className": "text-center",
                    }
                ],
                columns: [{
                        title: "Product ID"
                    }, {
                        title: "Title"
                    }, {
                        title: "Description"
                    },
                    {
                        title: "Thumbnail"
                    },
                    {
                        title: "Date Created"
                    },
                    {
                        title: "Action"
                    }
                ]
            });
        }
    });

    // Delete Product
    $('body').on('click', '.delete_product', function() {
        var rowID = $(this).data('rowid');
        if (confirm('Are you sure you want to delete?')) {
            $.ajax({
                url: "core/delete_product.php",
                type: "get",
                data: {
                    rowid: rowID,
                },
                success: function(response) {
                    response = JSON.parse(response)
                    if (response.status == "OK") {
                        alert("Product Deleted")
                    }
                },
                error: function(xhr) {
                    //Do Something to handle error
                }
            });

        }
    });

    // Add Product
    $(document).on('submit', '#add_product_form', function(e) {
        e.preventDefault();
        var fdata = new FormData(this);
        console.log("product add");
        $.ajax({
            url: 'core/add_product.php',
            type: 'post',
            processData: false,
            cache: false,
            contentType: false,
            data: fdata,
            success: function(data) {
                console.log(data)
                data = JSON.parse(data)
                console.log(data)
                if (data.success) {
                    alert('Product Added')
                    $('#add_user_form').trigger("reset");
                } else
                    $('.resp2').html(data.errors['error'])


            },
            error: function(e) {
                alert("Somthing went wrong. Try again!")
            }
        })
    });
});