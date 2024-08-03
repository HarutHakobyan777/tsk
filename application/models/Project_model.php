<?php
 
 
class Project_model extends CI_Model{
 
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
    }
 
   
    public function get_count_all() {
        return $this->db->count_all('projects');
    }
 
 
  
    public function get_projects($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('projects');
 
        return $query->result();
    }
 
  
    public function store()
    {    
        $data = [
            'school_name'  => $this->input->post('school_name'),
            'student_name' => $this->input->post('student_name'),
            'classroom' => $this->input->post('classroom'),
            'firstYearNumber'=>$this->input->post('firstYearNumber'),
            'secondYearNumber'=>$this->input->post('secondYearNumber'),
            'yearNumber'=>$this->input->post('yearNumber')
        ];
 
        $result = $this->db->insert('projects', $data);
        return $result;
    }
 
  
    public function get($id)
    {
        $project = $this->db->get_where('projects', ['id' => $id ])->row();
        return $project;
    }
 
 
   
    public function update($id) 
    {
        $data = [
            'school_name'  => $this->input->post('school_name'),
            'student_name' => $this->input->post('student_name'),
            'classroom' => $this->input->post('classroom'),
            'firstYearNumber'=>$this->input->post('firstYearNumber'),
            'secondYearNumber'=>$this->input->post('secondYearNumber'),
            'yearNumber'=>$this->input->post('yearNumber')
        ];
 
        $result = $this->db->where('id',$id)->update('projects',$data);
        return $result;
                 
    }
 
  
    public function delete($id)
    {
        $result = $this->db->delete('projects', ['id' => $id]);
        return $result;
    }
     
}
?>