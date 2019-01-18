<style>
	.carousel-control.left
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

</style>
<script>
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
		{ 	alert("Please write in 300 words");
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
<body style="text-align: -moz-center;">
<br>
<form name="f1" method="post" action="refereerecomen.php">
<table cellspacing="5" cellpadding="5" width="800" align="center" cellspacing="0" bgcolor="#FFFFFF" class="callletterbody " style="border:2px solid #666666">
    <tr>
    	<td colspan="2" width="100%" style="border-bottom:2px solid #666666">
        <table>
        	<tr>
                <td height="90" width="100" bgcolor="#FFFFFF"><div align="center"><img src="images/iimklogo.png" width="80" ></div></td>
                <td height="28" width="600" bgcolor="#FFFFFF" style="text-align:center"><p><strong><span style="font-size:18px">REFEREE RECOMMENDATION</span></strong></p>
                  <p><strong><span style="font-size: 15px">FOR</span></strong></p>
                  <p><strong><span style="font-size:15px">APPLICATION TO THE FELLOW PROGRAMME IN MANAGEMENT</span><br>
                    <span style="font-size:22px">INDIAN INSTITUTE OF MANAGEMENT KOZHIKODE</span><br>
                  <span style="font-size:14px">(Applicant should complete the top section of this form before giving it to the Referee-<b>Use uppercase letters</b></span></strong></p></td>
                                      <td height="90" width="100" bgcolor="#FFFFFF"><div align="center"><img src="http://iimk.ac.in/img/AMBAlogo.png" width="90"></div></td>
            </tr>
        </table>
        </td>
    </tr>
    <tr>    	
    	<td width="100%" style="text-align:left; padding:10px">
    		First Name <strong><input type="text" name="fisrtname" readonly value="Sayan Basak "></strong> Middle Name <strong><input type="text" name="secondname" readonly value="Sayan Basak "></strong> Last Name <strong><input type="text" name="surname" readonly value="Sayan Basak "></strong>
    	</td>
    </tr>
    <tr>
    	<td colspan="2">
      
        </td>
    </tr>
    <tr>
    	<td  style="padding:10px">
			<input type="radio" name="gender" value="male">Male <input type="radio" name="gender" value="female">Female
		</td>
	</tr>
    <tr>
    	<td  style="padding:10px">
    		Blood Group
    		<select name="bloodgroup">
				<option>A</option>
				<option>A+</option>
				<option>AB+</option>
			</select>
			Marital Status
			<select name="maritalstatus">
				<option>Married</option>
				<option>Divorced</option>
			</select>
			Country
			<select name="country">
                       	<option value="4">Afghanistan</option>
						<option value="248">Åland Islands</option>
						<option value="8">Albania</option>
						<option value="12">Algeria</option>
						<option value="16">American Samoa</option>
						<option value="20">Andorra</option>
						<option value="24">Angola</option>
						<option value="660">Anguilla</option>
						<option value="10">Antarctica</option>
						<option value="28">Antigua and Barbuda</option>
						<option value="32">Argentina</option>
						<option value="51">Armenia</option>
						<option value="533">Aruba</option>
						<option value="36">Australia</option>
						<option value="40">Austria</option>
						<option value="31">Azerbaijan</option>
						<option value="44">Bahamas</option>
						<option value="48">Bahrain</option>
						<option value="50">Bangladesh</option>
						<option value="52">Barbados</option>
						<option value="112">Belarus</option>
						<option value="56">Belgium</option>
						<option value="84">Belize</option>
						<option value="204">Benin</option>
						<option value="60">Bermuda</option>
						<option value="64">Bhutan</option>
						<option value="68">Bolivia, Plurinational State of</option>
						<option value="535">Bonaire, Sint Eustatius and Saba</option>
						<option value="70">Bosnia and Herzegovina</option>
						<option value="72">Botswana</option>
						<option value="74">Bouvet Island</option>
						<option value="76">Brazil</option>
						<option value="86">British Indian Ocean Territory</option>
						<option value="96">Brunei Darussalam</option>
						<option value="100">Bulgaria</option>
						<option value="854">Burkina Faso</option>
						<option value="108">Burundi</option>
						<option value="116">Cambodia</option>
						<option value="120">Cameroon</option>
						<option value="124">Canada</option>
						<option value="132">Cape Verde</option>
						<option value="136">Cayman Islands</option>
						<option value="140">Central African Republic</option>
						<option value="148">Chad</option>
						<option value="152">Chile</option>
						<option value="156">China</option>
						<option value="162">Christmas Island</option>
						<option value="166">Cocos (Keeling) Islands</option>
						<option value="170">Colombia</option>
						<option value="174">Comoros</option>
						<option value="178">Congo</option>
						<option value="180">Congo, the Democratic Republic of the</option>
						<option value="184">Cook Islands</option>
						<option value="188">Costa Rica</option>
						<option value="384">Côte d'Ivoire</option>
						<option value="191">Croatia</option>
						<option value="192">Cuba</option>
						<option value="531">Curaçao</option>
						<option value="196">Cyprus</option>
						<option value="203">Czech Republic</option>
						<option value="208">Denmark</option>
						<option value="262">Djibouti</option>
						<option value="212">Dominica</option>
						<option value="214">Dominican Republic</option>
						<option value="218">Ecuador</option>
						<option value="818">Egypt</option>
						<option value="222">El Salvador</option>
						<option value="226">Equatorial Guinea</option>
						<option value="232">Eritrea</option>
						<option value="233">Estonia</option>
						<option value="231">Ethiopia</option>
						<option value="238">Falkland Islands (Malvinas)</option>
						<option value="234">Faroe Islands</option>
						<option value="242">Fiji</option>
						<option value="246">Finland</option>
						<option value="250">France</option>
						<option value="254">French Guiana</option>
						<option value="258">French Polynesia</option>
						<option value="260">French Southern Territories</option>
						<option value="266">Gabon</option>
						<option value="270">Gambia</option>
						<option value="268">Georgia</option>
						<option value="276">Germany</option>
						<option value="288">Ghana</option>
						<option value="292">Gibraltar</option>
						<option value="300">Greece</option>
						<option value="304">Greenland</option>
						<option value="308">Grenada</option>
						<option value="312">Guadeloupe</option>
						<option value="316">Guam</option>
						<option value="320">Guatemala</option>
						<option value="831">Guernsey</option>
						<option value="324">Guinea</option>
						<option value="624">Guinea-Bissau</option>
						<option value="328">Guyana</option>
						<option value="332">Haiti</option>
						<option value="334">Heard Island and McDonald Islands</option>
						<option value="336">Holy See (Vatican City State)</option>
						<option value="340">Honduras</option>
						<option value="344">Hong Kong</option>
						<option value="348">Hungary</option>
						<option value="352">Iceland</option>
						<option value="356">India</option>
						<option value="360">Indonesia</option>
						<option value="364">Iran, Islamic Republic of</option>
						<option value="368">Iraq</option>
						<option value="372">Ireland</option>
						<option value="833">Isle of Man</option>
						<option value="376">Israel</option>
						<option value="380">Italy</option>
						<option value="388">Jamaica</option>
						<option value="392">Japan</option>
						<option value="832">Jersey</option>
						<option value="400">Jordan</option>
						<option value="398">Kazakhstan</option>
						<option value="404">Kenya</option>
						<option value="296">Kiribati</option>
						<option value="408">Korea, Democratic People's Republic of</option>
						<option value="410">Korea, Republic of</option>
						<option value="414">Kuwait</option>
						<option value="417">Kyrgyzstan</option>
						<option value="418">Lao People's Democratic Republic</option>
						<option value="428">Latvia</option>
						<option value="422">Lebanon</option>
						<option value="426">Lesotho</option>
						<option value="430">Liberia</option>
						<option value="434">Libya</option>
						<option value="438">Liechtenstein</option>
						<option value="440">Lithuania</option>
						<option value="442">Luxembourg</option>
						<option value="446">Macao</option>
						<option value="807">Macedonia, the former Yugoslav Republic of</option>
						<option value="450">Madagascar</option>
						<option value="454">Malawi</option>
						<option value="458">Malaysia</option>
						<option value="462">Maldives</option>
						<option value="466">Mali</option>
						<option value="470">Malta</option>
						<option value="584">Marshall Islands</option>
						<option value="474">Martinique</option>
						<option value="478">Mauritania</option>
						<option value="480">Mauritius</option>
						<option value="175">Mayotte</option>
						<option value="484">Mexico</option>
						<option value="583">Micronesia, Federated States of</option>
						<option value="498">Moldova, Republic of</option>
						<option value="492">Monaco</option>
						<option value="496">Mongolia</option>
						<option value="499">Montenegro</option>
						<option value="500">Montserrat</option>
						<option value="504">Morocco</option>
						<option value="508">Mozambique</option>
						<option value="104">Myanmar</option>
						<option value="516">Namibia</option>
						<option value="520">Nauru</option>
						<option value="524">Nepal</option>
						<option value="528">Netherlands</option>
						<option value="540">New Caledonia</option>
						<option value="554">New Zealand</option>
						<option value="558">Nicaragua</option>
						<option value="562">Niger</option>
						<option value="566">Nigeria</option>
						<option value="570">Niue</option>
						<option value="574">Norfolk Island</option>
						<option value="580">Northern Mariana Islands</option>
						<option value="578">Norway</option>
						<option value="512">Oman</option>
						<option value="586">Pakistan</option>
						<option value="585">Palau</option>
						<option value="275">Palestinian Territory, Occupied</option>
						<option value="591">Panama</option>
						<option value="598">Papua New Guinea</option>
						<option value="600">Paraguay</option>
						<option value="604">Peru</option>
						<option value="608">Philippines</option>
						<option value="612">Pitcairn</option>
						<option value="616">Poland</option>
						<option value="620">Portugal</option>
						<option value="630">Puerto Rico</option>
						<option value="634">Qatar</option>
						<option value="638">Réunion</option>
						<option value="642">Romania</option>
						<option value="643">Russian Federation</option>
						<option value="646">Rwanda</option>
						<option value="652">Saint Barthélemy</option>
						<option value="654">Saint Helena, Ascension and Tristan da Cunha</option>
						<option value="659">Saint Kitts and Nevis</option>
						<option value="662">Saint Lucia</option>
						<option value="663">Saint Martin (French part)</option>
						<option value="666">Saint Pierre and Miquelon</option>
						<option value="670">Saint Vincent and the Grenadines</option>
						<option value="882">Samoa</option>
						<option value="674">San Marino</option>
						<option value="678">Sao Tome and Principe</option>
						<option value="682">Saudi Arabia</option>
						<option value="686">Senegal</option>
						<option value="688">Serbia</option>
						<option value="690">Seychelles</option>
						<option value="694">Sierra Leone</option>
						<option value="702">Singapore</option>
						<option value="534">Sint Maarten (Dutch part)</option>
						<option value="703">Slovakia</option>
						<option value="705">Slovenia</option>
						<option value="90">Solomon Islands</option>
						<option value="706">Somalia</option>
						<option value="710">South Africa</option>
						<option value="239">South Georgia and the South Sandwich Islands</option>
						<option value="728">South Sudan</option>
						<option value="724">Spain</option>
						<option value="144">Sri Lanka</option>
						<option value="729">Sudan</option>
						<option value="740">Suriname</option>
						<option value="744">Svalbard and Jan Mayen</option>
						<option value="748">Swaziland</option>
						<option value="752">Sweden</option>
						<option value="756">Switzerland</option>
						<option value="760">Syrian Arab Republic</option>
						<option value="158">Taiwan, Province of China</option>
						<option value="762">Tajikistan</option>
						<option value="834">Tanzania, United Republic of</option>
						<option value="764">Thailand</option>
						<option value="626">Timor-Leste</option>
						<option value="768">Togo</option>
						<option value="772">Tokelau</option>
						<option value="776">Tonga</option>
						<option value="780">Trinidad and Tobago</option>
						<option value="788">Tunisia</option>
						<option value="792">Turkey</option>
						<option value="795">Turkmenistan</option>
						<option value="796">Turks and Caicos Islands</option>
						<option value="798">Tuvalu</option>
						<option value="800">Uganda</option>
						<option value="804">Ukraine</option>
						<option value="784">United Arab Emirates</option>
						<option value="826">United Kingdom</option>
						<option value="840">United States</option>
						<option value="581">United States Minor Outlying Islands</option>
						<option value="858">Uruguay</option>
						<option value="860">Uzbekistan</option>
						<option value="548">Vanuatu</option>
						<option value="862">Venezuela, Bolivarian Republic of</option>
						<option value="704">Viet Nam</option>
						<option value="92">Virgin Islands, British</option>
						<option value="850">Virgin Islands, U.S.</option>
						<option value="876">Wallis and Futuna</option>
						<option value="732">Western Sahara</option>
						<option value="887">Yemen</option>
						<option value="894">Zambia</option>
						<option value="716">Zimbabwe</option>
        	</select>
        </td>
	</tr>
	<tr>
    	<td  style="padding:10px">
			Mobile Number
        	<input type="" name="mobile">
        	Telephone Number
        	<input type="telephone" name="">
		</td>
	</tr>
	<tr>
    	<td  style="padding:10px">
			Email 
        	<input type="" name="primaryemail">
        	Secondry Email
        	<input type="" name="secondryemail">
		</td>
	</tr>        




















	<tr><td colspan="2" style="padding:10px;text-align:center">To be filled in by the Referee</td></tr>
    <tr><td colspan="2" style="padding:10px">The candidate has applied for the Fellow Programme in Management(equivalent to a Ph.D. Programme) at IIM Kozhikode. The Referee is requested to fill this form.<br><br>In addition to responding to the items below,please enter your  comments specifically on the applicant's strengths and limitations for the doctoral study.You should consider previous accomplishments,intellectual independence,capacity for analytical thinking ,ability to work with others ,ability to organize and express ideas clearly,and drive and motivation. Please explain in what capacity you have known the applicant and for what time period.</td></tr>
    <tr><td colspan="2" style="padding:10px">1.In what capacity and for how long have you known the applicant:<textarea name="profile" cols="65" rows="5" id="profile" style="width:600px; height:100px; border-color:#C1CDCD;"></textarea></td></tr>
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
  <!-- &nbsp;&nbsp;Highly Recommended &nbsp;&nbsp;&nbsp;&nbsp; Recommended &nbsp;&nbsp;&nbsp;&nbsp; Recommended with some reservations &nbsp;&nbsp; &nbsp;&nbsp; Not Recommended-->
   </td></tr>
   <!--tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="recommend" value="Highly Recommended" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="recommend" value="Recommended" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="recommend" value="Recommended with some reservations" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="recommend" value="Not Recommended" >
   </td></tr-->
  <tr><td colspan="2" style="padding:10px">3.You may describe the applicant specifically on the applicant's strengths and limitations for the doctoral study<br>
  <textarea name="fp" cols="120" rows="15" class="textbox1" id="fp" onKeyUp="countit_fp()" onFocus="countit_fp()"></textarea>
            <input name="fpinfo" type="text" class="textbox2" size="25" maxlength="25" readonly style="width:100px; ">
   </td></tr>
   
      <tr>
   	   <td  >Name of Referee <input type="text" name="referee"  value="Priyanjali Datta"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Designation <input type="text" name="desig" value="Doctor and Founder/CEO AAroogya"><br><br>
       Organization &nbsp;&nbsp;&nbsp;<input type="text" class="textbox1" name="orga" value="ESI Hospitals"><br><br>Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="textbox1" name="add" value=" 118, Ring Road Mall, Rohini sector-3, New Delhi, India, 110085"><br><br>Phone No.(s)&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="phno" value="  +918383820651 ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email ID <input type="text" name="email" class="textbox1" readonly value="drpriyanjalidatta@aaroogya.org"></td>
    </tr>    <tr>
    	<!--<td colspan="2" style=" font-weight: bold;"><input type="checkbox" name="checkbox" value="check" id="agree" style="width:50px;"><span class="text">I hereby accept the Terms & Conditions and Declaration for the FPM. </span>				
                                              </td>-->
    </tr>
    <tr>
    	<td colspan="2" style="padding:10px" align="center"><input type="submit" name="Submit2" value="Submit" class="reg-btn"><br></td>
    </tr>
    <tr bgcolor="#000000">
        <td height="20" colspan="2" style="color:#FFFFFF"><span class="txt1"><font size="-3"><center>&copy; Indian Institute of Management Kozhikode</center></font></span></td>
    </tr>
   
</table>
</form>
</body>
</html>
