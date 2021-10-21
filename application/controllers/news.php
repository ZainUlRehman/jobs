<?php
class News extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('news_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['news'] = $this->news_model->get_news();
                $data['title'] = 'JobPortal';

                $this->load->view('templates/header', $data);
                $this->load->view('news/index', $data);
                $this->load->view('templates/footer');
        }
        public function view($slug = NULL)
        {
                $data['news_item'] = $this->news_model->get_news($slug);

                if (empty($data['news_item']))
                {
                        show_404();
                }

                $data['title'] = $data['news_item']['Company_Name'];

                $this->load->view('templates/header', $data);
                $this->load->view('news/view', $data);
                $this->load->view('templates/footer');
        }
       

        public function create()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title'] = 'Job Portal';

            $this->form_validation->set_rules('Company_Name', 'Company_Name', 'required');
            $this->form_validation->set_rules('JobCategory', 'JobCategory', 'required');
             $this->form_validation->set_rules('RequiredSkill', 'RequiredSkill', 'required');
              $this->form_validation->set_rules('Role', 'Role', 'required');
               $this->form_validation->set_rules('Qualification', 'Qualification', 'required');
                $this->form_validation->set_rules('Max_Age', 'Max_Age', 'required');
                 $this->form_validation->set_rules('Salary', 'Salary', 'required');
                  $this->form_validation->set_rules('JobLocation', 'JobLocation', 'required');
                   $this->form_validation->set_rules('Working_hour', 'Working_hour', 'required');
                    $this->form_validation->set_rules('JobDescription', 'JobDescription', 'required');
                     $this->form_validation->set_rules('Last_ApplyDate', 'Last_ApplyDate', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header', $data);
                $this->load->view('news/create');
                $this->load->view('templates/footer');

            }
            else
            {
                $this->news_model->set_news();
                $this->load->view('news/success');
            }
        }
        // public function dispdata()
        // {
        // $result['data']=$this->Hello_model->display_records();
        // $this->load->view('display_records',$result);
        public function updatedata() {
                $id=$this->input->get('id');
                $result['data']=$this->news_model->displayrecordsById($id);
                $this->load->view('news/update_records',$result);
        
                if($this->input->post('update'))
                {
                $Company_Name = $this->input->post('Company_Name');
                $JobCategory = $this->input->post('JobCategory');
                $RequiredSkill = $this->input->post('RequiredSkill');
                $Role = $this->input->post('Role');
                $Qualification = $this->input->post('Qualification');
                $Max_Age = $this->input->post('Max_Age');
                $Salary = $this->input->post('Salary');
                $JobLocation = $this->input->post('JobLocation');
                $Working_hour = $this->input->post('Working_hour');
                $JobDescription = $this->input->post('JobDescription');
                $Last_ApplyDate = $this->input->post('Last_ApplyDate');
                $this->news_model->update_records($Company_Name, $JobCategory ,$RequiredSkill,$Role,$Qualification, $Max_Age,$Salary ,$JobLocation,$Working_hour,$JobDescription,$Last_ApplyDate);
                echo "Date updated successfully !";
                }
        }
        public function deletedata()
                {
                $id=$this->input->get('id');
                $response=$this->news_model->deleterecords($id);
                //$this->load->view('news/',$response);
                if($response==true){
                    echo "Data deleted successfully !";
                }
        else{
                echo "Error !";
                }
                
        }
}
