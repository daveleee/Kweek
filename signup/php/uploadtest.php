<?php
    echo $_SERVER["DOCUMENT_ROOT"];
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
  </head>
  <body>
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <img src="../img/pickachew_logo.png" width="26%" align="center">
      <div class="jumbotron">
        <h2><b>&nbsp;&nbsp;Korean Restaurant Week in New York City</b></h2>
        <br>
         &nbsp;&nbsp;&nbsp;1. APPLY your coupon CODE<br><br>
         &nbsp;&nbsp;&nbsp;2. Wait until the coupon Arrives<br><br>
         &nbsp;&nbsp;&nbsp;3. Enjoy A $5 lunch During Korean Restaurant Week <br>
        <img src="../img/id_card.png">
        <br>


        <form name="user_form" action="1.php" method="post" class="form-inline" enctype="multipart/form-data">
          <div class="col-xs-6">
            <label for="exampleInputFile">Upload Your Image For Coupon</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="800000000"></input>
            <input type="file" name="imagefile" id="image"></input>
            <p class="help-block">This image will use only for your ID Card.</p>
          </div><br><br><br><br><br><br><br>

          <div class="col-xs-5">
          <input type="submit" value="SUBMIT" name="smt" id="smt" class="btn btn-primary"></input>
          </div><br><br>
        </form>

      </div>
    </div>
  </div>
  </body>
</html>














