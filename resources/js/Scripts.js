/////////////////////////////////////// tabbed content for modal ////////////////////////////////////////////////////


//document.getElementsByClassName("tablink")[0].click();
//
//function openCity(evt, cityName) {
//  var i, tabcontent, tablinks;
//    
//    
//  tabcontent = document.getElementsByClassName("city");
//  for (i = 0; i < tabcontent.length; i++) {
//    tabcontent[i].style.display = "none";
//  }
//    
//  tablinks = document.getElementsByClassName("tablink");
//  for (i = 0; i < x.length; i++) {
//    tablinks[i].className = tablinks[i].className.replace(" active", "");
//  }
//    
//  document.getElementById(cityName).style.display = "block";
//    
//  evt.currentTarget.className += " active";
//}




function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}



/////////////////////////////////////// JQUERY CODE /////////////////////////////////////////////////////////


$(document).ready(function() {
    
    $('.js-scroll-to-home').click(function () {
        
        $('html, body').animate({scrollTop: $('.js-section-home').offset().top}, 1000);
        
    });
    
    $('.js-scroll-to-about').click(function () {
        
        $('html, body').animate({scrollTop: $('.js-section-about').offset().top}, 1000);
        
    });
    
    $('.js-scroll-to-projects').click(function () {
        
        $('html, body').animate({scrollTop: $('.js-section-projects').offset().top}, 1000);
        
    });
    
    $('.js-scroll-to-contact').click(function () {
        
        $('html, body').animate({scrollTop: $('.js-section-contact').offset().top}, 1000);
        
    });
    
    
    //////////////// animations on scroll ///////////////////////
    
    
    
    $('.js-wp-1').waypoint(function(direction){
        
       $('.js-wp-1').addClass('animated fadeIn');
          
    },{
        offset: '60%'
    });
    
    

});


//                            MOBILE NAVIGATION

$('.js--nav--icon').click(function(){
    
   var nav = $('.js--main--nav');
   var icon = $('js--nav--icon i');
    
    nav.slideToggle(200);
    
       
    
});



