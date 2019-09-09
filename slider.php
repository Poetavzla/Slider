<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercado de Productos y Servicios a tu alcance</title>
    <link rel="stylesheet" href="slider.css">
    <link rel="stylesheet" href="fonts.css">
  </head>
  <body>
    <div class="main">
      <div class="slides">
        <div class="">
            <img src="img/10.png" alt="">
        </div>
        <div class="">
            <img src="img/11.png" alt="">
        </div>
        <div class="">
            <img src="img/12.png" alt="">
        </div>
        <div class="">
            <img src="img/13.png" alt="">
        </div>
        <div class="">
            <img src="img/14.png" alt="">
        </div>
      </div>
    </div>
    <script src="js/jquery.js" charset="utf-8"></script>
    <script src="js/jquery.slides.js" charset="utf-8"></script>
    <script>
    $(function(){
      $(".slides").slidesjs({
        play: {
          active: true,
            // [boolean] Generate the play and stop buttons.
            // You cannot use your own buttons. Sorry.
          effect: "slide",
            // [string] Can be either "slide" or "fade".
          interval: 10000,
            // [number] Time spent on each slide in milliseconds.
          auto: true,
            // [boolean] Start playing the slideshow on load.
          swap: true,
            // [boolean] show/hide stop and play buttons
          pauseOnHover: false,
            // [boolean] pause a playing slideshow on hover
          restartDelay: 2500
            // [number] restart delay on inactive slideshow
        }
      });
      });
    </script>

  </body>

</html>
