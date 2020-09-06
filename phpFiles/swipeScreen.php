<?php
require_once("./getCon.php");
$con=getCon();
require_once("./bookdb.php");
$con1=createbookingDB();
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Swipe screen</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	 <link rel="stylesheet" type="text/css" href="./css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
  
    <div class="swiper-container">
    <div class="swiper-wrapper">


  <?php

  if(!empty($_POST))
  {
    // foreach ($_POST as $key => $value) {
    //   echo $key;
    //   echo $value;
    //   echo $_POST[$key];
    // }

    // echo $_POST['pickup'];
    // echo $_POST['drop'];
    // echo $_POST['userid'];


    $sqlupdate = "UPDATE user_details 
                  SET PICKUP='{$_POST['pickup']}',
                      DROPTO='{$_POST['drop']}' 
                      WHERE ID={$_POST['userid']}";
          if(mysqli_query($GLOBALS['con'],$sqlupdate))
          {
            //textNode("success","query updated!!");
            //echo"updated";
          }
          else{
           //textNode("error","error in query-updation ".mysqli_error($GLOBALS['con']));
            echo"not updated".mysqli_error($GLOBALS['con']);
          }



          
  }

  $sqlread="SELECT * FROM user_details WHERE PICKUP='{$_POST['pickup']}' AND
  DROPTO='{$_POST['drop']}'";
  $result=mysqli_query($GLOBALS['con'],$sqlread);
  if($result)
    {
      while($row=mysqli_fetch_assoc($result))
        {?>

            <form action="booking.php" method="POST">
                <div class="swiper-slide" >
                  <div class="imgBx" >
                    <!-- <img src="./css/images1.jpg" width="300" height="300"> -->
                     <img src="<?php
                        if($row['USER_ID']=='tuljaram')echo'./css/f2.jpg';
                        else if($row['USER_ID']=='Manjula')echo'./css/f1.jpg';
                        else if($row['USER_ID']=='saakshi1')echo'./css/f3.jpg';
                        else if($row['USER_ID']=='khushi1')echo'./css/f4.jpg';
                       ?>" width="300" height="300"> 
                  </div>
                  <input type="hidden" name="id" value="<?php  echo$row['ID']; ?>">
                  <button type="submit" class="submitbtn" name="submitbtn" style="width:300px;padding:0px;border:none;">
                    <div class="details"  >
                     
                      <h3><?php  echo $row['FIRSTNAME']; ?><br><span><?php echo $row['COLLEGE']?></span></h3>
                    </div>
                  </button>
                </div>
            </form>
        <?php
        }
    }
else{echo"no result";}
  ?>
    </div>
    <div class="swiper-pagination"></div>
  </div>
	<script type="text/javascript" src="./css/swiper.min.js"></script>
	 <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
    
    
  </script>

</body>
</html>