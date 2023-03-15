<?php defined('BASEPATH') OR exit("No direct script access allowed");
class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
		$this->load->database();
    }

    public function index() {
		$data['pageTitle'] = "AnyTime Security | Home";
        $this->load->view('frontend_includes/header', $data);
		$this->load->view('frontend/home');
		$this->load->view('frontend_includes/footer');
    }

	// thank you pop

	public function submit_form()
	{

		// process the form data here
		
		// load the thank you view file as a popup
		$this->load->view('thank_you');
	}

	// Load Privacy Policy
	public function privacyPolicy() {
		$data['pageTitle'] = "AnyTime Security | Privacy Policy";
        $this->load->view('frontend_includes/header', $data);
		$this->load->view('frontend/privacy');
		$this->load->view('frontend_includes/footer');
	}

	// Load Learn More View
	public function learnMore() {
		$data['pageTitle'] = "AnyTime Security | Learn More";
        $this->load->view('frontend_includes/header', $data);
		$this->load->view('frontend/learnmore');
		$this->load->view('frontend_includes/footer');
	}

	// Load Learn More Business View
	public function learnMoreBusiness() {
		$data['countries'] = $this->db->get('countries')->result_array();
		// echo '<pre>';
		// print_r($countries);
		// echo '<pre>'; 
		// exit;
		$data['pageTitle'] = "AnyTime Security | LearnMore Business";
        $this->load->view('frontend_includes/header', $data);
		$this->load->view('frontend/learnmorebusiness', $data);
		$this->load->view('frontend_includes/footer');
	}

	// Load Learn More Residential View
	public function learnMoreResidential() {
		$data['countries'] = $this->db->get('countries')->result_array();
		$data['pageTitle'] = "AnyTime Security | LearnMore Residential";
        $this->load->view('frontend_includes/header', $data);
		$this->load->view('frontend/learnmoreresidential', $data);
		$this->load->view('frontend_includes/footer');
	}

	// Send Business Email
	function sendBusinessEmail() {

		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'sandbox.smtp.mailtrap.io',
			'smtp_port' => 2525,
			'smtp_user' => '107d1c675213e6',
			'smtp_pass' => '3e6fa72792e4be',
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'wordwrap' => TRUE,
			'crlf' => "\r\n",
			'newline' => "\r\n"
		  );

		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$country = $this->input->post('country_name');
		$state = $this->input->post('state_name');
		$city = $this->input->post('city_name');
		$zip_code = $this->input->post('zip_code');
		$position = $this->input->post('company_position');
		$system_type = $this->input->post('system_type');
		$best_way = $this->input->post('best_way');
		$reach_date = $this->input->post('reach_date');
		$reach_time = $this->input->post('reach_time');
		
		
		
		

		$to = 'rajmander.mindii@gmail.com';
		$to2=$email; 
		$subject = 'From Anytime Security';

		$data['businessDetails'] = ['fname'=>$fname, 'lname'=>$lname, 'email'=>$email, 
									'phone'=>$phone, 'country'=>$country, 'state'=>$state,
									'city'=>$city, 'zip_code'=>$zip_code, 'position'=>$position, 
									'system_type'=>$system_type, 'best_way'=>$best_way, 
									'reach_date'=>$reach_date, 'reach_time'=>$reach_time];

		  $message = $this->load->view('EmailTemplates/FrontEnd/business_email_template', $data ,TRUE); 
		  
        

		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from('ajay13kmindiii@gmail.com'); 
		$this->email->to('ajay13kmindiii@gmail.com');
		$this->email->subject($subject);
		$this->email->message($message);
		// redirect(base_url('learn-more-business'));
		if($this->email->send())
		{
			echo json_encode(array('status' => true, 'message' => 'Form submitted successfully.'));
		}
		else
		{
	        echo json_encode(array('status' => false, 'message' => 'Error submitting form.'));
			// show_error($this->email->print_debugger());
		}
	}

	// Send Residential Mail
	function sendResidentialEmail() {
		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'sandbox.smtp.mailtrap.io',
			'smtp_port' => 2525,
			'smtp_user' => '107d1c675213e6',
			'smtp_pass' => '3e6fa72792e4be',
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'wordwrap' => TRUE,
			'crlf' => "\r\n",
			'newline' => "\r\n"
		  );

		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$country = $this->input->post('country_name');
		$state = $this->input->post('state_name');
		$city = $this->input->post('city_name');
		$zip_code = $this->input->post('zip_code');

		$system_type = $this->input->post('system_type');
		$best_way = $this->input->post('best_way');
		$reach_date = $this->input->post('reach_date');
		$reach_time = $this->input->post('reach_time');
		$homeowner = $this->input->post('homeowner');

		// Send details
		$to = 'rajmander.mindii@gmail.com';
		$to2=$email; 
		$subject = 'From Anytime Security';

		$data['residentialsDetails'] = ['fname'=>$fname, 'lname'=>$lname, 'email'=>$email, 
									'phone'=>$phone, 'country'=>$country, 'state'=>$state,
									'city'=>$city, 'zip_code'=>$zip_code, 'system_type'=>$system_type, 
									'best_way'=>$best_way, 'reach_date'=>$reach_date, 
									'reach_time'=>$reach_time, 'homeowner'=>$homeowner];

		$message = $this->load->view('EmailTemplates/FrontEnd/residential_email_template', $data ,TRUE);

		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from('rajmander.mindii@gmail.com'); 
		$this->email->to('rajmander.mindii@gmail.com');
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->send();
		redirect(base_url('learn-more-residential'));
		// if($this->email->send())
		// {
		// 	redirect(base_url('learn-more-business'));
		// }
		// else
		// {
		// 	show_error($this->email->print_debugger());
		// }
	}

	// Send Support Email
	function sendSupportEmail() {
		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'sandbox.smtp.mailtrap.io',
			'smtp_port' => 2525,
			'smtp_user' => '107d1c675213e6',
			'smtp_pass' => '3e6fa72792e4be',
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'wordwrap' => TRUE,
			'crlf' => "\r\n",
			'newline' => "\r\n"
		  );

		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$country = $this->input->post('country_name');
		$state = $this->input->post('state_name');
		$city = $this->input->post('city_name');
		$zip_code = $this->input->post('zip_code');

		$system_type = $this->input->post('system_type');
		$best_way = $this->input->post('best_way');
		$service_type = $this->input->post('service_type');
		
		$reach_date = $this->input->post('reach_date');
		$reach_time = $this->input->post('reach_time');
		

		$company_name = $this->input->post('company_name');
		$position = $this->input->post('position');
		$years_in_business = $this->input->post('years_in_business');
		$buss_mailing_addr = $this->input->post('buss_mailing_addr');

		
		
		

		// Send details
		$to = 'rajmander.mindii@gmail.com';
		$to2=$email; 
		$subject = 'From Anytime Security';

		$data['supportDetails'] = ['fname'=>$fname, 'lname'=>$lname, 'email'=>$email, 
									'phone'=>$phone, 'country'=>$country, 'state'=>$state,
									'city'=>$city, 'zip_code'=>$zip_code, 'system_type'=>$system_type, 
									'best_way'=>$best_way, 'reach_date'=>$reach_date, 
									'reach_time'=>$reach_time, 'company_name'=>$company_name, 'position'=>$position,
									 'years_in_business'=>$years_in_business, 'buss_mailing_addr'=>$buss_mailing_addr,
									 'service_type'=>$service_type
								];

		 $message = $this->load->view('EmailTemplates/FrontEnd/support_email_template', $data ,TRUE); 



		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from('rajmander.mindii@gmail.com'); 
		$this->email->to('rajmander.mindii@gmail.com');
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->send();
		redirect(base_url('solution-provider'));
		// if($this->email->send())
		// {
		// 	redirect(base_url('learn-more-business'));
		// }
		// else
		// {
		// 	show_error($this->email->print_debugger());
		// }
	}
	

	// Contact us Form
	function contactUsForm() {
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			echo '<pre>';
			print_r($_POST);
			echo '</pre>';
			exit;
		}
		$data['pageTitle'] = "AnyTime Security | Contact Us";
        $this->load->view('frontend_includes/header', $data);
		$this->load->view('frontend/contactus');
		$this->load->view('frontend_includes/footer');
	}

	// Register
	function customerRegister() {
		$data['countries'] = $this->db->get('countries')->result_array();
		$data['pageTitle'] = "AnyTime Security | Register";
        $this->load->view('frontend_includes/header', $data);
		$this->load->view('frontend/register', $data);
		$this->load->view('frontend_includes/footer');
	}

	function getStates($country) {
		$countries = $this->db->get_where('states', ['country_id'=>$country])->result_array();
		echo json_encode(['countries' => $countries]); exit;
	}

	function getCities($country, $state) {
		$cities = $this->db->get_where('cities', ['country_id'=>$country, 'state_id'=>$state])->result_array();
		//echo $this->db->last_query(); exit;
		echo json_encode(['cities' => $cities]); exit;
	}
	
}