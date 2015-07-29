<?PHP
/*
    Contact Form from HTML Form Guide
    This program is free software published under the
    terms of the GNU Lesser General Public License.
    See this page for more info:
    http://www.html-form-guide.com/contact-form/contact-form-attachment.html
*/
require_once("./include/fgcontactform.php");
require_once("./include/captcha-creator.php");

$formproc = new FGContactForm();
$captcha = new FGCaptchaCreator('scaptcha');

$formproc->EnableCaptcha($captcha);

//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient('recruitment@russam-gms.co.uk'); //<<---Put your email address here


//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('XsHVufPpgD9Epwl');

$formproc->AddFileUploadField('photo','jpg,jpeg,gif,png,bmp',2024);
$formproc->AddFileUploadField('uploadcv','doc,docx,pdf,txt',5024);

if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        $formproc->RedirectToURL("../thankyou.html");
   }
}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META NAME="DESCRIPTION" CONTENT="Non Executives Unlimited - Registration Form" />
<META NAME="KEYWORDS" CONTENT="Trustees, recruitment, board, charity, social, enterprise, housing, association, non, executive, charities, enterprises, students, black, BME, governance, chair, chairman, trustee, boards, leadership, leader, chief, diversity" />
<title>Non-Executives Unlimited - About Us</title>
<link href="../style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
body {
	background-color: #F2F2F2;
	background-image: url(../img/backgroundgradient.jpg);
	background-repeat: repeat-x;
}
-->
</style>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-15731822-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script><!--jquery css stats start-->
<script src="http://www.trustees-unlimited.co.uk/jquery.min.js"></script>
<script>
$(function(){
	$('.interim_managers_text div:gt(0)').hide();
	setInterval(function(){$('.interim_managers_text :first-child').fadeOut().next('div').fadeIn().end().appendTo('.interim_managers_text');}, 2500);
});
</script>
<!--jquery css stats end-->
<!--form validator starts here-->
<link rel="STYLESHEET" type="text/css" href="contact.css" />
<script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
<script type='text/javascript' src='scripts/fg_captcha_validator.js'></script>
<!--form validator ends here-->

</head> 



<body>


<div class="white_container">
 <div class="header"><table width="972" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="486" rowspan="2" align="center" valign="top"><img src="../img/header_portion1.gif" alt="Trustees Unlimited" width="486" height="178" border="0" usemap="#Map4" />
      <map name="Map4" id="Map4">
      <area shape="rect" coords="2,125,159,173" href="../index.html" />
        <area shape="rect" coords="161,126,321,171" href="../needatrustee.html" />
        <area shape="rect" coords="326,126,482,173" href="Nonexecutives_Registration.php" />
        <area shape="rect" coords="3,2,272,115" href="../index.html" />
      </map></td>
    <td width="486" height="28" align="center" valign="top"><div class="interim_managers_container">
     <div class="interim_managers_text">
       <div>Quality trustees from a trusted source</div>
       <div>178 Sales and Marketing professionals</div>
       <div>312 people from the Financial Services Industry and City</div>
       <div>397 from the Home Counties</div>
       <div>181 from the North of England</div>
       <div>206 people from Central and Local Government</div>
       <div>94 from the South West</div>
       <div>122 HR professionals</div>
       <div>539 people from the Civil Society sector</div>
       <div>214 from the Midlands and East Anglia</div>
       <div>84 Fundraisers</div>
       <div>471 from London</div>
     </div>
    </div></td>
  </tr>
  <tr>
    <td align="center" valign="top"><img src="../img/header_portion3.gif" width="486" height="150" border="0" usemap="#Map5" /><map name="Map5" id="Map5">
  <area shape="rect" coords="4,98,161,142" href="../currentvacancies.html" />
  <area shape="rect" coords="166,101,320,143" href="../knowledgebank.html" />
  <area shape="rect" coords="326,101,482,144" href="../aboutus.html" />
  <area shape="rect" coords="280,64,483,85" href="mailto:info@nonexecutives-unlimited.co.uk" />
</map></td>
  </tr>
 </table>
  </div>
  <div class="box_body_gradient"><span class="purpleheading">Registration</span><br />
     <form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8'>
                                    
  <fieldset >
<legend>Registration</legend>

<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
<input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />

<div class='short_explanation'>* Required fields</div>

<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
<div class='container2'>
    <label for='Selection' >Title:</label> <br />
<select name="Selection">
      <option>Mr</option>
      <option>Mrs</option>
      <option>Ms</option>
    </select><br/>
</div>

<div class='container2'>
    <label for='name' >Your Full Name*: </label><br/>
    <input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" /><br/>
    <span id='contactus_name_errorloc' class='error'></span>
</div>


<div class='container2'>
    <label for='email' >Email Address*:</label><br/>
    <input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>


<div class='container2'>
    <label for='Current Annual Salary' >Current Annual Salary:</label><br/>
    <input type='text' name='annualsalary' id='annualsalary' maxlength="50" /><br/>
</div>


<div class='container2'>
    <label for='Current Daily Rate:' >Current Daily Rate:</label><br/>
    <input type='text' name='currentrate' id='currentrate' maxlength="50" /><br/>
</div>
<div class='container2'>
    <label for='Desired Daily Rate:' >Desired Daily Rate:</label><br/>
    <input type='text' name='desiredrate' id='desiredrate' maxlength="50" /><br/>
</div>

<div class='container2'>
    <label for='Areas Of Interest:' >Areas Of Interest:</label><br/>
    <input type='text' name='areasofinterest' id='areasofinterest' maxlength="50" /><br/></div>

<div class='container2'>
    <label for='Did An Organisation Refer You?:' >Did An Organisation Refer You?:</label><br/>
    <input type='text' name='organisationreferral' id='organisationreferral' maxlength="50" /><br/>
</div>


<div class='container2'>
   <p class="title">Job Category <br />
<a href="#" class="tip2">Hover here for legend<span>Your main and possibly one other professional discipline<br />

ACADEMIC – Education, Professional, Lectures etc<br />

ADMIN/SEC – Administration Co. Secretarial Functions<br />

CITY – Technical Aspects of Stockbroking, B.Socs., Banks, Ins, Actuary<br />

COMP – Computer IT Areas<br />

CONS – Generalist Management Consultant Where Not Allocated Elsewhere
<br />
DISTRIB – Distribution, Transport, Warehousing, Packaging Except Shipping<br />

ENG.CHEM<br />

END.CIVIL<br />

ENG.ELEC – Either Electrical or Electronic<br />

FIN – All Accountants, Operational Research, Treasury, <br />
Corporate/Business Planners, Strategists, Venture Capital <br />
People including those who are Qualified Accountants but <br />
are doing other things that do not quite constitute GEN.MGR. Tax Specialists.<br />

GEN.MGR – General Manager<br />

GOVT – Including Local Government Public Sector Services<br />

LEGAL
<br />
MKTG – Marketing<br />

PERS – Personnel, Human Resources etc.<br />

PROD – All Aspects of Production or Manufacturing<br />

PROP – Including Construction<br />

PURCH Including Materials Management<br />

RETAIL<br />

SALES<br />

ENG.MECH</span></a></p>
   <table width="100%" border="0" cellpadding="2" cellspacing="0">
  <tr>
    <td> <label><input type="checkbox" name="JC_Academic" value="true" id="JC_Academic" />
Academic </label></td>
    <td><label>
      <input type="checkbox" name="JC_AdminSec" value="true" id="JC_AdminSec" />
      Admin/Sec</label></td>
  </tr>
  <tr>
    <td><label>
      <input type="checkbox" name="JC_Brainbox" value="true" id="JC_Brainbox" />
      Brainbox</label></td>
    <td><label>
      <input type="checkbox" name="JC_City" value="true" id="JC_City" />
      City</label></td>
  </tr>
  <tr>
    <td><label>
      <input type="checkbox" name="JC_Comp" value="true" id="JC_Comp" />
      Comp</label></td>
    <td><label>
      <input type="checkbox" name="JC_Cons" value="true" id="JC_Cons" />
      Cons</label></td>
  </tr>
  <tr>
    <td><label>
      <input type="checkbox" name="JC_Distrib" value="true" id="JC_Distrib" />
      Distrib</label></td>
    <td><label>
      <input type="checkbox" name="JC_EngChem" value="true" id="JC_EngChem" />
      Eng.Chem</label></td>
  </tr>
  <tr>
    <td><label>
      <input type="checkbox" name="JC_EngCivil" value="true" id="JC_EngCivil" />
      Eng.Civil</label></td>
    <td><label>
      <input type="checkbox" name="JC_EngElec" value="true" id="JC_EngElec" />
      Eng.Elec</label></td>
  </tr>
  <tr>
    <td><label>
      <input type="checkbox" name="JC_EngMech" value="true" id="JC_EngMech" />
      Eng.Mech</label></td>
    <td><label>
      <input type="checkbox" name="JC_Fin" value="true" id="JC_Fin" />
      Fin</label></td>
  </tr>
  <tr>
    <td><label>
      <input type="checkbox" name="JC_GenMgr" value="true" id="JC_GenMgr" />
      GenMgr</label></td>
    <td><label>
      <input type="checkbox" name="JC_Govt" value="true" id="JC_Govt" />
      Govt</label></td>
  </tr>
  <tr>
    <td><label>
      <input type="checkbox" name="JC_Legal" value="true" id="JC_Legal" />
      Legal</label></td>
    <td><label>
      <input type="checkbox" name="JC_Mktg" value="true" id="JC_Mktg" />
      Mktg</label></td>
  </tr>
  <tr>
    <td><label>
      <input type="checkbox" name="JC_Pers" value="true" id="JC_Pers" />
      Pers</label></td>
    <td><label>
      <input type="checkbox" name="JC_Prod" value="true" id="JC_Prod" />
      Prod</label></td>
  </tr>
  <tr>
    <td><label>
      <input type="checkbox" name="JC_Prop" value="true" id="JC_Prop" />
      Prop</label></td>
    <td><label>
      <input type="checkbox" name="JC_Purch" value="true" id="JC_Purch" />
      Purch</label></td>
  </tr>
  <tr>
    <td><label>
      <input type="checkbox" name="JC_Retail" value="true" id="JC_Retail" />
      Retail</label></td>
    <td><label>
      <input type="checkbox" name="JC_Sales" value="true" id="JC_Sales" />
      Sales</label></td>
  </tr>
  <tr>
    <td><label>
      <input type="checkbox" name="JC_Only" value="true" id="JC_Only" />
      Only</label></td>
  </tr>
</table>
</div>
<div class='container2'>
   <p class="title">Industry <br />
<a href="#" class="tip2">Hover here for legend<span>

A maximum of three industries where relevant experience has been gained<br />

A/C - The Accountancy Profession including Internal Audit<br />

ACADEMIC – Education related areas, lecturing, universities etc<br />

AEROSP<br />

AGRIC – Agriculture<br />

AUTOMOT – Anything to do with Vehicles or parts of Vehicles, Upstream or Downstream<br />

CHARITY<br />

CHEM – Including Chemicals, Pharmaceuticals but NOT Toiletries<br />

CITY – City, Stockbroking, Band, Ins, B.Socs. Including City Research<br />

COMP - All Computer/Hi Tech Businesses but NOT Electronics<br />

DISTRIB – Including Transport, Warehousing, Packaging, Freight but NOT Shipping<br />

ELECTRON<br />

ENERGY – All utilities including Water, Nuclear, Oil Gas<br />

ENG.CIVIL<br />

ENG.HEAVY<br />

ENG.LIGHT<br />

FINANCIAL – Financial Services<br />

FOOD<br />

GENERAL – Including Management Consultancy, Buying Selling, Leathers, Office Equipment, Paper etc.<br />

GOCT Including Local Government, Public Sector Social Services but NOT Energy <br />

And Education<br />

HEALTH<br />

LEISURE – Including Hotels, Leisure Facilities and the Drinks Business<br />

LOC GOVNT – Local Government<br />

MEDIA – Including Printing Publishing, Advertising, PR, Newspapers, TV Books, <br />
Theatre etc.<br />

PAPER<br />

PHARM – Pharmaceuticals<br />

PLASTICS<br />

PROP – Building, Construction, Estate Agency, Development etc.<br />

RETAIL – Including selling to Retailers<br />

SHIPPING<br />

TELECOMS<br />

TEXTILES<br />

TOILETRIES – But NOT Pharmaceuticals<br />

TRAVEL<br />

WOOD – Including making Furniture and the Timber trade
</span></a></p>
   <table width="100%" border="0" cellpadding="2" cellspacing="0">
  <tr>
    <td><label>
    <input type="checkbox" name="In_AC" value="true" id="In_AC" />
	A/C </label></td>
    <td><label>
      <input type="checkbox" name="In_Academic" value="true" id="In_Academic" />
      Academic</label></td>
  </tr>
  <tr>
    <td><label>
      <input type="checkbox" name="In_Aerosp" value="true" id="In_Aerosp" />
      Aerosp</label></td>
    <td><label>
      <input type="checkbox" name="In_Agric" value="true" id="In_Agric" />
      Agric</label></td>
  </tr>
  <tr>
    <td><label>
      <input type="checkbox" name="In_Automot" value="true" id="In_Automot" />
      Automot</label></td>
    <td><label>
      <input type="checkbox" name="In_Charity" value="true" id="In_Charity" />
      Charity</label></td>
  </tr>
  <tr>
    <td><label>
      <input type="checkbox" name="In_Chem" value="true" id="In_Chem" />
      Chem</label></td>
    <td><label>
      <input type="checkbox" name="In_City" value="true" id="In_City" />
      City</label></td>
  </tr>
  <tr>
    <td><label>
      <input type="checkbox" name="In_Comp" value="true" id="In_Comp" />
      Comp</label></td>
    <td><label>
      <input type="checkbox" name="In_Distrib" value="true" id="In_Distrib" />
      Distrib</label></td>
  </tr>
  <tr>
    <td><label>
      <input type="checkbox" name="In_Electron" value="true" id="In_Electron" />
      Electron</label></td>
    <td><label>
      <input type="checkbox" name="In_Energy" value="true" id="In_Energy" />
      Energy</label></td>
  </tr>
  <tr>
    <td><label>
      <input type="checkbox" name="In_EngCivil" value="true" id="In_EngCivil" />
      Eng.Civil</label></td>
    <td><label>
      <input type="checkbox" name="In_EngHeavy" value="true" id="In_EngHeavy" />
      Eng.Heavy</label></td>
  </tr>
  <tr>
    <td><label>
      <input type="checkbox" name="In_EngLight" value="true" id="In_EngLight" />
      Eng.Light</label></td>
    <td><label>
      <input type="checkbox" name="In_Financial" value="true" id="In_Financial" />
      Financial</label></td>
  </tr>
  <tr>
    <td><label>
      <input type="checkbox" name="In_Food" value="true" id="In_Food" />
      Food</label></td>
    <td><label>
      <input type="checkbox" name="In_General" value="true" id="In_General" />
      General</label></td>
  </tr>
  <tr>
    <td><label>
      <input type="checkbox" name="In_Govt" value="true" id="In_Govt" />
      Govt</label></td>
    <td><label>
      <input type="checkbox" name="In_Health" value="true" id="In_Health" />
      Health</label></td>
  </tr>
  <tr>
    <td><label>
      <input type="checkbox" name="In_Housing" value="true" id="In_Housing" />
      Housing</label></td>
    <td><label>
      <input type="checkbox" name="In_Legal" value="true" id="In_Legal" />
      Legal</label></td>
  </tr>
  <tr>
    <td><label>
      <input type="checkbox" name="In_Leisure" value="true" id="In_Leisure" />
      Leisure</label></td>
    <td><label>
      <input type="checkbox" name="In_LocGovnt" value="true" id="In_LocGovnt" />
      Loc Govnt</label></td>
  </tr>
  <tr>
    <td><label>
      <input type="checkbox" name="In_Media" value="true" id="In_Media" />
      Media</label></td>
    <td><label>
      <input type="checkbox" name="In_Paper" value="true" id="In_Paper" />
      Paper</label></td>
  </tr>
  <tr>
    <td><label>
      <input type="checkbox" name="In_Pharm" value="true" id="In_Pharm" />
      Pharm</label></td>
    <td><label>
      <input type="checkbox" name="In_Plastics" value="true" id="In_Plastics" />
      Plastics</label></td>
  </tr>
  <tr>
    <td><label>
      <input type="checkbox" name="In_Pop" value="true" id="In_Pop" />
      Pop</label></td>
    <td><label>
      <input type="checkbox" name="In_Retail" value="true" id="In_Retail" />
      Retail</label></td>
  </tr>
  <tr>
    <td><label>
      <input type="checkbox" name="In_Shipping" value="true" id="In_Shipping" />
      Shipping</label></td>
    <td><label>
      <input type="checkbox" name="In_Telecoms" value="true" id="In_Telecoms" />
      Telecoms</label></td>
  </tr>
  <tr>
    <td><label>
      <input type="checkbox" name="In_Textiles" value="true" id="In_Textiles" />
      Textiles</label></td>
    <td><label>
      <input type="checkbox" name="In_Toiletries" value="true" id="In_Toiletries" />
      Toiletries</label></td>
  </tr>
  <tr>
    <td><label>
      <input type="checkbox" name="In_Travel" value="true" id="In_Travel" />
      Travel</label></td>
    <td><label>
      <input type="checkbox" name="In_Wood" value="true" id="In_Wood" />
      Wood</label></td>
  </tr>
  <tr>
    <td><label>
      <input type="checkbox" name="In_Only" value="true" id="In_Only" />
      Only</label></td>
  </tr>
   </table>
</div>
<div class='container2'>
    <label for='Desired Locations:' >Desired Locations:</label><br/>
    <input type='text' name='desiredlocations' id='desiredlocations' maxlength="50" /><br/>
</div>
<div class='container2'>
  <label for='Date Available (dd/mm/yyyy):' >Date Available (dd/mm/yyyy):</label><br/>
    <input type='text' name='dateavailable' id='dateavailable' maxlength="50" /><br/>
</div>
<div class='container2' style="display:none">
    <label for='message' >Message:</label><br/>
    <span id='contactus_message_errorloc' class='error'></span>
    <textarea rows="10" cols="50" name='message' id='message'><?php echo $formproc->SafeDisplay('message') ?></textarea>
</div>
<div class='container2' style="display:none">
    <label for='photo' >Your photo:</label><br/>
    <input type="file" name='photo' id='photo' /><br/>
    <span id='contactus_photo_errorloc' class='error'></span>
</div>
<div class='container2'>
    <label for='Upload CV:' >Upload CV:</label><br/>
    <input type="file" name='uploadcv' id='uploadcv' /><br/>
    <span id='contactus_uploadcv_errorloc' class='error'></span>
</div>

<div class='container2'>
    <input type="checkbox" name="AlsoTrusteesroles" id="AlsoTrusteesroles" <?php echo $formproc->SafeDisplay('email') ?>/>
    <label for="checkbox"></label>
    <label for='I am also interested in Trustee roles' >I am also interested in Trustee roles</label>
<br/>
</div>
<div class='container2'>
  <div><img alt='Captcha image' src='show-captcha.php?rand=1' id='scaptcha_img' /></div>
    <label for='scaptcha' >Enter the code above here:</label>
    <input type='text' name='scaptcha' id='scaptcha' maxlength="10" /><br/>
    <span id='contactus_scaptcha_errorloc' class='error'></span>
    <div class='short_explanation'>Can't read the image?
    <a href='javascript: refresh_captcha_img();'>Click here to refresh</a>.</div>
</div>
<div class='container2'>
    <input type='submit' name='Submit' value='Submit' />
</div>

</fieldset>
</form>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("contactus");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");

    frmvalidator.addValidation("photo","file_extn=jpg;jpeg;gif;png;bmp","Upload images only. Supported file types are: jpg,gif,png,bmp");

    frmvalidator.addValidation("scaptcha","req","Please enter the code in the image above");

    document.forms['contactus'].scaptcha.validator
      = new FG_CaptchaValidator(document.forms['contactus'].scaptcha,
                    document.images['scaptcha_img']);

    function SCaptcha_Validate()
    {
        return document.forms['contactus'].scaptcha.validator.validate();
    }

    frmvalidator.setAddnlValidationFunction("SCaptcha_Validate");

    function refresh_captcha_img()
    {
        var img = document.images['scaptcha_img'];
        img.src = img.src.substring(0,img.src.lastIndexOf("?")) + "?rand="+Math.random()*1000;
    }

// ]]>
</script>
  </div>
</div> <div class="footer"><img src="../img/footer.jpg" alt="Trustees Unlimited - I want to be a trustee / I need a trustee" width="1000" height="106" border="0" usemap="#Map3" /><br />
  <map name="Map3" id="Map3">
    <area shape="rect" coords="507,3,744,94" href="../casestudies.html" />
    <area shape="rect" coords="755,5,986,88" href="../pressandmedia.html" />
    <area shape="rect" coords="17,-5,250,86" href="http://www.trustees-unlimited.co.uk/" target="_new" />
    <area shape="rect" coords="264,-2,494,86" href="../mentoring.html" />
  </map>
</div>

</body>

</html>
