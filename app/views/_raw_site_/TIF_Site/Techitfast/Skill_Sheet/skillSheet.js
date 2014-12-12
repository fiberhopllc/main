var originalHeight;
$(document).ready(function () {
    var root = 'http://www.techitfast.com/'
    originalHeight = $(".wrapper#body_wrapper").height();
    $('#skillForm').bind('submit', function () {
        $.ajax({
            type: "POST",
            cache: false,
            url: root + "Skill_Sheet/varifySkillSheet.asp",
            data: $(this).serializeArray(),
            success: function (data) {
                var showError = false;
                var adjustedHeight = 0;
                for (var i = 0; i < data.response.length; i++) {
                    if (data.response[i].error != "") {
                        if (!showError) {
                            showError = true;
                            alert("Please Fix The Above Errors");
                        }
                        $('.error#' + data.response[i].id).replaceWith('<div class="error" id="' + data.response[i].id + '">' + data.response[i].error + '</div>');
                        adjustedHeight += 23;
                    }
                    else {
                        $('.error#' + data.response[i].id).replaceWith('<div class="error" id="' + data.response[i].id + '"></div>');
                    }
                }
                if (adjustedHeight == 0) {
                    $('.skillFormWrapper').replaceWith('<p class="success">' + data.response[0].success + '</p>');
                    $('.wrapper#body_wrapper').height(1650);
                    $('html, body').animate({scrollTop: 0}, 'slow');
                }
                else {
                    $('.wrapper#body_wrapper').height(originalHeight + adjustedHeight);
                }
            }
        });
        return false;
    });
});