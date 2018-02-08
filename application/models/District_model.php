    <?php
    /**
     * Created by PhpStorm.
     * User: luv2codeit
     * Date: 2/6/2018
     * Time: 7:15 PM
     */

    class District_model extends CI_Model
    {
    public function __construct ()
    {
        $this->load->database();
    }

        /**
         * register new district
         */
        public function SaveDistrictInfo($data)
                {
                return $this->db->insert('tbl_district',$data);
                }
                public function listDistricts()
                {
                  $listQuery=  $this->db->get('tbl_district');
                    return $listQuery->result();
                }
    }