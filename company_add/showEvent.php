<?php
include "../connection.php";
include "../extras.php";

// Only Company can view this page
if (!($user_type_id == '2')){
   header ('Location: /');
}

$cookie_name    = 'user';
$email          = $_COOKIE[$cookie_name]; // Gets the cookie_value from the cookie_name, i.e. the email from the type 'user' cookie.

$sql3  = "SELECT * FROM Company WHERE rep_email = '$email'";
$result3 = $db->query($sql3);
$row3 = $result3->fetch_assoc();

// Get the company_id, so the page only shwo the event of the log in company
$company_id = $row3['company_id'];


// view-paginated
if (isset($_GET["page"])) { 
     $page  = $_GET["page"]; } 
else { 
     $page=1; 
}; 

// number of results to show per page
$results_per_page = 6; 

$start_from = ($page-1) * $results_per_page;
$sql5 = "SELECT * FROM Event WHERE company_id = '$company_id' ORDER BY event_id ASC LIMIT $start_from, ".$results_per_page;

$rs_result = $db->query($sql5); 
?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <!--<link rel="stylesheet" href="css/smoothness/jquery.ui.css" type="text/css" />-->
    <!--<link rel="stylesheet" type="text/css" href="css/css.css" />-->
    <link rel="stylesheet" href="../css/style.css">
    <link rel='shortcut icon' href='img/fav_icon.ico'>



    <title>HybirdWeb</title>
</head>

<body>
    <?php echo $header_text;?>
     <!--link button-->
<center>
<br>
    <div class="col-md-8 order-md-1">
       <a href="company_add/addEvent.php"><button name="backAdd" class="btn btn-warning btn-lg btn-block">Back to Add Page</button></a>
    <br>
    
    <div class="row">
<!--Form Start-->


<?php 
 while($row = $rs_result->fetch_assoc()) {
      
      $date = $row['date'];
      $converted_date = date("l, j F, Y",strtotime($date)); 
     echo"<div class='col-md-4' style='padding-bottom: 20px;'>";
        echo"<div class='card-group'>";
          echo"<div class='card'>";
              echo"<h5 class='card-header' style='background-color:#dab59b;'>{$row['event_name']}</h5>";
                    echo"<div class='card-body' style='background-color:#f8edf4;'>";
                         echo"<h5 class='card-title'>Event ID&nbsp;:&nbsp;{$row['event_id']}</h5>";
                         echo"<p class='card-text'><b>Date&nbsp;:&nbsp;</b>{$converted_date}<br>
                                                   <b>Time&nbsp;:&nbsp;</b>{$row['start_time']}~{$row['end_time']}
                                                  
                                                  <!-- Description&nbsp;:&nbsp;{$row['description']}<br>
                                                   Address&nbsp;:&nbsp;{$row['event_address1']},&nbsp;{$row['event_address2']},&nbsp;{$row['event_city']},&nbsp;{$row['event_eircode']}<br>-->
                                                   
                                                  </p>";
                         echo '<a href="company_add/edit.php?event_id=' . $row['event_id'] . '"><button style="margin-right:10px" class="btn btn-primary">View/Edit</button></a>'; 
                         echo '<a href="company_add/delete.php?event_id=' . $row['event_id'] . '"><button class="btn btn-primary">Delete</button></a>';
                    echo"</div>";
          echo"</div>";
        echo"</div>";
     echo"</div>";
}
?>
</div>
<br>
</div>
</center>
<br>
</body>
</html>


<?php

// Get total number of event
$sql6 = "SELECT COUNT(event_id) AS total FROM Event";
$result6 = $db->query($sql6);
$row6 = $result6->fetch_assoc();

// Calculate the page by divide 6, as we already set show 6 events in page above
$total_pages = ceil($row6["total"] / $results_per_page); 

  echo "<nav aria-label='...'>";
    echo "<ul class='pagination justify-content-center pagination-lg' >";

// Page button
// print links for all pages
for ($i=1; $i<=$total_pages; $i++) {  
            
            echo "<li class='page-item' ><a style='border-color:#dab59b;border-width: 3px;' class='page-link' href='company_add/showEvent?page=".$i."'" ; if ($i==$page)  echo " class='curPage'" ; echo ">".$i."</a></li> "; 
     };
    echo "</ul>";
  echo "</nav>";

?>
<br>
<br>
<br>
<?php echo $footer_msg ?>

