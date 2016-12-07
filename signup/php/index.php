<!-- $5 Lunch apply form-->
<?php
	//echo $_SERVER["DOCUMENT_ROOT"];
?>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 위 3개의 메타 태그는 *반드시* head 태그의 처음에 와야합니다; 어떤 다른 콘텐츠들은 반드시 이 태그들 *다음에* 와야 합니다 -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- 부가적인 테마 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <title>$5 Lunch Event</title>

    <!-- 부트스트랩 -->
    <link href="../bootstrap/css/bootstrap-theme.css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">

    <link href="../css/jumbotron-narrow.css" rel="stylesheet">


    <!-- IE8 에서 HTML5 요소와 미디어 쿼리를 위한 HTML5 shim 와 Respond.js -->
    <!-- WARNING: Respond.js 는 당신이 file:// 을 통해 페이지를 볼 때는 동작하지 않습니다. -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (부트스트랩의 자바스크립트 플러그인을 위해 필요합니다) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- 모든 컴파일된 플러그인을 포함합니다 (아래), 원하지 않는다면 필요한 각각의 파일을 포함하세요 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>

    <!-- Google Analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-81112806-1', 'auto');
      ga('send', 'pageview');

    </script>
  </head>
  <body>
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <img src="../img/pickachew_logo.png" width="26%" align="center">
      <div class="jumbotron">
        <h2><b>&nbsp;&nbsp;Korean Restaurant Week in New York City</b></h2>
        <br>
         &nbsp;&nbsp;&nbsp;1. APPLY your $5 Lunch ID<br><br>
         &nbsp;&nbsp;&nbsp;2. Wait until the $5 Lunch ID Arrives<br><br>
         &nbsp;&nbsp;&nbsp;3. Enjoy A $5 Lunch During Korean Restaurant Week <br><br>
         &nbsp;&nbsp;&nbsp;* Please note that some restaurants may have different discount rates or none at all. *<br><br>
        <img src="../img/id_card.png" width="70%" align="center">
        <br><br>

        <!-- 회원가입 정규식-->        
        <script language="javascript"> 
        function check() { 
            if (!document.user_form.firstName.value) { 
                alert("Please input your first name."); 
                document.user_form.firstName.focus(); 
                return false; 
                } 

            if (!document.user_form.lastName.value) { 
                alert("Please input your last name."); 
                document.user_form.lastName.focus(); 
                return false; 
                } 
            if (!document.user_form.emailAddress.value) { 
                alert("Please input your Email address."); 
                document.user_form.emailAddress.focus(); 
                return false; 
                } 
            if (!document.user_form.phoneNumber.value) { 
                alert("Please input your phone number."); 
                document.user_form.phoneNumber.focus(); 
                return false; 
                } 
        }
        </script>
        <!-- /. 회원가입 정규식 -->

        <form name="user_form" action="add_db.php" method="post" class="form-inline" enctype="multipart/form-data" onsubmit="return check();">
          <div class="col-lg-4 col-sm-6">
            <label for="firstName" class="col-sm-10 control-label">First Name</label>
            <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Input your first name" size="40" maxlength="10">
          </div><br><br><br>
          
          <div class="col-lg-4 col-sm-6">
            <label for="lastName" class="col-sm-10 control-label">Last Name</label>
            <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Input your last name" size="40" maxlength="10">
          </div><br><br><br>
            
          <div class="col-lg-4 col-sm-6">
            <label for="emailAddress" class="col-sm-10 control-label">Email Address</label>
            <input type="text" class="form-control" name="emailAddress" id="emailAddress" placeholder="Input your email address" size="40" maxlength="30">
          </div><br><br><br>

          <div class="col-lg-4 col-sm-6">
            <label for="phoneNumber" class="col-sm-10 control-label">Phone Number</label>
            <input type="text" class="form-control" name="phoneNumber" id="phoneNumber" placeholder="Input your phone number. i.g. 3478404624" size="40" maxlength="15">
          </div><br><br><br><br>
     
          <div class="col-lg-4 col-sm-6">
           <label for="gender">Gender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <div class="radio">
              <label>  
                <input type="radio" name="gender" id="gender" value="m" checked>
                Male <br>
                <input type="radio" name="gender" id="gender" value="f">
                FeMale
              </label>
            </div>
          </div> <br><br><br><br><br>

          <div class="col-lg-4 col-sm-6">
           <label for="gender">Age Group&nbsp;&nbsp;</label>
            <div class="radio">
              <label>
                <input type="radio" name="ageGroup" id="ageGroup" value="under18" checked>
                Under 18 <br>
                <input type="radio" name="ageGroup" id="ageGroup" value="18-24">
                18-24 <br>
                <input type="radio" name="ageGroup" id="ageGroup" value="25-39">
                25-39 <br>
                <input type="radio" name="ageGroup" id="ageGroup" value="40AndAbove">
                40 and above <br>
              </label>
            </div>
          </div> <br><br><br><br><br><br><br><br>

          <div class="col-lg-4 col-sm-6">

            <label for="exampleInputFile">Upload Your Selfie For ID</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="800000000"> </input>
            <input type="file" name="imagefile" id="image" size="30"> </input>
            <div class="col-lg-12 col-sm-6">
            <p class="help-block">This image will use only for your ID.</p>
            </div>
          </div><br><br><br><br><br><br><br>

          <div class="col-lg-5 col-sm-6">
          <input type="submit" value="Submit" name="smt" id="smt" class="btn btn-primary"> </input>
          </div><br><br>

        </form> <br><br><br><br>

        &nbsp;&nbsp;&nbsp;* Now, the number of restaurant that offering discounted prices is presently 13. <br>
&nbsp;&nbsp;&nbsp;These menus are offered at a discounted price if you have $5 Lunch ID. *<br><br><br><br>
&nbsp;&nbsp;&nbsp;1. Geo Si Gi Inc<br>
&nbsp;&nbsp;&nbsp;Geosigi Gamjatang For 2 : $33.95 -> $17.95 (50% discounts!)<br>
&nbsp;&nbsp;&nbsp;Geosigi Gamjatang For 3 : $42.95 -> $21.95 (50% discounts!)<br>
&nbsp;&nbsp;&nbsp;Geosigi Gamjatang For 4 : $51.95 -> $26.95 (50% discounts!)<br>
&nbsp;&nbsp;&nbsp;Spicy Marinated Pork Feet : $30.95 -> $21.95<br>
&nbsp;&nbsp;&nbsp;Seafood Fancake : $21.95 -> $15.95<br><br>

&nbsp;&nbsp;&nbsp;2. Barn Joo 35<br>
&nbsp;&nbsp;&nbsp;Mocha Bingsoo $13-> $6 (Only 05:00PM - 12:00AM)<br><br>

&nbsp;&nbsp;&nbsp;3. On now lounge<br>
&nbsp;&nbsp;&nbsp;Galbi slider $14 -> $10 <br>
&nbsp;&nbsp;&nbsp;White Gummy bear $14 -> $10  <br>
&nbsp;&nbsp;&nbsp;Hite $5 -> $3<br><br>

&nbsp;&nbsp;&nbsp;4. Starry night<br>
&nbsp;&nbsp;&nbsp;Spicy Sausage, kimchi, Ham casserole $22.95 -> $ 11.95<br><br>

&nbsp;&nbsp;&nbsp;5. Sweet Churros<br>
&nbsp;&nbsp;&nbsp;Churro-box $5 -> $4<br>
&nbsp;&nbsp;&nbsp;Fresh squeezed fruit ade $6 -> $5<br>
&nbsp;&nbsp;&nbsp;Icecream Churro $6 -> $5<br><br>

&nbsp;&nbsp;&nbsp;6. Hae-In Sushi and Sashimi  <br>
&nbsp;&nbsp;&nbsp;Udon $9.99 -> $5 (Only Lunch)<br>
&nbsp;&nbsp;&nbsp;Pork Cutlet $9.99 -> $5 (Only Lunch)<br>
&nbsp;&nbsp;&nbsp;Spicy Tofu Stew $9.99 -> $5 (Only Lunch)<br><br>

&nbsp;&nbsp;&nbsp;7. Poonglim<br>
&nbsp;&nbsp;&nbsp;Marinated Noodles with slices of Vegetables (잡채) $21.95-> $19.75 All day<br>
&nbsp;&nbsp;&nbsp;All menus 10% discounts!<br><br>

&nbsp;&nbsp;&nbsp;8. Zu Rang Restaurant<br>
&nbsp;&nbsp;&nbsp;Zurang whole Chicken $21.95 -> $16.95          <br>
&nbsp;&nbsp;&nbsp;Stir-fried Rice Cake with seafood $19.95 -> $14.95<br><br>

&nbsp;&nbsp;&nbsp;9. Sheeroo Cafe<br>
&nbsp;&nbsp;&nbsp;All snow flakes 20% discounts!<br><br>

&nbsp;&nbsp;&nbsp;10. Coffee Monster<br>
&nbsp;&nbsp;&nbsp;Shaved ice $2 discounts! (Only Lunch)<br><br>

&nbsp;&nbsp;&nbsp;11. Hahm Ji Bach<br>
&nbsp;&nbsp;&nbsp;BBQ 20% discounts!(Only Lunch)<br>
&nbsp;&nbsp;&nbsp;All menus 10% discounts!(Only Lunch)<br><br>

&nbsp;&nbsp;&nbsp;12. Byungchun Soondae<br>
&nbsp;&nbsp;&nbsp;Korean Sausage Soup $9.99 -> $7.99<br>
&nbsp;&nbsp;&nbsp;Cattle Head Soup $11.99 -> $9.99<br>
&nbsp;&nbsp;&nbsp;Trotter(Pork Feet) $24.99 -> $22.99<br><br>

&nbsp;&nbsp;&nbsp;13. San Soo Kap San 2<br>
&nbsp;&nbsp;&nbsp;Wagyu $65.95 -> $53.00<br>
&nbsp;&nbsp;&nbsp;Prime Rib Eye $35.95 -> $28.00<br>
&nbsp;&nbsp;&nbsp;Dry Aged $47.99 -> $38.00<br><br>
      </div>
    </div>
  </div>
  </body>
</html>

































