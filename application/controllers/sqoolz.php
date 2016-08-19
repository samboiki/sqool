<?php if (!defined('BASEPATH')) die();
class Sqoolz extends CI_Controller {
    public function __construct(){
		parent::__construct();

        // To use site_url and redirect on this controller.
        $this->load->helper('url');
	}
    
    
        
    public function index(){
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->view('index');
   }
   
    public function uimodals(){
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->view('uimodals');
   }
   
    public function patients(){
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('file');
       
       
      $this->load->view('patients');
   }
   
    public function tester() {
        $this->load->helper('date');
        $this->load->model('crud');
        $tbdatad['damm'] = $this->crud->getdsum();
     
   }
   
    public function signin_validation(){
           $this->load->library('form_validation');
           $this->load->library('session');
           $this->form_validation->set_rules('username','Username','required|trim|xxs_clean|callback_validate_credentials');           
           $this->form_validation->set_rules('password','Password','required|md5|trim');
            
        if ($this->form_validation->run()){
              $data = array(
                    'username' => $this->input->post('username'),
                    'logged_in' => 1
                );
                $this->session->set_userdata($data);
                
                $username = $this->input->post('username');
                
                $id_of_user = $this->crud->get_new_user_id($username);
                $userid = $id_of_user['id'];
                //get role
                    $rowarray = $this->crud->get_role($userid);
                    $role = $rowarray['role'];
                    
                    if($role == 'employer'){
                         redirect('rprofile');
                         
                    } elseif ($role == 'youth') {
                         redirect('yprofile');
                    }
                    else {
                         redirect('aprofile');
                    }
                
            } else {
                $this->load->helper('form');
                $this->load->view('signin'); 
                }
        } 
       
    public function signup_validation() {
       $this->load->library('form_validation');
       $this->load->helper('date');
        //runnning backend form validation to sanitize the data
        $this->form_validation->set_rules('email','Email','trim|xxs_clean|is_unique[person.email]');
        $this->form_validation->set_rules('password','Password','trim');
        $this->form_validation->set_rules('firstname','Firstname','trim|xxs_clean');
        $this->form_validation->set_rules('lastname','Lastname','trim|xxs_clean');
        $this->form_validation->set_rules('number','Number','trim|xxs_clean');
        $this->form_validation->set_rules('role','Role','trim|xxs_clean');
            //if validation runs successfully insert the data
            if ($this->form_validation->run()){
                    $this->load->model('crud');
                    $signupdata = array(
                                    'last_modified' => now(),
                                    'firstname' => $this->input->post('firstname'),
                                    'lastname' => $this->input->post('lastname'),
                                    'password' => $this->input->post('password'),
                                    'phone' => $this->input->post('number'),
                                    'email' => $this->input->post('email'),
                                    'role' => $this->input->post('role')
                    );
                    
                    
                    $this->crud->add_users($signupdata);
                    
                    //getting current id of recently inserted user
                    $username = $this->input->post('number');
                    
                    //using the posted username to compare the latest of the one in the DB as 
                    //its a unique one so that i can get that users id which will be added in the contact table crud is 
                    //model name, get_new_user_id is funtion name in that model and im passing the username value and i store the returned row of that function 
                    //in $id_of_added_user and will get the id value only and and store to $userid which will be used as foreign key in contact table
                    $id_of_added_user = $this->crud->get_new_user_id($username);
                    $userid = $id_of_added_user['id'];
                   
                    
                    // invoking add_userscontact() method to add the user
                   
                    // now im setting up session data
                    $data = array(
                        'number' => $this->input->post('number'),
                        'logged_in' => 1
                    );
                    $this->session->set_userdata($data);
                    
                    //get role
                    $rowarray = $this->crud->get_role($userid);
                    $role = $rowarray['role'];
                    
                    if($role == 'employer'){
                         redirect('rprofile');
                         
                    } elseif ($role == 'youth') {
                         redirect('yprofile');
                    }
                    else {
                         redirect('aprofile');
                    }
                    
            }
            else {
                redirect();
            }
   }
   
    public function validate_credentials(){
            $this->load->library('form_validation');
            $this->load->model('crud');
            if($this->crud->can_log_in()){
               return true;
            } else {
                
                $this->form_validation->set_message('validate_credentials','incorrect username/password');
                return false;
            }
    }  
          
    public function yprofile(){
        //loading required libraries and model
        $this->load->library('facebook');
        $this->load->library('session');
        $this->load->model('crud');
        
        //check to see if user is logged in else redirect to restricted page
            if($this->session->userdata('logged_in')){
            
                                  
              // var_dump($this->session->all_userdata());
               $username = $this->session->userdata('username');
            
               $data['user'] = $this->crud->get_user($username);
               $userid = $data['user']->id;
               $data['contact'] = $this->crud->get_usercontacts($userid);
              // echo $data['contact']->id;
               $this->load->helper('form');
               $this->load->helper('url');
               $this->load->view('yprofile',$data);
            } else {
                redirect('restricted');
            }
    }
    
    public function rprofile(){
    //loading required libraries and model
        $this->load->library('facebook');
        $this->load->library('session');
        $this->load->model('crud');
        
              // echo $data['contact']->id;
               $this->load->helper('form');
               $this->load->helper('url');
               $this->load->view('rprofile');
          
    }
    
    public function fbcheck() {
     $this->load->library('facebook');
      $user = $this->facebook->getUser();
      if ($user) {
            try {
                $data['user_profile'] = $this->facebook->api('/me');
            } catch (FacebookApiException $e) {
                $user = null;
            }
        }else {
            $this->facebook->destroySession();
        }
      if ($user) {
            $data['logout_url'] = site_url('logout'); // Logs off application
            $data['logout_url'] = $this->facebook->getLogoutUrl();// Logs off FB!
        } else {
        }
        
        return $data;
   }
   
    public function header(){
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->view('include/header',$data);
    }
   
    public function signin(){
      $this->load->library('facebook');
      $user = $this->facebook->getUser();
      if ($user) {
            try {
                $data['user_profile'] = $this->facebook->api('/me');
            } catch (FacebookApiException $e) {
                $user = null;
            }
        }else {
            $this->facebook->destroySession();
        }
      if ($user) {
            $data['logout_url'] = site_url('logout'); // Logs off application
            $data['logout_url'] = $this->facebook->getLogoutUrl();// Logs off FB!
        } else {
            $data['login_url'] = $this->facebook->getLoginUrl(array(
                'redirect_uri' => site_url('yprofile'), 
                'scope' => array("email") // permissions here
            ));
        }
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->view('signin',$data);
   }
   
    public function signup(){
      $this->load->library('facebook');
      $user = $this->facebook->getUser();
      if ($user) {
            try {
                $data['user_profile'] = $this->facebook->api('/me');
            } catch (FacebookApiException $e) {
                $user = null;
            }
        }else {
            $this->facebook->destroySession();
        }
      if ($user) {
        } else {
            $data['login_url'] = $this->facebook->getLoginUrl(array(
                'redirect_uri' => site_url('yprofile'), 
                'scope' => array("email") // permissions here
            ));
        }
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->view('signup',$data);
   }
        
    public function login(){

		$this->load->library('facebook'); // Automatically picks appId and secret from config
        // OR
        // You can pass different one like this
        //$this->load->library('facebook', array(
        //    'appId' => 'APP_ID',
        //    'secret' => 'SECRET',
        //    ));

		$user = $this->facebook->getUser();
        
        if ($user) {
            try {
                $data['user_profile'] = $this->facebook->api('/me');
            } catch (FacebookApiException $e) {
                $user = null;
            }
        }else {
            $this->facebook->destroySession();
        }

        if ($user) {
            $data['logout_url'] = site_url('logout'); // Logs off application
          //  $data['logout_url'] = $this->facebook->getLogoutUrl();// Logs off FB!
        } else {
            $data['login_url'] = $this->facebook->getLoginUrl(array(
                'redirect_uri' => site_url('login'), 
                'scope' => array("email") // permissions here
            ));
        }
        $this->load->view('login',$data);
	}
        
    public function tests(){
      $this->load->helper('form');
      $this->load->helper('url');
      require_once 'telerivet/telerivet.php';
      $tr = new Telerivet_API('RVmAAS2XaH3XodDwc1rIzFCyP9R2Bl0a ');
      $project = $tr->initProjectById('PJ610ad49ba7a0c3542ba8d7e9ac4f535a'); 
      
      $cursor = $project->queryContacts(array(
        'name' => array('prefix' => 1234)
        ));

        $cursor->limit(50);

        while ($cursor->hasNext()) {
            $contact = $cursor->next();
            echo $contact->id;
            
        }
    }
    
    public function test(){
      $this->load->helper('form');
      $this->load->helper('url');
      $webhook_secret = 'HLHZQW4ZDH37CL6EF3HRQRKW9LPGCGCR';
      require_once 'telerivet/telerivet.php';
      $tr = new Telerivet_API('RVmAAS2XaH3XodDwc1rIzFCyP9R2Bl0a ');
      $project = $tr->initProjectById('PJ610ad49ba7a0c3542ba8d7e9ac4f535a');
  
         
        if ($_POST['secret'] !== $webhook_secret)
        {
            header('HTTP/1.1 403 Forbidden');
            echo "Invalid webhook secret";
        }
         else 
            {
                if ($_POST['event'] == 'incoming_message')
                {
                    $id = $_POST['id'];
                    $contents = $_POST['content'];
                    $from_number = $_POST['from_number'];
                    $phone_id = $_POST['phone_id'];
                    error_log($contents); 
                   //echo $contents;
                    /*
                  $this->load->model('crud');
                  $content = array(
                                    'msgid' => $contents
                    );
                   $this->crud->add_contents($content);
                    
                 */
                    // do something with the message, e.g. send an autoreply   
                    
                    /*header("Content-Type: application/json");
                    echo json_encode(array(
                        'messages' => array(
                            array('content' => $contents,
                                  'to_number' => 1234)
                        )
                    ));
                     * 
                     */
                    //echo $contents;
                }
                
                $sent_msg = $project->sendMessage(array(
                    'content' => $contents, 
                    'to_number' => "1234"
                ));
            }
                 $this->load->model('crud');
                  $content = array(
                                    'msgid' => $id,
                                    'msgcontent' => $contents,
                                    'msgfrom' => $from_number,
                                    'msgphoneid' => $phone_id
                    );
                   $this->crud->add_contents($content);
    }
    
    public function calendar(){
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->view('calendar');
    }
    
    public function adda(){
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->view('adda');
    }
    
    public function addp(){
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->view('addp');
    }
    
     public function patient(){
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->view('patient');
    }
    
    
    public function addstudents(){
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->view('addstudents');
    }
        
    public function statistics(){
     
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->view('statistics');
    }
    
    public function chartest(){
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->view('chartest');
    }
    
    public function users(){
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->view('users');
      $this->load->model('crud');
      
      $users['data'] = $this->crud->get_users();
      $usersarr = $users['data'];
      
        foreach($usersarr as $vals){
         $id = $vals->id;
         $firstname = $vals->firstname;
         $lastname = $vals->lastname;
         $dob= $vals->dob;
         $gender= $vals->gender;
         $role = $vals->role;
         
         $values = array(
          $id,$firstname,$lastname,$dob,$gender,$role
         );
         $userspecs[] = $values;
         $values = [];
         }
         
        $data = json_encode(array('aaData' =>$userspecs));
        $file = "assets". DIRECTORY_SEPARATOR .  "users.json";
        write_file($file, $data);
    }
    
    public function user(){
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->model('crud');
      
      $id = $this->uri->segment(2);
      $users['data'] = $this->crud->get_userbyid($id);
    //  var_dump($users);
      
      $this->load->view('user',$users);
    }
    
    public function assessments(){
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->model('crud');
      
      $id = $this->uri->segment(2);
      $users['data'] = $this->crud->get_userbyid($id);
      $users['class'] = $this->crud->get_cls();
      
      $this->load->view('assessments',$users);
      $ids = $this->uri->segment(2);
     
      $marks['data'] = $this->crud->get_studentmarks($ids);
      $usersarr = $marks['data'];
      
        foreach($usersarr as $vals){
         $id = $vals->id;
         $subject = $vals->subject;
         $class = $vals->class;
         $marktotal = $vals->marktotal;
         $mark = $vals->mark;
         $percentage = $vals->percentage;
         $average = $vals->AVG;
         $wht = $vals->markweight;
         $assname = $vals->assname;
         
         
         $values = array(
          $id,$subject,$assname,$marktotal,$mark,$percentage,$average,$wht,$class
         );
         
         $userspecs[] = $values;
         $values = [];
         }
         
         
        $data = json_encode(array('aaData' =>$userspecs));
        
        $file = "assets". DIRECTORY_SEPARATOR .  "smarks.json";
        write_file($file, $data);
        
    }
    
    public function attendances(){
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->model('crud');
      
      $id = $this->uri->segment(2);
      $users['data'] = $this->crud->get_userbyid($id);
      $users['class'] = $this->crud->get_cls();
      
      $this->load->view('attendances',$users);
      $ids = $this->uri->segment(2);
     
      $marks['data'] = $this->crud->get_studentmarks($ids);
      $usersarr = $marks['data'];
      
        foreach($usersarr as $vals){
         $id = $vals->id;
         $subject = $vals->subject;
         $class = $vals->class;
         $marktotal = $vals->marktotal;
         $mark = $vals->mark;
         $percentage = $vals->percentage;
         $average = $vals->AVG;
         $wht = $vals->markweight;
         $assname = $vals->assname;
         
         
         $values = array(
          $id,$subject,$assname,$marktotal,$mark,$percentage,$average,$wht,$class
         );
         
         $userspecs[] = $values;
         $values = [];
         }
         
         
        $data = json_encode(array('aaData' =>$userspecs));
        
        $file = "assets". DIRECTORY_SEPARATOR .  "smarks.json";
        write_file($file, $data);
        
    }
    
    public function disciplines(){
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->model('crud');
      
      $id = $this->uri->segment(2);
      $users['data'] = $this->crud->get_userbyid($id);
      $users['class'] = $this->crud->get_cls();
      
      $this->load->view('disciplines',$users);
      $ids = $this->uri->segment(2);
     
      $ds['data'] = $this->crud->get_studentd($ids);
      $usersarr = $ds['data'];
      
        foreach($usersarr as $vals){
         $id = $vals->id;
         $offence = $vals->offence;
         $weight = $vals->weight;
         $class = $vals->class;
         $teacher= $vals->teacher;
         $date = $vals->date;
         
         $values = array(
          $id,$class ,$teacher,$offence,$date,$weight,$id
         );
         
         $userspecs[] = $values;
         $values = [];
         }
         
         
        $data = json_encode(array('aaData' =>$userspecs));
        
        $file = "assets". DIRECTORY_SEPARATOR .  "dviews.json";
        write_file($file, $data);
        
    }
    public function demographic(){
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->model('crud');
      
      $id = $this->uri->segment(2);
      $users['data'] = $this->crud->get_userbyid($id);
      $users['class'] = $this->crud->get_cls();
      
      $this->load->view('demographic',$users);
      $ids = $this->uri->segment(2);
     
      $marks['data'] = $this->crud->get_studentmarks($ids);
      $usersarr = $marks['data'];
      
        foreach($usersarr as $vals){
         $id = $vals->id;
         $subject = $vals->subject;
         $class = $vals->class;
         $marktotal = $vals->marktotal;
         $mark = $vals->mark;
         $percentage = $vals->percentage;
         $average = $vals->AVG;
         $wht = $vals->markweight;
         $assname = $vals->assname;
         
         
         $values = array(
          $id,$subject,$assname,$marktotal,$mark,$percentage,$average,$wht,$class
         );
         
         $userspecs[] = $values;
         $values = [];
         }
         
         
        $data = json_encode(array('aaData' =>$userspecs));
        
        $file = "assets". DIRECTORY_SEPARATOR .  "smarks.json";
        write_file($file, $data);
        
    }
    
    public function persons(){
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->view('persons');
    }
    
    public function stat_charts(){
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->model('crud');
      $tbdata['samm'] = $this->crud->get_tb();
      $data['respnd'] = $this->crud->respnd();
      $data['student'] = $this->crud->student();
     // var_dump($data);
      $tbs = $tbdata['samm'];
      $tbdatad['damm'] = $this->crud->get_tbreg();
      $tbreg = $tbdatad['damm'];
      //echo json_encode($tbs);
     // $mann = $tbs->region;
      //var_dump($tbs);
      $result = array();
      $res = array();
      
      foreach($tbreg as $vals){
         $district = $vals->region;
         $col = $vals->color;
         $q5 = $vals->Quest5;
         $q6 = $vals->Quest6;
         $q7 = $vals->Quest7;
         $q8 = $vals->Quest8;
         $q10 = $vals->Quest10;
         $q13 = $vals->Quest13;
         $q14 = $vals->Quest14;
         $q15 = $vals->Quest15;
         $q21 = $vals->Quest21;
         $tot = $vals->total;
         
      
         
         $values = array(
          $q5,$district,$q8,$col,$q13
         );
         
         $wow[] = $values;
         $values = [];
         }
     //echo json_encode($valu);

     
      //echo json_encode($results);
     
      
      $this->load->view('stat_charts',$data);
      
      echo json_encode($wow);
    }
    
    public function write_test(){
        $this->load->helper('file');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('crud');
        $tbdatad['damm'] = $this->crud->get_tb();
        $tbreg = $tbdatad['damm'];
        
        foreach($tbreg as $vals){
         $district = $vals->region;
         $col = $vals->color;
         $q5 = $vals->Quest5;
         $q8 = $vals->Quest8;
         $q10 = $vals->Quest10;
         $q13 = $vals->Quest13;
         
         $values = array(
          $q5,$district,$q8,$col,$q13
         );
         
         $wow[] = $values;
         $values = [];
         }
       
        
        $data = json_encode(array('aaData' =>$wow));
        $file = "assets". DIRECTORY_SEPARATOR .  "hello.json";            
    
       write_file($file, $data);
       echo "finished";
    }
    
    public function notifications(){ 
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->view('notifications',  $this->fbcheck());
    }
    
    public function youthsearch(){
        
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->view('youthsearch',$this->fbcheck());
    }
 
    public function jobrequested(){
      $this->load->model('crud');
      $this->load->helper('date');

            
          
                $data['student'] = $this->crud->student();
                
                
                //$sms['to'] = $to;
              //  $sms['message'] = $message;
               
               $this->load->view('test',$data);
             
        
   }

    public function aprofile(){
    $this->load->library('facebook');
      $user = $this->facebook->getUser();
      if ($user) {
            try {
                $data['user_profile'] = $this->facebook->api('/me');
            } catch (FacebookApiException $e) {
                $user = null;
            }
        }else {
            $this->facebook->destroySession();
        }
      if ($user) {
            $data['logout_url'] = site_url('logout'); // Logs off application
            $data['logout_url'] = $this->facebook->getLogoutUrl();// Logs off FB!
        } else {
        }
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->view('aprofile',$data);   
    }

    public function fblogout(){
        $this->load->library('facebook');
        $this->facebook->destroySession();
        // Make sure you destory website session as well.
        redirect('signin');
    }
    
    public function restricted(){
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->view('restricted');
    }
    
    public function error(){
        $this->load->library('facebook');
        $this->facebook->destroySession();
        // Make sure you destory website session as well.
        redirect('signin');
    }
    
    public function pd(){
       $this->load->model('crud');
      // $id = $this->input->post('id');
      
       $data = array(
           'firstname' => $this->input->post('firstname'),
           'phone' => $this->input->post('phone'),
           );
    
       var_dump($data);
   } 
    
    public function logout(){
        $this->session->sess_destroy();
        $this->load->library('facebook');
        // Logs off session from website
        $this->facebook->destroySession();
        // Make sure you destory website session as well.
        redirect('index.php');
    }
    
    public function grades(){
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->view('grades');
    }
    //-----------subjects--------------------------//
    public function subject(){
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('crud');

        $datas['data'] = $this->crud->get_sub();
        $datasarr = $datas['data'];
        foreach($datasarr as $vals){
          $id = $vals->id;
          $name = $vals->name;
          $avg = $vals->avg;

              $svalues = array(
               $id,$name,$avg,$id
              );
          $subspecs[] = $svalues;
          $svalues = [];
        }
        $data = json_encode(array('aaData' =>$subspecs));
        $file = "assets". DIRECTORY_SEPARATOR .  "sv.json";
        write_file($file, $data);

        $this->load->view('subject');
    }
    public function adds(){
        $data = array(
                    'name' => $this->input->post('name')
                );
        $this->crud->add_subject($data);
        redirect('subject');
    }
    public function edit_subject($id){
      $data = $this->crud->get_subject_by_id($id);
      echo json_encode($data);
    }
    public function edits(){
        $id  = $this->input->post('id');
        $data = array(
                    'name' => $this->input->post('name')
                );
        $this->crud->edit_subject($id,$data);
        redirect('subject');
    }
    public function dels(){
        $id = $this->uri->segment(2);
        $this->crud->dels($id);
        redirect('subject');
    }
    
    
    //------------grades---------------------------------//
    public function edit_grades($id){
      $data = $this->crud->get_grades_by_id($id);
      echo json_encode($data);
    }
    public function editg(){
        $id  = $this->input->post('id');
        $data = array(
                    'name' => $this->input->post('name')
                );
        $this->crud->edit_grades($id,$data);
        redirect('settings');
    }
    public function addg(){
        $data = array(
                    'name' => $this->input->post('name')
                );
        $this->crud->add_grades($data);
        redirect('settings');
    }
    public function delg(){
        $id = $this->uri->segment(2);
        $this->crud->delg($id);
        redirect('settings');
    }
    public function deld(){
        $id = $this->uri->segment(2);
        echo $id;
        $rowarray = $this->crud->deld($id);
        $role = $rowarray['role'];
       redirect('disciplines/'.$role);
    }
    public function settings(){
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->model('crud');
      //-----------grades--------------------------//
      $users['data'] = $this->crud->get_grades();
      $usersarr = $users['data'];
      foreach($usersarr as $vals){
     $id = $vals->id;
     $name = $vals->name;
     $avg = $vals->avg;

     $values = array(
      $id,$name,$avg,$id
     );
     $userspecs[] = $values;
     $values = [];
     }
      $data = json_encode(array('aaData' =>$userspecs));
      $file = "assets". DIRECTORY_SEPARATOR .  "gv.json";
      write_file($file, $data);
      //---------------------------------------------//
        $this->load->view('settings');
    }
    
    
    //-----------classes--------------------------//
    public function classes(){
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->model('crud');
       
      $datas['data'] = $this->crud->get_cls();
      $cls['sub'] = $this->crud->get_sub();
      $cls['tchr'] = $this->crud->get_teachers();
      $cls['grd'] = $this->crud->get_grades();
      $datasarr = $datas['data'];
      foreach($datasarr as $vals){
        $id = $vals->id;
        $name = $vals->name;
        $type = $vals->type;
        $teacher = $vals->teacher;
        $subject = $vals->subject ;
        $avg = $vals->avg;

        $svalues = array(
         $id,$name,$type,$teacher,$subject,$avg,$id
        );
        $subspecs[] = $svalues;
        $svalues = [];
        }
      $data = json_encode(array('aaData' =>$subspecs));
      $file = "assets". DIRECTORY_SEPARATOR .  "cv.json";
      write_file($file, $data);
        $this->load->view('classes',$cls);
    }
    public function pr($data){
            echo "<pre>";
            print_r($data); // or var_dump($data);
            echo "</pre>";
    }
    public function addc(){
           $datas['faq'] = $this->crud->get_settings();
        
           $year = $datas['faq'][0]->year;
           
           $myStr = $this->input->post('subject');
           $pieces = explode(",", $myStr);
           $subid = $pieces[0];
           $subname = $pieces[1];
           $sub = substr($subname, 0, 3);
           $g =   $this->input->post('grade');
           $s =   $this->input->post('subset');
           $name = $year.'#'.$g.$s.'#'.$sub ;
                $data = array(
                    'name' => $name,
                    'type' => $this->input->post('ctype'),
                    'grade_id' => $this->input->post('grade'),
                    'subject_id' => $subid,
                    'teacher_id' => $this->input->post('teacher')
                );
            $this->crud->add_classes($data);
            redirect('classes');
    }
    public function edit_classes($id){
      $data = $this->crud->get_classes_by_id($id);
      echo json_encode($data);
    }
    public function editc(){
        $id  = $this->input->post('id');
        $datas['faq'] = $this->crud->get_settings();
        
           $year = $datas['faq'][0]->year;
           
           $myStr = $this->input->post('subject');
           $pieces = explode(",", $myStr);
           $subid = $pieces[0];
           $subname = $pieces[1];
           $sub = strtoupper(substr($subname, 0, 3));
           $g =   $this->input->post('grade');
           $s =   $this->input->post('subset');
           $name = $year.'#'.$g.$s.'#'.$sub ;
           
           if($this->crud->cexits($name)){
               echo $name;
               $data = array(
                    'name' => $name,
                    'type' => $this->input->post('ctype'),
                    'grade_id' => $this->input->post('grade'),
                    'subject_id' => $subid,
                    'teacher_id' => $this->input->post('teacher')
                );
                $this->crud->edit_classes($id,$data);
                echo 'ssss';
                redirect('classes');
            } else {
                
               echo 'already exists';
            }
    }
    public function delc(){
        $id = $this->uri->segment(2);
        $this->crud->delc($id);
        redirect('classes');
    }
    
    //-----------discipline--------------------------//
    public function discipline(){
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->model('crud');
      $datas['data'] = $this->crud->get_d();
      $dat['dsum'] = $this->crud->getdsum();
      $datasarr = $datas['data'];
      foreach($datasarr as $vals){
        $id = $vals->id;
        $student = $vals->student;
        $offence = $vals->count;
        $weight = $vals->weight;
        $teacher = $vals->teacher;
        $class = $vals->class;
        $recorded = $vals->date;

        $svalues = array(
         $id,$student,$offence,$weight,$teacher,$class,$recorded
        );
        $subspecs[] = $svalues;
        $svalues = [];
        }
      $data = json_encode(array('aaData' =>$subspecs));
      $file = "assets". DIRECTORY_SEPARATOR .  "dv.json";
      write_file($file, $data);
      //---------------------------------------------//
      $this->load->view('discipline',$dat);
    }
    
    public function disciplinec(){
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->model('crud');
      $datas['data'] = $this->crud->get_dc();
      $datax['datax'] = $this->crud->get_dg();
      $dat['dsum'] = $this->crud->getdsum();
      $datasarr = $datas['data'];
      foreach($datasarr as $vals){
        $id = $vals->id;
        $class = $vals->class;
        $teacher = $vals->teacher;
        $weight = $vals->weight;
        $count = $vals->count;

        $svalues = array(
         $id,$class,$teacher,$weight,$count
        );
        $subspecs[] = $svalues;
        $svalues = [];
        }
      $data = json_encode(array('aaData' =>$subspecs));
      $file = "assets". DIRECTORY_SEPARATOR .  "dvc.json";
      write_file($file, $data);
      //---------------------------------------------//
      $datasar = $datax['datax'];
     
      foreach($datasar as $valss){
        $xgrade = $valss->grade;
        $xweight = $valss->weight;
        $xcount = $valss->count;

        $ssvalues = array(
            'grade'=>"grade ".$xgrade,'weight'=>$xweight,'count'=>$xcount
        );
        $xsubspecs[] = $ssvalues;
        $ssvalues = [];
      }
      $xdata = json_encode($xsubspecs);
      $file = "assets". DIRECTORY_SEPARATOR .  "dvg.json";
      write_file($file, $xdata);
      $this->load->view('disciplinec',$dat);
    }
    
    public function addd(){
           $g =   $this->input->post('grade');
           $s =   $this->input->post('subset');
           $name = $g.$s ;
                $data = array(
                    'name' => $name,
                    'type' => $this->input->post('ctype'),
                    'grade_id' => $this->input->post('grade'),
                    'subject_id' => $this->input->post('subject'),
                    'teacher_id' => $this->input->post('teacher')
                );
            $this->crud->add_classes($data);
            redirect('classes');
    }
    public function attendance(){
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->model('crud');
      
       //-----------subjects--------------------------//
      $datas['data'] = $this->crud->get_att();
      $datasarr = $datas['data'];
      foreach($datasarr as $vals){
        $id = $vals->id;
        $student = $vals->student;
        $class = $vals->class;
        $type = $vals->type;
        $teacher = $vals->teacher;
        $recorded = $vals->created;

        $svalues = array(
         $id,$student,$class,$type,$teacher,$recorded,$id
        );
        $subspecs[] = $svalues;
        $svalues = [];
        }
      $data = json_encode(array('aaData' =>$subspecs));
      $file = "assets". DIRECTORY_SEPARATOR .  "av.json";
      write_file($file, $data);
      //---------------------------------------------//
      
      
        $this->load->view('attendance');
    }
    
    public function setting(){
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->view('setting');
    }
    
    public function assessment(){
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->view('assessment');
    }
    
    
}
/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
