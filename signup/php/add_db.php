<!-- When someone tryna apply to $5 lunch event, saving code all about users informations-->
<!-- update info: Jun-16-2016 14:35 -->
<?php

	$firstName=trim($_POST['firstName']);
	$lastName=trim($_POST['lastName']);	
	$emailAddress=trim($_POST['emailAddress']);
	$phoneNumber=trim($_POST['phoneNumber']);
	$gender=$_POST['gender'];
	$ageGroup=$_POST['ageGroup'];
	$at='@';	//이메일 유효성 체크
/*
	$image=$_POST['image'];
	$size=GetImageSize($image);
	$width=$size[0];
	$height=$size[1];
	$imageblob=addslashes(fread(fopen($image, "r"), filesize($image)));
	$filesize=filesize($image);
*/
	//$userip=$_SERVER['DOCUMENT_ROOT'];

	//require_once($_SERVER["DOCUMENT_ROOT"] . '/config.php');
	require_once('/home/kweek/kweeknyc.com/signup/config.php');
/*
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}


	if($firstName=="" || $lastName=="" || $emailAddress=="" $phoneNumber=="") {
		echo "<script> alert('* You have to fill in the essential part.'); history.back(); </script>";
		die;
	}
*/
	//이메일 중복 체크 
	$sql3="SELECT count(*) FROM kweeknyc.tbl_user WHERE user_email_address = '$emailAddress'";
	$result3=mysqli_query($conn, $sql3);
	$row3=mysqli_fetch_assoc($result3);
	$reg_num=$row3['count(*)'];


    if($reg_num > 0) {
    	//exit('Your E-MAIL ADDRESS is not valid or are duplicates! Try it again.');
  		echo "<script> alert('Your E-MAIL ADDRESS is not valid or are duplicates! Try it again.'); history.back(); </script>";
  		exit();
    }

    //이메일 유효성 체크
    if(strpos($emailAddress, $at) == false) {  
    	echo "<script> alert('Your E-MAIL ADDRESS is not valid or are duplicates! Try it again.'); history.back(); </script>";
  		exit();
	} 


	//유저 정보 입력
	$sql="insert into kweeknyc.tbl_user (user_first_name, user_last_name, user_email_address, user_phone_number, user_gender, user_age_group, user_date, user_send) ";
	$sql.="values ('$firstName', '$lastName', '$emailAddress', '$phoneNumber', '$gender', '$ageGroup', now(), '0')";
	$result=mysqli_query($conn, $sql);

	//입력받은 정보의 user_index를 읽어오기(tbl_qrcode로 보내주기위함)
	$sql1="SELECT user_index FROM tbl_user order by user_index desc limit 1";
	$result1=mysqli_query($conn, $sql1);
	while($row1=mysqli_fetch_assoc($result1)) {
		$qr_index=$row1['user_index'];
	}

	//tbl_qrcode 의 qr_index 에 값 insert 하기
	$sql2="INSERT INTO tbl_qrcode (qr_index, qr_1, qr_2, qr_3, qr_4, qr_date) ";
	$sql2.="VALUES ('$qr_index', '1', '1', '1', '1', now())";
	$result2=mysqli_query($conn, $sql2);


	//파일 업로드
	ini_set("display_errors", "1");
    
    //$uploaddir='/Applications/MAMP/htdocs/upload/file/';	//localhost 일 경우
    $uploaddir='/home/kweek/kweeknyc.com/signup/upload/file/';
    $uploadfile=$uploaddir .$qr_index ."__" . basename($_FILES['imagefile']['name']);

    echo '<pre>';
    if(move_uploaded_file($_FILES['imagefile']['tmp_name'], $uploadfile)) {
        echo "File is valid, and was successfully uploaded.";
        echo "Copyrightⓒ2016 By Image360,Inc. All rights reserved.";
    }
    else {
        print "Upload failed. \n";
        print "Copyrightⓒ2016 By Image360,Inc. All rights reserved.";
    }

    echo 'Here is some more debugging info:';
    print_r($_FILES);
    print "</pre>";

	mysqli_close($conn);

	echo "<script> alert('[Your apply has successed!] Wait until the coupon arrive via your e-mail address or phone number.');
	location.replace('../php/index.php'); </script>";

?>

















