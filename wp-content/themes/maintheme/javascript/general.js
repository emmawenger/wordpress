jQuery(document).ready(function($){
    
//░░░░░░░░░░░░░░░░░░░░░░░░
//
//     DIRECTORY
//
//     _Title
//
//░░░░░░░░░░░░░░░░░░░░░░░░

//▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀
// _Title
//▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄

var $faqs = $('.faq');

if( $faqs[0] ){
    $faqs.find('h6').click(function(){
        $(this).parent().find('p').slideToggle();
    });
}
    
    
});