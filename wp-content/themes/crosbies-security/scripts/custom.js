jQuery(window).scroll(function() {
    if ( jQuery(this).scrollTop() > 500){  
        jQuery('header').addClass("header");
    }
    else{
        jQuery('header').removeClass("header");
    }
 });

//  $(document).ready(function(){
//     if(jQuery('nav ul li').hasClass('dropdown')) {
//         jQuery("nav ul li > a").hover(
//             function () {
//               jQuery('.dropdown > ul').addClass("show");
//             },
//             function () {
//               jQuery('.dropdown > ul').removeClass("show");
//             }
//         );
//     }
// )};