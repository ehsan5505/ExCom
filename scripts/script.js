(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.parallax').parallax();

  }); // end of document ready
})(jQuery); // end of jQuery name space

$(document).ready(function(){
  $("div.searchBar").hide();
  $("div.menuBar").hide();
  $(".close").click(function(){$(this).hide()});
  
  $(".refresh").click(function(){
    location.reload();
  });
  
  $(".dropdown-button").dropdown();
  
  $(".search").click(function(){
      $("div.searchBar").toggle(500);
  });
  
  $(".menu").click(function(){
      $("div.menuBar").toggle(300);
  });

  
});