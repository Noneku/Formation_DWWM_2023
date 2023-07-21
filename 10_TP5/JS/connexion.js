$(document).ready(function(){
    $('#goRight').on('click', function(){
      $('#container-slider').animate({
        'marginLeft' : '0'
      });
      $('.toplayer').animate({
        'marginLeft' : '100%'
      });
    });
    $('#goLeft').on('click', function(){
      $('#container-slider').animate({
        'marginLeft' : '50%'
      });
      $('.toplayer').animate({
        'marginLeft': '0'
      });
    });
  });
  