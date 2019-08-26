<!DOCTYPE html>
 <html>
   <head>

     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
     <meta charset="UTF-8">
     <style media="screen">
          body{
            font-family:Georgia,sans-serif;
          }

          .footer{
            background-color:#e0e0e0;
            margin: 0 auto;
            color: black;
            text-align: center;
            font-size: 12px;
            padding-top:20px;
          }

          .biblioteka{
             padding-top: 40px;
          }

          #copy{
            padding-top: 40px;
            float: right;
          }

          .contact{
             color:black;
          }

          .contact:hover{
             color: #cc493d !important;
          }

          .diagonal3{
             background: -webkit-linear-gradient( -57.5deg , transparent 60%, rgba(209, 209, 209, 0.6) 50% ) !important;
          }
          .diagonal4{
             background: -webkit-linear-gradient( 57.5deg , transparent 80%, rgba(209, 209, 209, 0.9) 25% ) !important;
          }



      </style>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

   </head>
   <body background="images/3.jpg">

   <div class="footer">
    <div class="diagonal3">
      <div class="diagonal4">
       <div class="row">
         <div class="col s12 m12 l3">
         <p class="biblioteka">LIETUVOS MUZIKOS IR TEATRO AKADEMIJA</p>
         </div>
         <div class="col s12 m12 l6">
         <p>Muzikos fakulteto skaitykla:
         Gedimino pr. 42, Vilnius, tel.: <a class="contact" href="tel:852628447">(8-5) 262 8447</a></p>
         <p>Muzikos fakulteto biblioteka:
         Vilniaus g. 6-2,Vilnius, tel.:<a class="contact"href="tel:852622330">(8-5) 262 2330</a></p>
         <p>Teatro ir kino fakulteto biblioteka
         T. Kosciuškos g. 10,Vilnius,tel.:<a class="contact"href="tel:852613841">(8-5) 261 3841</a></p>
         <p><a class="contact" href="mailto:biblioteka@lmta.lt" target="_top">El. paštas: biblioteka@lmta.lt</a></p>
         </div>
         <div id="copy" class="col s12 m12 l3">
          <p><?php function dabartiniaiMetai() {
               $startYear = 2018;
               $currentYear = date('Y');
               if ($startYear < $currentYear) {
                 echo '&copy;' . ' ' . $startYear . '-' . $currentYear;
               }
               else {
                 echo '&copy;' . ' '. $currentYear;
               }
             }
             echo dabartiniaiMetai();
             ?></p>

        </div>
       </div>
      </div>
     </div>
   </div>
  </body>
</html>
