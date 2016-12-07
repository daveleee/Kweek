<!-- If restaurant owner wanna checking customer's $5 lunch id, this page is for restaurant owner-->

<?php
  //url을 통해 넘어온 변수 받기
  $res_name=$_GET[res_name];
  $res_number=$_GET[res_no];    //qr_code 테이블에서 chance 몇회 남았는지 확인할때 사용할것임. qr_(res_no) 이런식.
  $qr_index=$_GET[qr_index]; //qr_code 테이블에서 chance 몇회 남았는지 확인할 때 사용할것임.

	require_once('/home/kweek/kweeknyc.com/signup/config.php');  //서버 업로드시 수정해야 할 부분
?>

<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 위 3개의 메타 태그는 *반드시* head 태그의 처음에 와야합니다; 어떤 다른 콘텐츠들은 반드시 이 태그들 *다음에* 와야 합니다 -->
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- 부가적인 테마 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <title>$5 Lunch Event</title>

    <!-- 부트스트랩 -->
    <link href="./bootstrap/css/bootstrap-theme.css" rel="stylesheet">
    <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="./bootstrap/css/bootstrap.css" rel="stylesheet">

    <link href="./css/jumbotron-narrow.css" rel="stylesheet">


    <!-- IE8 에서 HTML5 요소와 미디어 쿼리를 위한 HTML5 shim 와 Respond.js -->
    <!-- WARNING: Respond.js 는 당신이 file:// 을 통해 페이지를 볼 때는 동작하지 않습니다. -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (부트스트랩의 자바스크립트 플러그인을 위해 필요합니다) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- 모든 컴파일된 플러그인을 포함합니다 (아래), 원하지 않는다면 필요한 각각의 파일을 포함하세요 -->
    <script src="./bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
      <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <img src="../../img/logo_transparent.png" width="30%" align="center">
      <div class="jumbotron">
        <h2><b>&nbsp;&nbsp;$5 Lunch ID Checking Page for Restaurant Owner</b></h2>
        <br>
        <br>


<!--         <form name="user_form" action="user_test_submit_local.php" method="post" class="form-inline" enctype="multipart/form-data"> -->

          <div class="col-xs-12">
            <label for="search">Search Restaurant Name</label>
            <h3> <?php echo $res_name; ?> </h3> 
          </div><br><br>

		<!-- Dropdown Menu Start -->
          <div class="col-xs-12">
            <script language="Javascript">
            var theTarget = "_self";
            function goThere(){
                    if(!document.theForm.theMenu.selectedIndex==""){
                    window.open(document.theForm.theMenu.options[document.theForm.theMenu.selectedIndex].value,theTarget,"");}}
            </script>
          <form name="theForm">
          <select class="form-control" name="theMenu" onchange="goThere()">
          <option> ------- Select ------- </option>
<?php
	$sql1='select res_no, res_name from tbl_restaurant';
	$result1=mysqli_query($conn, $sql1);

	while($row1=mysqli_fetch_assoc($result1)) {
		$res_name=$row1['res_name'];
    $res_no=$row1['res_no'];
?>
    <!--서버 업로드시 수정해야 할 부분-->
		<option value="http://www.kweeknyc.com/signup/php/user/user_230_in.php?res_name=<?php echo $res_name;
                   ?>&res_no=<?php echo $res_no; ?>&qr_index=<?php echo $qr_index; ?>">
			<?php echo $row1['res_name'];?>
		</option>
<?php
}
?>
          </select>
          </form>
          </div><br><br><br>       
		<!-- Dropdown Menu Finish -->

		  <div class="col-xs-12">
            <label for="res_no">Restaurant Number : 
              <?php
                echo $res_number;
              ?>            
            </label> 
            <label for="search">The chance left : 
            <?php  
            	$sql2="SELECT qr_".$res_number." FROM tbl_qrcode WHERE qr_index=".$qr_index."";
              $result2=mysqli_query($conn, $sql2);

              if($result2)
              {
                while($row2=mysqli_fetch_assoc($result2)) {
                  $qr=$row2["qr_".$res_number.""];

                  echo $qr;
                }                
              }
              else
              {
                echo "Error in sql!";
              }
            ?>
            </label>
          </div><br><br>

          <div class="col-xs-5">
          <input type="button" value="Check it!" name="smt" id="smt" class="btn btn-primary" 
          onclick="if(<?php echo $qr;?> <= '0'){myFunc()}else{myFunc2()}"> 
          </input>

            <!-- 서버 업로드 시 수정해야 할 부분-->
            <script>
              function myFunc() {
                alert('[NOT AVAILABLE!] This user already used coupon. Sorry.');
                location.replace('../user/user_230.php');
              }

              function myFunc2() {
                location.replace('../user/user_230_update.php?qr_index=<?php echo $qr_index; ?>&qr=<?php echo $qr; ?>&res_number=<?php echo $res_number; ?>');
              }
            </script>
          
<!--             <?php
              //echo "<script> alert('[NOT AVAILABLE!] This user already used coupon. Sorry.');
              //location.replace('../php/user_test_local.php'); </script>";
            ?>


            <?php
              //echo "location.href='../php/user_test_update_local.php?qr_index=<?php echo $qr_index; ?>&qr=<?php echo $qr; ?>&res_number=<?php echo $res_number; ?>'";
            ?> -->
        
          </div><br><br>

<!--         </form> -->

      </div>
    </div>
  </div>
  </body>
</html>

































