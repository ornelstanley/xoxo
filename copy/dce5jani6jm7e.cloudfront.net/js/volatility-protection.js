function fixSizes() {
    $('.img-slider').each(function(id, el){
        var width = el.getBoundingClientRect().width + 'px';
        $(el).find('.resize img').css('width', width);
    });
}

$(window).resize(function(){
    fixSizes();
});

function drags(dragElement, resizeElement, container) {

    dragElement.on('mousedown touchstart', function(e) {

        dragElement.addClass('draggable');
        resizeElement.addClass('resizable');

        var startX = (e.pageX) ? e.pageX : e.originalEvent.touches[0].pageX;

        var dragWidth = dragElement.outerWidth(),
            posX = dragElement.offset().left + dragWidth - startX,
            containerOffset = container.offset().left,
            containerWidth = container.outerWidth();

        minLeft = containerOffset + 20;
        maxLeft = containerOffset + containerWidth - dragWidth - 20;

        dragElement.parents().on("mousemove touchmove", function(e) {

            var moveX = (e.pageX) ? e.pageX : e.originalEvent.touches[0].pageX;

            leftValue = moveX + posX - dragWidth;

            if ( leftValue < minLeft) {
                leftValue = minLeft;
            } else if (leftValue > maxLeft) {
                leftValue = maxLeft;
            }

            widthValue = (leftValue + dragWidth/2 - containerOffset)*100/containerWidth+'%';

            $('.draggable').css('left', widthValue).on('mouseup touchend touchcancel', function () {
                $(this).removeClass('draggable');
                resizeElement.removeClass('resizable');
            });
            $('.resizable').css('width', widthValue);
        }).on('mouseup touchend touchcancel', function(){
            dragElement.removeClass('draggable');
            resizeElement.removeClass('resizable');
        });
        e.preventDefault();
    }).on('mouseup touchend touchcancel', function(e){
        dragElement.removeClass('draggable');
        resizeElement.removeClass('resizable');
    });
}

$(document).ready(function(){

    fixSizes();

    $('.scrollToAnchor').click(function(){
        $('html, body').animate({
            scrollTop: $("#anchor").offset().top
        }, 500);
        return false;
    });

    $('.img-slider').each(function(id, el){
        drags($(el).find('.handle'), $(el).find('.resize'), $(el));
    });

});
