<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Project extends CI_Controller {
 
   public function __construct() {
      parent::__construct(); 
      $this->load->library('form_validation');
      $this->load->library('session');
      $this->load->library("pagination");
      $this->load->model('Project_model', 'project');
 
   }
 
  
  public function index()
  {
     
    $data['title'] = "Աշակերտների տվյալներ";
    $config["base_url"] = base_url() . "project";
    $config["total_rows"] = $this->project->get_count_all();
    $config["per_page"] = 5;
    $config["uri_segment"] = 2;
  
    $config['full_tag_open'] = '<ul class="pagination">';        
    $config['full_tag_close'] = '</ul>';        
    $config['first_link'] = 'First';        
    $config['last_link'] = 'Last';        
    $config['first_tag_open'] = '<li class="page-item"><span class="page-link">';        
    $config['first_tag_close'] = '</span></li>';        
    $config['prev_link'] = '&laquo';        
    $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';        
    $config['prev_tag_close'] = '</span></li>';        
    $config['next_link'] = '&raquo';        
    $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';        
    $config['next_tag_close'] = '</span></li>';        
    $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';        
    $config['last_tag_close'] = '</span></li>';        
    $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';        
    $config['cur_tag_close'] = '</a></li>';        
    $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';        
    $config['num_tag_close'] = '</span></li>';
   
    $this->pagination->initialize($config);
    $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
    $data["links"] = $this->pagination->create_links();
    $data['projects'] = $this->project->get_projects($config["per_page"], $page);     
    $this->load->view('layout/header');       
    $this->load->view('project/index',$data);
    $this->load->view('layout/footer');
 
  }
 
 
  public function show($id)
  {
    $data['project'] = $this->project->get($id);
    $data['title'] = "Դիտել աշակերտի տվյալները";
    $this->load->view('layout/header');
    $this->load->view('project/show', $data);
    $this->load->view('layout/footer'); 
  }
 
 
  public function create()
  {
    $data['title'] = "Ավելացնել  աշակերտի տվյալները";
    $this->load->view('layout/header');
    $this->load->view('project/create',$data);
    $this->load->view('layout/footer');     
  }
 
  
  public function store()
  {
    $this->form_validation->set_rules('school_name', 'Դպրոց', 'required');
    $this->form_validation->set_rules('student_name', 'Աշակերտի անուն', 'required');
    $this->form_validation->set_rules('classroom', 'Դասարան', 'required');
    $this->form_validation->set_rules('firstYearNumber', 'Առաջին կիսամյակի գնահատական', 'required');
    $this->form_validation->set_rules('secondYearNumber', 'Երկրորդ կիսամյակի գնահատական', 'required');
    $this->form_validation->set_rules('yearNumber', 'Տարեկան գնահատական', 'required');

 
    if (!$this->form_validation->run())
    {
        $this->session->set_flashdata('errors', validation_errors());
        redirect(base_url('project/create'));
    }
    else
    {
       $this->project->store();
       $this->session->set_flashdata('success', "Հաջողությամբ ավելացվեց։");
       redirect(base_url('project'));
    }
 
  }
 

  public function edit($id)
  {
    $data['project'] = $this->project->get($id);
    $data['title'] = "Փոփոխել տվյալները";
    $this->load->view('layout/header');
    $this->load->view('project/edit', $data);
    $this->load->view('layout/footer');     
  }
 
 
  public function update($id)
  {
    $this->form_validation->set_rules('school_name', 'Դպրոց', 'required');
    $this->form_validation->set_rules('student_name', 'Աշակերտի անուն', 'required');
    $this->form_validation->set_rules('classroom', 'Դասարան', 'required');
    $this->form_validation->set_rules('firstYearNumber', 'Առաջին կիսամյակի գնահատական', 'required');
    $this->form_validation->set_rules('secondYearNumber', 'Երկրորդ կիսամյակի գնահատական', 'required');
    $this->form_validation->set_rules('yearNumber', 'Տարեկան գնահատական', 'required');
    if (!$this->form_validation->run())
    {
        $this->session->set_flashdata('errors', validation_errors());
        redirect(base_url('project/edit/' . $id));
    }
    else
    {
       $this->project->update($id);
       $this->session->set_flashdata('success', "Հաջողությամբ փոփոխվեց։");
       redirect(base_url('project'));
    }
 
  }
 

  public function delete($id)
  {
     if ($id) {
        $this->project->delete($id);
        $this->session->set_flashdata('success', "Հաջողությամբ ջնջվեց");
    } else {
        $this->session->set_flashdata('error', "Invalid ID.");
    }
    redirect(base_url('project'));
  }
 
 
}