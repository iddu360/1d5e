<?php

namespace App\Controllers;
use App\Models\EmailhistoryModel;

use App\Controllers\BaseController;
// use CodeIgniter\HTTP\ResponseInterface;

class EmailController extends BaseController
{
    protected $history;
    public function __construct()
    {
        $session = \Config\Services::session();
        $this->history = new EmailhistoryModel;
    }
    public function index()
    {
        // return view('welcome_message');
        // echo "TESTING";
        $message = "Testing Email";
        $mail = \Config\Services::email();
        $mail->setFrom("idduemmanuel19@gmail.com"); //sender
        $mail->setTo("kavumadennis11@gmail.com");    //Recipient
        $mail->setSubject("CodeProject");
        $mail->setMessage($message);

        if ($mail->send()) {
            echo 'Email successfully sent';
        } else {
            $data = $mail->printDebugger(['headers']);
            print_r($data);
        }
    }
    public function contact()
    {
        return view('email/form_view');
    }
    public function sendMail()
    {
        $session = \Config\Services::session();

        $to = $this->request->getVar('mailTo');
        $subject = $this->request->getVar('subject');
        $message = $this->request->getVar('msg');

        $email = \Config\Services::email();
        $email->setTo($to);
        $email->setFrom('idduemmanuel19@gmail.com', 'confirm Registration');

        $email->setSubject($subject);
        $email->setMessage($message);

        $filename='/public/assets/img/favicon.png'; //u can use the app patch
        $email->attach($filename);

        // $data=array(
        //     'recv_email'=>$this->request->getVar('mailTo'),
        //     'subject'=>$this->request->getVar('subject'),
        //     'message'=>$this->request->getVar('msg'),
        // );
        // $insert=$this->history->insert($data);
        
        try{
            $ret=$email->send();
            if ($ret) {
                $session->setFlashdata('msg-success','Your message has been sent successfully');
                return redirect()->to('/contact');
            }else{
                $session->setFlashdata('msg-danger','Something wrong happened while sending your message.');
                return redirect()->to('/contact');
            }
        }catch(\Exception $e){
            $session->setFlashdata('msg-danger','Something very bad Happened while sending your message ('. $e->getMessage().')');
        }
    }
}
