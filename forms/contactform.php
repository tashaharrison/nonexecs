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
$formproc->AddRecipient('luckylucky200@gmail.com'); //<<---Put your email address here


//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('XsHVufPpgD9Epwl');

$formproc->AddFileUploadField('photo','jpg,jpeg,gif,png,bmp',2024);
$formproc->AddFileUploadField('uploadcv','doc,docx,pdf,txt',5024);

if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        $formproc->RedirectToURL("thank-you.php");
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Contact us</title>
      <link rel="STYLESHEET" type="text/css" href="contact.css" />
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
      <script type='text/javascript' src='scripts/fg_captcha_validator.js'></script>
</head>
<body>

<!-- Form Code Start -->
<form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8'>

<fieldset >
<legend>Contact us</legend>

<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
<input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />

<div class='short_explanation'>* required fields</div>

<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='name' >Your Full Name*: </label><br/>
    <input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" /><br/>
    <span id='contactus_name_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='email' >Email Address*:</label><br/>
    <input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='Current Annual Salary' >Current Annual Salary:</label><br/>
    <input type='text' name='annualsalary' id='annualsalary' maxlength="50" /><br/>
</div>
<div class='container'>
    <label for='Current Daily Rate:' >Current Daily Rate:</label><br/>
    <input type='text' name='currentrate' id='currentrate' maxlength="50" /><br/>
</div>
<div class='container'>
    <label for='Desired Daily Rate:' >Desired Daily Rate:</label><br/>
    <input type='text' name='desiredrate' id='desiredrate' maxlength="50" /><br/>
</div>
<div class='container'>
   <p class="title">Job Category</p>
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
<div class='container'>
   <p class="title">Industry</p>
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
<div class='container'>
    <label for='Desired Locations:' >Desired Locations:</label><br/>
    <input type='text' name='desiredlocations' id='desiredlocations' maxlength="50" /><br/>
</div>
<div class='container'>
  <label for='Date Available (dd/mm/yyyy):' >Date Available (dd/mm/yyyy):</label><br/>
    <input type='text' name='dateavailable' id='dateavailable' maxlength="50" /><br/>
</div>
<div class='container' style="display:none">
    <label for='message' >Message:</label><br/>
    <span id='contactus_message_errorloc' class='error'></span>
    <textarea rows="10" cols="50" name='message' id='message'><?php echo $formproc->SafeDisplay('message') ?></textarea>
</div>
<div class='container' style="display:none">
    <label for='photo' >Your photo:</label><br/>
    <input type="file" name='photo' id='photo' /><br/>
    <span id='contactus_photo_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='Upload CV:' >Upload CV:</label><br/>
    <input type="file" name='uploadcv' id='uploadcv' /><br/>
    <span id='contactus_uploadcv_errorloc' class='error'></span>
</div>
<div class='container'>
    <input type="checkbox" name="AlsoTrusteesroles" id="AlsoTrusteesroles" />
    <label for="checkbox"></label>
    <label for='I am also interested in Trustee roles' >I am also interested in Trustee roles</label>
    <br/>
</div>
<div class='container'>
    <input type="checkbox" name="AlsoNEDroles" id="AlsoNEDroles" />
    <label for="checkbox"></label><label for='I am also interested in Non-Executive Director roles' >I am also interested in Non-Executive Director roles</label>
<br/>
</div>
<div class='container'>
    <div><img alt='Captcha image' src='show-captcha.php?rand=1' id='scaptcha_img' /></div>
    <label for='scaptcha' >Enter the code above here:</label>
    <input type='text' name='scaptcha' id='scaptcha' maxlength="10" /><br/>
    <span id='contactus_scaptcha_errorloc' class='error'></span>
    <div class='short_explanation'>Can't read the image?
    <a href='javascript: refresh_captcha_img();'>Click here to refresh</a>.</div>
</div>


<div class='container'>
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


</body>
</html>