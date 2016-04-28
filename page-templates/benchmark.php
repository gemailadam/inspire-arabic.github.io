<?php 
/*
Template Name:benchmark

*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
  <meta name="msvalidate.01" content="6D6BD641C9170735B2622423AB45F7FA" />
  <title>Benchmark Email ايميلات بنش مارك بالجمله</title>
  <link href="http://www.benchmarkemail.com/style/reset.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style-home-min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/animation-min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/hbootstrap-arabic-min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/hbootstrap-row-min.css">

  <style>
/*navigation*/

header {
  margin-top:3%;
}

body {
  background:#fff;
  color:#343b40;
  font-family:"Helvetica Neue",Helvetica,Arial,"ヒラギノ角ゴPro W3","Hiragino Kaku Gothic Pro","Osaka",'meiryo','メイリオ','ms pgothic','ms pゴシック',"微軟正黑體","Microsoft JhengHei",sans-serif;
  font-size:16px;
  font-smoothing:antialiased;
}

h1 {
  display:block;
  text-indent:-99999px;
  background-position:0 0;
  width:166px;
  height:38px;
  float:left;
}

h2 {
  font-size:36px;
  line-height:36px;
  font-weight:bold;
  color:#3c464d;
}

h3 {
  font-size:24px;
  line-height:36px;
}

p {
  font-size:14px;
  line-height:26px;
}

h1,
.templates-icon,
.wpa-email-blackberry,
.wpa-email-gmail,
.wpa-email-outlook-2003,
.wpa-email-outlook-2013,
.wpa-email-yahoo,
.footer-social-yt:after,
.footer-social-fb:after,
.footer-social-tw:after,
.footer-social-gp:after {
  background:url(http://www.benchmarkemail.com/images/wpa/wpa-sprites.png) no-repeat;
}

.wpa-email-blackberry {
  background-position:-100px -208px;
  width:90px;
  height:57px;
}

.wpa-email-gmail {
  background-position:-100px -75px;
  width:90px;
  height:57px;
}

.wpa-email-outlook-2003 {
  background-position:0 -208px;
  width:90px;
  height:57px;
}

.wpa-email-outlook-2013 {
  background-position:-100px -143px;
  width:90px;
  height:57px;
}

.wpa-email-yahoo {
  background-position:0 -143px;
  width:90px;
  height:57px;
}

.wide-section-container {
  width:100%;
}

.wide-section {
  position:relative;
  margin:0 auto;
  width:840px;
  padding:0 20px;
}

header {
  background:#3c464e;
  padding:15px 0 10px;
}

.plan {
  display:inline-block;
  color:#fff;
  background:#72c2a1;
  padding:10px 25px;
  font-size:18px;
  border-radius:4px;
  float:right;
  margin:0;
  text-decoration:none;
}

.plan:hover {
  background:#3ec28b;
}

.cover {
  padding-top:30px;
  text-align:center;
  background:url(http://www.benchmarkemail.com/images/wpa/wpa-cover.jpg) no-repeat center -200px fixed;
  background-size:cover;
  overflow:hidden;
}

.templates {
  padding:40px 0 55px;
  text-align:center;
}

.cover h3 {
  margin-bottom:30px;
}

.templates h3 {
  display:inline-block;
  width:400px;
  margin-left:45px;
  text-align:left;
  vertical-align:middle;
}

.templates-icon {
  display:inline-block;
  background-position:0 -49px;
  width:82px;
  height:86px;
  vertical-align:middle;
}

.clearfix:after {
  display:block;
  content:"";
  height:0;
  clear:both;
}

.abtesting {
  padding:40px 0 55px;
  background:#f5f5f7;
}

.abtesting h3 {
  display:inline-block;
  width:400px;
  margin:45px 0 0 50px;
}

.inboxchecker {
  padding:45px 0 55px;
}

.inboxchecker h3 {
  display:inline-block;
  width:375px;
  margin:35px 50px 0 20px;
  vertical-align:top;
}

.abtesting .window,
.inboxchecker .window {
  display:inline-block;
  width:360px;
  min-height:215px;
  border-top-left-radius:5px;
  border-top-right-radius:5px;
  box-shadow:0 1px 8px rgba(0,0,0,0.1);
  vertical-align:top;
  background:#fff;
}

.abtesting .window {
  margin-left:20px;
}

.abtesting .windowtop,
.inboxchecker .windowtop {
  position:relative;
  height:12px;
  background:#c9cdd2;
  border-top-left-radius:5px;
  border-top-right-radius:5px;
}

.abtesting .windowtop:after,
.inboxchecker .windowtop:after {
  font-family:serif;
  position:absolute;
  display:block;
  content:"...";
  color:#f5f5f7;
  font-size:40px;
  line-height:12px;
  top:-11px;
  left:3px;
  letter-spacing:-2px;
}

.abtesting .windowcontent {
  padding:15px 10px 20px;
  width:340px;
}

.inboxchecker .windowcontent {
  padding:15px 30px 20px;
  width:300px;
}

.ab-window-test-type {
  border-bottom:1px solid #e0e4e7;
}

.ab-window-test-type {
  padding:5px 0 20px;
}

.ab-window-test-results {
  padding:10px 0 0;
}

.ab-window-test-type > span {
  font-size:18px;
}

.ab-window-col {
  display:inline-block;
  margin:0 0 0 5%;
  vertical-align:middle;
  width:35%;
}

.vs {
  width:10%;
}

.ab-window-col:last-child {
  margin-right:0;
}

.ab-window-test-results .ab-window-col {
  font-size:14px;
  line-height:18px;
}

.ab-window-test-results .vs {
  font-size:18px;
}

.ab-window-col .ab-window-btn {
  background:#c8cdd1;
  border-radius:3px;
  color:#fff;
  display:inline-block;
  font-size:12px;
  margin-top:35px;
  padding:5px 10px;
  text-align:center;
}

.emailclient-wrapper {
  width:300px;
}

.emailclient-wrapper:first-child {
  margin-bottom:20px;
}

.emailclient-container {
  float:left;
  margin-right:15px;
}

.emailclient-container p {
  font-size:10px;
  line-height:15px;
  padding-bottom:2px;
  font-weight:bold;
  color:#555555;
  text-align:center;
}

.last {
  float:left;
  margin-right:0;
}

.signup {
  padding:55px 0 65px;
  background:url('http://www.benchmarkemail.com/images/wpa/wpa-pattern.png') repeat;
  text-align:center;
}

.signup h3 {
  font-size:36px;
  color:#fff;
  font-weight:bold;
  margin-bottom:25px;
}

.signup .signup-textfield {
  border:3px solid #d7d7d7;
  box-shadow:none;
  border-radius:8px;
  color:#525e66;
  font-size:18px;
  margin-right:10px;
  padding:8px 10px;
  vertical-align:top;
  width:160px;
  height:31px;
  line-height:31px;
  vertical-align:middle;
}

.startnow {
  cursor:pointer;
  display:inline-block;
  padding:18px 40px;
  text-align:center;
  background:#72c2a1;
  border:none;
  font-size:24px;
  line-height:24px;
  color:#fff;
  border-radius:5px;
  vertical-align:middle;
  font-weight:normal;
}

.startnow:hover {
  background:#3ec28b;
}

.startnow:active {
  box-shadow:inset 0 2px 0 rgba(0,0,0,0.2);
}

footer {
  padding:30px 0 65px;
}

footer p {
  float:left;
  line-height:14px;
  margin-left:20px;
}

.footer-social {
  float:right;
  margin-right:20px;
}

.footer-social li {
  float:left;
}

.footer-social li a {
  background:#b3bbc1;
  border-radius:100%;
  display:block;
  margin-left:15px;
  padding:15px 25px;
  position:relative;
  text-indent:-99999px;
  transition:background 0.2s ease-in;
  white-space:nowrap;
  line-height:20px;
}

.footer-social li a:after {
  content:'';
  display:block;
  position:absolute;
}

.footer-social-yt:after {
  background-position:-203px 0;
  width:27px;
  height:20px;
  top:15px;
  left:11px;
}

.footer-social li a.footer-social-yt:hover {
  background:#ce332d;
}

.footer-social-fb:after {
  background-position:-216px -114px;
  width:14px;
  height:26px;
  top:12px;
  left:17px;
}

.footer-social li a.footer-social-fb:hover {
  background:#3b5998;
}

.footer-social-tw:after {
  background-position:-206px -33px;
  width:24px;
  height:20px;
  top:15px;
  left:14px;
}

.footer-social li a.footer-social-tw:hover {
  background:#2daddc;
}

.footer-social-gp:after {
  background-position:-199px -71px;
  width:31px;
  height:31px;
  top:9px;
  left:13px;
}

.footer-social li a.footer-social-gp:hover {
  background:#e54933;
}

.device-wrap {
  position:relative;
  width:100%;
  height:315px;
}

.device-window-wrap {
  position:absolute;
  left:170px;
  bottom:0;
}

.device-mobile-wrap {
  position:absolute;
  left:545px;
  bottom:0;
}

.device-window {
  float:left;
  width:440px;
  height:310px;
  border-radius:5px;
  box-shadow:0 2px 8px rgba(0,0,0,0.2);
  position:relative;
}

.device-mobile {
  float:left;
  width:130px;
  height:215px;
  padding:35px 5px 0 5px;
  border-top:3px solid #efefef;
  border-left:3px solid #efefef;
  border-right:3px solid #efefef;
  background-color:#f5f5f7;
  border-radius:20px 20px 0 0;
  box-shadow:0 2px 20px rgba(0,0,0,0.3);
  z-index:10;
  position:relative;
}

.device-mobile:before {
  position:absolute;
  content:"";
  width:4px;
  height:4px;
  left:66px;
  top:5px;
  border-radius:100%;
  background-color:#0f0b08;
  border:2px solid #e4e4e4;
}

.power-button {
  position:absolute;
  width:25px;
  height:3px;
  right:18px;
  top:-6px;
  background-color:#f7f7f8;
  border-left:1px solid #d9d9d9;
  box-shadow:-1px -1px 2px rgba(0,0,0,0.1),inset 0 0 1px rgba(0,0,0,0.1);
}

.side-buttons span {
  position:absolute;
  width:1px;
  height:12px;
  left:-5px;
  top:65px;
  background-color:#e6e6e4;
  border-left:1px solid #d9d9d9;
  box-shadow:-1px 2px 2px rgba(0,0,0,0.1),inset 0 0 1px rgba(0,0,0,0.1);
}

.side-buttons span:first-child {
  left:-5px;
  top:38px;
  height:15px;
}

.side-buttons span:last-child {
  left:-5px;
  top:85px;
}

.speaker-grill {
  position:absolute;
  width:26px;
  height:3px;
  left:55px;
  top:20px;
  border-radius:5px;
  background-color:#667279;
  border:2px solid #e4e4e4;
}

.device-window-top {
  display:block;
  width:100%;
  height:12px;
  background-color:#e6e6e8;
  position:relative;
  border-radius:5px 5px 0 0;
}

</style>
<script src="http://www.benchmarkemail.com/script/prefixfree.min.js"></script>
<!--[if lt IE 9]>
<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <script src="/script/selectivizr-min.js"></script>
  <![endif]-->
  <script src="http://www.benchmarkemail.com/script/jquery-1.7.1.min.js"></script>
  <script>          
  $(document).keypress(function (event) {
    var keycode = (event.keyCode ? event.keyCode:event.which);
    if (keycode == '13') {
      $("#frm_submit_new").click();
    }
  }

  );
  </script>
  <script>
  var PrefixURL = "http://www.benchmarkemail.com";
  $(document).ready(function () {
    $("#frm_submit_new").click(function () {
      var fname = ($("#frm_first_name").val() != '' &;&; $("#frm_first_name").val() != $("#frm_first_name").attr("placeholder")) ? $("#frm_first_name").val():'';
      var lname = ($("#frm_last_name").val() != '' &;&; $("#frm_last_name").val() != $("#frm_last_name").attr("placeholder")) ? $("#frm_last_name").val():'';
      var emailval = ($("#frm_email_new").val() != '' &;&; $("#frm_email_new").val() != $("#frm_email_new").attr("placeholder")) ? $("#frm_email_new").val():'';
      var partnerid = $("#prt_partner_id").val();
      if (typeof (partnerid) == "undefined") {
        partnerid = "";
      }

      var submitmode = $("#submitmode").val();
      if (typeof (submitmode) == "undefined") {
        submitmode = "";
      }

      if (fname != '' || lname != '' || emailval != '')
      window.location = PrefixURL + "/Register?prt=" + partnerid + "&smode=" + submitmode + "&frm_fname=" + encodeURIComponent(fname) + "&frm_lname=" + encodeURIComponent(lname) + "&frm_email=" + encodeURIComponent(emailval);
      else      
       window.location = PrefixURL + "/Register?prt=" + partnerid + "&smode=" + submitmode;
    }

    );
$("#frm_email_new").keypress(function (event) {
  var keycode = (event.keyCode ? event.keyCode:event.which);
  if (keycode == '13') {
    $("#frm_submit_new").click();
  }
}

);
}

);
</script>

</head>
<body>
<div class="container">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="nav-zxc">
    <?php wp_nav_menu(array('theme_location'=>'header-top-home')); ?>
    <!--?php dynamic_sidebar('search'); ?-->
  </div>
  </div>
 <header class="wide-section-container">     
 <div class="wide-section clearfix">       
  <h1 href="http://www.benchmarkemail.com" class="logo">Benchmark</h1>        
  <a href="http://www.benchmarkemail.com/Register?prt=616397" class="plan">الفين ايميل مجاني</a>       
  <!-- Include any needed partner reference like partner id as hidden tags -->      
</div>    
</header>        
<section class="wide-section-container cover">     
  <div class="wide-section">       
   <h2>إنشاء وإرسال حملات البريد الالكتروني</h2>        
   <h3>استخدم بنش مارك Benchmark Email</h3>       
   <div class="device-wrap">         
    <div class="device-window-wrap">            
      <div class="device-window">
        <div class="device-window-top"></div>
        <?php $benchmark=get_template_directory_uri().'/images/benchmark.jpg';
        echo '<img class="" src="';
        echo get_theme_mod('anything',$benchmark);
        echo '" alt="desktop template" width="440" height="300" />';
        ?>

      </div>          
    </div>          
    <div class="device-mobile-wrap">            
      <div class="device-mobile">             
        <span class="speaker-grill"></span>             
        <div class="power-button"></div>              
        <div class="side-buttons">
          <span></span><span></span><span></span>
        </div>             
        <img src="http://www.benchmarkemail.com/images/wpa/wpa-mobile.jpg" alt="mobile template" width="130" height="215" />            
      </div>          
    </div>        
  </div>     
</div>    
</section>        
<section class="wide-section-container templates">      
  <div class="wide-section">        
    <div class="templates-icon"></div>        
    <h3>مع اكثر من ربعمائة قالب انشئ تصميم جاهز لبريدك الإلكتروني لأي مناسبة </h3>     
  </div>   
</section>       
<section class="wide-section-container abtesting">      
  <div class="wide-section">              
    <div class="window">         
     <div class="windowtop"></div>        
     <div class="windowcontent">         
      <div class="ab-window-test-type clearfix">            
        <span class="ab-window-col">اختبار المجموعه ا</span>             
        <span class="ab-window-col vs">مقابل</span>              
        <span class="ab-window-col">اختبار المجموعه ب</span>           
      </div>           
      <div class="ab-window-test-results clearfix">             
        <span class="ab-window-col">شحن مجاني<span class="ab-window-btn">اختار فائز</span></span>             
        <span class="ab-window-col vs">مقابل</span>              
        <span class="ab-window-col">اطلب لشحن مجاني<span class="ab-window-btn">اختر فائز</span></span>           
      </div>         
    </div>        
  </div>        
  <h3>تعلم  كيف ترتبط بعملائك من خلال اختباريين  أ / ب يشبه ذلك الكره السحريه الخاصه بك التي ترى بها المستقبل .</h3>   
  </div>   
</section>      
<section class="wide-section-container inboxchecker">  
  <div class="wide-section">          
    <h3>مع فاحص البريد الوارد ، انظر لترى ما يبدو عليه التصميم الخاص بك  قبل أن يتم تسليمه لجميع عملاء البريد الإلكتروني</h3>      
      <div class="window">   
        <div class="windowtop"></div>   
        <div class="windowcontent">        
          <div class="emailclient-wrapper clearfix">         
            <div class="emailclient-container">     
              <p>Gmail (Explorer)</p>          
              <div class="wpa-email-gmail"></div>    
            </div>         
            <div class="emailclient-container">  
              <p>Gmail (Chrome)</p>       
              <div class="wpa-email-gmail"></div> 
            </div>      
            <div class="emailclient-container last">          
              <p>Outlook 2013</p> 
              <div class="wpa-email-outlook-2013"></div>              
            </div>            
          </div>            
          <div class="emailclient-wrapper clearfix">              
            <div class="emailclient-container">               
              <p>Yahoo! Mail</p>                
              <div class="wpa-email-yahoo"></div>             
            </div>              
            <div class="emailclient-container">              
             <p>Outlook 2013</p>              
             <div class="wpa-email-outlook-2003"></div>              
           </div>              
           <div class="emailclient-container last">                
            <p>Blackberry 4 OS</p>                
            <div class="wpa-email-blackberry"></div>             
          </div>            
        </div>          
      </div>        
    </div>      
  </div>    
</section> 
<section class="video-zxc" style="margin:auto auto;text-align:center;">
<iframe width="560" height="315" src="https://www.youtube.com/embed/AManmdjeFjA" frameborder="0" allowfullscreen ></iframe>
<br /> 
<a href="http://www.benchmarkemail.com?p=616397" target="_blank" style="display:inline-block;font-family:Helvetica,Arial,sans-serif;font-size:20px;color:#fff;text-decoration:none;margin:20px 0;padding:18px 36px;border-radius:4px;background-color:#04cdb0;">ابدا معنى مجانا	</a>

</section>
<section class="wide-section-container signup">      
  <div class="wide-section">              
    <h3>انشئ اول ايميل بواسطة بنش مارك</h3>         
    <!-- <input type="text" onFocus="if(this.value=='First Name')this.value='';" placeholder="First Name" value="First Name" class="signup-textfield" id="frm_first_name" /> -->
    <!-- <input type="text" onFocus="if(this.value=='Last Name')this.value='';" placeholder="Last Name" value="Last Name" class="signup-textfield" id="frm_last_name" />           -->
    <!-- <input type="text" onFocus="if(this.value=='Email Address')this.value='';" placeholder="Email Address" value="Email Address" class="signup-textfield" id="frm_email_new" />                   -->
    <!-- <input type="submit" value="Start Now" class="startnow" id="frm_submit_new"> -->
    <a href="http://www.benchmarkemail.com?p=616397" target="_blank" style="display:inline-block;font-family:Helvetica,Arial,sans-serif;font-size:20px;color:#fff;text-decoration:none;margin:20px 0;padding:18px 36px;border-radius:4px;background-color:#04cdb0;">
    <input value="هيا لنبدا" class="startnow" id="frm_submit_new" type="submit">
    </a>
    <!-- Include any needed partner reference like partner id as hidden tags -->                    
    <input type="hidden" value="616397" id="prt_partner_id" name="prt_partner_id">                    
    <input type="hidden" value="webad" id="submitmode" name="submitmode">     
  </div>    
</section>        
<footer class="wide-section-container">     
  <div class="wide-section clearfix">             
    <p>Copyright © 2016 Benchmark Internet Group</p>       
    <ul class="footer-social">                    
      <li><a target="_blank" title="Follow us on Youtube" class="footer-social-yt" href="https://www.youtube.com/benchmarkemail">Youtube</a>
      </li>
      <li><a target="_blank" title="Follow us on Facebook" class="footer-social-fb" href="http://www.facebook.com/BenchmarkEmail">Facebook</a></li>
      <li><a target="_blank" title="Follow us on Twitter" class="footer-social-tw" href="http://twitter.com/benchmarkemail">Twitter</a></li>
      <li><a target="_blank" title="Follow us on Google Plus" class="footer-social-gp" href="https://plus.google.com/b/100983246413411928696/100983246413411928696/">Google Plus</a></li>       
    </ul>     
  </div>    
</section>
</div>
</body>
</html>