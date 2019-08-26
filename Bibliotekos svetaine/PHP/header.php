<!DOCTYPE html>
 <html>
   <head>

     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
     <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
     <meta charset="UTF-8">
     <style media="screen">

          body{
              font-family:Georgia,sans-serif;
          }

          .nav-color{
              background-color:#eeeeee;
          }

          nav a, li{
              color: black !important;
          }
          .container {
              display: flex;
              justify-content: center;
          }

          .sticky{
              position: fixed;
              width: 100%;
              left: 0;
              top: 0;
              z-index: 100;
              border-top: 0;
          }

          .logo{
              margin-left:30px;
              margin-top:10px;
              height: 70px;
              padding-right:50px;
           }

          a{
              color: black;
          }

          ul{
             list-style-type: none;
             overflow: hidden;
          }

         li{
            float: left;
         }

         li a{
            display: block;
         }

        .menu-top{
            float:right;
            padding-right: 50px;
            padding-top: 50px;
        }

        .fb{
            width: 40px;
            float:right;
            margin-top: 20px;
            margin-right: 20px;
        }


        .diagonal{
          background: -webkit-linear-gradient( 230deg , transparent 60%, rgba(209, 209, 209, 0.4) 50% ) !important;
        }
        .diagonal5{
          background: -webkit-linear-gradient( -230deg , transparent 80%, rgba(209, 209, 209, 0.6) 25% ) !important;
        }


      </style>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

   </head>
   <body background="images/3.jpg">

       <header>
          <ul>
             <li><a href="https://lmta.lt" target="_blank"><img class="logo"src="images/lmta.png" alt=""></a></li>
             <li><a href="index.php"><h3>BIBLIOTEKA</h3></a></li>
             <li class="fb"><a href="https://facebook.com/lmtabiblioteka" target="_blank"><img class="fb"src="images/dds.png" alt=""></a></li>
             <li class="menu-top"><a href="klausk.php">KLAUSK</a></li>
          </ul>
        </header>

        <nav class="nav-color">
          <div class="diagonal5">
            <div class="diagonal">
              <div class="container">
               <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                   <li><a href="index.php">PAGRINDINIS</a></li>
                   <li><a href="paslaugos.php">PASLAUGOS</a></li>
                   <li><a href="apie.php">APIE BIBLIOTEKĄ</a></li>
           </div>
         </nav>

         <ul class="sidenav" id="mobile-demo">
           <li><a href="index.php">PAGRINDINIS</a></li>
           <li><a href="paslaugos.php">PASLAUGOS</a></li>
           <li><a href="apie.php">APIE BIBLIOTEKĄ</a></li>
        </ul>
      </div>
    </div>


     <script type="text/javascript" src="js/materialize.min.js"></script>
     <script type="text/javascript">

      $(document).ready(function(){
        $('.sidenav').sidenav();
      });

      $(document).ready(function(){
        $('.sidenav').sidenav();
      });


      $(document).ready(function() {
        var stickyNavTop = $('.nav-color').offset().top;
        var stickyNav = function(){
          var scrollTop = $(window).scrollTop();
        if (scrollTop > stickyNavTop) {
          $('.nav-color').addClass('sticky');
          }
        else {
          $('.nav-color').removeClass('sticky');
          }
        };
          stickyNav();

          $(window).scroll(function() {
            stickyNav();
          });
        });
     </script>
   </body>
 </html>
