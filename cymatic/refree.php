<?php
session_start();
$conn = mysqli_connect("localhost","root","","cymatic");
//$conn = mysqli_connect("localhost","root","","cymatic");
$email = $_GET["email"];
$query = mysqli_query($conn,"SELECT * FROM users WHERE primaryemail='$email'");
$data = mysqli_fetch_assoc($query);

?>
<style>
    `       .carousel-control.left
            {
                background: none;
            }
            .carousel-control.right
            {
                background: none;
            }

            .carousel-control
            {
                position: absolute;
                top: 45%;
                bottom: 0;
                left: 0;
                width: 15%;
                font-size: auto;
                color: #fff;
                text-align: center;
                opacity: 1;
                text-shadow: none;
            }
            .carousel-control:hover
            {
                color: #000;
            }
            .carousel-indicators
            {
                bottom: -50px;
            }
            .carousel-indicators li
            {
                display: inline-block;
                width: 10px;
                height: 10px;
                margin: 1px;
                text-indent: -999px;
                cursor: pointer;
                background-color: #000\9;
                background-color: rgba(0,0,0,0);
                border: 1px solid #16a085;
                border-radius: 50%;
            }
            .carousel-indicators .active
            {
                width: 12px;
                height: 12px;
                margin: 0;
                background-color: #16a085;
            }
            .carousel-caption
            {
                position: absolute;
                right: 0;
                bottom: 0;
                left: 0;
                z-index: 10;
                padding-top: 20px;
                padding-bottom: 20px;
                color: #fff;
                text-align: center;
                background: rgba(0,0,0,0.4);
            }
            .carousel-caption h3
            {
                color: #fff;
                                font-size: 150%;
            }
                     @media(max-width: 480px) {
    .carousel-caption h3 {
        font-size: 10px;
    }
}
</style>










<head>
<title>REFEREE RECOMMENDATION</title>
    
<style type="text/css">

.callletterbody {
    font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande", "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
    font-size: 13px;
}
body {
  font-size: 62.5%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
.reg-btn {
            border:1px solid #333; 
            width:155px !important;
            background-color: rgba(16, 100, 132, 0.85);
            color: #ffffff;
            margin-top: 10px;
            margin-bottom: 10px;
            padding: 6px;
            margin: 0 auto;
            margin-top: 20px;
        }
        .reg-btn:hover {
            background: rgba(61, 115, 136, 0.85);;
        }
        #hello{
            background: url('Picture2.png');
        }

</style>
<script>
    /*function show12(){
            document.getElementById("personal information").style.display = "none";
            document.getElementById("academic-12").style.display = "block";
            document.getElementById("academic-ug").style.display = "none";
            document.getElementById("academic-pg").style.display = "none";
            document.getElementById("employment").style.display = "none";
            document.getElementById("essay").style.display = "none";
            document.getElementById("referee").style.display = "none";
        }
        function showug(){
            document.getElementById("personal information").style.display = "none";
            document.getElementById("academic-12").style.display = "none";
            document.getElementById("academic-ug").style.display = "block";
            document.getElementById("academic-pg").style.display = "none";
            document.getElementById("employment").style.display = "none";
            document.getElementById("essay").style.display = "none";
            document.getElementById("referee").style.display = "none";
        }
        function showemp(){
            document.getElementById("personal information").style.display = "none";
            document.getElementById("academic-12").style.display = "none";
            document.getElementById("academic-ug").style.display = "none";
            document.getElementById("academic-pg").style.display = "none";
            document.getElementById("employment").style.display = "block";
            document.getElementById("essay").style.display = "none";
            document.getElementById("referee").style.display = "none";
        }
        function showpersonal(){
            document.getElementById("personal information").style.display = "block";
            document.getElementById("academic-12").style.display = "none";
            document.getElementById("academic-ug").style.display = "none";
            document.getElementById("academic-pg").style.display = "none";
            document.getElementById("employment").style.display = "none";
            document.getElementById("essay").style.display = "none";
            document.getElementById("referee").style.display = "none";
        }
        function showessay(){
            document.getElementById("personal information").style.display = "none";
            document.getElementById("academic-12").style.display = "none";
            document.getElementById("academic-ug").style.display = "none";
            document.getElementById("academic-pg").style.display = "none";
            document.getElementById("employment").style.display = "none";
            document.getElementById("essay").style.display = "block";
            document.getElementById("referee").style.display = "none";
        }
        function showpg(){
            document.getElementById("personal information").style.display = "none";
            document.getElementById("academic-12").style.display = "none";
            document.getElementById("academic-pg").style.display = "block";
            document.getElementById("academic-ug").style.display = "none";
            document.getElementById("employment").style.display = "none";
            document.getElementById("essay").style.display = "none";
            document.getElementById("referee").style.display = "none";
        }
        function showrefree(){
            document.getElementById("personal information").style.display = "none";
            document.getElementById("academic-12").style.display = "none";
            document.getElementById("academic-pg").style.display = "none";
            document.getElementById("academic-ug").style.display = "none";
            document.getElementById("employment").style.display = "none";
            document.getElementById("essay").style.display = "none";
            document.getElementById("referee").style.display = "block";
        }
        function init(){
            document.getElementById("personal information").style.display = "block";
            document.getElementById("academic-12").style.display = "none";
            document.getElementById("academic-pg").style.display = "none";
            document.getElementById("academic-ug").style.display = "none";
            document.getElementById("employment").style.display = "none";
            document.getElementById("essay").style.display = "none";
            document.getElementById("referee").style.display = "none";
        }*/
        function update(){

        }
        
function PrintMeSubmitMe()
{
window.print();
SubmitMe();
}
var temp_fp
var temp_re
var temp_pr
function countit_fp()
{
    var formcontent=document.f1.fp.value
    formcontent=formcontent.split(" ")
        if(formcontent.length>300)
        {   alert("Please write in 300 words");
            document.f1.fp.value=temp_fp
        }else
        { 
        document.f1.fpinfo.value=301-formcontent.length+' words remaining';
        temp_fp =document.f1.fp.value;
        }
}
function frmvalidate()    {
    //if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; 
    //}
    return true;
}
</script>
</head>
<body style="text-align: -moz-center;" onload="initi()" id="hello">
<br>
<iframe name="votar" style="display:none;"></iframe>
<form name="f1" method="post" action="updateinfo.php"  enctype="multipart/form-data" >

<table cellspacing="5" cellpadding="5" width="800" align="center" cellspacing="0" bgcolor="#FFFFFF" class="callletterbody " style="border:2px solid #666666" >
    <tr>
        <td colspan="2" width="100%" style="border-bottom:2px solid #666666">
        <table>
            <tr>
                <!--<td height="90" width="100" bgcolor="#FFFFFF"><div align="center"><img src="Logo.png" width="80" ></div></td>-->
                <td height="28" width="600" bgcolor="#FFFFFF" style="text-align:center"><p><strong><span style="font-size:18px">Aaroogya Research and Public Health Fellowship</span></strong></p>
                  
                  <strong><span style="font-size:18px"> (ARPHF)</span><br> 
                  <!--<p><strong><span style="font-size:15px"><a href="logout.php">Logout</a></span><br>
                   <!-- <span style="font-size:22px">INDIAN INSTITUTE OF MANAGEMENT KOZHIKODE</span><br>
                  <span style="font-size:14px">(Applicant should complete the top section of this form before giving it to the Referee-<b>Use uppercase letters</b></span></strong></p></td>--></td>
                                      <td height="90" width="100" bgcolor="#FFFFFF"><div align="center"><img src="Logo.jpg" width="90"></div>
                                     
                </td>
            </tr>
        
        </td>
    </tr>
<table  cellspacing="5" cellpadding="5" width="800" align="center" cellspacing="0" bgcolor="#FFFFFF" class="callletterbody " style="border:2px solid #666666" id="personal information" >
    <tr>        
        <td width="100%" style="text-align:left; padding:10px">
            <h2>Personal & Contact Details</h2>
        </td>
    </tr>
    <tr>        
        <td width="100%" style="text-align:left; padding:10px">
            Applicant Name <strong><input type="text" name="fullname" style="width: 150px"  disabled="true" value="<?php echo $data['firstname']." ".$data['middlename']." ".$data['surname'] ?>"> Applicant Email <strong><input type="text" name="applicantemail" style="width: 150px" disabled="true" value="<?php echo $data['primaryemail'] ?>"></strong>

        </td>
        
    </tr>

    <tr><td colspan="2" style="padding:10px;text-align:center">To be filled in by the Referee</td></tr>
    <tr><td colspan="2" style="padding:10px">The candidate has applied for the Fellow Programme at Aaroogya. The Referee is requested to fill this form.<br><br> In addition to responding to the items below,please enter your comments specifically on the applicant's strengths and limitations for the doctoral study. You should consider previous accomplishments, intellectual independence, capacity for analytical thinking ,ability to work with others ,ability to organize and express ideas clearly, and drive and motivation. Please explain in what capacity you have known the applicant and for what time period. </td></tr>
    <tr><td colspan="2" style="padding:10px">1.In what capacity and for how long have you known the applicant:<textarea name="essay1" cols="65" rows="5" id="profile" style="width:600px; height:100px; border-color:#C1CDCD;"></textarea></td></tr>
   <tr><td colspan="2" style="padding:10px">2.Please rate the applicant in comparison with others whom you known the applicant:<br>
   </td></tr><tr>
        <td class="text1" height="45">
            <table cellspacing="5" cellpadding="5" width="800" align="center" cellspacing="0" bgcolor="#FFFFFF" class="callletterbody " style="border:2px solid #666666"><tr><th>&nbsp;&nbsp;&nbsp;&nbsp;</th><th>Outstanding</th><th>Excellent</th><th>Good</th><th>Fair</th><th>Poor</th><th>Unable to Judge</th></tr><tr><td>Academic <br>Performance</td>

            <td align="center"><input type="radio" name="academic" value="Outstanding" ></td><td align="center"><input type="radio" name="academic" value="Excellent" ></td><td align="center"><input type="radio" name="academic" value="Good" ></td><td align="center"><input type="radio" name="academic" value="Fair" ></td><td align="center"><input type="radio" name="academic" value="Poor" ></td><td align="center"><input type="radio" name="academic"  value="Unable to Judge" ></td></tr>
            <tr><td>Motivation for <br> proposed program of <br> study</td><td align="center"><input type="radio" name="motivation" value="Outstanding" ></td><td align="center"><input type="radio" name="motivation" value="Excellent" ></td><td align="center"><input type="radio" name="motivation" value="Good" ></td><td align="center"><input type="radio" name="motivation" value="Fair" ></td><td align="center"><input type="radio" name="motivation" value="Poor" ></td><td align="center"><input type="radio" name="motivation" value="Unable to Judge" ></td></tr>
            <tr><td>Intellectual capacity <br>(including reasoning <br>and analytical ability,<br>imagination,learning <br> potential)</td><td align="center"><input type="radio" name="intell" value="Outstanding" ></td><td align="center"><input type="radio" name="intell" value="Excellent"  ></td><td align="center"><input type="radio" name="intell" value="Good" ></td><td align="center"><input type="radio" name="intell" value="Fair" ></td><td align="center"><input type="radio" name="intell" value="Poor" ></td><td align="center"><input type="radio" name="intell" value="Unable to Judge" ></td></tr>
            <tr><td>Research and writing <br>ability</td><td align="center"><input type="radio" name="research" value="Outstanding"  ></td><td align="center"><input type="radio" name="research" value="Excellent"  ></td><td align="center"><input type="radio" name="research" value="Good"  ></td><td align="center"><input type="radio" name="research" value="Fair" ></td><td align="center"><input type="radio" name="research" value="Poor" ></td><td align="center"><input type="radio" name="research" value="Unable to Judge" ></td></tr>
            <tr><td>Ability to work <br> independently</td> <td align="center"><input type="radio" name="ability" value="Outstanding" ></td><td align="center"><input type="radio" name="ability" value="Excellent" ></td><td align="center"><input type="radio" name="ability" value="Good" ></td><td align="center"><input type="radio" name="ability" value="Fair" ></td><td align="center"><input type="radio" name="ability" value="Poor" ></td><td align="center"><input type="radio" name="ability" value="Unable to Judge" ></td></tr></table></td></tr>
    <tr><td><ol type="1"><li>Please indicate the strength of your overall endorsement by placing an "X" along the scale.</li></td></tr>
   <tr><td>
   <table width="100%" border="0" style="font-size:13px">
  <tr>
    <td>Highly Recommended&nbsp;</td>
    <td>Recommended</td>
    <td>Recommended with some reservations</td>
    <td>Not Recommended</td>
  </tr>
  <tr>
    <td><input type="radio" name="recommend" value="Highly Recommended" ></td>
    <td><input type="radio" name="recommend" value="Recommended" ></td>
    <td><input type="radio" name="recommend" value="Recommended with some reservations" ></td>
    <td><input type="radio" name="recommend" value="Not Recommended" ></td>
  </tr>
</table>
   
<tr><td colspan="2" style="padding:10px">3.You may describe the applicant specifically on the applicant's strengths and limitations for the doctoral study<br>
  <textarea name="fp" cols="120" rows="15" class="textbox1" id="fp" onKeyUp="countit_fp()" onFocus="countit_fp()"></textarea>
</td></tr>
<tr><td colspan="2" style="padding:10px">
    <input type="submit" name="" value="Submit">
</td></tr>
</table>