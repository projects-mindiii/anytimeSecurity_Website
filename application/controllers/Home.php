<?php defined('BASEPATH') or exit("No direct script access allowed");
class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		// Load PHPMailer library
		$this->load->library('phpmailer_library');
		$this->load->library('email_lib');
	}

	public function index()
	{
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
	public function privacyPolicy()
	{
		$data['pageTitle'] = "AnyTime Security | Privacy Policy";
		$this->load->view('frontend_includes/header', $data);
		$this->load->view('frontend/privacy');
		$this->load->view('frontend_includes/footer');
	}

	// Load Learn More View
	public function learnMore()
	{
		$data['pageTitle'] = "AnyTime Security | Learn More";
		$this->load->view('frontend_includes/header', $data);
		$this->load->view('frontend/learnmore');
		$this->load->view('frontend_includes/footer');
	}

	// Load Learn More Business View
	public function learnMoreBusiness()
	{
		$data['countries'] = $this->db->from('countries')->order_by("name", "asc")->get()->result_array();
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
	public function learnMoreResidential()
	{
		$data['countries'] = $this->db->from('countries')->order_by("name", "asc")->get()->result_array();
		$data['pageTitle'] = "AnyTime Security | LearnMore Residential";
		$this->load->view('frontend_includes/header', $data);
		$this->load->view('frontend/learnmoreresidential', $data);
		$this->load->view('frontend_includes/footer');
	}

	// Send Business Email
	function sendBusinessEmail()
	{


		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$country = $this->input->post('country_name');
		$state = $this->input->post('state_name');
		$city = $this->input->post('city_name');
		// $zip_code = $this->input->post('zip_code');
		$position = $this->input->post('company_position');
		$system_type = $this->input->post('system_type');
		$best_way = $this->input->post('best_way');
		$reach_date = $this->input->post('reach_date');
		$reach_time = $this->input->post('reach_time');

		$data['businessDetails'] = [
			'fname' => $fname, 'lname' => $lname, 'email' => $email,
			'phone' => $phone, 'country' => $country, 'state' => $state,
			'city' => $city, 'position' => $position,
			'system_type' => $system_type, 'best_way' => $best_way,
			'reach_date' => $reach_date, 'reach_time' => $reach_time
		];

		$message = $this->load->view('EmailTemplates/FrontEnd/business_email_template', $data, TRUE);

		$subject = 'From Anytime Security';

		//$mail_res = $this->phpmailer_library->send_mail($email, $subject, $message);
		$mail_res = $this->email_lib->send_email($email, $subject, $message);
		

		if ($mail_res) {
			echo json_encode(array('status' => true, 'message' => 'Form submitted successfully.'));
		} else {
			echo json_encode(array('status' => false, 'message' => 'Error submitting form.'));
		}
	}

	// Send Residential Mail
	function sendResidentialEmail()
	{


		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$country = $this->input->post('country_name');
		$state = $this->input->post('state_name');
		$city = $this->input->post('city_name');
		// $zip_code = $this->input->post('zip_code');

		$system_type = $this->input->post('system_type');
		$best_way = $this->input->post('best_way');
		$reach_date = $this->input->post('reach_date');
		$reach_time = $this->input->post('reach_time');
		$homeowner = $this->input->post('homeowner');


		$data['residentialsDetails'] = [
			'fname' => $fname, 'lname' => $lname, 'email' => $email,
			'phone' => $phone, 'country' => $country, 'state' => $state,
			'city' => $city, 'system_type' => $system_type,
			'best_way' => $best_way, 'reach_date' => $reach_date,
			'reach_time' => $reach_time, 'homeowner' => $homeowner
		];

		$message = $this->load->view('EmailTemplates/FrontEnd/residential_email_template', $data, TRUE);

		$subject = 'From Anytime Security';

		//$mail_res = $this->phpmailer_library->send_mail($email, $subject, $message);
		$mail_res = $this->email_lib->send_email($email, $subject, $message);

		if ($mail_res) {
			echo json_encode(array('status' => true, 'message' => 'Form submitted successfully.'));
		} else {
			echo json_encode(array('status' => false, 'message' => 'Error submitting form.'));
		}
	}

	// Send Support Email
	function sendSupportEmail()
	{

		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$country = $this->input->post('country_name');
		$state = $this->input->post('state_name');
		$city = $this->input->post('city_name');
		// $zip_code = $this->input->post('zip_code');

		$system_type = $this->input->post('system_type');
		$best_way = $this->input->post('best_way');
		$service_type = $this->input->post('service_type');

		$reach_date = $this->input->post('reach_date');
		$reach_time = $this->input->post('reach_time');


		$company_name = $this->input->post('company_name');
		$position = $this->input->post('position');
		$years_in_business = $this->input->post('years_in_business');
		$buss_mailing_addr = $this->input->post('buss_mailing_addr');


		$data['supportDetails'] = [
			'fname' => $fname, 'lname' => $lname, 'email' => $email,
			'phone' => $phone, 'country' => $country, 'state' => $state,
			'city' => $city, 'system_type' => $system_type,
			'best_way' => $best_way, 'reach_date' => $reach_date,
			'reach_time' => $reach_time, 'company_name' => $company_name, 'position' => $position,
			'years_in_business' => $years_in_business, 'buss_mailing_addr' => $buss_mailing_addr,
			'service_type' => $service_type
		];

		$message = $this->load->view('EmailTemplates/FrontEnd/support_email_template', $data, TRUE);

		$subject = 'From Anytime Security';

		//$mail_res = $this->phpmailer_library->send_mail($email, $subject, $message);
		$mail_res = $this->email_lib->send_email($email, $subject, $message);

		if ($mail_res) {
			echo json_encode(array('status' => true, 'message' => 'Form submitted successfully.'));
		} else {
			echo json_encode(array('status' => false, 'message' => 'Error submitting form.'));
		}
	}


	// Contact us Form
	function contactUsForm()
	{

		$data['pageTitle'] = "AnyTime Security | Contact Us";
		$data['countries'] = $this->db->from('countries')->order_by("name", "asc")->get()->result_array();
		$this->load->view('frontend_includes/header', $data);
		$this->load->view('frontend/contactus');
		$this->load->view('frontend_includes/footer');
	}

	// Contact us Form
	function contactUsFormSave()
	{
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$country = $this->input->post('country');
		$country_name = $this->db->from('countries')->where(['id' => $country])->get()->row()->name;
		$state = $this->input->post('state');
		$state_name = $this->db->from('states')->where(['id' => $state])->get()->row()->name;
		$city = $this->input->post('city');
		$city_name = $this->db->from('cities')->where(['id' => $city])->get()->row()->name;
		// $zip_code = $this->input->post('zip_code');
		$reach_date = $this->input->post('reach_date');
		$reach_time = $this->input->post('reach_time');

		$data['supportDetails'] = [
			'fname' => $fname, 'lname' => $lname, 'email' => $email,
			'phone' => $phone, 'country' => $country_name, 'state' => $state_name,
			'city' => $city_name, 'reach_date' => $reach_date,
			'reach_time' => $reach_time
		];

		// $this->load->view('EmailTemplates/FrontEnd/contactus_email_template', $data);
		
		$message = $this->load->view('EmailTemplates/FrontEnd/contactus_email_template', $data, TRUE);

		$subject = 'From Anytime Security';

		//$mail_res = $this->phpmailer_library->send_mail($email, $subject, $message);
		$mail_res = $this->email_lib->send_email($email, $subject, $message);

		if ($mail_res) {
			echo json_encode(array('status' => true, 'message' => 'Form submitted successfully.'));
		} else {
			echo json_encode(array('status' => false, 'message' => 'Error submitting form.'));
		}
	}

	// Register
	function customerRegister()
	{
		$data['countries'] = $this->db->get('countries')->result_array();
		$data['pageTitle'] = "AnyTime Security | Register";
		$this->load->view('frontend_includes/header', $data);
		$this->load->view('frontend/register', $data);
		$this->load->view('frontend_includes/footer');
	}

	function getStates($country)
	{
		//$countries = $this->db->get_where('states', ['country_id'=>$country])->result_array();
		$countries = $this->db->from('states')->where(['country_id' => $country])->order_by("name", "asc")->get()->result_array();
		echo json_encode(['countries' => $countries]);
		exit;
	}

	function getCities($country, $state)
	{
		//$cities = $this->db->get_where('cities', ['country_id'=>$country, 'state_id'=>$state])->result_array();
		$cities = $this->db->from('cities')->where(['country_id' => $country, 'state_id' => $state])->order_by("name", "asc")->get()->result_array();
		echo json_encode(['cities' => $cities]);
		exit;
	}

	function send_test_mail()
	{

		// PHPMailer object
		$mail = $this->phpmailer_library->send_mail('suraj.mindiii@gmail.com', 'Test Mail', 'Test Mail');
		print_r($mail);
	}

	function send_test_email()
	{

		$mail = $this->email_lib->send_email('suraj.mindiii@gmail.com', 'Test E-Mail', 'Test E-Mail');
		print_r($mail);

	}

	function php_info()
	{
		phpinfo();
	}
}
