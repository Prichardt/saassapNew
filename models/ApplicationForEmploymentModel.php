<?php
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
        $province_res_address = $_POST["province-res-addres"];
        $postal_code_res_address = $_POST["postal_code-res-address"];
        $postal_address = $_POST["postal-address"];

        //postal address
        $street_postal_address = $_POST["street-postal-address"];
        $city_postal_address = $_POST["city-postal-address"];
        $surbub_postal_address = $_POST["surbub-postal-address"];
        $province_postal_address = $_POST["province-postal-addres"];
        $postal_code_postal_address = $_POST["postal_code-postal-address"];

        //position specifications
        $desired_position = $_POST["desired_position"];
        $date_available = $_POST["date_available"];
        $notice_period = $_POST["notice-period"];

        //Educational Qualifications

        $qualifications = $_POST["qualifications"];

        for($x = 1 ; $x  < count($qualifications); $x++) {
            $institution =$qualifications[$x]['institution'];
            $location = $qualifications[$x]['institution-location'];
            $yearCompleted = $qualifications[$x]['year-completed'];
            $qualification = $qualifications[$x]['qualification'];

            $sql2 = "INSERT INTO `educational` ( `personalId` , `institution` , `location` , `yearCompleted` , `qualification` , )
                    VALUES (
                    '$last_id' ,
                    '$institution' ,
                    '$location',
                    '$yearCompleted' ,
                    '$qualification' ,
                    )";
            mysqli_query($this->database->getConnection(), $sql2);
        }

        echo json_encode($qualifications).' ID : =='.$last_id;
    }
}
