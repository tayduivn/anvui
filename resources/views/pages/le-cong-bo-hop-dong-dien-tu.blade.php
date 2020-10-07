
<!DOCTYPE html>
<html lang="en">
<head><link rel="canonical" href="https://halan.vn">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lễ công bố nền tảng hợp đồng điện tử</title>
<link rel="icon" href="https://cdn.anvui.vn/uploadv2/web/36/3692/basicinformation/2020/04/03/05/39/1585892394_favicon.png" sizes="32x32" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap&subset=vietnamese">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" />
</head>
<body>
<section class="banner">
<img src="/themes/99/public/imgs/hlhddt.jpg" alt="" class="banner">
<div class="countdown wow slideInRight" data-wow-duration=".3s">
<div class="countdown__item" data-countdown-content="days">00</div>
<div class="countdown__item" data-countdown-content="hours">00</div>
<div class="countdown__item" data-countdown-content="minutes">00</div>
<div class="countdown__item" data-countdown-content="seconds">00</div>
</div>		
</section>


<style>
* { margin: 0; padding: 0; font-family: Cabin  }
img{
max-width: 100%;
height: auto;
margin: 0 auto;
}

.banner {
position: relative;
}

.countdown {
top: 25%;
position: absolute;
right: 0;
display: flex;
flex-direction: column;
}

.countdown__item {
height: 88px;
width: 140px;
color: #fff;
font-weight: bold;
font-size: 36px;
margin-bottom: 24px;
display: flex;
align-items: center;
justify-content: center;
background-color: #1a428185
}
/*.banner {
height: 100vh;
width: 100%;
object-fit: contain;
}*/
</style>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous"></script>
<script>
new WOW().init();
function countDown(countDownDate) {
var timer = setInterval(function() {

  var now = new Date().getTime();

  var distance = countDownDate - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  $('[data-countdown-content=days]').html(days + " Ngày")
  $('[data-countdown-content=hours]').html(hours + " Giờ")
  $('[data-countdown-content=minutes]').html(minutes + " Phút")
  $('[data-countdown-content=seconds]').html(seconds + " Giây")


  if (distance < 0) {
    clearInterval(timer);
    $('[data-content=countdown]').html('Hết thời hạn giao dịch');
  }
}, 1000);
}

countDown(1602440906812)
</script>
</body>
</html>