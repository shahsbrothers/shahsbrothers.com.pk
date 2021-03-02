$(function() {
    getSociallinks();
});


function getSociallinks() {
    $.ajax({
        url: 'admin/core/get_social.php',
        type: 'get',
        processData: false,
        cache: false,
        contentType: false,
        success: function(data) {
            data = JSON.parse(data);
            // console.log(data)
            $('.twitter').attr("href", data.twitter);
            $('.facebook').attr("href", data.facebook);
            $('.instagram').attr("href", data.instagram);
            $('.skype').attr("href", data.skype);
            $('.linkedin').attr("href", data.linkdin);

            // document.getElementById("twitter").value = data.twitter;
            // document.getElementById("facebook").value = data.facebook;
            // document.getElementById("instagram").value = data.instagram;
            // document.getElementById("skype").value = data.skype;
            // document.getElementById("linkdin").value = data.linkdin;
        },
        error: function(e) {
            alert("Somthing went wrong. Try again!")
        }
    });

}