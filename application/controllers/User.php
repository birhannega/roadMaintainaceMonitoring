<?php
/**
 * Created by PhpStorm.
 * User: luv2codeit
 * Date: 2/11/2018
 * Time: 11:27 AM
 */

class User extends CI_Controller
{
    /**
     *User authentication
     * in
     */
    public function Authenticate_user()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create a news item';

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            //Get form data
          $username=$_POST['username'];
            $password=$_POST['Password'];
            //Load model class
            $this->load->Model('User_model');

            //validate user
           $user_is_valid=$this->User_model->checkUser($username,$password);
           if($user_is_valid)
           {
               //user is valid get roles
               $role=$this->User_model->get_user_role($username);
               if($role)
                 {
               foreach ($role as $row)
               {
                   $user_role=$row->Role_ID;
                  // echo $user_role;
                   switch ( $user_role)
                   {
                       case 1:
                           {
                               $this->session->set_userdata('central', $user_role);// set session for role of logged user
                               $this->session->set_userdata('user', $username);// set session for user name of logged user
                             redirect(base_url('index.php/Central'));
                           }
                       case 2:{
                           $this->session->set_userdata('district', $user_role);// set session for role of logged user
                           $this->session->set_userdata('user', $username);// set session for user name of logged user
                           redirect(base_url('index.php/District'));
                       }
                       case 3:{
                         $this->session->set_userdata('Production', $user_role);// set session for role of logged user
                           $this->session->set_userdata('user', $username);// set session for user name of logged user
                           redirect(base_url('index.php/Production'));
                    
                            }

                   }
               }}else{
                echo "undefined role";
               }

           }else{
               //invalid input set error message

           }

          //  echo $username.$password;

           // $this->load->view('header', $data);

        }
        else
        {
          // redirect to login page
            redirect(base_url());
        }
    }
}
?>
