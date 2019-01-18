<?php
require 'sendgrid/sendgrid-php/vendor/autoload.php';
ini_set('display_errors', 'On');
   echo  $firstname = $_POST["firstname"];
   echo $password = $_POST["password"];
   echo  $secondname = $_POST["secondname"];
   echo  $surname = $_POST["surname"];
   echo  $gender = $_POST["gender"];
   echo  $bloodgroup = $_POST["bloodgroup"];
   echo  $maritalstatus = $_POST["maritalstatus"];
   echo  $class = $_POST["class"];
   echo  $country = $_POST["country"];
   echo  $category = $_POST["category"];
   echo  $mobile = $_POST["mobile"];
   echo  $telephone = $_POST["telephone"];
   echo  $primaryemail = $_POST["primaryemail"];
   echo  $secondryemail = $_POST["secondryemail"];
   echo  $nationality = $_POST["nationality"];
   echo  $interviewcity = $_POST["interviewcity"];
   echo  $mail = $_POST["mail"];
   echo  $state = $_POST["state"];
   echo  $pin = $_POST["pin"];
   echo  $domicilestate = $_POST["domicilestate"];
   echo  $domicilecity = $_POST["domicilecity"];
   echo $secschool = $_POST["12thschool"];
   echo $seccountry = $_POST["12thcountry"];
   echo $secstate = $_POST["12thstate"];
   echo $seccity = $_POST["12thcity"];
   echo $secboard = $_POST["12thboard"];
   echo $secyear = $_POST["12thyear"];
   echo $secmarks = $_POST["12thmarks"];
   echo $secranks = $_POST["12thranks"];
   echo $ugcountry = $_POST["ugcountry"];
   echo $ugstate = $_POST["ugstate"];
   echo $ugcity = $_POST["ugcity"];
   echo $ugcollege = $_POST["ugcollege"];
   echo $uguniversity = $_POST["uguniversity"];
   echo $ugattendedfrom = $_POST["ugattendedfrom"];
   echo $ugattendedtill = $_POST["ugattendedtill"];
   echo $ugstream = $_POST["ugstream"];
   echo $ugfield = $_POST["ugfield"];
   echo $ugmarks = $_POST["ugmarks"];
   echo $pgcountry = $_POST["pgcountry"];
   echo $pgstate = $_POST["pgstate"];
   echo $pgcity = $_POST["pgcity"];
   echo $pgcollege = $_POST["pgcollege"];
   echo $pguniversity = $_POST["pguniversity"];
   echo $pgattendedfrom = $_POST["pgattendedfrom"];
   echo $pgattendedtill = $_POST["pgattendedtill"];
   echo $pgstream = $_POST["pgstream"];
   echo $pgfield = $_POST["pgfield"];
   echo $pgmarks = $_POST["pgmarks"];
   echo $workexp = $_POST["workexp"];
   echo $internexp = $_POST["internexp"];
  echo  $emporg = $_POST["emporg"];
   echo $empcollege = $_POST["empcollege"];
   echo $emplocation = $_POST["emplocation"];
   echo $ctc = $_POST["ctc"];
   echo $mainresponsibility = $_POST["mainresponsibility"];
   echo $challenges = $_POST["challenges"];
   echo $awards = $_POST["awards"];
   echo $essay1 = $_POST["essay1"];
   echo $essay2 = $_POST["essay2"];
   echo $essay3 = $_POST["essay3"];
   echo $essay4 = $_POST["essay4"];
   echo $essay5 = $_POST["essay5"];
   echo $essay6 = $_POST["essay6"];
   echo $reffullname = $_POST["reffullname"];
   echo $refmiddlename = $_POST["refmiddlename"];
   echo $refsurname = $_POST["refsurname"];
   echo $refrelation = $_POST["refrelation"];
   echo $reforg = $_POST["reforg"];
   echo  $refdesg = $_POST["refdesg"];
   echo  $refmobile = $_POST["refmobile"];
   echo  $refemail = $_POST["refemail"];

      $conn = mysqli_connect("aaroogya.org","aaroogya_aroogya","Alisha@12345","aaroogya_aroogya");;
      $result = mysqli_query($conn,"SELECT COUNT(*) FROM users where primaryemail='$primaryemail'");
   $data=mysqli_fetch_assoc($result);
   if($data["COUNT(*)"] >= 1){
      echo "You have allready registerd";
      die();
   }
   
   //mysqli_select_db("cymatic");
   $insert = mysqli_query($conn,"INSERT INTO `users` (`id`, `password`,`firstname`, `middlename`, `surname`, `gender`, `bloodgroup`, `maritalstatus`, `class`, `country`, `category`, `mobilenumber`, `telephonenumber`, `primaryemail`, `secondryemail`, `nationality`, `interviewcity`, `malingadress`, `currentcity`, `pin`, `domicilestate`, `domicilecity```, `schoollfor12th`, `countryfor12th`, `statefor12th`, `cityfor12th`, `boardfor12th`, `yearfor12th`, `marksin12th`, `rank12th`, `ugcountry`, `ugstate`, `ugcity`, `ugcollege`, `uguniversity`, `ugattendedfrom`, `ugattendedtill`, `ugstream`, `ugmazorfield`, `ugmarks`, `pgcountry`, `pgstate`, `pgcity`, `pgcollege`, `pguniversity`, `pgattendedfrom`, `pgattendedtill`, `pgstream`, `pgmazorfield`, `pgmarks`, `workexp`, `interexp`, `organisation`, `empcollege`, `emplocation`, `empctc`, `responsibilty`, `challenges`, `award`, `wheredoyousee`, `biggestachievement`, `accompolishfromarogya`, `milestoneachieved`, `otherdetails`, `refreefname`, `refreemname`, `refreesurname`, `refreerelation`, `refreeorg`, `refreedesg`, `refreemob`, `refreemail`) VALUES (NULL, '$password','$firstname' , '$secondname', '$surname', '$gender', '$bloodgroup', '$maritalstatus', '$class', '$country', '$category', '$mobile', '$telephone', '$primaryemail', '$secondryemail', '$nationality', '$interviewcity', '$mail', '$state', '$pin', '$domicilestate', '$domicilecity', '$secschool', '$seccountry', ' $secstate', '$seccity', '$secboard', '$secyear', '$secmarks', '$secranks', '$ugcountry', '$ugstate', '$ugcity', '$ugcollege', '$uguniversity', '$ugattendedfrom', '$ugattendedtill', '$ugstream', '$ugfield', '$ugmarks', '$pgcountry', '$pgstate', '$pgcity', '$pgcollege', '$pguniversity', '$pgattendedfrom', '$pgattendedtill', '$pgstream', '$pgfield', '$pgmarks', '$workexp', '$internexp', '$emporg', '$empcollege', '$emplocation', '$ctc', '$mainresponsibility', '$challenges', '$awards', '$essay1', '$essay2', '$essay3', '$essay4', '$essay5', '$reffullname', '$refmiddlename', '$refsurname', '$refrelation', '$reforg', '$refdesg', '$refmobile', '$refemail');");

   if($insert){
      echo "Registration Completed.";
      
      $emailToRefree = new \SendGrid\Mail\Mail(); 
      $emailToRefree->setFrom("arphf@aaroogya.org", "ARPHF");
      $emailToRefree->setSubject("Registration Successful");
      $emailToRefree->addTo($primaryemail,$firstname." ".$surname);
      $emailToRefree->addContent(
          "text/html", "Dear $firstname,Thank you for your registration for <strong>Aaroogya Research and Public Health Fellowship</strong>.Your login credentials are as follow <br><br>login email:-$primaryemail<br>password:-$password."
      );
      $sendgrid = new \SendGrid('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');
      try {
          $responseFromRefree = $sendgrid->send($emailToRefree);
          print $responseFromRefree->statusCode() . "\n";
          print_r($responseFromRefree->headers());
          print $responseFromRefree->body() . "\n";
          echo "<script type='text/javascript'>location.href = './login-register.php';</script>";
      }catch (Exception $e) {
        echo 'Caught exception: '. $e->getMessage() ."\n";
      }
   }
   else{
    die(mysqli_error($conn));
   }

    
?>