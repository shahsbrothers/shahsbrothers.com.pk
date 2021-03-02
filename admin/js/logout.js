$(document).ready(function() {
    $('body').on('click', '.logout', function() {

        console.log("Logout");
        $.ajax({
            url: "core/logout.php",
            type: "post",
            success: function(response) {
                response = JSON.parse(response)
                console.log(response);
                if (response.status == "OK") {
                    document.getElementById("loader").style.display = "block";
                    setTimeout(function() {
                        window.location.href = "login.php";
                    }, 2000);
                }
            },
            error: function(xhr) {
                //Do Something to handle error
            }
        });

    });
});