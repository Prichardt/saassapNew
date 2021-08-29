<?php
class ContactUsModel extends Model
{

    function __construct()
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
}
