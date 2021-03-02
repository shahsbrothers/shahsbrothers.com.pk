$(document).ready(function() {

    // Update table data with AJAX
    generateUsersTable();

    // Add User
    $(document).on('submit', '#add_user_form', function(e) {
        e.preventDefault();
        var fdata = new FormData(this);
        //console.log("user add");
        $.ajax({
            url: 'core/add_user.php',
            type: 'post',
            processData: false,
            cache: false,
            contentType: false,
            data: fdata,
            success: function(data) {
                data = JSON.parse(data)
                if (data.success) {

                    // Refresh the table
                    generateUsersTable();
                    alert('User Registered.')
                    $('#add_user_form').trigger("reset");
                } else
                    $('.resp1').html(data.errors['error'])


            },
            error: function(e) {
                alert("Somthing went wrong. Try again!")
            }
        })
    });

    // Edit User
    $('body').on('click', '.edit_user', function() {
        var userId = $(this).data('userid');
        $.ajax({
            url: "core/getUser.php",
            type: "get",
            data: {
                userId: userId,
            },
            success: function(response) {
                response = JSON.parse(response);
                //console.log(response);

                document.getElementById("email_e").value = response.email;
                document.getElementById("username_e").value = response.username;
                status = response.status;

                $(".deactivate").data('userid', userId);

                if (status == "1") {
                    $(".deactivate").html("Deactivate");
                    $(".deactivate").data('action', "0");
                } else {

                    $(".deactivate").html("Activate")
                    $(".deactivate").data('action', "1");
                }

            },
            error: function(xhr) {
                //Do Something to handle error
            }
        });
    });

    // EDIT USER , Save Changes
    $(document).on('submit', '#edit_user_form', function(e) {
        e.preventDefault();

        fdata = new FormData(this);
        $.ajax({
            url: 'core/edit_user.php',
            type: 'post',
            processData: false,
            cache: false,
            contentType: false,
            data: fdata,
            success: function(data) {
                data = JSON.parse(data)
                if (data.success) {
                    $('#edit_user').modal('toggle');
                    $('.error').html("");

                } else {
                    $('.error').html(data.errors.error);
                }

            },
            error: function(e) {
                alert("Somthing went wrong. Try again!")
            }
        })
    });

    // Delete User
    $('body').on('click', '.delete_user', function() {
        var rowID = $(this).data('rowid');
        if (confirm('Are you sure you want to delete?')) {
            $.ajax({
                url: "core/delete_user.php",
                type: "get",
                data: {
                    rowid: rowID,
                },
                success: function(response) {
                    if (response == "OK") {

                        // Refresh the table

                        generateUsersTable();
                        alert("User Deleted")
                    }
                },
                error: function(xhr) {
                    //Do Something to handle error
                }
            });
        }
    });

    //Deactivate account

    $('body').on('click', '.deactivate', function() {
        var action = $(this).data('action');
        var userId = $(this).data('userid');

        $.ajax({
            url: "core/activate.php",
            type: "post",
            data: {
                status: action,
                userId: userId,
            },
            success: function(response) {
                response = JSON.parse(response);

                if (response.status == "OK") {
                    // Refresh the table
                    $('#edit_user').modal('toggle');
                    generateUsersTable();
                }
            },
            error: function(xhr) {
                //Do Something to handle error
            }
        });

    });

});

function generateUsersTable() {
    $.ajax({
        "url": "core/getUsers.php",
        "type": "GET",
        "datatype": 'json',
        "success": function(data) {
            users = JSON.parse(data);
            // console.log(users);

            html = ``;
            users.forEach(function(user, i) {

                // Add the active / inactive icon
                if (user.status == "1")
                    user.status = '<i class="fas fa-check-circle text-success"></i>';
                else
                    user.status = '<i class="fas fa-check-circle text-danger"></i>';

                html += UserRow(user, i + 1);

                // console.log(user);
            });
            document.getElementById("users_data").innerHTML = html;

        }
    });
}

function UserRow(user, counter) {
    html = `
    <tr>
        <td> ` + counter + `</td>
        <td> ` + user.userId + ` </td>
        <td> ` + user.username + ` </td>
        <td> ` + user.email + ` </td>
        <td> ` + user.password + ` </td>
        <td> ` + user.date_created + ` </td>
        <td> ` + user.status + ` </td>
        <td>
            <a href="#" data-userid=` + user.userId + ` class="btn btn-success btn-sm edit_user" data-toggle="modal" data-target="#edit_user" data-backdrop="static" data-keyboard="false"> <i class="fas fa-edit"> </i> </a>
            <a href="#" data-rowid=` + user.userId + ` class="btn btn-danger btn-sm delete_user"> <i class="fas fa-trash-alt"></i> </a>        
        </td>
        
    </tr>
    `
    return html;
}