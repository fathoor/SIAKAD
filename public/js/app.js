// Function agar Navs dapat Active saat On-Click
$(document).ready(function(){
    $('.dropdown').on('click', 'a', function(){
        $('.dropdown a.active').removeClass('active');
        $(this).addClass('active')
    })
});