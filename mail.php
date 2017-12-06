<?php
//declare our variables
$yourName = $_POST['yourname'];
$yourEmail = $_POST['youremail'];
$yourSchool = $_POST['yourschool'];
$yourClassYears = $_POST['yourclassyears'];

$nomineeFirstName = $_POST['nomineefname'];
$nomineeLastName = $_POST['nomineelname'];
$nomineeTitle = $_POST['nomineetitle'];
$nomineeIndustry = $_POST['nomineeindustry'];
$nomineeEmail = $_POST['nomineeemail'];
$nomineeSchool = $_POST['nomineeschool'];
$nomineeClassYears = $_POST['nomineeclassyears'];
$nomineeInfluenced = $_POST['nomineeinfluenced'];
$nomineeDriven = $_POST['nomineedriven'];
$nomineeImpact = $_POST['nomineeimpact'];
$nomineeRecognized = $_POST['nomineerecognized'];

//get todays date
$todayis = date("l, F j, Y, g:i a") ;

//$to = 'alumni.changemakers@nyu.edu';
$to = 'alumni.changemakers@nyu.edu,alumni.info@nyu.edu';
$subject = "NYU Alumni Changemakers Nomination Submission for $nomineeFirstName $nomineeLastName";

$htmlContent = '
<html>
<head>
<title>NYU Alumni Changemakers Nomination Submission</title>
</head>
<body>
<table border="0" cellspacing="0" cellpadding="0" width="99%" style="width:99.0%;"><tbody><tr><th  align="left" style="padding:3.75pt 3.75pt 8.75pt 3.75pt;font-size:18.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#999999;font-weight:normal;">User Information</th></tr></tbody></table>

<table border="0" cellspacing="0" cellpadding="0" width="99%" style="width:99.0%;background:#f5f5f5;margin-bottom:20px;">
    <tbody>
        <tr>
            <td style="padding:.75pt .75pt .75pt .75pt">
                <table class="m_8028513304522565456MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;background:white">
                    <tbody>
                        <tr>
                            <td colspan="2" style="background:#e9e8e8;padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal"><strong><span style="font-size:9.0pt;font-family:&quot;Arial&quot;,sans-serif">Full Name</span></strong><u></u><u></u></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="20" style="width:15.0pt;padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal">&nbsp;<u></u><u></u></p>
                            </td>
                            <td style="padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal"><span style="font-size:9.0pt;font-family:&quot;Arial&quot;,sans-serif">'.$yourName.'</span> <u></u><u></u></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="background:#e9e8e8;padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal"><strong><span style="font-size:9.0pt;font-family:&quot;Arial&quot;,sans-serif">School</span></strong> <u></u><u></u></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="20" style="width:15.0pt;padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal">&nbsp;<u></u><u></u></p>
                            </td>
                            <td style="padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal"><span style="font-size:9.0pt;font-family:&quot;Arial&quot;,sans-serif">'.$yourSchool.'</span> <u></u><u></u></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="background:#e9e8e8;padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal"><strong><span style="font-size:9.0pt;font-family:&quot;Arial&quot;,sans-serif">Class Year</span></strong> <u></u><u></u></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="20" style="width:15.0pt;padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal">&nbsp;<u></u><u></u></p>
                            </td>
                            <td style="padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal"><span style="font-size:9.0pt;font-family:&quot;Arial&quot;,sans-serif">'.$yourClassYears.'</span> <u></u><u></u></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="background:#e9e8e8;padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal"><strong><span style="font-size:9.0pt;font-family:&quot;Arial&quot;,sans-serif">Email Address</span></strong> <u></u><u></u></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="20" style="width:15.0pt;padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal">&nbsp;<u></u><u></u></p>
                            </td>
                            <td style="padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal"><span style="font-size:9.0pt;font-family:&quot;Arial&quot;,sans-serif"><a href="mailto:'.$yourEmail.'" target="_blank">'.$yourEmail.'</a></span> <u></u><u></u></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>

<table border="0" cellspacing="0" cellpadding="0" width="99%" style="width:99.0%;"><tbody><tr><th  align="left" style="padding:8.75pt 3.75pt 8.75pt 3.75pt;font-size:18.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#999999;font-weight:normal;">Nominee Information</th></tr></tbody></table>

<table border="0" cellspacing="0" cellpadding="0" width="99%" style="width:99.0%;background:#f5f5f5;margin-bottom:60px;">
    <tbody>
        <tr>
            <td style="padding:.75pt .75pt .75pt .75pt">
                <table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;background:white">
                    <tbody>
                        <tr>
                            <td colspan="2" style="background:#e9e8e8;padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal"><strong><span style="font-size:9.0pt;font-family:&quot;Arial&quot;,sans-serif">First Name</span></strong><u></u><u></u></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="20" style="width:15.0pt;padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal">&nbsp;<u></u><u></u></p>
                            </td>
                            <td style="padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal"><span style="font-size:9.0pt;font-family:&quot;Arial&quot;,sans-serif">'.$nomineeFirstName.'</span> <u></u><u></u></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="background:#e9e8e8;padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal"><strong><span style="font-size:9.0pt;font-family:&quot;Arial&quot;,sans-serif">Last Name</span></strong><u></u><u></u></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="20" style="width:15.0pt;padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal">&nbsp;<u></u><u></u></p>
                            </td>
                            <td style="padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal"><span style="font-size:9.0pt;font-family:&quot;Arial&quot;,sans-serif">'.$nomineeLastName.'</span> <u></u><u></u></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="background:#e9e8e8;padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal"><strong><span style="font-size:9.0pt;font-family:&quot;Arial&quot;,sans-serif">Title</span></strong><u></u><u></u></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="20" style="width:15.0pt;padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal">&nbsp;<u></u><u></u></p>
                            </td>
                            <td style="padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal"><span style="font-size:9.0pt;font-family:&quot;Arial&quot;,sans-serif">'.$nomineeTitle.'</span> <u></u><u></u></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="background:#e9e8e8;padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal"><strong><span style="font-size:9.0pt;font-family:&quot;Arial&quot;,sans-serif">Industry</span></strong><u></u><u></u></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="20" style="width:15.0pt;padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal">&nbsp;<u></u><u></u></p>
                            </td>
                            <td style="padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal"><span style="font-size:9.0pt;font-family:&quot;Arial&quot;,sans-serif">'.$nomineeIndustry.'</span> <u></u><u></u></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="background:#e9e8e8;padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal"><strong><span style="font-size:9.0pt;font-family:&quot;Arial&quot;,sans-serif">Email Address</span></strong> <u></u><u></u></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="20" style="width:15.0pt;padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal">&nbsp;<u></u><u></u></p>
                            </td>
                            <td style="padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal"><span style="font-size:9.0pt;font-family:&quot;Arial&quot;,sans-serif"><a href="mailto:'.$nomineeEmail.'" target="_blank">'.$nomineeEmail.'</a></span> <u></u><u></u></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="background:#e9e8e8;padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal"><strong><span style="font-size:9.0pt;font-family:&quot;Arial&quot;,sans-serif">School</span></strong> <u></u><u></u></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="20" style="width:15.0pt;padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal">&nbsp;<u></u><u></u></p>
                            </td>
                            <td style="padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal"><span style="font-size:9.0pt;font-family:&quot;Arial&quot;,sans-serif">'.$nomineeSchool.'</span> <u></u><u></u></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="background:#e9e8e8;padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal"><strong><span style="font-size:9.0pt;font-family:&quot;Arial&quot;,sans-serif">Class Year</span></strong> <u></u><u></u></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="20" style="width:15.0pt;padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal">&nbsp;<u></u><u></u></p>
                            </td>
                            <td style="padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal"><span style="font-size:9.0pt;font-family:&quot;Arial&quot;,sans-serif">'.$nomineeClassYears.'</span> <u></u><u></u></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="background:#e9e8e8;padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal"><strong><span style="font-size:9.0pt;font-family:&quot;Arial&quot;,sans-serif;line-height:14.0pt;">What challenge or area has the nominee\'s work influenced?</span></strong> <u></u><u></u></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="20" style="width:15.0pt;padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal">&nbsp;<u></u><u></u></p>
                            </td>
                            <td style="padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal"><span style="font-size:9.0pt;font-family:&quot;Arial&quot;,sans-serif;line-height:14.0pt;">'.nl2br($nomineeInfluenced).'</span> <u></u><u></u></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="background:#e9e8e8;padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal"><strong><span style="font-size:9.0pt;font-family:&quot;Arial&quot;,sans-serif;line-height:14.0pt;">How has the nominee\'s work driven this change?</span></strong> <u></u><u></u></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="20" style="width:15.0pt;padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal">&nbsp;<u></u><u></u></p>
                            </td>
                            <td style="padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal"><span style="font-size:9.0pt;font-family:&quot;Arial&quot;,sans-serif;line-height:14.0pt;">'.nl2br($nomineeDriven).'</span> <u></u><u></u></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="background:#e9e8e8;padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal"><strong><span style="font-size:9.0pt;font-family:&quot;Arial&quot;,sans-serif;line-height:14.0pt;">What is the measurable impact of the nominee\'s work?</span></strong> <u></u><u></u></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="20" style="width:15.0pt;padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal">&nbsp;<u></u><u></u></p>
                            </td>
                            <td style="padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal"><span style="font-size:9.0pt;font-family:&quot;Arial&quot;,sans-serif;line-height:14.0pt;">'.nl2br($nomineeImpact).'</span> <u></u><u></u></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="background:#e9e8e8;padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal"><strong><span style="font-size:9.0pt;font-family:&quot;Arial&quot;,sans-serif;line-height:14.0pt;">Has the nominee been recognized for his/her accomplishments (accolades, awards, etc.)?</span></strong> <u></u><u></u></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="20" style="width:15.0pt;padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal">&nbsp;<u></u><u></u></p>
                            </td>
                            <td style="padding:3.75pt 3.75pt 3.75pt 3.75pt">
                                <p class="MsoNormal"><span style="font-size:9.0pt;font-family:&quot;Arial&quot;,sans-serif;line-height:14.0pt;">'.nl2br($nomineeRecognized).'</span> <u></u><u></u></p>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
</body>
</html>';

// Set content-type header for sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
$headers .= 'From: alumni.changemakers@nyualumni.com' . "\r\n";
// $headers .= 'Cc: someone@example.com' . "\r\n";
// $headers .= 'Bcc: someoneelse@example.com' . "\r\n";

// Send email
if(mail($to,$subject,$htmlContent,$headers)):
    $successMsg = 'Email has sent successfully.';
else:
    $errorMsg = 'Email sending fail.';
endif;
?>
