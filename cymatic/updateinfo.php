<?php 
$conn = mysqli_connect("localhost","root","","cymatic");
session_start();
$session = $_SESSION["email"];
$refreemail = $_POST['refemail'];
$applicantmail = $_POST['primaryemail'];
$refreename = $_POST['reffullname']." ".$_POST["refmiddlename"]." ".$_POST["refsurname"];
$applicantname = $_POST['firstname']." ".$_POST["secondname"]." ".$_POST["surname"];
echo isset($_POST['sendmail'])
if(isset($_POST['sendmail'])){
   if($session == $applicantmail){
      echo "mail will be sent now"
   }else{
      die();
   }
}else{
     $firstname = $_POST["firstname"];
     $secondname = $_POST["secondname"];
     $surname = $_POST["surname"];
     $gender = $_POST["gender"];
     $bloodgroup = $_POST["bloodgroup"];
     $maritalstatus = $_POST["maritalstatus"];
     $class = $_POST["class"];
     $country = $_POST["country"];
     $category = $_POST["category"];
     $mobile = $_POST["mobile"];
     $telephone = $_POST["telephone"];
     $primaryemail = $_POST["primaryemail"];
     $secondryemail = $_POST["secondryemail"];
     $nationality = $_POST["nationality"];
     $interviewcity = $_POST["interviewcity"];
     $mail = $_POST["mail"];
     $state = $_POST["state"];
     $pin = $_POST["pin"];
     $domicilestate = $_POST["domicilestate"];
     $domicilecity = $_POST["domicilecity"];
    $secschool = $_POST["12thschool"];
    $seccountry = $_POST["12thcountry"];
    $secstate = $_POST["12thstate"];
    $seccity = $_POST["12thcity"];
    $secboard = $_POST["12thboard"];
    $secyear = $_POST["12thyear"];
    $secmarks = $_POST["12thmarks"];
    $secranks = $_POST["12thranks"];
    $ugcountry = $_POST["ugcountry"];
    $ugstate = $_POST["ugstate"];
    $ugcity = $_POST["ugcity"];
    $ugcollege = $_POST["ugcollege"];
    $uguniversity = $_POST["uguniversity"];
    $ugattendedfrom = $_POST["ugattendedfrom"];
    $ugattendedtill = $_POST["ugattendedtill"];
    $ugstream = $_POST["ugstream"];
    $ugfield = $_POST["ugfield"];
    $ugmarks = $_POST["ugmarks"];
    $pgcountry = $_POST["pgcountry"];
    $pgstate = $_POST["pgstate"];
    $pgcity = $_POST["pgcity"];
    $pgcollege = $_POST["pgcollege"];
    $pguniversity = $_POST["pguniversity"];
    $pgattendedfrom = $_POST["pgattendedfrom"];
    $pgattendedtill = $_POST["pgattendedtill"];
    $pgstream = $_POST["pgstream"];
    $pgfield = $_POST["pgfield"];
    $pgmarks = $_POST["pgmarks"];
    $workexp = $_POST["workexp"];
    $internexp = $_POST["internexp"];
     $emporg = $_POST["emporg"];
    $empcollege = $_POST["empcollege"];
    $emplocation = $_POST["emplocation"];
    $ctc = $_POST["ctc"];
    $mainresponsibility = $_POST["mainresponsibility"];
    $challenges = $_POST["challenges"];
    $awards = $_POST["awards"];
    $essay1 = $_POST["essay1"];
    $essay2 = $_POST["essay2"];
    $essay3 = $_POST["essay3"];
    $essay4 = $_POST["essay4"];
    $essay5 = $_POST["essay5"];
    $essay6 = $_POST["essay6"];
    $reffullname = $_POST["reffullname"];
    $refmiddlename = $_POST["refmiddlename"];
    $refsurname = $_POST["refsurname"];
    $refrelation = $_POST["refrelation"];
    $reforg = $_POST["reforg"];
    $refdesg = $_POST["refdesg"];
    $refmobile = $_POST["refmobile"];
    $refemail = $_POST["refemail"];

   /*upload image*/
   //echo $_FILES["profilepicture"];
   if(isset($_FILE["profilepicture"])){
      $targetdir = "C:/wamp64/www/cymatic/photo/";
      echo $targetdir;
      $ext = pathinfo($_FILES['profilepicture']['name'], PATHINFO_EXTENSION);
      echo "ext is ".$ext."<br>";
      $targetfile = $targetdir."'$session'.".$ext;
      echo $targetfile;
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($targetfile,PATHINFO_EXTENSION));
      $check = getimagesize($_FILES["profilepicture"]["tmp_name"]);
      if ($_FILES["profilepicture"]["size"] > 500000) {
         echo "Sorry, your file is too large.";
         $uploadOk = 0;
      }
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
         && $imageFileType != "gif" ) {
         echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
         $uploadOk = 0;
      }

      if($uploadOk == 1){
         if (move_uploaded_file($_FILES["profilepicture"]["tmp_name"], $targetfile)) {
           echo "The file ". basename( $_FILES["profilepicture"]["name"]). " has been uploaded.";
         }else{
           echo "Sorry, there was an error uploading your file.";
         }
      }
   }




   $q=mysqli_query($conn,"UPDATE `users` SET `firstname` = '$firstname', `middlename` = '$secondname', `surname` = '$surname', `gender` = '$gender', `bloodgroup` = '$bloodgroup', `maritalstatus` = '$maritalstatus', `class` = '$class', `country` = '$country', `category` = '$category', `mobilenumber` = '$mobile', `telephonenumber` = '$telephone', `primaryemail` = '$primaryemail', `secondryemail` = '$secondryemail', `nationality` = '$nationality', `interviewcity` = '$interviewcity', `malingadress` = '$mail', `currentcity` = '$state', `pin` = '$pin', `domicilestate` = '$domicilestate', `domicilecity``` = '$domicilecity', `schoollfor12th` = '$secschool', `countryfor12th` = '$seccountry', `statefor12th` = ' $secstate', `cityfor12th` = '$seccity', `boardfor12th` = '$secboard', `yearfor12th` = '$secyear', `marksin12th` = '$secmarks', `rank12th` = '$secranks', `ugcountry` = '$ugcountry', `ugstate` = '$ugstate', `ugcity` = '$ugcity', `ugcollege` = '$ugcollege', `uguniversity` = '$uguniversity',`ugattendedfrom` = '$ugattendedfrom', `ugattendedtill` = '$ugattendedtill', `ugstream` = '$ugstream',   `ugmazorfield` = '$ugfield', `ugmarks` = '$ugmarks', `pgcountry` = '$pgcountry', `pgstate` = '$pgstate', `pgcity` = '$pgcity', `pgcollege` = '$pgcollege', `pguniversity` = '$pguniversity', `pgattendedfrom` = '$pgattendedfrom', `pgattendedtill` = '$pgattendedtill', `pgstream` = '$pgstream', `pgmazorfield` = '$pgfield', `pgmarks` = '$pgmarks', `workexp` = '$workexp', `interexp` = '$internexp', `organisation` = '$emporg', `empcollege` = '$empcollege', `emplocation` = '$emplocation', `empctc` = '$ctc', `responsibilty` = '$mainresponsibility', `challenges` = '$challenges', `award` = '$awards', `wheredoyousee` = '$essay1', `biggestachievement` = '$essay2', `accompolishfromarogya` = '$essay3', `milestoneachieved` = '$essay4', `otherdetails` = '$essay5', `refreefname` = '$reffullname', `refreemname` = '$refmiddlename', `refreesurname` = '$refsurname', `refreerelation` = '$refrelation', `refreeorg` = '$reforg', `refreedesg` = '$refdesg', `refreemob` = '$refmobile', `refreemail` = '$refemail' WHERE `users`.`primaryemail` = '$session';");
   if($q){
      echo "completed";
   }
   else{
      die(mysqli_error($conn));
   }
}



?>