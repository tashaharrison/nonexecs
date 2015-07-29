<?
       $sforename = $_POST['forename'];
       $ssurname = $_POST['surname'];
       $ssex = $_POST['sex'];	   
       $shouse = $_POST['house'];
       $sstreet = $_POST['street'];
       $stown = $_POST['town'];
       $scounty = $_POST['county'];
       $spostcode = $_POST['postcode'];
       $scountry = $_POST['Country'];
       $slocation = $_POST['location'];
       $sdob = $_POST['dob'];
       $stelephone = $_POST['telephone'];
       $smobile = $_POST['tel_mobile'];
       $semail = $_POST['email'];
	   $sjobquals = $_POST['job_quals'];
	   $sindustry = $_POST['industry'];
	   $slanguages = $_POST['LANGUAGES'];
       $sethnic = $_POST['ethnic'];
	   for($i = 0; $i<count($_POST["ethnic_other"]); $i++)
			{
			$temp = $temp . " ". $_POST["ethnic_other"][$i];
			}
       $sethnic = $sethnic.$temp;
       $sreligion = $_POST['religion']." ".$_POST['religion_other'];
	   $sorientation = $_POST['orientation'];
       $sdisability = $_POST['Disability']." ".$_POST['disability_note'];
	   $sinterests = $_POST["interests"];
       $body = "Forename: $sforename\nSurname: $ssurname\nSex: $ssex\nHouse Number: $shouse\nStreet: $sstreet\nTown: $stown\nCounty: $scounty\nPostcode: $spostcode\nCountry: $scountry\nLocation: $slocation\nDOB: $sdob\nTel: $stelephone\nMobile: $smobile\nEmail: $semail\nJob_Quals: $sjobquals\nIndustry: $sindustry\nLanguages: $slanguages\nEthnic Origin: $sethnic\nReligion and Beliefs: $sreligion\nOrientation: $sorientation\nDisability: $sdisability\nInterests: $sinterests\n";
       $sFile = "datafile.csv";
	   $ptrFile = @fopen($sFile, "w");
	   $sData = ($ssurname.",".$forename.",".$ssex.",".$shouse.",".$sstreet.",".$stown.",".$scounty.",".$spostcode.",".$scountry.",".$slocation.",".sdob.",".$stelephone.",".$smobile.",".$semail.",".$sjobquals.",".$sindustry.",".$slanguages.",".$sethnic.",".$sreligion.",".$sorientation.",".$sdisability.",".$sinterests."\n");
	   @fwrite($ptrFile, $sData);
	   @fclose($ptrFile);
	      $to="trustees@russam-gms.co.uk";
	      $subject="Website Enquiry from ".$sname;
	      $from = $semail;
	      $mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";
	      $headers = "From: $from\r\n" .
	      "MIME-Version: 1.0\r\n" .
	         "Content-Type: multipart/mixed;\r\n" .
	         " boundary=\"{$mime_boundary}\"";
	      $message=$body;
	      $message = "This is a multi-part message in MIME format.\n\n" .
	         "--{$mime_boundary}\n" .
	         "Content-Type: text/plain; charset=\"iso-8859-1\"\n" .
	         "Content-Transfer-Encoding: 7bit\n\n" .
	      $message . "\n\n";
	      foreach($_FILES as $userfile)
	      {
	         $tmp_name = $userfile['tmp_name'];
	         $type = $userfile['type'];
	         $name = $userfile['name'];
	         $size = $userfile['size'];
	         if (file_exists($tmp_name))
	         {
	            if(is_uploaded_file($tmp_name))
	            {
	               $file = fopen($tmp_name,'rb');
	               $data = fread($file,filesize($tmp_name));
	               fclose($file);
	               $data = chunk_split(base64_encode($data));
	            }
	            $message .= "--{$mime_boundary}\n" .
	               "Content-Type: {$type};\n" .
	               " name=\"{$name}\"\n" .
	               "Content-Disposition: attachment;\n" .
	               " filename=\"{$fileatt_name}\"\n" .
	               "Content-Transfer-Encoding: base64\n\n" .
	            $data . "\n\n";
	         }
	      }
	      $message.="--{$mime_boundary}--\n";
	      if (@mail($to, $subject, $message, $headers))
	      {
	 	header("Location:success-2.html");
  	}

		else
			{
			header("Location:fail.html");
	  		}
?>