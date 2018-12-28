<?php
defined('BASEPATH') OR exit('No direct script acces allowed');
class MailM extends CI_Model{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function send_invoice($userEmail,$subject,$data)
	{
        $config = Array(    
            'protocol' => 'sendmail',
            'smtp_host' => 'mail.arnawa.co.id',
            'smtp_port' => 465,
            'smtp_user' => 'info@arnawa.co.id',
            'smtp_pass' => 'arnawa2018',
            'smtp_timeout' => '4',
            'charset' => 'iso-8859-1'
        );

        $this->load->library('email', $config);

        // $this->email->set_newline("\r\n");
        $this->email->from('info@arnawa.co.id', 'Arnawa');

        $this->email->to($userEmail); // replace it with receiver mail id
        $this->email->subject($subject); // replace it with relevant subject
        $this->email->set_mailtype("html");

        $body = $this->load->view('emails/invoice',$data,TRUE);
        $this->email->message($body); 
        $this->email->send();
	}
}