$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$(".auto-fade").fadeOut(3000);
$('.js-team-slide').hide();
$('.js-team-slide.selected').show();


$(document).on('click', '.js-team-selector',function () {
    $('.js-team-slide.selected').removeClass('selected');
    $('.js-team-selector.selected').toggleClass('selected hover-color');
    slide = $('.js-team-slide[data-scroll=' + $(this).attr('data-scroll') + ']');
    selector = $('.js-team-selector[data-scroll=' + $(this).attr('data-scroll') + ']');
    slide.addClass('selected');
    selector.toggleClass('selected hover-color');

    $('.js-team-slide').fadeOut(0);
    $('.js-team-slide').css("display","none");
    $('.js-team-slide.selected').fadeIn();
})
$('.nav-full-link,.nav-close').click(function(){
    $('.nav-full').fadeOut();
  
})
$(document).on('click','.nav-open',function(){

    $('.nav-full').fadeIn();
})