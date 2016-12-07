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
<?php
/*
    var_dump($_FILES);
    exit;
*/
    ini_set("display_errors", "1");
    $uploaddir='/Applications/MAMP/htdocs/upload/file/';
    $uploadfile=$uploaddir . basename($_FILES['imagefile']['name']);

    echo '<pre>';
    if(move_uploaded_file($_FILES['imagefile']['tmp_name'], $uploadfile)) {
        echo "파일이 유효하고 성공적으로 업로드 되었다.!!!!";
    }
    else {
        print "파일 업로드 공격의 가능성이 있다.";
    }

    echo '자세한 디버깅 정보';
    print_r($_FILES);
    print "</pre>";

?>

    <img src="../upload/file/<?=$_FILES['imagefile']['name']?>" />
    
  </body>
</html>





















