<?php 

$id = $_GET["q"];
$conn = mysqli_connect("localhost","root","","cymatic");
$row = mysqli_query($conn,"SELECT * FROM users WHERE id='$id'");
$data =  mysqli_fetch_assoc($row);
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <body>
	<div class="container" style="margin-top: 200px" id="searchbox">
  		<div class="row">
    		<div class="col-md-12">
    			<h2>Personal Informations</h2>
               <div class="form-group">
                  <label for="usr">Full Name:</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["firstname"]." ".$data["middlename"]." ".$data["surname"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Gender</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["gender"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Blood Group</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["bloodgroup"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Marital Status</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["maritalstatus"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Class</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["class"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Country</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["country"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Category</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["category"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Mobile Number</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["mobilenumber"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Telephone Number</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["telephonenumber"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Secondary Email</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["secondryemail"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Nationality</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["nationality"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Interview City</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["interviewcity"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Mailing Adress</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["malingadress"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Current City</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["currentcity"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Pin</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["pin"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Domicile State</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["domicilestate"] ?>">
               </div>
               
               <h3> Academic Details(12th)</h3>
               <div class="form-group">
                  <label for="usr">School</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["schoollfor12th"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Country</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["countryfor12th"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">State</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["statefor12th"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">City</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["cityfor12th"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Board</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["boardfor12th"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Passing Year</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["yearfor12th"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Aggregate Marks</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["marksin12th"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Overall Ranking In Class</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["rank12th"] ?>">
               </div>
               <h3>Academic Details(Under Graduate)</h3>
               <div class="form-group">
                  <label for="usr">Country</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["ugcountry"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">State</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["ugstate"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">City</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["ugcity"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">School</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["schoollfor12th"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">College</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["ugcollege"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">University</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["uguniversity"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Attended From</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["ugattendedfrom"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Attended Till</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["ugattendedtill"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Stream</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["ugstream"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Mazor Field</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["ugmazorfield"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Aggregate Marks</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["ugmarks"] ?>">
               </div>
               <h2>Academic Details(Post Graduate)</h2>
               <div class="form-group">
                  <label for="usr">Country</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["pgcountry"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">State</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["pgstate"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">City</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["pgcity"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">College</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["pgcollege"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">University</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["pguniversity"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Attended From</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["pgattendedfrom"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Attended Till</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["pgattendedtill"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Stream</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["pgstream"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Major Field</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["pgmazorfield"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Aggregate Marks</label>
                  <input type="textpgstream" class="form-control" id="usr" disabled="true" value="<?php echo $data["pgmarks"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Work Exprience(In Months)</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["workexp"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Internship Exprience</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["interexp"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Organisation</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["organisation"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">College</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["empcollege"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Location</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["emplocation"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Annual CTC</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["empctc"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Main responsibilities in this position</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["responsibilty"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Awards/accomplishments</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["award"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Why do you see yourself as an aspirational entrepreneur or community leader?</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["wheredoyousee"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">What are your biggest achievements  and lowest points of life so far and why do you consider it to be so?</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["biggestachievement"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">What do you hope to accomplish from the Aaroogya Research and Public Health Fellowship </label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["accompolishfromarogya"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Help us understand your statement of purpose highlighting challenges and milestones achieved</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["milestoneachieved"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Do share with us any other details that you think might add to your candidature for the the Aaroogya Research and Public Health Fellowship (ARPHF).</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["otherdetails"] ?>">
               </div>
               <h2>Refree Details</h2>
               <div class="form-group">
                  <label for="usr">First Name</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["refreefname"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Middle Name</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["refreemname"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Surname</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["refreesurname"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Relation With Refree</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["refreerelation"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Organisation</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["refreeorg"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Designation</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["refreedesg"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Mobile Number</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["refreemob"] ?>">
               </div>
               <div class="form-group">
                  <label for="usr">Mail</label>
                  <input type="text" class="form-control" id="usr" disabled="true" value="<?php echo $data["refreemail"] ?>">
               </div>
               
    		</div>
    	</div>
    </div>