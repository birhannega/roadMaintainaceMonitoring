
<?php 
/**
* functions related to districts
*/
class District extends CI_controller
{

    /**
     *home page of district
     */
    function index()
	{
		$this->load->view("header");
		$this->load->view("navigationbar");
		$this->load->view("Main_admin_content");
		$this->load->view("footer");
		
	}
    /**
     * Road maintainance methods
     * register new road asset
     */
    function Register_road()
	{
		$this->load->view("header");
		$this->load->view("navigationbar");
		$this->load->view("road_registration_form");
		$this->load->view("footer");
	}
    /**
     * resource allocation function
     */
    public function resource_allocatation()
    {

    }
    /**
     *generate road segmenent registration form
     */
    public function AddSegment()
    {
        $this->load->view("header");
        $this->load->view("navigationbar");
        $this->load->view("district/Addsegment");
        $this->load->view("footer");
    }

    /**
     *do registration of segments
     */
    public function do_segment_registration()
    {
      $roadnumber=$_POST['roadnumber'];
echo $roadnumber;

    }

    /**
     * List segments road referenced by road number
     * @param $roadnumber
     */
    public function DisplaySegments($roadnumber)
    {

    }
    /**
     * List segments road referenced by road number
     * Edit details of road segment
     * @param $segmentID
     */
    public function editsegment($segmentID)
    {

    }

    /**
     * ////////////////////////////////////////////
     *Staff member manuplation functions
     * register new member
     * edit member profile
     * view staff profile
     * ////////////////////////////////////////////////
     * register new member
     */
    public function register_staff_member(){
        //echo "register";
        $this->load->view('header');
        $this->load->view('navigationbar');
        $this->load->view('District/district_Staff_reg_form');
        $this->load->view('footer');

    }

    /**
     *Edit staff profile
     */
    public function edit_staff_profile(){


    }

    /**
     *create user for staff
     */
    public function Add_user(){

    }

    /**
     *ban user account
     */
    public function ban_user(){

    }

    /**
     *change user password
     * @param $userid
     */
    public function changePAssword($userid){

    }

    /**
     *viw list of staff members
     */
    function view_staff_list(){

   }

    /**
     * register new road
     */
    public  function do_Add_road(){
        // Getting form data
        $road_number=$_POST["roadnumber"];
       $road_name=$_POST["road_name"];
       $origin=$_POST["origin"];
       $block_number=$_POST["block_number"];
       $measured_Length=$_POST["measured_Length"];
       $start_chainage=$_POST["start_chainage"];
       $start_description=$_POST["start_description"];
       $End_chainage=$_POST["End_chainage"];
       $End_description=$_POST["End_description"];
       $surface_type=$_POST["surface_type"];
       $surface_width=$_POST["surface_width"];
       $carriage_way=$_POST["carriage_way"];
       $no_lanes=$_POST["no_lanes"];
       $no_ways=$_POST["no_ways"];
        $sub_city_ID=$_POST["sub_city_ID"];
        $Start_code=$_POST["Start_code"];
        $end_code=$_POST["end_code"];
        $road_class_ID=$_POST["road_class_ID"];
        $rate=$_POST["rate"];
        $survey_date=$_POST["survey_date"];
        $District_id=$_POST["District_id"];

        //variable to column assignment
        $road_data=array(
            'road_number'=> $road_number,
            'road_name'=> $road_name,
            'origin'=> $origin,
            'block_number'=>$block_number,
            'measured_Length'=>$measured_Length,
            'start_chainage'=>$start_chainage,
            'start_description'=> $start_description,
            'End_chainage'=>$End_chainage,
            'End_description'=>$End_description,
            'surface_type'=> $surface_type,
            'surface_width'=> $surface_width,
            'carriage_way'=> $carriage_way,
            'no_lanes'=>$no_lanes,
            'no_ways'=>$no_ways,
            'sub_city_ID'=>$sub_city_ID,
            'Start_code'=>$Start_code,
            'end_code'=> $end_code,
            'road_class_ID'=>$road_class_ID,
            'rate'=>$rate,
            'survey_date'=>$survey_date,
            'District_id'=>$District_id
        );

        //passing array data to model class that inserts road data to database
        $this->load->model('Road_model');
        //check if it is already registered
        $road_exists=$this->Road_model->check_if_exists($road_number);
        if($road_exists)
        {
            $this->session->set_flashdata('message', " <div class='alert alert-warning'>Road already exists</div>");// set success message
        // echo "road already registered";
            redirect('District/Register_road');

        }else{
            $is_registered=$this->Road_model->register_road($road_data);
            if($is_registered){

                $this->session->set_flashdata('message', " <div class='alert alert-success'>Road successfully registered</div>");// set success message
              //  echo " successfull";
                redirect('District/Register_road');
            }else{
                $this->session->set_flashdata('message', " <div class='alert alert-danger'>Error in road registration</div>");// set success message
               // echo "not successfull";
                redirect('District/Register_road');
            }
        }



}

}
 ?>