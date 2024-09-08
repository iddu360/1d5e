<?php

namespace App\Controllers;

use App\Models\BookingModel;
use App\Models\MailingModel;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class YummyController extends BaseController
{
    protected $bookings;
    protected $mails;
    public function __construct()
    {
        helper(['html', 'form']);
        // $session = \Config\Services::session();
        // $this->bookings = new BookingModel;
        $this->mails = new MailingModel;
    }
    public function homeindex()
    {
        echo view('yummy/pages/index');
    }
    public function contactus()
    {
        echo view('yummy/pages/index#contact');
    }
    public function booking()
    {
        $session = \Config\Services::session();

        $from = $this->request->getVar('email');
        $name = $this->request->getVar('name');
        $phone = $this->request->getVar('phone');
        $date = $this->request->getVar('date');
        $time = $this->request->getVar('time');
        $noOfPeople = $this->request->getVar('people');
        $message = $this->request->getVar('message');

        $email = \Config\Services::email();
        $email->setTo('idduemmanuel19@gmail.com');
        $email->setFrom($from);

        $email->setMessage('<h5>New Booking from Yummy</h5> <br> From : '.$name.'<br> Phone: '.$phone.'<br> Email: '.$email.'<br> Date: '.$date.'<br> Time: '.$time.'<br> No Of People: '.$noOfPeople.' <br> Message: '.$message.'<br> Message: '.$message);

        $filename = '/public/assets/img/menu/menu-item-5.png';
        $email->attach($filename);

        $data = array(
            'name' => $this->request->getVar('name'),
            'phone' => $this->request->getVar('phone'),
            'date' => $this->request->getVar('date'),
            'time' => $this->request->getVar('time'),
            'people' => $this->request->getVar('people'),
            'message' => $this->request->getVar('message'),
        );
        $insert = $this->bookings->insert($data);

        try {
            $bookIt = $email->send();
            if ($bookIt) {
                $session->setFlashdata('booking-success', 'Your booking request has been received and shall be processed. You will be notified.');
                return redirect()->to('/yummy#book-a-table');
            } else {
                $session->setFlashdata('booking-failed', 'Table Booking request unsuccessfull, try again please...');
                return redirect()->to('/yummy#book-a-table');
            }
        } catch (\Exception $e) {
            $session->setFlashdata('booking-failed', 'Table Booking request unsuccessfull, try again in a while. (' . $e->getMessage() . ')');
        }
    }
    public function mailing()
    {
        $this->mails = new MailingModel;
        $session = \Config\Services::session();

        $name = $this->request->getVar('name');
        $from = $this->request->getVar('email');
        $subject = $this->request->getVar('subject');
        $message = $this->request->getVar('message');

        $email = \Config\Services::email();
        $email->setTo('idduemmanuel19@gmail.com');
        $email->setFrom($from);

        $email->setMessage('<h5>New Contact Message from Yummy</h5> <br> From : '.$name.'<br> Email: '.$email.' <br> Subject: <b>'.$subject.'</b> <br> Message: '.$message);

        $data = array(
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'subject' => $this->request->getVar('subject'),
            'message' => $this->request->getVar('message'),
        );
        $insert = $this->mails->insert($data);


        try {
            $mailIt = $email->send();
            if ($mailIt) {
                $session->setFlashdata('mailing-success', 'Your Mail has been received and we will get back to you shortly.');
                return redirect()->to('/yummy#contact');
            } else {
                $session->setFlashdata('mailing-failed', 'Sorry, something wrong happened!!...');
                return redirect()->to('/yummy#contact');
            }
        } catch (\Exception $e) {
            $session->setFlashdata('mailing-failed', 'Something wrong happened, please try again... (' . $e->getMessage() . ')');
        }
    }
}
