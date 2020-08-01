<?php 
    if(isset($_POST['submit'])) {

        // Form Variables
        $monthly_management             = $_POST['monthly-management'];
        $recruitment_marketing          = $_POST['recruitment-marketing'];
        $hiring_process_dev             = $_POST['hiring-process-dev'];
        $monthly_freelance_referrals    = $_POST['monthly-freelance-referrals'];
        $exit_interviews                = $_POST['exit-interviews'];
        $weekly_consultation            = $_POST['weekly-consultation'];
        $hiring_process_management      = $_POST['hiring-process-management'];
        $first_month_onboarding         = $_POST['first-month-onboarding'];

        $first_name                     = filter_var($_POST['first-name'], FILTER_SANITIZE_STRING);     // First Name
        $last_name                      = filter_var($_POST['last-name'], FILTER_SANITIZE_STRING);      // Last Name
        $email                          = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);           // Email Address
        $company                        = filter_var($_POST['company'], FILTER_SANITIZE_STRING);        // Company Name
        $phone                          = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);          // Phone Number
         
        $to = "me@nickcanarelli.com";                       // Email Address to send lead to
        $subject = "New lead from Shyft Pricing form!";     // Subject of generated lead email
         
        // HTML Message Starts here
        $message = "<html><body><table style='width:600px;'><tbody>";
        $message .= "<tr><td style='width:150px'><strong>Name: </strong></td><td style='width:400px'>". $first_name . ' ' . $last_name ."</td></tr>";
        $message .= "<tr><td style='width:150px'><strong>Email Address: </strong></td><td style='width:400px'>" . $email . "</td></tr>";
        $message .= ($company == true) ? "<tr><td style='width:150px'><strong>Company Name: </strong></td><td style='width:400px'>" . $company . "</td></tr>" : "<tr><td style='width:150px'><strong>Company Name: </strong></td><td style='width:400px'> N/A </td></tr>";
        $message .= ($phone == true) ? "<tr><td style='width:150px'><strong>Phone Number: </strong></td><td style='width:400px'>" . $phone . "</td></tr>" : "<tr><td style='width:150px'><strong>Phone Number: </strong></td><td style='width:400px'> N/A </td></tr>";
        $message .= "</tbody></table></body></html>";
        // HTML Message Ends here
         
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 
        // More headers
        $headers .= 'From: Shyft Careers <me@nickcanarelli.com>' . "\r\n"; // User will get an email from this email address
        // $headers .= 'Cc: joel@shyftcareers.com' . "\r\n"; // If you want add cc
         
        if(mail($to,$subject,$message,$headers)){
            // Message if mail has been sent
            echo "<script>
                    alert('Mail has been sent Successfully.');
                </script>";
            
        } else {
            // Message if mail has been not sent
            echo "<script>
                    alert('EMAIL FAILED');
                </script>";
        }
    }