$(document).ready(function(){

    $('.tab_comment:first').show()
    $('.tab_navigation li:first').addClass('active')
    $('.tab_navigation li').click(function(event){
        index = $(this).index();
        $('.tab_navigation li').removeClass('active');
        $(this).addClass('active');
        $('.tab_comment').hide(); 
        $('.tab_comment').eq(index).show(); 
    });

    $('.tab_mobile-detail:first').show()
    $('.title li:first').addClass('active')
    $('.title li').click(function(event){
        index = $(this).index();
        $('.title li').removeClass('active');
        $(this).addClass('active');
        $('.tab_mobile-detail').hide(); 
        $('.tab_mobile-detail').eq(index).show(); 
    });
    var more = $(".see-more");
    more.on('click', function(e){
        e.preventDefault();
        $(".see-more img").toggleClass('active');
        $(".text-more").toggle('300');
    });

    $('.evaluate .comment-review .btn-showall').on('click', function(){
        $('.evaluate').addClass('active-evaluate');
    })
    $('.evaluate .evaluate__title').on('click', function(){
        $('.evaluate').removeClass('active-evaluate');
    })

    // search-fix-mobile
    $(window).scroll(function(){
        if ($(window).scrollTop() > 1000){
            $('.search').slideDown(200);
        } 
            else{
            $('.search').slideUp(200);
        }
    })
})

