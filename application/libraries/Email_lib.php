<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Email_lib
{
    public function __construct()
    {
        $this->ci =& get_instance();
    }

    public function send_email($recipient="",$subject,$mailContent)
    {
        
        $config = array(
			'protocol' => 'smtp',
			'smtp_host' => getenv('MAIL_HOST'),
			'smtp_port' => getenv('MAIL_PORT'),
			'smtp_user' => getenv('MAIL_USERNAME'),
			'smtp_pass' => getenv('MAIL_PASSWORD'),
			'smtp_crypto' => 'ssl',
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'wordwrap' => TRUE,
			'crlf' => "\r\n"
		);

		$this->ci->load->library('email', $config);
		$this->ci->email->set_newline("\r\n");
		$this->ci->email->from(getenv('FROM_MAIL'), getenv('FROM_NAME'));

        // Add a recipient
        if($recipient){
            $this->ci->email->to($recipient);
        }
        else{
            $this->ci->email->to(getenv('TO_MAIL'));
        }

        $this->ci->email->bcc(getenv('FROM_MAIL'));
		
		$this->ci->email->subject($subject);
		$this->ci->email->message($mailContent);
		$res = $this->ci->email->send();

        // if ($this->ci->email->send()) 
		// {
        //     echo 'Email has been sent successfully';
        // } 
		// else 
		// {
        //     show_error($this->email->print_debugger());
        // }

       return $res;

    }
}