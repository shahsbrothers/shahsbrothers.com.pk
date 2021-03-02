$(document).ready(function() {
    getData();
    var _counter = 1;
    // Delete Product
    $('body').on('click', '.delete_ca', function() {
        var ca_id = $(this).data('ca_id');
        if (confirm('Are you sure you want to delete?')) {
            console.log("Delete CA");
            $.ajax({
                url: "core/delete_ca.php",
                type: "post",
                data: {
                    ca_id: ca_id,
                },
                success: function(response) {
                    console.log(response);
                    response = JSON.parse(response)
                    console.log(response);
                    if (response.status == "OK") {
                        getData();
                        alert("Brochure Deleted")
                    }
                },
                error: function(xhr) {
                    //Do Something to handle error
                }
            });

        }
    });



    // EDIT CA
    $('body').on('click', '.edit_cat', function(e) {
        e.preventDefault();

        var ca_id = $(this).data('ca_id');
        document.getElementById('ca_id').value = ca_id;
        // console.log("EDIT CA");
        // console.log(ca_id);
        $.ajax({
            url: "core/get_ca.php",
            type: "post",
            data: {
                ca_id: ca_id,
            },
            success: function(response) {
                response = JSON.parse(response)
                    // console.log(response);

                sub_cat_count = response.sub_cat.length;
                if (sub_cat_count < 1) {
                    document.getElementById('sub_cat_table').style.display = "None";
                    document.getElementById('sub_ca_count').value = 0;

                } else {
                    html = ``;
                    counter = 1;
                    for (sub_item_t in response.sub_cat) {
                        html += makeSubRow(response.sub_cat[sub_item_t], counter);
                        counter++;
                    }
                    document.getElementById('sub_cat_table').style.display = "block";
                    document.getElementById('sub_cat_table_body').innerHTML = html;

                    document.getElementById('sub_ca_count').value = response.sub_cat.length;
                }
                document.getElementById("main_cat").value = response.main_cat;
                document.getElementById("main_link").value = response.link;
            },
            error: function(xhr) {
                //Do Something to handle error
            }
        });
    });

    // EDIT CA , Save Changes
    $(document).on('submit', '#edit_ca_form', function(e) {
        e.preventDefault();


        fdata = {
            'main_cat': $('input[name=main_cat]').val(),
            'link': $('input[name=main_link]').val(),
        }

        fdata["ca_id"] = $('input[name=ca_id]').val();


        form_data = [];
        sub_item_c = parseInt($('input[name=sub_ca_count]').val());
        //console.log(sub_item_c)
        if (sub_item_c > 0) {
            for (i = 1; i <= sub_item_c; i++) {
                name_key = 'input[name=name' + i + ']';
                link_key = 'input[name=link' + i + ']';
                form_data.push({
                    "name": $(name_key).val(),
                    "link": $(link_key).val(),
                })
            }
        }
        fdata["sub_cat"] = form_data;
        fdata = JSON.stringify(fdata);

        //console.log(fdata);
        //console.log("Save Changes EDIT CA");
        $.ajax({
            url: 'core/save_ca.php',
            type: 'post',
            processData: false,
            cache: false,
            contentType: false,
            data: fdata,
            success: function(data) {
                data = JSON.parse(data)
                    // console.log(data)
                getData();
                // if (data.success) {
                //     alert('Product Added')
                //     $('#add_user_form').trigger("reset");
                // } else
                //     $('.resp2').html(data.errors['error'])


            },
            error: function(e) {
                alert("Somthing went wrong. Try again!")
            }
        })
    });


    // ADD CA SUB ITEM in TABLE during add
    $('body').on('click', '.add_sub_cat', function(e) {
        e.preventDefault();
        //console.log("ADD SUB ITEM");
        table = document.getElementById("add_sub_cat_table_body");

        table.innerHTML += makeSubRow2(_counter);
        _counter++;
    });

    $(document).on("click", ".add_ca_model_btn", function() {
        _counter = 1;
        table = document.getElementById("add_sub_cat_table_body");

        table.innerHTML = "";
    });

    // ADD CA , Save Changes
    $(document).on('submit', '#add_ca_form', function(e) {
        e.preventDefault();


        fdata = {
            'main_cat': $('input[name=add_main_cat]').val(),
            'link': $('input[name=add_main_link]').val(),
        }

        form_data = [];
        sub_item_c = _counter
            //console.log(sub_item_c)
        if (sub_item_c > 0) {
            for (i = 1; i <= sub_item_c; i++) {
                name_key = 'input[name=name' + i + ']';
                link_key = 'input[name=link' + i + ']';
                form_data.push({
                    "name": $(name_key).val(),
                    "link": $(link_key).val(),
                })
            }
        }
        // Filter it, delete the empty {}
        var form_data = form_data.filter(value => JSON.stringify(value) !== '{}');
        fdata["sub_cat"] = form_data;
        fdata = JSON.stringify(fdata);

        // console.log(fdata);
        //console.log("Save Changes ADD CA");
        $.ajax({
            url: 'core/add_ca.php',
            type: 'post',
            processData: false,
            cache: false,
            contentType: false,
            data: fdata,
            success: function(data) {
                data = JSON.parse(data)
                    // console.log(data)
                getData();

                if (data.status == 'OK') {
                    alert('Brochure Added')
                } else
                    $('.add_ca_resp').html("Something Went Wrong")


            },
            error: function(e) {
                alert("Somthing went wrong. Try again!")
            }
        })
    });

});

function makeSubRow(sub_item, counter) {
    html = `
    <tr>
    <td >` + counter + `</td>
    <td>
        <div class="form-group" id="currentPass-group">
            <input class="form-control" type="text" name="name` + counter + `" id=name"` + counter + `" value="` + sub_item.name + `" >
        </div>                                
    </td>
    <td>
        <div class="form-group" id="currentPass-group">
        <input class="form-control" type="text" name="link` + counter + `" id=link"` + counter + `" value="` + sub_item.link + `" >
        </div>                                 
    </td>
    </tr>
    `
    return html;
}

function getData() {
    $.ajax({
        "url": "core/get_catagories.php",
        "type": "GET",
        "datatype": 'json',
        "success": function(data) {
            data = JSON.parse(data);
            // console.log(data);
            counter = 0;
            html = ``;
            for (i = 0; i < data.length; i++) {
                counter += 1;
                html += Row(data[i], counter)
            }
            document.getElementById("cat_data").innerHTML = html;
        }
    });
}


function Row(item, counter) {
    html = `
    <tr>
        <th scope="row"> ` + counter + `</th>
        <td>` + item.main_cat + `</td>
        <td> ` + item.sub_cat.length + `</td>
        <td>
        
            <a  class="btn btn-primary btn-sm" onclick="TODO()"> <i class="fas fa-eye"> </i> </a>
            <a href="#" data-ca_id=` + item.ca_id + ` class="btn btn-success btn-sm edit_cat" data-toggle="modal" data-target="#edit_ca" data-backdrop="static" data-keyboard="false"> <i class="fas fa-edit"> </i> </a>
            <a href="#" data-ca_id=` + item.ca_id + ` class="btn btn-danger btn-sm delete_ca"> <i class="fas fa-trash-alt"></i>  </a>
        </td>
    </tr>
`
    return html;
}

function TODO() {
    alert("TODO: Let me know");
}

function makeSubRow2(counter) {
    html = `
    <tr>
    <td >` + counter + `</td>
    <td>
        <div class="form-group" id="currentPass-group">
            <input class="form-control" type="text" name="name` + counter + `" id=name"` + counter + `" >
        </div>                                
    </td>
    <td>
        <div class="form-group" id="currentPass-group">
        <input class="form-control" type="text" name="link` + counter + `" id=link"` + counter + `" >
        </div>                                 
    </td>
    </tr>
    `
    return html;
}