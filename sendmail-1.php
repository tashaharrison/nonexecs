<?
       $sname = $_POST['name'];
       $semail = $_POST['email'];
       $stelephone = $_POST['telephone'];
       $sposition = $_POST['position'];
       $scompany = $_POST['company'];
       $sstreet = $_POST['street'];
       $stown = $_POST['town'];
       $scounty = $_POST['county'];
       $spostcode = $_POST['postcode'];
       $srequirement = $_POST['requirement'];
       $sjob = $_POST['job'];
       $sbackground = $_POST['background'];
       $body = "Name: $sname\nEmail: $semail\nTel: $stelephone\nPosition: $sposition\nCompany: $scompany\nStreet: $sstreet\nTown: $stown\nCounty: $scounty\nPostcode: $spostcode\nRequirement: $srequirement\nJob: $sjob\nBackground: $sbackground\n";
       $sFile = "datafile.csv";
	   $ptrFile = @fopen($sFile, "w");
	   $sData = ($sname.",".$semail.",".$stelephone.",".$scompany.",".$sstreet.",".$stown.",".$scounty.",".$spostcode.",".$srequirement.",".$sjob.",".$sbackground."\n");
	   @fwrite($ptrFile, $sData);
	   @fclose($ptrFile);
	      $to="info@trustees-unlimited.co.uk,melissa.baxter@russam-gms.co.uk";
	      $subject="Non Execs Website Enquiry from ".$sname;
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
	 	header("Location:success.html");
  	}

		else
			{
			header("Location:fail.html");
	  		}
?>