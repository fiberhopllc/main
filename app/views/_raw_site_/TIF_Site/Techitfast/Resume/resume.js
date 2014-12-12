var cleared = false;
var action = "";
$(document).ready(function () {
    $('#submit_resume').bind('submit', function () {
        if (!cleared) {
            var extension = $('#submit_resume input[type=file]').val().split('\\').pop().split('.').pop();
            $('#resume_ext').val(extension);
            $.ajax({
                type: "POST",
                cache: false,
                url: "send_resume.asp?f=0",
                data: $(this).serializeArray(),
                success: function (data) {
                    if (data.response[0].error != "") {
                        $('#submit_response').replaceWith('<p class="error" id="submit_response">' + data.response[0].error + '</p>');
                    } else {
                        cleared = true;
                        action = data.response[0].success;
                        $('#submit_resume').submit();
                    }
                }
            });
            return false;
        } else {
            $('#submit_resume').attr("action", action);
        }
    });
});