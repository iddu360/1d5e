<?php

namespace App\Controllers\Yummy;

use App\Models\BookingModel;

use App\Controllers\BaseController;
// use CodeIgniter\HTTP\ResponseInterface;

class BookingController extends BaseController
{
    // public $id;
    protected $bookings;
    // $this->bookings;
    protected $input;
    public function __construct()
    {
        helper(['form', 'url']);
    }
    public function index()
    {
        // echo "TESTING";
        //router01839494
    }
    public function booktable()
    {
        return view('yummy/pages/booktable');
    }
    public function booking()
    {
        $this->bookings = new BookingModel;
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
        $email->setSubject('New Booking From Yummy');

        $email->setMessage('<h5>New Booking from Yummy</h5> <br> From : ' . $name . '<br> Phone: ' . $phone . '<br> Email: ' . $from . '<br> Date: ' . $date . '<br> Time: ' . $time . '<br> No Of People: ' . $noOfPeople . ' <br> Message: ' . $message);

        $bdata = array(
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'phone' => $this->request->getVar('phone'),
            'bdate' => $this->request->getVar('date'),
            'btime' => $this->request->getVar('time'),
            'people' => $this->request->getVar('people'),
            'message' => $this->request->getVar('message'),
        );

        $insert = $this->bookings->insert($bdata);
        $id = $this->bookings->getInsertID();
        if ($id) {
            $session->setFlashdata('booking-success', 'Booing data received, awaiting confirmation');
        } else {
            $session->setFlashdata('booking-failed', 'Invalid ID');
        }



        try {
            $bookIt = $email->send();
            if ($bookIt) {
                $email = \Config\Services::email();
                $email->setTo($from);
                $email->setFrom('idduemmanuel19@gmail.com');
                $email->setSubject('Booking Confirmation');


                $email->setMessage('<h5>Confirm Your Booking</h5> <br> <b>Details</b> <br> Your Name : ' . $name . '<br> Phone: ' . $phone . '<br> Email: ' . $from . '<br> Date: ' . $date . '<br> Time: ' . $time . '<br> No Of People: ' . $noOfPeople . ' <br> Additional Info: ' . $message . '<br> <p>Click the link below to confirm your reservation <br> <a href="http://localhost:8080/booktable/reservation_verification/".$id>Confirm & Verify Booking</a></p>');

                $filename = '/public/assets/img/menu/menu-item-5.png';
                $email->attach($filename);

                $email->send();
                $session->setFlashdata('booking-success', 'Your booking request has been received, please Check your mail to confirm!');
                return view('/yummy/pages/booktable');
            } else {
                $session->setFlashdata('booking-failed', 'Table Booking request unsuccessfull, try again please...');
                return redirect()->to('/booktable');
            }
        } catch (\Exception $e) {
            $session->setFlashdata('booking-failed', 'Table Booking request unsuccessfull, try again in a while. (' . $e->getMessage() . ')');
        }
    }
    public function verifyreservation($id)
    {
        // $this->bookings = new BookingModel;
        $this->bookings->booking_update($id);
        return view('yummy/pages/mailverify');
    }
}
