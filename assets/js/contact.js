// Shorthand for $( document ).ready()
$(function() {

    $(document).on('submit', '#contact_form', function(e) {
        e.preventDefault();
        console.log("conatct ");

        surname = $('input[name=name]').val();
        email = $('input[name=email]').val();
        subject = $('input[name=subject]').val();
        body = $('#message').val();


        window.location.href = "mailto:info@shahsbrothers.com.pk?subject=" + subject + "&body=" + body;
        // fdata = new FormData(this);
        // document.getElementById("loader").style.display = "block";
        // $.ajax({
        //     url: 'core/update_social.php',
        //     type: 'post',
        //     processData: false,
        //     cache: false,
        //     contentType: false,
        //     data: fdata,
        //     success: function(data) {
        //         // console.log(data)
        //         data = JSON.parse(data);
        //         // console.log(data)

        //         if (data.status == 'OK') {

        //             setTimeout(function() {
        //                 document.getElementById("loader").style.display = "none";
        //             }, 2000);
        //         }
        //     },
        //     error: function(e) {
        //         alert("Somthing went wrong. Try again!")
        //     }
        // })
    });
});