<?php
class News_model extends CI_Model {

    public function __construct()
        {
                $this->load->database();
        }

    public function get_news($slug = FALSE)
        {        
        		if ($slug === FALSE)
        		{
                $query = $this->db->get('postjob');
                return $query->result_array();
        		}

        		$query = $this->db->get_where('postjob', array('Company_Name' => $slug));
        		return $query->row_array();
		}

	public function set_news()
		{
	    	$this->load->helper('url');	  
	   		$data = array(
	       		 'Company_Name' => $this->input->post('Company_Name'),
	        		'JobCategory' => $this->input->post('JobCategory'),
	        		'RequiredSkill' => $this->input->post('RequiredSkill'),
	        		'Role' => $this->input->post('Role'),
	        		'Qualification' => $this->input->post('Qualification'),
	        		'Max_Age' => $this->input->post('Max_Age'),
	        		'Salary' => $this->input->post('Salary'),
	        		'JobLocation' => $this->input->post('JobLocation'),
	        		'Working_hour' => $this->input->post('Working_hour'),
	         		'JobDescription' => $this->input->post('JobDescription'),
	          		'Last_ApplyDate' => $this->input->post('Last_ApplyDate')
							);
	   		return $this->db->insert('postjob', $data);
		}

	public	function display_records()
		{
			$query=$this->db->query("SELECT * from postjob");
			return $query->result();
		}
	public function displayrecordsById($id)
		{
			$query=$this->db->query("SELECT * from postjob where jobId='".$id."'");
			return $query->result();
		}
/*Update*/
	public function update_records($Company_Name, $JobCategory ,$RequiredSkill,$Role,$Qualification, $Max_Age,$Salary,$JobLocation,$Working_hour,$JobDescription,$Last_ApplyDate)
		{
	        $id=$this->input->get('id');

	//echo $myQuery = "UPDATE form SET Company_Name='$Company_Name',JobCategory= '$JobCategory' ,RequiredSkill='$RequiredSkill',Role='$Role',Qualification='$Qualification', Max_Age='$Max_Age',Salary='$Salary' ,JobLocation='$JobLocation',Working_hour='$Working_hour',JobDescription='$JobDescription',Last_ApplyDate='$Last_ApplyDate' where jobId='$id'";exit;
			$query=$this->db->query("UPDATE postjob SET Company_Name='$Company_Name',JobCategory= '$JobCategory' ,RequiredSkill='$RequiredSkill',Role='$Role',Qualification='$Qualification', Max_Age='$Max_Age',Salary='$Salary' ,JobLocation='$JobLocation',Working_hour='$Working_hour',JobDescription='$JobDescription',Last_ApplyDate='$Last_ApplyDate' where jobId='$id'");
		}

	public function deleterecords($id)
  		{
  			//	echo $id;
		  		//	$id=$this->input->get('id');
    		$this->db->where("jobId", $id);
    		$this->db->delete("postjob");
    		//echo $this->db->last_query();exit;
    		return true;
  }

	
}