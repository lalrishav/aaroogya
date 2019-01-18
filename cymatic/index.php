<?php
$flag = 0;
if(isset($_GET["refid"])){
	$flag = 1;
	$refid = $_GET["refid"];
	$conn = mysqli_connect("localhost","root","","cymatic");
	$query = mysqli_query($conn,"SELECT * FROM users WHERE id='$refid'");
	$data =  mysqli_fetch_assoc($query);
	echo $data["id"];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <style type="text/css">
    	textarea {
		  
		  width: 500px;
		  height: 100px;
		  -moz-border-bottom-colors: none;
		  -moz-border-left-colors: none;
		  -moz-border-right-colors: none;
		  -moz-border-top-colors: none;
		  background: none repeat scroll 0 0 rgba(0, 0, 0, 0.07);
		  border-color: -moz-use-text-color #FFFFFF #FFFFFF -moz-use-text-color;
		  border-image: none;
		  border-radius: 6px 6px 6px 6px;
		  border-style: none solid solid none;
		  border-width: medium 1px 1px medium;
		  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.12) inset;
		  color: #555555;
		  font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
		  font-size: 1em;
		  line-height: 1.4em;
		  padding: 50px 80px;
		  transition: background-color 0.2s ease 0s;
	}



textarea:focus {
    background: none repeat scroll 0 0 #FFFFFF;
    outline-width: 0;
}

#hello{
	background: url('Picture2.png');

}
    </style>

    <script type="text/javascript">
    	function show12(){
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
    </script>
</head>

<body>
    <div class="page-wrapper bg-red p-t-100 p-b-100 font-robo" id="hello">
        <div class="wrapper wrapper--w680">
            <div class="card card-1" id="personal information">
                <div class="card-body">
                    <h2 class="title">Personal and Contact Details</h2>
                    <form action="enteruser.php" method="POST" >
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="First Name*" name="firstname">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Middle Name*" name="secondname">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Surname*" name="surname">
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="gender">
                                    <option disabled="disabled" selected="selected">GENDER</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            	<div class="select-dropdown"></div>
                        </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                            	<div class="input-group">
                            		<input class="input--style-1" type="text" placeholder="Blood Group" name="bloodgroup">
                                    
                        		</div>
                                <!--<div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="BIRTHDATE" name="birthday">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>-->
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Marital Status" name="maritalstatus">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                           <input class="input--style-1" type="text" placeholder="Class*" name="class">
                        </div>

                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="country">
                                    <option disabled="disabled" selected="selected">Country</option>
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
                            	<div class="select-dropdown"></div>
                        	</div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Category*" name="category">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Mobile Number*" name="mobile">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Telephone Number*" name="telephone">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Primary Email*" name="primaryemail">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Alternate Email*" name="secondryemail">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Nationality" name="nationality">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Preferred Interview City*" name="interviewcity">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Mailing Address*" name="mail">
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="state">
                                    <option disabled="disabled" selected="selected">State</option>
                                   	<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
									<option value="Andhra Pradesh">Andhra Pradesh</option>
									<option value="Arunachal Pradesh">Arunachal Pradesh</option>
									<option value="Assam">Assam</option>
									<option value="Bihar">Bihar</option>
									<option value="Chandigarh">Chandigarh</option>
									<option value="Chhattisgarh">Chhattisgarh</option>
									<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
									<option value="Daman and Diu">Daman and Diu</option>
									<option value="Delhi">Delhi</option>
									<option value="Goa">Goa</option>
									<option value="Gujarat">Gujarat</option>
									<option value="Haryana">Haryana</option>
									<option value="Himachal Pradesh">Himachal Pradesh</option>
									<option value="Jammu and Kashmir">Jammu and Kashmir</option>
									<option value="Jharkhand">Jharkhand</option>
									<option value="Karnataka">Karnataka</option>
									<option value="Kerala">Kerala</option>
									<option value="Lakshadweep">Lakshadweep</option>
									<option value="Madhya Pradesh">Madhya Pradesh</option>
									<option value="Maharashtra">Maharashtra</option>
									<option value="Manipur">Manipur</option>
									<option value="Meghalaya">Meghalaya</option>
									<option value="Mizoram">Mizoram</option>
									<option value="Nagaland">Nagaland</option>
									<option value="Orissa">Orissa</option>
									<option value="Pondicherry">Pondicherry</option>
									<option value="Punjab">Punjab</option>
									<option value="Rajasthan">Rajasthan</option>
									<option value="Sikkim">Sikkim</option>
									<option value="Tamil Nadu">Tamil Nadu</option>
									<option value="Tripura">Tripura</option>
									<option value="Uttaranchal">Uttaranchal</option>
									<option value="Uttar Pradesh">Uttar Pradesh</option>
									<option value="West Bengal">West Bengal</option>
                                </select>
                            	<div class="select-dropdown"></div>
                        	</div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Pin" name="pin">
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="domicilestate">
                                    <option disabled="disabled" selected="selected">Domicile State</option>
                                   	<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
									<option value="Andhra Pradesh">Andhra Pradesh</option>
									<option value="Arunachal Pradesh">Arunachal Pradesh</option>
									<option value="Assam">Assam</option>
									<option value="Bihar">Bihar</option>
									<option value="Chandigarh">Chandigarh</option>
									<option value="Chhattisgarh">Chhattisgarh</option>
									<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
									<option value="Daman and Diu">Daman and Diu</option>
									<option value="Delhi">Delhi</option>
									<option value="Goa">Goa</option>
									<option value="Gujarat">Gujarat</option>
									<option value="Haryana">Haryana</option>
									<option value="Himachal Pradesh">Himachal Pradesh</option>
									<option value="Jammu and Kashmir">Jammu and Kashmir</option>
									<option value="Jharkhand">Jharkhand</option>
									<option value="Karnataka">Karnataka</option>
									<option value="Kerala">Kerala</option>
									<option value="Lakshadweep">Lakshadweep</option>
									<option value="Madhya Pradesh">Madhya Pradesh</option>
									<option value="Maharashtra">Maharashtra</option>
									<option value="Manipur">Manipur</option>
									<option value="Meghalaya">Meghalaya</option>
									<option value="Mizoram">Mizoram</option>
									<option value="Nagaland">Nagaland</option>
									<option value="Orissa">Orissa</option>
									<option value="Pondicherry">Pondicherry</option>
									<option value="Punjab">Punjab</option>
									<option value="Rajasthan">Rajasthan</option>
									<option value="Sikkim">Sikkim</option>
									<option value="Tamil Nadu">Tamil Nadu</option>
									<option value="Tripura">Tripura</option>
									<option value="Uttaranchal">Uttaranchal</option>
									<option value="Uttar Pradesh">Uttar Pradesh</option>
									<option value="West Bengal">West Bengal</option>
                                </select>
                            	<div class="select-dropdown"></div>
                        	</div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Domicile City*" name="domicilecity">
                        </div>
                    
                        <!--<div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="REGISTRATION CODE" name="res_code">
                                </div>
                            </div>
                        </div>-->
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="button" value="next" onclick="show12()">Next</button>
                        </div>
                                    </div>
            </div>
            <div class="card card-1" id="academic-12" style="display: none;">
                <div class="card-body">
                    <h2 class="title">Academic Details</h2>
                    <h3 class="title">Class XII</h2>

                    
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Name of school*" name="12thschool">
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="12thcountry">
                                    <option disabled="disabled" selected="selected">Country</option>
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
                            	<div class="select-dropdown"></div>
                        	</div>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="12thstate">
                                    <option disabled="disabled" selected="selected">State</option>
                                   	<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
									<option value="Andhra Pradesh">Andhra Pradesh</option>
									<option value="Arunachal Pradesh">Arunachal Pradesh</option>
									<option value="Assam">Assam</option>
									<option value="Bihar">Bihar</option>
									<option value="Chandigarh">Chandigarh</option>
									<option value="Chhattisgarh">Chhattisgarh</option>
									<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
									<option value="Daman and Diu">Daman and Diu</option>
									<option value="Delhi">Delhi</option>
									<option value="Goa">Goa</option>
									<option value="Gujarat">Gujarat</option>
									<option value="Haryana">Haryana</option>
									<option value="Himachal Pradesh">Himachal Pradesh</option>
									<option value="Jammu and Kashmir">Jammu and Kashmir</option>
									<option value="Jharkhand">Jharkhand</option>
									<option value="Karnataka">Karnataka</option>
									<option value="Kerala">Kerala</option>
									<option value="Lakshadweep">Lakshadweep</option>
									<option value="Madhya Pradesh">Madhya Pradesh</option>
									<option value="Maharashtra">Maharashtra</option>
									<option value="Manipur">Manipur</option>
									<option value="Meghalaya">Meghalaya</option>
									<option value="Mizoram">Mizoram</option>
									<option value="Nagaland">Nagaland</option>
									<option value="Orissa">Orissa</option>
									<option value="Pondicherry">Pondicherry</option>
									<option value="Punjab">Punjab</option>
									<option value="Rajasthan">Rajasthan</option>
									<option value="Sikkim">Sikkim</option>
									<option value="Tamil Nadu">Tamil Nadu</option>
									<option value="Tripura">Tripura</option>
									<option value="Uttaranchal">Uttaranchal</option>
									<option value="Uttar Pradesh">Uttar Pradesh</option>
									<option value="West Bengal">West Bengal</option>
                                </select>
                            	<div class="select-dropdown"></div>
                        	</div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="City*" name="12thcity">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Board*" name="12thboard">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Year*" name="12thyear">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Aggregate marks (Please convert your grades into %) *" name="12thmarks">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Approx. rank in class *" name="12thranks">
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="button" onclick="showug()">Next</button>
                            <button class="btn btn--radius btn--green" type="button" onclick="showpersonal()">Previous</button>
                        </div>
                    
                </div>
            </div>
            <div class="card card-1" id="academic-ug" style="display: none;">
                <div class="card-body">
                    <h2 class="title">Academic Details</h2>
                    <h3 class="title">Under Graduate</h3>

                    
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="ugcountry">
                                    <option disabled="disabled" selected="selected">Country</option>
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
                            	<div class="select-dropdown"></div>
                        	</div>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="ugstate">
                                    <option disabled="disabled" selected="selected">Country</option>
                                   	<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
									<option value="Andhra Pradesh">Andhra Pradesh</option>
									<option value="Arunachal Pradesh">Arunachal Pradesh</option>
									<option value="Assam">Assam</option>
									<option value="Bihar">Bihar</option>
									<option value="Chandigarh">Chandigarh</option>
									<option value="Chhattisgarh">Chhattisgarh</option>
									<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
									<option value="Daman and Diu">Daman and Diu</option>
									<option value="Delhi">Delhi</option>
									<option value="Goa">Goa</option>
									<option value="Gujarat">Gujarat</option>
									<option value="Haryana">Haryana</option>
									<option value="Himachal Pradesh">Himachal Pradesh</option>
									<option value="Jammu and Kashmir">Jammu and Kashmir</option>
									<option value="Jharkhand">Jharkhand</option>
									<option value="Karnataka">Karnataka</option>
									<option value="Kerala">Kerala</option>
									<option value="Lakshadweep">Lakshadweep</option>
									<option value="Madhya Pradesh">Madhya Pradesh</option>
									<option value="Maharashtra">Maharashtra</option>
									<option value="Manipur">Manipur</option>
									<option value="Meghalaya">Meghalaya</option>
									<option value="Mizoram">Mizoram</option>
									<option value="Nagaland">Nagaland</option>
									<option value="Orissa">Orissa</option>
									<option value="Pondicherry">Pondicherry</option>
									<option value="Punjab">Punjab</option>
									<option value="Rajasthan">Rajasthan</option>
									<option value="Sikkim">Sikkim</option>
									<option value="Tamil Nadu">Tamil Nadu</option>
									<option value="Tripura">Tripura</option>
									<option value="Uttaranchal">Uttaranchal</option>
									<option value="Uttar Pradesh">Uttar Pradesh</option>
									<option value="West Bengal">West Bengal</option>
                                </select>
                            	<div class="select-dropdown"></div>
                        	</div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="City*" name="ugcity">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Name of College *" name="ugcollege">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="University affiliated To*" name="uguniversity">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                            	<div class="input-group">
                            		<input class="input--style-1" type="text" placeholder="Attended From" name="ugattendedfrom">
                        		</div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Attended Till" name="ugattendedtill">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Stream*" name="ugstream">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Major Field of Study*" name="ugfield">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Aggregate marks in % (over all semesters completed so far)*" name="ugmarks">
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="button" onclick="showpg()">Next</button>
                            <button class="btn btn--radius btn--green" type="button" onclick="show12()">Previous</button>
                        </div>
                    
                </div>
            </div>
            <div class="card card-1" id="academic-pg" style="display: none;">
                <div class="card-body">
                    <h2 class="title">Academic Details</h2>
                    <h3 class="title">Post Graduate</h2>

                    
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="pgcountry">
                                    <option disabled="disabled" selected="selected">Country</option>
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
                            	<div class="select-dropdown"></div>
                        	</div>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="pgstate">
                                    <option disabled="disabled" selected="selected">Country</option>
                                   	<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
									<option value="Andhra Pradesh">Andhra Pradesh</option>
									<option value="Arunachal Pradesh">Arunachal Pradesh</option>
									<option value="Assam">Assam</option>
									<option value="Bihar">Bihar</option>
									<option value="Chandigarh">Chandigarh</option>
									<option value="Chhattisgarh">Chhattisgarh</option>
									<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
									<option value="Daman and Diu">Daman and Diu</option>
									<option value="Delhi">Delhi</option>
									<option value="Goa">Goa</option>
									<option value="Gujarat">Gujarat</option>
									<option value="Haryana">Haryana</option>
									<option value="Himachal Pradesh">Himachal Pradesh</option>
									<option value="Jammu and Kashmir">Jammu and Kashmir</option>
									<option value="Jharkhand">Jharkhand</option>
									<option value="Karnataka">Karnataka</option>
									<option value="Kerala">Kerala</option>
									<option value="Lakshadweep">Lakshadweep</option>
									<option value="Madhya Pradesh">Madhya Pradesh</option>
									<option value="Maharashtra">Maharashtra</option>
									<option value="Manipur">Manipur</option>
									<option value="Meghalaya">Meghalaya</option>
									<option value="Mizoram">Mizoram</option>
									<option value="Nagaland">Nagaland</option>
									<option value="Orissa">Orissa</option>
									<option value="Pondicherry">Pondicherry</option>
									<option value="Punjab">Punjab</option>
									<option value="Rajasthan">Rajasthan</option>
									<option value="Sikkim">Sikkim</option>
									<option value="Tamil Nadu">Tamil Nadu</option>
									<option value="Tripura">Tripura</option>
									<option value="Uttaranchal">Uttaranchal</option>
									<option value="Uttar Pradesh">Uttar Pradesh</option>
									<option value="West Bengal">West Bengal</option>
                                </select>
                            	<div class="select-dropdown"></div>
                        	</div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="City*" name="pgcity">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Name of College *" name="pgcollege">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="University affiliated To*" name="pguniversity">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                            	<div class="input-group">
                            		<input class="input--style-1" type="text" placeholder="Attended From" name="pgattendedfrom">
                        		</div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Attended Till" name="pgattendedtill">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Stream*" name="pgstream">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Major Field of Study*" name="pgfield">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Aggregate marks in % (over all semesters completed so far)*" name="pgmarks">
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="button" onclick="showemp()">Next</button>
                            <button class="btn btn--radius btn--green" type="button" onclick="showug()">Previous</button>
                        </div>
                    
                </div>
            </div>
            <div class="card card-1" id="employment" style="display: none;">
                <div class="card-body">
                    <h2 class="title">Employment Details</h2>

                    
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Total Work Exprience(In Months)*" name="workexp">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Total Internship Exprience(In Months)" name="internexp">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Name of Organization" name="emporg">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Name of College *" name="empcollege">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Location*" name="emplocation">
                        </div>
                        
                            
                    	<div class="input-group">
                    		<input class="input--style-1" type="text" placeholder="Annual CTC" name="ctc">
                		</div>
                    
                    
                        <div class="input-group">
                            <textarea class="input--style-1" placeholder="What are your main responsibilities in this position(max 100 words)	" name="mainresponsibility"></textarea>
                        </div>

                        <div class="input-group">
                            <textarea class="input--style-1" placeholder="What has been the biggest challenge youhave faced in this position and how did you tackle it?" name="challenges"></textarea>
                        </div>


                        <div class="input-group">
                            <textarea class="input--style-1" placeholder="Awards/ accomplishments:" name="awards"></textarea>
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="button" onclick="showessay()">Next</button>
                            <button class="btn btn--radius btn--green" type="button" onclick="showpg()">Previous</button>
                        </div>
                    
                </div>
            </div>
            <div class="card card-1" id="essay"  style="display: none;">
                <div class="card-body">
                    <h2 class="title">Essays</h2>

                    
                    	<h5>Why do you see yourself as an aspirational entrepreneur or community leader? *  (Max 300 words)</h5><br>
                       <textarea class="input--style-1" placeholder="" name="essay1"></textarea><br><br>

                       <h5>What are your biggest achievements  and lowest points of life so far and why do you consider it to be so?*  (Max 300 words) </h5><br>
                       <textarea class="input--style-1" placeholder="" name="essay2"></textarea><br><br>

                       <h5>What do you hope to accomplish from the Aaroogya Research and Public Health Fellowship (ARPHF)?*  (Max 300 words)</h5><br>
                       <textarea class="input--style-1" placeholder="" name="essay3"></textarea><br><br>

                       <h5>Help us understand your statement of purpose highlighting challenges and milestones achieved.*  (Max 300 words) </h5><br>
                       <textarea class="input--style-1" placeholder="" name="essay4"></textarea><br><br>

                       <h5>Do share with us any other details that you think might add to your candidature for the the Aaroogya Research and Public Health Fellowship (ARPHF).  (Max 300 words) </h5><br>
                       <textarea class="input--style-1" placeholder="" name="essay5"></textarea><br><br>

                       <h5>Do attach any relevant certificates/ testimonials/ documents that you think might add to your candidature for the Young India Fellowship (Optional).  </h5><br>
                       

                       <div class="input-group">
                            <input class="input--style-1" type="file" placeholder="Total Work Exprience(In Months)*" name="essay6">
                        </div>

                         <div class="p-t-20">
                         	<?php if($flag == 1) { ?>
                         		<button class="btn btn--radius btn--green" type="button" onclick="showrefree()">Next</button>
                         	<?php }else{?>
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                            <?php } ?>
                            <button class="btn btn--radius btn--green" type="button" onclick="showemp()">Previous</button>
                        </div>

                    
                </div>
            </div>

            
            <?php if($flag == 1) { ?>
            <div class="card card-1" id="referee"  style="display: none;">
                <div class="card-body">
                    <h2 class="title">Referee Details</h2>
                    <strong>An email will be sent to your referee once you press the 'final submit' tab of your application. Your referee will receive the link along with a 'user id' and 'password' for your 'Letter of Recommendation' form. He/She will have to fill that form and submit the recommendation form before your Personal Interview date</strong><br><br>
                    	<div class="input-group">
                            <input class="input--style-1" type="text" placeholder="First Name*" name="refID" disabled="true" value="<?php echo $data["id"]?>">
                        </div>
                    
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="First Name*" name="reffullname" value="<?php echo $data["firstname"]?>">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Middle Name*" name="refmiddlename" value="<?php echo $data["middlename"]?>">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Surname*" name="refsurname" value="<?php echo $data["surname"]?>">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Relationship with the candidate " name="refrelation" >
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Organization (if applicable) " name="reforg" value="<?php echo $data["organisation"]?>">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Designation*" name="refdesg">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Mobile no. *" name="refmobile"  value="<?php echo $data["mobilenumber"]?>">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Email Address *" name="refemail" value="<?php echo $data["primaryemail"]?>">
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                            <button class="btn btn--radius btn--green" type="button" onclick="showessay()">Previous</button>
                        </div>
                    </form>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
