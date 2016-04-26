<<<<<<< HEAD
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MusicArtists extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('music_artist.php',$output);
	}
	
	public function offices()
	{
		$output = $this->grocery_crud->render();

		$this->_example_output($output);
	}
	
	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}
	
	public function artists_management()
	{
			$crud = new grocery_CRUD();

			$crud->set_theme('manafi');
			$crud->set_table('artists');
			$crud->set_relation('education','education','education_value');
			
			$crud->display_as('name','نام')
				->display_as('family','نام خانوادگی')
				->display_as('birth_date','تاریخ تولد')
				->display_as('sex','جنسیت')
				->display_as('education','سطح تحصیلات')
				->display_as('tel_num','تلفن ثابت')
				->display_as('mobile_num','تلفن همراه')
				->display_as('email','پست الکترونیکی')
				->display_as('address','آدرس')
				->display_as('orientation','تلفن ثابت')
				->display_as('level','سطح')
				->display_as('courses','دوره های گذرانده')
				->display_as('cv','رزومه')
				->display_as('production_works','آثار تولیدی')
				->display_as('sample_audio_works','نمونه فایل صوتی')
				->display_as('sample_video_works','نمونه فایل تصویری')
				->display_as('index_acts','اقدامات شاخص')
				->display_as('remarks','ملاحظات');
			
			$crud->set_subject('هنرمند');

			$crud->required_fields('family');

			$crud->set_field_upload('pic','assets/uploads/files');
			$crud->set_field_upload('cv','assets/uploads/files');
			$crud->set_field_upload('sample_audio_works','assets/uploads/files');
			$crud->set_field_upload('sample_video_works','assets/uploads/files');

			$output = $crud->render();

			$this->_example_output($output);
	}
=======
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MusicArtists extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('music_artist.php',$output);
	}
	
	public function offices()
	{
		$output = $this->grocery_crud->render();

		$this->_example_output($output);
	}
	
	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}
	
	public function artists_management()
	{
			$crud = new grocery_CRUD();

			$crud->set_theme('manafi');
			$crud->set_table('artists');
			$crud->set_relation('education','education','education_value');
			
			$crud->display_as('name','نام')
				->display_as('family','نام خانوادگی')
				->display_as('birth_date','تاریخ تولد')
				->display_as('sex','جنسیت')
				->display_as('education','سطح تحصیلات')
				->display_as('tel_num','تلفن ثابت')
				->display_as('mobile_num','تلفن همراه')
				->display_as('email','پست الکترونیکی')
				->display_as('address','آدرس')
				->display_as('orientation','تلفن ثابت')
				->display_as('level','سطح')
				->display_as('courses','دوره های گذرانده')
				->display_as('cv','رزومه')
				->display_as('production_works','آثار تولیدی')
				->display_as('sample_audio_works','نمونه فایل صوتی')
				->display_as('sample_video_works','نمونه فایل تصویری')
				->display_as('index_acts','اقدامات شاخص')
				->display_as('remarks','ملاحظات');
			
			$crud->set_subject('هنرمند');

			$crud->required_fields('family');

			$crud->set_field_upload('pic','assets/uploads/files');
			$crud->set_field_upload('cv','assets/uploads/files');
			$crud->set_field_upload('sample_audio_works','assets/uploads/files');
			$crud->set_field_upload('sample_video_works','assets/uploads/files');

			$output = $crud->render();

			$this->_example_output($output);
	}
>>>>>>> f64982732d603790ebfbec14a5e0004517edb686
}