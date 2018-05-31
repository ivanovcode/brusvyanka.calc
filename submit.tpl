<!doctype html>
<title>Брусвянка - Калькулятор стоимости дома</title>
<style>
  html, body, div, span, applet, object, iframe,
  h1, h2, h3, h4, h5, h6, p, blockquote, pre,
  a, abbr, acronym, address, big, cite, code,
  del, dfn, em, img, ins, kbd, q, s, samp,
  small, strike, strong, sub, sup, tt, var,
  b, u, i, center,
  dl, dt, dd, ol, ul, li,
  fieldset, form, label, legend,
  table, caption, tbody, tfoot, thead, tr, th, td,
  article, aside, canvas, details, embed, 
  figure, figcaption, footer, header, hgroup, 
  menu, nav, output, ruby, section, summary,
  time, mark, audio, video {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
  }
  /* HTML5 display-role reset for older browsers */
  article, aside, details, figcaption, figure, 
  footer, header, hgroup, menu, nav, section {
    display: block;
  }
  body {
    line-height: 1;
  }
  ol, ul {
    list-style: none;
  }
  blockquote, q {
    quotes: none;
  }
  blockquote:before, blockquote:after,
  q:before, q:after {
    content: '';
    content: none;
  }
  table {
    border-collapse: collapse;
    border-spacing: 0;
  }
  body { 
    text-align: center; 
    background:url('bg.png') center center;
    background-color: #80c462;
    height:374px;
  }
  h1 { font-size: 50px; }
  body { font: 16px Helvetica, sans-serif; color: #fff; }
  article { display: block; text-align: left; margin: 0 auto; }
  a { color: #dea82e; text-decoration: none; }
  a:hover { color: #333; text-decoration: none; }
  p{ padding: 0px; }
  .in{
    position:relative;
    height:374px;
  }
  .photo{
    float:left;
    width:283px;
    height:100%;
    -moz-box-shadow: inset 0px -25px 50px 25px rgba(0, 0, 0, 0.4);
    -webkit-box-shadow: inset 0px -25px 50px 25px rgba(0, 0, 0, 0.4);
    box-shadow: inset 0px -25px 50px 25px rgba(0, 0, 0, 0.4);
  }
  .calc{
    float:left;
    width:197px;
    height:100%;
    background:url('calc.png') center center;  
    -moz-box-shadow: 0px -25px 50px 25px rgba(0, 0, 0, 0.4);
    -webkit-box-shadow: 0px -25px 50px 25px rgba(0, 0, 0, 0.4);
    box-shadow: 0px -25px 50px 25px rgba(0, 0, 0, 0.4);
  }
  .steps{
    margin-left: 283px;
    padding: 15px;
    position: relative;
    height:344px;
  }
  strong{
    font-weight:bold;
  }
  @media all and (max-width: 415px) {
    .calc, .photo{
      display:none;
    }
    .steps{
      margin-left:0px;
    }
  }
  p {
    text-align: center;
    padding:0px 25px;
  }
  .nice-select, .nice-select .list .selected {
    background-color: #5c9544!important;
    border-color: #5c9544!important;   
    clear:none!important;  
  }
  .nice-select .list{
    background-color: #70ab55!important;
    border-color: #70ab55!important;   
  }
  .nice-select .list li:hover{
    background-color: #5c9544!important;
    border-color: #5c9544!important;      
  }
  .nice-select .option {
    line-height: 30px!important;    
    min-height: 30px!important;    
  }
  .blink_me {
    animation: blinker 2s linear infinite;
  }
  @keyframes blinker {
    50% {
      opacity: 0;
    }
  }
  a:hover .fa {
    animation: bounce 1s;
  }
  @keyframes bounce {
    0%, 20%, 60%, 100% {
      -webkit-transform: translateY(0);
      transform: translateY(0);
    }

    40% {
      -webkit-transform: translateY(-6px);
      transform: translateY(-6px);
    }

    80% {
      -webkit-transform: translateY(-3px);
      transform: translateY(-3px);
    }
  }

</style>
<article>
    <div class="in">        
        <div class="photo" style="background-image:url('[@thumbnail]');">
          <div class="calc"></div>  
        </div>        
        <div class="steps">
          <p style="padding-top:15px;font-size:14px;">[@area] м² | Артикул: [@article]</p>
          <p style="padding-top:5px;font-size:19px;padding:0px 15px;">[@title]</p>
          <p style="padding-top:10px;font-size:25px;">от <strong>[@cost]</strong> ₽</p>
          <p style="padding-top:15px;font-size:16px;font-style:italic;color:#ddffcf;">Что бы узнать точную цену</p>
          <p style="padding-top:5px;font-size:18px;color:#ddffcf;"><strong>1. Выберите тип “Фундаментa”</strong></p> 
          <p style="padding-top:12px;">
            <select class="wide">
              <option value="1">Ленточный</option>
              <option value="2">Свайный</option>
            </select>   
          </p> 
          <div style="position:absolute;left:0px;width:100%;text-align:center;bottom:25px;display:block;font-size:12px;color:#fff;">
              <p style="padding: 3px 0px;margin:0px 40px;background-color:#e19c25;margin-bottom:5px;font-size:10px;color:#fff;border-radius:7px;" class="blink_me">&nbsp;&nbsp;Получите индивидуальное предложение прямо сейчас!&nbsp;&nbsp;</p>
              <a style="border-radius:4px;margin:7px;color:#0058bc;" type="button" class="btn" href="tg://resolve?domain=seavalley" target="_blank"><i class="fa fa-send-o fa-lg" style="top:1px;left:-3px;color:#0058bc!important;" aria-hidden="true"></i>&nbsp;&nbsp;Telegram</a>  
              <a style="border-radius:4px;margin:7px;color:#4c7d00;" type="button" class="btn" href="https://api.whatsapp.com/send?phone=79164401342&amp;text=Здравствуйте! Хочу получить индивидуальное предложение по проекту [@article]" target="_blank"><i class="fa fa-whatsapp fa-lg" style="top:1px;left:-3px;color:#4c7d00!important;" aria-hidden="true"></i>&nbsp;&nbsp;WhatsApp</a>    
              <a style="border-radius:4px;margin:7px;color:#0058bc;" type="button" class="btn" href="skype:wigroupru" target="_blank"><i class="fa fa-skype fa-lg" style="top:1px;left:-3px;color:#0058bc!important;" aria-hidden="true"></i>&nbsp;&nbsp;Skype</a>
              <a style="border-radius:4px;margin:7px;color:#68008f;" type="button" class="btn" href="viber://add?number=79164401342" target="_blank"><i class="fa fa-phone-square fa-lg" style="top:1px;left:-3px;color:#68008f!important;" aria-hidden="true"></i>&nbsp;&nbsp;Viber</a>                            
          </div>

             
        </div>
    </div>
</article>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script type="text/javascript">
  /*$('.photo').animate({
    'background-position-x': '10%',
  }, 5000, 'linear');*/

  $(document).ready(function() { 
    $('select').niceSelect();   
    var movementStrength = 250;
    var height = movementStrength / $(window).height();
    var width = movementStrength / $(window).width();
    $(".photo").mousemove(function(e){
      var pageX = e.pageX - ($(window).width() / 2);
      var pageY = e.pageY - ($(window).height() / 2);
      var newvalueX = width * pageX * - 1 - 25;
      var newvalueY = height * pageY * -1 - 50;
      $('.photo').css("background-position-x", newvalueX+"px");
    });
  });
</script>
