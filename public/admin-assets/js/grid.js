$(document).ready(function(){

   function removeAllSidebarToggleClass()
   {
      $('#sidebar-toggle-hide').removeClass('md:inline');
      $('#sidebar-toggle-hide').removeClass('hidden');
      $('#sidebar-toggle-show').removeClass('inline');
      $('#sidebar-toggle-show').removeClass('md:hidden');
   }


   $('#sidebar-toggle-hide').click(function(){
      $('#sidebar').fadeOut(300);
      $('#main-body').animate({width : "100%"}, 300);
      setTimeout(function(){
      removeAllSidebarToggleClass();
      $('#sidebar-toggle-hide').addClass('!hidden');
      $('#sidebar-toggle-show').removeClass('!hidden');
      }, 300)
   });



   $('#sidebar-toggle-show').click(function(){
      $('#sidebar').fadeIn(300);
      setTimeout(function(){
      removeAllSidebarToggleClass();
      $('#sidebar-toggle-hide').removeClass('!hidden');
      $('#sidebar-toggle-show').addClass('!hidden');
      },300);
   });

   $('#menu-toggle').click(function(){
      $('#body-header').toggle(300);
   });

   $('#search-toggle').click(function(){
      $('#search-toggle').removeClass('md:inline');
      $('#search-toggle').addClass('!hidden');
      $('#search-area').addClass('md:inline');
      $('#search-input').animate({width : "12rem"}, 300);
   });

   $('#search-area-hide').click(function(){
      $('#search-input').animate({width : "0"}, 300);
      setTimeout(function(){
      $('#search-toggle').addClass('md:inline');
      $('#search-toggle').removeClass('!hidden');
      $('#search-area').removeClass('md:inline');
   },300);
   });

   $('#header-notification-toggle').click(function(){
      $('#header-notification').fadeToggle();
   });

   $('#header-comment-toggle').click(function(){
      $('#header-comment').fadeToggle();
   });

   $('#header-profile-toggle').click(function(){
      $('#header-profile').fadeToggle();
   });



   $('.sidebar-group-link').click(function(){
      
      $('.sidebar-group-link').removeClass('sidebar-group-link-active');
      $('.sidebar-group-link').children('.sidebar-dropdown-toggle').children('.angle').removeClass('fa-angle-down');
      $('.sidebar-group-link').children('.sidebar-dropdown-toggle').children('.angle').addClass('fa-angle-left');
      $(this).addClass('sidebar-group-link-active');
      $(this).children('.sidebar-dropdown-toggle').children('.angle').removeClass('fa-angle-left');
      $(this).children('.sidebar-dropdown-toggle').children('.angle').addClass('fa-angle-down');
   });

})

   $('#full-screen').click(function(){
      toggleFullScreen();
   });

   function toggleFullScreen()
   {
      if((document.fullScreenElement && document.fullScreenElement !== null) || (!document.mozFullScreen && !document.webkitIsFullScreen)){
         if(document.documentElement.requestFullScreen){
            document.documentElement.requestFullScreen();
         }
         else if(document.documentElement.mozRequestFullScreen){
            document.documentElement.mozRequestFullScreen();
         }
         else if(document.documentElement.webkitRequestFullScreen){
            document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
         }
         $('#screen-compress').removeClass('!hidden');
         $('#screen-expand').addClass('!hidden');
      }else if(document.exitFullscreen){
         document.exitFullscreen();
         $('#screen-expand').removeClass('!hidden');
         $('#screen-compress').addClass('!hidden');
      }
   }
   
   $('#blur-screen').click(function(){
      toggleBlurScreen();
   });

   let blur = 1
   function toggleBlurScreen()
   {
      blur++
      if(blur % 2 == 0){
         $("#main-body").css("filter", "blur(5px)");
         $('#screen-eye').removeClass('!hidden');
         $('#screen-eye-off').addClass('!hidden');
      }else {
         $("#main-body").css("filter", "blur(0px)");
         $('#screen-eye-off').removeClass('!hidden');
         $('#screen-eye').addClass('!hidden');
      }
   }