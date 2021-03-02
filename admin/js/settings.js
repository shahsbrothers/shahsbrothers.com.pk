// Social Media Save Changes
$(document).ready(function() {
    getSociallinks();

    // Update Social Links
    $(document).on('submit', '#update_social_icons', function(e) {
        e.preventDefault();

        fdata = new FormData(this);

        $.ajax({
            url: 'core/update_social.php',
            type: 'post',
            processData: false,
            cache: false,
            contentType: false,
            data: fdata,
            success: function(data) {
                // console.log(data)
                data = JSON.parse(data);
                // console.log(data)

                if (data.status == 'OK') {
                    document.getElementById("loader").style.display = "block";
                    setTimeout(function() {
                        document.getElementById("loader").style.display = "none";
                    }, 2000);
                }
            },
            error: function(e) {
                alert("Somthing went wrong. Try again!")
            }
        })
    });

    // Update Slider Images
    $(document).on('submit', '#update_slider', function(e) {
        e.preventDefault();

        fdata = new FormData(this);
        console.log("Update Slider");
        $.ajax({
            url: 'core/update_slider.php',
            type: 'post',
            processData: false,
            cache: false,
            contentType: false,
            data: fdata,
            success: function(data) {
                data = JSON.parse(data);
                document.getElementById("loader").style.display = "block";
                if (data.status == 'OK') {
                    setTimeout(function() {
                        document.getElementById("loader").style.display = "none";
                    }, 1000);
                }
            },
            error: function(e) {
                alert("Somthing went wrong. Try again!")
            }
        })
    });
});

function getSociallinks() {
    $.ajax({
        url: 'core/get_social.php',
        type: 'get',
        processData: false,
        cache: false,
        contentType: false,
        success: function(data) {
            data = JSON.parse(data);
            document.getElementById("twitter").value = data.twitter;
            document.getElementById("facebook").value = data.facebook;
            document.getElementById("instagram").value = data.instagram;
            document.getElementById("skype").value = data.skype;
            document.getElementById("linkdin").value = data.linkdin;
        },
        error: function(e) {
            alert("Somthing went wrong. Try again!")
        }
    })

}