$(function () {

    var startingIndex = 10; 			//First frame; With placeholder=true this and higher buttons are removed
    var useAsLastIndex = true;	//Removes buttons higher than starting index if no placeholder
    var placeholder = true;			//Displays before any button click only, removes last button(s)
    var animationTime = 2000;		//Time in ms

    /* vVv  Do not touch  vVv */
    var pLength = $('.viewWindow').length;
    var bLength = $('.window_control').length;
    var animating = false;
    var prevButton = pLength - 1;
    if (startingIndex > -1) {
        prevButton = startingIndex;
    }
    if (startingIndex <= -1) {
        prevButton = 0;
        startingIndex = 0;
    }
    if (startingIndex > pLength - 1) {
        prevButton = pLength - 1;
        startingIndex = pLength - 1;
    }
    if (useAsLastIndex && !placeholder) {
        placeholder = true;
        startingIndex++;
    }
    for (var i = placeholder ? startingIndex : pLength; i < bLength; i++) {
        $('.window_control#b' + i).remove();
    }
    $(".viewWindow#vw" + prevButton).show();
    $(".window_control#b" + prevButton).addClass('active');

    $(".window_control").click(function () {

        var temp = this.id;
        var curButton = temp.replace("b", "");
        if (curButton != prevButton) {

            if (!animating) {

                $(this).addClass('active');
                $(this).removeClass('hover');
                $('.window_control#b' + prevButton).removeClass('active');

                var moveRight = (prevButton > curButton) ? true : false;
                var activeItem = $("#vw" + prevButton);
                var nextItem = $('#vw' + curButton);

                prevButton = curButton;
                animating = true;

                activeItem.hide("slide", {direction: moveRight ? "right" : "left"}, animationTime);
                nextItem.show("slide", {direction: moveRight ? "left" : "right"}, animationTime, function () {
                    animating = false
                });
            }
        }
        return false;
    });
});

$('input.window_control').hover(
    function () {
        if (!$(this).hasClass('active')) {
            $(this).addClass('hover');
        }
    },
    function () {
        $(this).removeClass('hover');
    }
);