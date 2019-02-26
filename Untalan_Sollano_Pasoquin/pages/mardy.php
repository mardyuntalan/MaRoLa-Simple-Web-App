<?php
$name = "MARDY UNTALAN";
$address = "Bo. Obrero, La Paz, Iloilo City";
$phone = "+639569452947";
$email = "untalanmardy@gmail.com";
$facebook = "Facebook.com/denskie.untalan";
$github = "Github.com/mardyuntalan";
?>
<?php 
$applications = ["MS Visual Studio", "Eclipse", "Flutter", "Android Studio"];
?>
<?php 
$database = "MySQL";
?>
<?php 
$os = "Windows";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- <link rel = "stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

<link rel="stylesheet" href="../css/css.css">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/bot.css">
<link rel="stylesheet" href="../css/font.css">
<link rel="stylesheet" href="../css/bott.css">

<title>MARDY UNTALAN</title>
</head>
<body>
<div class="w3-bar w3-top w3-red w3-large" style="z-index:4">
<span class="w3-bar-item">Personal Information</span>
</div>
<div class="w3-content w3-margin-top" id = "pagecontainer">
<div class="w3-row-padding" id = "grid"><br><br>
        <div class="w3-third" id = "leftcolumn">
            <div>
                <img src="../images/profile.jpg" style="width:75%" alt="Avatar">
                <h2><?php echo $name?></h2>
                <p><strong>| 90's Kiddo | Music Enthusiast |</strong></p>
            </div>
        
            <div class="otherattrib">
                <i class="fa fa-address-card"></i>
                <p><?php echo $address?></p>
                <i class="fa fa-phone"></i>
                <p><?php echo $phone?></p>
                <i class="fa fa-envelope"></i>
                <p><?php echo $email?></p><br><br>
                <i class="fa fa-facebook-square" style = "font-size:36px"><link href = "facebook.com/denskie.untalan"></i>
                <p><?php echo $facebook?></p>
                <i class="fa fa-github" style = "font-size:36px"></i>
                <p><?php echo $github?></p>
            </div><hr>
        </div>
        <div class = "w3-twothird" id = "rightcolumn"><br>
        
            <h3>ABOUT</h3>
            <p>Interested in pursuing a career in software development. Considering myself as a fast 
                learner and can shape-in in a team. Can make contributions to any implementation in the 
                company.</p><br>
            <h3>EDUCATION</h3>
            <table class = "table table-bordered">
                <tr>
                <td>2015-PRESENT</td>
                <td></td>
                <td>WEST VISAYAS STATE UNIVERSITY</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Fourth Year student from the College of Information and Communications Technology 
                        taking up Bachelor of Science in Information Technology specialized in Software Development.</td>
                </tr>
            </table><br>
            <h3>CERTIFICATIONS</h3>
            <table class = "table table-bordered">
                <tr>
                    <td>2018</td>
                    <td></td>
                    <td>Cisco Networking Academy – Intro to Cybersecurity</td>
                </tr>
                <tr>
                    <td>2017</td>
                    <td></td>
                    <td>Creative Anarchy – International Conference in Design, Motion & Tech</td>
                </tr>
            </table><br>
            <h3>TECHNICAL SKILLS</h3>
            <div>
            <p class="w3-large"><b></i>Languages:</b></p>
           
            <?php
            $languages = array("C#", "Java", "Dart", "Python", ".NET", "CSS", "HTML", "JavaScript");
                $arrlen = count($languages);
                for($a = 0; $a < $arrlen; $a++)
                {
                    echo $languages[$a];
                    echo " | ";
                }?>
            
            </div><br>
            <div>
            <p class="w3-large"><b></i>Applications:</b></p>
            <?php foreach($applications as $i=>$value)
            {
            if($i==(sizeof($applications)-1))
            {
                echo " and  ";
                }?>
                
            <?php {
                echo $value;
                }?>

                <?php
            if($i!=(sizeof($applications)-1)){
            echo ",";
                }
            }
            
                /**$applications = ["MS Visual Studio", "Eclipse", "Flutter", "Android Studio"];
                $arrlength = count($applications);
                for($a = 0; $a < $arrlength; $a++)
                {
                    echo $applications[$a];
                    echo " | ";
                }**/
            ?>
            </div><br>
            <div>
            <p class="w3-large"><b></i>Database Systems:</b></p>
            <?php echo $database?>
            </div><br>
            <div>
            <p class="w3-large"><b></i>Operating Systems:</b></p>
            <?php echo $os?>
            </div>
      </div>
        </div>
</div>
</div>
<footer class="w3-container w3-red w3-center w3-margin-top">
<p>"NEVER GIVE UP" with <i class = "fa fa-heart"></i></p>
</footer>

</body>
</html>