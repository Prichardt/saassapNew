<?php

use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ApplicationForEmploymentModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }
    public function sendMail()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        echo $name;
    }

    public function insertData()
    {

        //take the post variable from form
        //personal details
        $title = $_POST["title"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $phone = $_POST["phone"];
        $tel_phone = $_POST["tel_phone"];
        $email = $_POST["email"];
        $citizenship = $_POST["citizenship"];
        $criminal_record = $_POST["criminal_record"];
        $drug_test = $_POST["drug_test"];

        //Post personal details to database
        $sql = "INSERT INTO `personaldetails` (
    `title` ,
    `firstName` ,
    `lastName` ,
    `cellphoneNumber` ,
    `telephoneNumber` ,
    `email` ,
    `criminalOffense` ,
    `citizenship` ,
    `drugScreening`
  )
VALUES (
  '$title' ,
  '$fname' ,
  '$lname' ,
  '$phone' ,
  '$tel_phone' ,
  '$email' ,
  '$criminal_record',
  '$citizenship' ,
  '$drug_test'
)";

        mysqli_query($this->database->getConnection(), $sql);

        $last_id = $this->database->getConnection()->insert_id;

        

        //residential address
        $res_address = $_POST["res-address"];
        $street_res_address = $_POST["street-res-address"];
        $city_res_address = $_POST["city-res-address"];
        $surbub_res_address = $_POST["surbub-res-address"];
        $province_res_address = $_POST["province-res-address"];
        $postal_code_res_address = $_POST["postal_code-res-address"];
        $postal_address = $_POST["postal-address"];

        
//Post personal details to database
$sql2 = "INSERT INTO `residentialaddress` (
    `personalId` ,
    `number` ,
    `streetName` ,
    `city` ,
    `suburb` ,
    `province` ,
    `postalCode` 
  ) 
VALUES (
  '$last_id' ,
  '$res_address' ,
  '$street_res_address' ,
  '$city_res_address' ,
  '$surbub_res_address' ,
  '$province_res_address' ,
  '$postal_code_res_address' 
)";


mysqli_query($this->database->getConnection(), $sql2);


        //postal address
        $street_postal_address = $_POST["street-postal-address"];
        $city_postal_address = $_POST["city-postal-address"];
        $surbub_postal_address = $_POST["surbub-postal-address"];
        $province_postal_address = $_POST["province-postal-address"];
        $postal_code_postal_address = $_POST["postal_code-postal-address"];

        //Post personal details to database
$sql3 = "INSERT INTO `postaladdress` ( `personalDetails`, `number`, `streetName`, `city`, `suburb`, `province`,  `postalCode`) 
VALUES (
  '$last_id' ,
  '$postal_address' ,
  '$street_postal_address' ,
  '$city_postal_address' ,
  '$surbub_postal_address' ,
  '$province_postal_address' ,
  '$postal_code_postal_address'
)";

mysqli_query($this->database->getConnection(), $sql3);

        //position specifications
        $desired_position = $_POST["desired_position"];
        $date_available = $_POST["date-available"];
        $notice_period = $_POST["notice-period"];

        // vacancy applications

$sql4 = " INSERT INTO `positionavailability` (
  `personalId` ,
  `postion` ,
  `availability` ,
  `noticePeriod` 
) 
VALUES(
    '$last_id',
    '$desired_position' ,
    '$date_available' ,
    '$notice_period'
)";

mysqli_query($this->database->getConnection(), $sql4);

        //Educational Qualifications
        $qualifications = $_POST["qualifications"];

        
        for($x = 1 ; $x  <= count($qualifications); $x++) {
            $institution =$qualifications[$x]['institution'];
            $location = $qualifications[$x]['institution-location'];
            $yearCompleted = $qualifications[$x]['year-completed'];
            $qualification = $qualifications[$x]['qualification'];

            $sql12 = "INSERT INTO `educational` ( `personalId` , `institution` , `location` , `yearCompleted` , `qualification`  )
                    VALUES (
                    '$last_id' ,
                    '$institution' ,
                    '$location',
                    '$yearCompleted' ,
                    '$qualification' 
                    )";
            mysqli_query($this->database->getConnection(), $sql12);
        }

        $experience = $_POST['experience'];

           for($y = 1 ; $y  <= count($experience); $y++) {
            $employer =$experience[$y]['employer'];
            $position = $experience[$y]['position'];
            $appointmentDate = $experience[$y]['appointment-date'];
            $terminationDate = $experience[$y]['termination-date'];
            $duties = $experience[$y]['duties'];

            $sql123 = "INSERT INTO `employmenthistory` ( `personalId` , `employer` , `position` , `startDate` , `endDate`, `dutiesResponsibilities`  )
                    VALUES (
                    '$last_id' ,
                    '$employer' ,
                    '$position',
                    '$appointmentDate' ,
                    '$terminationDate',
                    '$duties' 
                    )";
            mysqli_query($this->database->getConnection(), $sql123);
        }

           $affiliation = $_POST['affiliation'];

           for($z = 1 ; $z  <= count($affiliation); $z++) {
            $orgarnisation =$affiliation[$z]['orgarnisation'];
            $date = $affiliation[$z]['date'];

            $sql1234 = "INSERT INTO `membership` ( `personalId` , `orgarnisation` , `date` )
                    VALUES (
                    '$last_id' ,
                    '$orgarnisation' ,
                    '$date'
                    )";
            mysqli_query($this->database->getConnection(), $sql1234);
        }

          $references = $_POST['references'];

           for($xy = 1 ; $xy  <= count($references); $xy++) {
            $refname =$references[$xy]['refname'];
            $refposition = $references[$xy]['ref-position'];
            $reforganisation = $references[$xy]['ref-organisation'];
            $refphone = $references[$xy]['ref-phone'];
            $refemail = $references[$xy]['ref-email'];



            $sql12345 = "INSERT INTO `personalreferences` ( `personalId` , `name` , `position`, `organisation`, `phone`, `email`)
                    VALUES (
                    '$last_id' ,
                    '$refname' ,
                    '$refposition',
                    '$reforganisation',
                    '$refphone',
                    '$refemail'
                    )";
            mysqli_query($this->database->getConnection(), $sql12345);
        }

 


            //Create an instance; passing `true` enables exceptions
   $mail = new PHPMailer();

    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.mukombi.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'sassap@mukombi.com';                     //SMTP username
    $mail->Password   = 'tatenda@12345';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('sassap@mukombi.com', 'Mailer');
    $mail->addAddress('prichard@mukombi.com', 'Prichard Mukombi');     //Add a recipient
    $mail->addReplyTo('info@mukombi.com', 'Information');
    $mail->addCC('prichard@heavenilytech.co.za');

    //Attachments
          $documents = array();
                  // Count total files
          $countFiles = count($_FILES['file']['name']);
          $target_dir1 = "public/upload/".$last_id ;
          mkdir($target_dir1);

          // Looping all files
          for($i=0;$i<$countFiles;$i++){
            $filename = $_FILES['file']['name'][$i];
            $documents[] = $filename;

           $target_path = $target_dir1 .'/' . basename($_FILES['file']['name'][$i]);
            // $target_file = $target_dir . basename($_FILES['file']['name'][$i]);
            // Upload file
            move_uploaded_file($_FILES['file']['tmp_name'][$i],$target_path);
            $mail->addAttachment($target_path, $_FILES['file']['name'][$i]);    //Optional name

          
          }

          $docs = json_encode($documents);
                $sql1234files = "INSERT INTO `documents` ( `personalId` , `path` , `images` )
                    VALUES (
                    '$last_id' ,
                    '$target_dir1' ,
                    '$docs'
                    )";
            mysqli_query($this->database->getConnection(), $sql1234files);
 
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();

        echo json_encode($documents).' ID : =='.$last_id;

        // return json_encode($qualifications);
    }
}
