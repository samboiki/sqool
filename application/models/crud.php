<?php

class crud extends CI_Model {
    public function can_log_in(){
    $this->db->where('username', $this->input->post('username'));
    $this->db->where('password', $this->input->post('password'));
    $query = $this->db->get('user');
    if ($query->num_rows() == 1){
        return true;
    } else {
        return false;    
    }
}
    public function get_ids($eml){
     $this->db->where('email', $eml);
     $query = $this->db->get('user');
     
     if ($query){
         $ids = $query->row();
         $id = array(
        'id' => $ids->id,
        );
         return $id;
     } else {
         return false;
     }
    }

    function  get_news(){
        $query = $this->db->get('news');
        return $query->result();
    }
    function  get_newsitem($id){
        $this->db->where('id',$id);
        $query = $this->db->get('news');
        return $query->result();
    }
    function  get_alerts(){
        $query = $this->db->get('alerts');
        return $query->result();
    }
    function  respnd(){
        $query = $this->db->get('tbstudy');
        return $query->result();
    }
    function  student(){
        $query = $this->db->get('student');
        return $query->result();
    }
    function  get_events(){
        $query = $this->db->get('events');
        return $query->result();
    }
    function  get_tb(){
        $sql = 'SELECT * FROM tbregion';
        $query = $this->db->query($sql);
        return $query->result();
    }
    function  get_tbreg(){
        $sql = 'SELECT * FROM tbreg';
        $query = $this->db->query($sql);
        return $query->result();
    }
    function  get_users(){
        $sql = 'SELECT * FROM person';
        $query = $this->db->query($sql);
        return $query->result();
    }
     function getdsum(){
         $sql = 'SELECT SUM(`count`) as `dsum` FROM `offencecount` WHERE 1';
         $query = $this->db->query($sql);
         return $query->result();
     }
    
    function  get_att(){
        $sql = 'SELECT * FROM attview';
        $query = $this->db->query($sql);
        return $query->result();
    }
    //----------------settings--------------------//
    function  get_settings(){
        $sql = 'SELECT * FROM settings';
        $query = $this->db->query($sql);
        return $query->result();
    }
    //----------------discipline--------------------//
    function  get_offence(){
        $sql = 'SELECT * FROM offence';
        $query = $this->db->query($sql);
        return $query->result();
    }
    function  get_d(){
        $sql = 'SELECT * FROM dview';
        $query = $this->db->query($sql);
        return $query->result();
    }
    function  get_dc(){
        $sql = 'SELECT * FROM dvbyclass';
        $query = $this->db->query($sql);
        return $query->result();
    }
    function  get_dg(){
        $sql = 'SELECT * FROM dvbygrade';
        $query = $this->db->query($sql);
        return $query->result();
    }
    function  get_dcount(){
        $sql = 'SELECT offences FROM dview GROUP BY offence';
        $query = $this->db->query($sql);
        return $query->result();
    }
    
     //----------------classes--------------------//
     function  get_cls(){
        $sql = 'SELECT * FROM classview';
        $query = $this->db->query($sql);
        return $query->result();
    }
    function  get_teachers(){
        $sql = 'SELECT * FROM person WHERE role = "teacher" ';
        $query = $this->db->query($sql);
        return $query->result();
    }
    function add_classes($data){
      $this->db->insert('class',$data);
    }
    function edit_classes($id, $data){
        $this->db->where('id',$id);
        $this->db->update('class',$data);
    }
    function  get_classes_by_id($id){
        $this->db->where('id',$id);
        $query = $this->db->get('class');
        $userdata = $query->row();
        return $userdata;
    }
    function delc($id){
        $this->db->where('id',$id);
        $this->db->delete('class');
    } 
    public function cexits($cname){
    $this->db->where('name', $cname);
    $query = $this->db->get('class');
    if ($query->num_rows() == 0){
        return true;
    } else {
        return false;    
    }
}
    //----------------grades--------------------//
    function  get_grades(){
        $sql = 'SELECT * FROM gradeview';
        $query = $this->db->query($sql);
        return $query->result();
    }
    function  get_grades_by_id($id){
        $this->db->where('id',$id);
        $query = $this->db->get('gradeview');
        $userdata = $query->row();
        return $userdata;
    }
    function add_grades($data){
      $this->db->insert('grade',$data);
    }
    function edit_grades($id, $data){
        $this->db->where('id',$id);
        $this->db->update('gradeview',$data);
    }
    function delg($id){
        $this->db->where('id',$id);
        $this->db->delete('gradeview');
    }  
    function deld($id){
        $this->db->where('id',$id);
         $query = $this->db->get('discipline');
         if ($query){
            $roles = $query->row();
            $role = array(
           'role' => $roles->student_id,
               );
            $this->db->where('id',$id);
            $this->db->delete('discipline');
                return $role;
            } else {
                return false;
            }
    }
    //----------------assesment------------------//
    function  get_assessment(){
        $sql = 'SELECT * FROM assesment';
        $query = $this->db->query($sql);
        return $query->result();
    }
    //----------------subject--------------------//
    function  get_sub(){
        $sql = 'SELECT * FROM subject';
        $query = $this->db->query($sql);
        return $query->result();
    }
    function  get_subject_by_id($id){
        $this->db->where('id',$id);
        $query = $this->db->get('subject');
        $userdata = $query->row();
        return $userdata;
    }
    function add_subject($data){
      $this->db->insert('subject',$data);
    }
    function edit_subject($id, $data){
        $this->db->where('id',$id);
        $this->db->update('subject',$data);
    }
    function dels($id){
        $this->db->where('id',$id);
        $this->db->delete('subject');
    }  
    
    
    
    function  get_eventss($row){
        $query = $this->db->get('events',3,$row);
        if($query->num_rows()>0){
        return $query->result();
        }
    }
   
    
    function  get_user($username){
        $this->db->where('username',$username);
        $query = $this->db->get('user');
        $userdata = $query->row();
        return $userdata;
    }
    function get_studentmarks($ids){
        $this->db->where('pid',1);
        $query = $this->db->get('marks');
        return $query->result();
    }
    function get_studentd($ids){
        $this->db->where('pid',$ids);
        $query = $this->db->get('dviews');
        if ($query->num_rows()>0){
           return $query->result(); 
        }
        else 
        {
            $this->db->where('id',100);
            $query = $query = $this->db->get('dviews');
            return $query->result(); 
        }
    }
    function  get_usercontacts($userid){
        $this->db->where('userid',$userid);
        $query = $this->db->get('contact');
        $userdata = $query->row();
        return $userdata;
    }
    function  get_userbyfb($fbid){
        $this->db->where('fbid',$fbid);
        $query = $this->db->get('user');
        return $query->result();
    }
    
    function  get_userbyid($id){
        $this->db->where('pid',$id);
        $query = $this->db->get('persons');
        return $query->result();
    }
    
    function add_news($data){
         $this->db->where('title',$title);
         $q = $this->db->get('news');
      if ( $q->num_rows() > 0 ) {
         $this->db->where('title',$title);
         $this->db->update('news',$data);
      } else {
      $this->db->insert('news',$data);
      }
    }
    
    function get_new_user_id($username){
         $this->db->where('username',$username);
         $query = $this->db->get('user');
            if ($query){
            $ids = $query->row();
            $id = array(
           'id' => $ids->id,
               );
                return $id;
            } else {
                return false;
            }
    }
    
    function get_role($userid){
         $this->db->where('id',$userid);
         $query = $this->db->get('user');
         if ($query){
            $roles = $query->row();
            $role = array(
           'role' => $roles->role,
               );
                return $role;
            } else {
                return false;
            }
    }
    
    function add_users($signupdata){
      $this->db->insert('person',$signupdata);
    }
    
    function add_userscontact($signupdatacontact){
      $this->db->insert('contact',$signupdatacontact);
    }
   
    function add_contents($content){
      $this->db->insert('test',$content);
    }
    function add_contactsinfo($data, $id){
        $this->db->where('id',$id);
        $this->db->update('contact',$data);
    }
    function add_dcontacts($data, $title){
        $this->db->where('name',$title);
         $q = $this->db->get('dcontacts');
      if ( $q->num_rows() > 0 ) {
         $this->db->where('name',$title);
         $this->db->update('dcontacts',$data);
      } else {
      $this->db->insert('dcontacts',$data);
      }
    }
    function add_content($data, $title){
        $this->db->where('name',$title);
         $q = $this->db->get('dcontacts');
      if ( $q->num_rows() > 0 ) {
         $this->db->where('name',$title);
         $this->db->update('dcontacts',$data);
      } else {
      $this->db->insert('dcontacts',$data);
      }
    }
    function add_gencontacts($data, $title){
        $this->db->where('nam',$title);
         $q = $this->db->get('gencon');
      if ( $q->num_rows() > 0 ) {
         $this->db->where('name',$title);
         $this->db->update('gencon',$data);
      } else {
      $this->db->insert('gencon',$data);
      }
    }
    function add_testimonials($data, $title){
        $this->db->where('name',$title);
         $q = $this->db->get('testimonials');
      if ( $q->num_rows() > 0 ) {
         $this->db->where('name',$title);
         $this->db->update('testimonials',$data);
      } else {
      $this->db->insert('testimonials',$data);
      }
    }
    function add_alerts($data, $title){
         $this->db->where('title',$title);
         $q = $this->db->get('alerts');
      if ( $q->num_rows() > 0 ) {
         $this->db->where('title',$title);
         $this->db->update('alerts',$data);
      } else {
      $this->db->insert('alerts',$data);
      }
    }
    function add_events($data, $title){
         $this->db->where('title',$title);
         $q = $this->db->get('events');
      if ( $q->num_rows() > 0 ) {
         $this->db->where('title',$title);
         $this->db->update('events',$data);
      } else {
      $this->db->insert('events',$data);
      }
    }
    function update_record($data){
        $this->db->where('id', 14);
        $this->db->update('user',$data);
    }
    function update_recordss($nkos){
        $this->db->where('id',$nkos);
        
        $data = array(
           'username' => $this->input->post('username'),
           'firstname' => $this->input->post('firstname'),
           'product' => $this->input->post('product'),
        );
         
        $this->db->update('user',$data);
    }
    function delete_row($table){
        $this->db->where('id',$this->uri->segment(2));
        $this->db->delete($table);
    }  
    function resetp(){
        $this->db->where('id',$this->uri->segment(3));
        $data = array(
           'password' => NULL,
        );
         
        $this->db->update('user',$data);
    }
    public function  currdata($datas){
        $beta = $datas;
        return $beta;
    }   
}
