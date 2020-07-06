$(document).ready(function(){

    $('.collapse-link-js').mouseover(() => {
        $('.collapse-text-js').collapse('show');
    });

    $('.collapse-link-js').on('mouseout', () => {
        setTimeout(() => {
            $('.collapse-text-js').collapse('hide')
        }, 2000);
    })

})

