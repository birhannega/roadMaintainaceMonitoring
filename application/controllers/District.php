
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
		$this->load->view("navigatiobar");
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
		$this->load->view("navigatiobar");
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
     *Add road segmenent function
     */
    public function AddSegment()
    {

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
        echo "register";

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

}
 ?>