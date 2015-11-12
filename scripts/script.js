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
  $(".manufacturerBar").hide();
  $(".categoryBar").hide();
  $(".priceBar").hide();
  
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

   $(document).ready(function() {
    $('select').material_select();
  });
  
  
  // use for manufacturer show and off
  $("#manufacturer").change(function(){
    $(".manufacturerBar").toggle();
    // if($(this).is(":checked")){
    //   $(".manufacturerBar").show();
    // }else{
    //   $(".manufacturerBar").hide();
    // }
  });
  
  $("#category").change(function(){
    $(".categoryBar").toggle();
  })
  
  $("#priceLever").change(function(){
    $(".priceBar").toggle();
  })
  
});