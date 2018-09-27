$(document).ready(function() {

    /*Profile events*/

    $("body").on("click", ".dell-skill", function () {
        $(this).parent().remove();
    });

    $('.profile__skill-list .profile__skill-item').click(function() {
        $(this).clone().insertBefore('.profile__skills .add-skill');
    });

    $('.add-skill').click(function() {
        $('.profile__skill-list').fadeIn();
    });

    $('.popup-close').click(function() {
        $('.popup').fadeOut();
    });

});        
           