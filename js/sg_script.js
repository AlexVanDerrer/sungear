$(document).ready(function(){

    $('.collapse-link-main').mouseover(function () {
        $('.collapse-text-main').collapse('show');
    });

    $('.collapse-link-dct').mouseover(function () {
        $('.collapse-text-dct').collapse('show');
    });

    $('.collapse-link-main').on('mouseout', function () {
        setTimeout(function() {
            $('.collapse-text-main').collapse('hide')
        }, 2000);
    })

    
    $('.collapse-link-dct').on('mouseout', function () {
        setTimeout(function () {
            $('.collapse-text-dct').collapse('hide')
        }, 2000);
    })
    

})

function getval(sel)
{
    $('.list-akpp-model').html(sel.value);
}

