<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com
*/

if ( ($_POST['first-name']!="") && ($_POST['last-name']!="") && ($_POST['email']!="")){
    $first_name     = $_POST['first-name'];
    $last_name      = $_POST['last-name'];
    $email          = $_POST['email'];
    $company        = $_POST['company'];
    $phone          = $_POST['phone'];

    $monthly_management             = $_POST['monthly-management'];
    $first_month_onboarding         = $_POST['first-month-onboarding'];

    $recruitment_marketing          = $_POST['recruitment-marketing'];
    $hiring_process_dev             = $_POST['hiring-process-dev'];
    $monthly_freelance_referrals    = $_POST['monthly-freelance-referrals'];
    $exit_interviews                = $_POST['exit-interviews'];
    $weekly_consultation            = $_POST['weekly-consultation'];
    $hiring_process_management      = $_POST['hiring-process-management'];

    $to         = "mike@shyftcareers.com";
    $subject    = "New lead from Shyft Pricing form!";

    $message    = "<p>You have received a new lead from the Shyft Careers Pricing Form!</p>";
    $message    .= "<html><body><table style='width:600px;'><tbody>";
    $message    .= "<tr><td style='width:150px'><strong>Name: </strong></td><td style='width:400px'>". $first_name . ' ' . $last_name ."</td></tr>";
    $message    .= "<tr><td style='width:150px'><strong>Email Address: </strong></td><td style='width:400px'>" . $email . "</td></tr>";
    $message    .= ($company == true) ? "<tr><td style='width:150px'><strong>Company Name: </strong></td><td style='width:400px'>" . $company . "</td></tr>" : "<tr><td style='width:150px'><strong>Company Name: </strong></td><td style='width:400px'> N/A </td></tr>";
    $message    .= ($phone == true) ? "<tr><td style='width:150px'><strong>Phone Number: </strong></td><td style='width:400px'>" . $phone . "</td></tr>" : "<tr><td style='width:150px'><strong>Phone Number: </strong></td><td style='width:400px'> N/A </td></tr>";
    $message    .= "<tr valign='top'><td style='width:150px'><strong>Required Services: </strong></td><td style='width:400px'>" . $monthly_management . "<br/>" . $first_month_onboarding . "</td></tr>";
    $message    .= "<tr valign='top'><td style='width:150px'><strong>Additional Services: </strong></td><td style='width:400px'>" . $recruitment_marketing  . "<br/>" . $hiring_process_dev . "<br/>" . $monthly_freelance_referrals . "<br/>" . $exit_interviews . "<br/>" . $weekly_consultation . "<br/>" . $hiring_process_management . "</td></tr>";
    $message    .= "</tbody></table></body></html>";

    // Always set content-type when sending HTML email
    $headers    = "MIME-Version: 1.0" . "\r\n";
    $headers    .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers    .= "From: <".$email.">" . "\r\n";
    $sent       = mail($to,$subject,$message,$headers);

    if($sent){
        echo "<span style='color:green; font-weight:bold;'>
        Thank you for contacting us, we will get back to you shortly.
        </span>";
    }
    else{
        echo "<span style='color:red; font-weight:bold;'>
        Sorry! Your form submission is failed.
        </span>";
	}
}
?>