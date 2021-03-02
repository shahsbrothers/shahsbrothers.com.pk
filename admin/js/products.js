$(document).ready(function() {
    GetProducts();

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
                        GetProducts();
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
        //console.log("product add");
        $.ajax({
            url: 'core/add_product.php',
            type: 'post',
            processData: false,
            cache: false,
            contentType: false,
            data: fdata,
            success: function(data) {
                data = JSON.parse(data);
                //console.log(data)
                if (data.success) {
                    alert('Product Added')
                    GetProducts();
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


function GetProducts() {
    $.ajax({
        "url": "core/get_products.php",
        "type": "GET",
        "datatype": 'json',
        "success": function(data) {
            products = JSON.parse(data)
                //console.log(products)

            html = ``;
            products.forEach(function(product, i) {
                html += CreateProductRow(product, i + 1);
                //console.log(product);

            });
            document.getElementById("products_data").innerHTML = html;

        }
    });
}

function CreateProductRow(product, counter) {
    html = `
    <tr>
        <td> ` + counter + `</td>
        <td> ` + product.producId + ` </td>
        <td> ` + product.title + ` </td>
        <td> ` + product.description + ` </td>
        <td>  <a href="` + product.thumb + `" target="_blank" class=""> <i class="fas fa-image" style="font-size:1.875rem"> </i> </a> </td>
        <td> ` + product.date_created + ` </td>
        <td> 
            <a href="#" data-rowid=` + product.producId + ` class="btn btn-success btn-sm edit_product"> <i class="fas fa-edit"></i> </a>
            <a href="#" data-rowid=` + product.producId + ` class="btn btn-danger btn-sm delete_product"> <i class="fas fa-trash-alt"></i> </a> 
        </td>        
    </tr>
    `
    return html;
}