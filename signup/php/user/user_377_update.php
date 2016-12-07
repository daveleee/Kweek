<!-- If restaurant owner wanna checking customer's $5 lunch id, this page is for restaurant owner-->

<?php
  //url을 통해 넘어온 변수 받기
  $qr_index=$_GET[qr_index]; 
  $qr=$_GET[qr];
  $res_no=$_GET[res_number];

	require_once('/home/kweek/kweeknyc.com/signup/config.php');  //서버 업로드시 수정해야 할 부분
?>

<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 위 3개의 메타 태그는 *반드시* head 태그의 처음에 와야합니다; 어떤 다른 콘텐츠들은 반드시 이 태그들 *다음에* 와야 합니다 -->
  </head>
  <body>
      <h1>HELLO WORLD! TEST!</h1>
      <?php
        echo "QR_Index:";
        echo $qr_index;
        echo "RES_No:"; 
        echo $res_no;
        echo "QR:";
        echo $qr;
      ?>
      <h1>Test Finish </h1>

      <?php
        //SQL UPDATE (decrease 1)
        $sql="UPDATE `tbl_qrcode` SET `qr_".$res_no."`=`qr_".$res_no."`-'1' WHERE `qr_index`='".$qr_index."'";
        $result=mysqli_query($conn, $sql);

        //서버 업로드시 수정해야 할 부분 
        echo "<script> alert('[Your update has successed!] Coupon has used!');
        location.replace('../user/user_377.php'); </script>";
      ?>
  </body>
</html>

































