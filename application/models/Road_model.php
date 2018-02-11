<?php
/**
 * Created by PhpStorm.
 * User: luv2codeit
 * Date: 2/11/2018
 * Time: 6:37 PM
 */

     class Road_model extends CI_Model
        {
        public function __construct ()
        {
            $this->load->database();
        }

         /**
          * @param $data
          * @return mixed
          * register new road
          */
         public function register_road($data)
                {
                    return $this->db->insert('tbl_road_asset',$data);

                }

    /**
     * @param $number
     * @return mixed
     * check if road is already registered to avoid data redendency
     */
       function check_if_exists($number)
            {
                $this->db->where('road_number',$number);
                $query=$this->db->get('tbl_road_asset');
                return $query->result();
            }
}