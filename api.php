<?php
/**
 * Created by PhpStorm.
 * User: Vilim Stubičan
 * Date: 9.9.2015.
 * Time: 23:34
 */

class Api {
    public static function handleRequest($request = '')
    {
        if(empty($request)) {
            if(empty($_REQUEST["r"])) {
                header($_SERVER['SERVER_PROTOCOL'] . ' Not implemented method', true, 400);
                die();
            }
            $request = $_REQUEST['r'];
        }

        $requestData = explode("/",$request);

        $requestClass = ucfirst($requestData[0]);

        $obj = new $requestClass;

        if($obj) {
            $requestMethod = $requestData[1];

            if($requestMethod && method_exists ( $obj, $requestMethod )) {
                if (count($requestData) > 2) {
                    $requestArguments = array_slice($requestData, 2);
                    $obj->$requestMethod($requestArguments);
                } else {
                    $obj->$requestMethod();
                }
            }
        }
    }
}
Api::handleRequest();

class JsonOutput {
    private $data;

    private function addData( $data, $success = true, $dataType = "message" ) {
        $this->data = array(
            "success" => $success,
            $dataType => $data
        );
    }
    public function addError($errorMessage)
    {
        $this->addData($errorMessage, false);
    }

    public function addMessage($message)
    {
        $this->addData($message);
    }

    public function output()
    {
        header('Content-Type: application/json');
        echo json_encode($this->data);
        die();
    }
}

class Email extends JsonOutput{
//    const email_main = "tajci@vk.t-com.hr";
    const email_subs = "tajcid.o.o@gmail.com";


//    const email_main = "vilim.stubican@gmail.com";
//    const email_subs = "jewbre18@gmail.com";

    public function send()
    {
        $from = $_REQUEST["from"];
        $sender = $_REQUEST["sender"];
        $message = $_REQUEST["message"];

        if(empty($from)) {
            $this->addError("Molimo unesite Vaše ime.");
            $this->output();
        }


        if(empty($sender)) {
            $this->addError("Molimo unesite Vašu email adresu.");
            $this->output();
        } else if(!self::checkEmailValidity($sender)) {
            $this->addError("Molimo unesite valjanu email adresu.");
            $this->output();
        }

        if(empty($message)) {
            $this->addError("Morate unijeti poruku.");
            $this->output();
        }

//        $this->sendMessage(self::email_main, $from, $sender, $message);
        $this->sendMessage(self::email_subs, $from, $sender, $message);

        $this->addMessage("Poruka uspješno poslana");
        $this->output();
    }

    private function sendMessage($to, $from, $sender, $message)
    {
        $subject = 'Kontakt sa stranice Benetton Kids';
        $message = "Korisnik " . $from . " Vam šalje poruku: \r\n\r\n" . $message;
        $headers = 'From: ' . $from  . "<".$sender.">\r\n" .
            'Reply-To: ' . $sender . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        mail($to, $subject, $message, $headers);
    }

    private static function checkEmailValidity($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}