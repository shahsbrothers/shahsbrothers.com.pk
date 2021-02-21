$(document).ready(function() {

    generateTable();

    // Delete User
    $('body').on('click', '.delete_user', function() {
        var rowID = $(this).data('rowid');
        $.ajax({
            url: "core/delete_user.php",
            type: "get",
            data: {
                rowid: rowID,
            },
            success: function(response) {
                if (response == "OK") {
                    alert("User Deleted")
                }
            },
            error: function(xhr) {
                //Do Something to handle error
            }
        });
    });
});

function generateTable() {
    $.ajax({
        "url": "core/getUsers.php",
        "type": "GET",
        "datatype": 'json',
        "success": function(data) {
            table_data = JSON.parse(data)
            for (i = 0; i < table_data.length; i++) {
                if (table_data[i][5] == "1")
                    table_data[i][5] = '<i class="fas fa-check-circle text-success"></i>';
                else
                    table_data[i][5] = '<i class="fas fa-check-circle text-danger"></i>';
                table_data[i].push(`<a href="#" data-rowid=` + table_data[i][0] + ` class="delete_user"> <i class="fas fa-trash-alt text-danger"></i> </a> </td>`)
            }
            $('#users_table').DataTable({
                data: table_data,
                columns: [{
                    title: "User ID"
                }, {
                    title: "Username"
                }, {
                    title: "Email"
                }, {
                    title: "Password"
                }, {
                    title: "Date Created"
                }, {
                    title: "Status"
                }, {
                    title: "Action"
                }]
            });
        }
    });
}