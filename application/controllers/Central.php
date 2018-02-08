
<?php 
/**
 * central administrators pages 
 */
 class Central extends CI_controller
 {
 	//index page of central admin 
 	function index()
 	{
 		$this->load->view("header");
 		$this->load->view("central/nav.php");
 		$this->load->view("footer");
 	}
 	// list of rgistered road assets in all districts
 	function ListAllroads()
	{
        $this->load->view("header");
        $this->load->view("central/nav");
        $this->load->view("ListOfRoads");
        $this->load->view("footer");
	}
	//list of production plant sites 
	function production()
	{
		echo "all production plants in addis ababa";
	}
	//list of laboratories sites 
	function laboratories()
	{
		echo "all laboratories  in addis ababa";
	}	
	//list of machinery resources  
	function Machinery()
	{
		echo " Machinery  in addis ababa";
	}	
	//  ===============================
	// maintainance report  functions
	// ==========================================

    // list of onging projects
	function ongoingprojects()
	{
		echo " ongoing projects  in addis ababa";
	}
	 // list of delayed projects
	function Delayedprojects()
	{
		echo "  Delayed  in addis ababa";
	}
	// list of finished projects
	function finishedprojects()
	{
		echo " Machinery  in addis ababa";
	}// list of suspended projects

	function suspendedprojects()
	{
		echo " suspended projects  in addis ababa";
	}
	//  ===============================
	// resources report  functions
	// ==========================================

	// budget management
	function budget()
	{
		echo " Budget for projects  in addis ababa";
	}
	// budget management
	function Machineries()
	{
		echo " machinery for projects  in addis ababa";
	}
// construction materials
	function Materials()
	{
		echo " materials used  for projects  in addis ababa";
	}
	// hire new employee
	function hireEmployee()
	{
	//hire employee
		$this->load->view('header');
		$this->load->view('central/nav');
		//Load model class that fetches employee data from database
        $this->load->model('staff_model');
        $empdata['employee']=$this->staff_model->get_staff_list();

		$this->load->view('staff_registration_form',$empdata);
	
		$this->load->view('footer');
	}
	// resign employee
	function resignEmployee()
	{
        $this->load->view('header');
        $this->load->view('central/nav');
        $this->load->view('resign');
        $this->load->view('footer');
	}

    /**
     * view employee profile
     */
    function Employeeprofile()
	{
		$this->load->view('header');
        $this->load->view('central/nav');
        //load class that fetches employee data from data
		$this->load->Model('Staff_model');
        //Get list of employees
		$employees['empdata']=$this->Staff_model-> get_staff_list();
        $this->load->view('Employeeprofile',$employees);
        $this->load->view('footer');
	}

    /**
     * list all active staff members
     */
    function ListActiveEmployees()
	{
		echo "lsit active employee";
	}
	function employeeReport()
	{
		echo " employee reports";
	}
    //=========================================
    //      Logged user account management
    //============================================

    /**
     * create user account
     */
    public function AddUser()
    {
      $this->load->view('header');
        $this->load->view('central/nav');
        // load employee list and roles
        $this->load->Model('Staff_model');
        $employees['employee']=$this->Staff_model->get_staff_list();
        //Get roles to be owned by users
        $this->load->Model('Role_model');
        $roles['role']=$this->Role_model->get_roles();
        $data=array_merge($employees,$roles);
        $this->load->view('central/create_user',$data);
        $this->load->view('footer');
    }
    /**
     *logout
     */
    function Logout()
	{
		echo " log out ";
	}
	 // change password
	function changePassword()
	{
		echo " change pasword ";
	}
	// my profile
	function myprofile()
	{
		echo " my profile ";
	}

    /**
     * do user creation
     */
    public function do_create_user(){
        //Accepting form data

        $userid=$_POST['userid'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $role=$_POST['role'];
        //column to form_data correspondance
		   $userdata= array(
			   'Staff_ID' =>$userid,
			   'user_name'=>$username,
			   'password'=>$password,
			   'Role_ID'=>$role
		   );
		   // load model class of user management
		$this->load->Model('Staff_model');
		// execute the specific function of this model

			$user_created=$this->Staff_model->create_account($userdata);
			if ($user_created)
			{
			//user created successfully
                $this->session->set_flashdata('message', "User account successfully registered");// set success message
				redirect(base_url('index.php/central/AddUser'));
			}else{
                echo "user not created ";
			}
            }

 //=========================================
    //      district management
    //============================================
      // logout
	function addDistrict()
	{
        $this->load->view('header');
        $this->load->view('central/nav');
        $this->load->model('District_model');
        $districts['district']=$this->District_model->listDistricts();
        $this->load->view('central/AddDistrict',$districts);
        $this->load->view('footer');
	}
    function Do_addDistrict()
    {

        $districtname=$_POST['districtname'];
        $description=$_POST['description'];

        $districtInfo=array(

			'District_name'=>$districtname,
            'Disrict_description'=>$description
		                  );
        $this->load->model('District_model');
        $is_district_registered=$this->District_model->SaveDistrictInfo($districtInfo);
        if($is_district_registered) {
            $this->session->set_flashdata('message', "District successfully registered");// set success message
            redirect(base_url('index.php/central/addDistrict'));
        }else
		{
            $this->session->set_flashdata('message', "District not registered");// set error message
            redirect(base_url('index.php/central/addDistrict'));
		}
    }
	 // change password
	function viewDisricts()
	{
        $this->load->view('header');
        $this->load->view('central/nav');
        $this->load->model('District_model');
        $districts['district']=$this->District_model->listDistricts();
        $this->load->view('Districts',$districts);
        $this->load->view('footer');
	}
	// reports by district
	function reportsbyDistrict()
	{
		echo " change pasword ";
	}
    /**
     *do registration of staff info into database
     */
    function do_register()
    {
         //loading model class
       $this->load->Model("staff_model");
         // fetching form data//
        $first_name=$_POST['FirstName'];
        $middle_name=$_POST['middleName'];
        $last_name=$_POST['LastName'];
        $gender=$_POST['gender'];
        $birthd_date=$_POST['birthdate'];
        $hire_date=$_POST['hiredate'];
        $salary=$_POST['salary'];
        $academic_level=$_POST['academic_level'];

        //corresponding variables to respective column
        $data = array(
            'First_name' =>$first_name,
            'Middle_name'=>$middle_name,
            'Last_name'=>$last_name,
            'Gender'=>$gender,
            'Birth_date'=>$birthd_date,
            'Hire_date'=>$hire_date,
            'salary'=>$salary,
            'academic_level'=>$academic_level
        );
        $is_inserted_dated=$this->staff_model->SaveStaffInfo($data);

          if ($is_inserted_dated){
             // if registration is successfull
          $this->session->set_flashdata('message', "Staff member successfully registered");// set success message
           redirect(base_url('index.php/central/hireEmployee'));// redirect to employee form
           }
           else{
        // if registration is not successful
               $this->session->set_flashdata('message', "Staff member not registered");// set error message
               redirect(base_url('index.php/central/hireEmployee'));// redirect to employee form
       }
    }



//todo  adding page for the links

 } 
 ?>
