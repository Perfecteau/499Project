<?php
class Login extends Controller
{

	public function index()
	{	
		$this->loadView('login/index');
	}

	// public function signup()
 //        {
             
 //            $this->form_validation->set_rules('firstname', 'First Name', 'required');
 //            $this->form_validation->set_rules('lastname', 'Last Name', 'required');    
 //            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');    
                       
 //            if ($this->form_validation->run() == FALSE) {   
 //                $this->load->view('header');
 //                $this->load->view('register');
 //                $this->load->view('footer');
 //            }else{                
 //                if($this->user_model->isDuplicate($this->input->post('email'))){
 //                    $this->session->set_flashdata('flash_message', 'User email already exists');
 //                    redirect(site_url().'account/index');
 //                }else{
                    
 //                    $clean = $this->security->xss_clean($this->input->post(NULL, TRUE));
 //                    $id = $this->user_model->insertUser($clean); 
 //                    $token = $this->user_model->insertToken($id);                                        
                    
 //                    $qstring = $this->base64url_encode($token);                      
 //                    $url = site_url() . 'main/complete/token/' . $qstring;
 //                    $link = '<a href="' . $url . '">' . $url . '</a>'; 
                               
 //                    $message = '';                     
 //                    $message .= '<strong>You have signed up with our website</strong><br>';
 //                    $message .= '<strong>Please click:</strong> ' . $link;                          
 
 //                    echo $message; //send this in email
 //                    exit;
                     
                    
 //                };              
 //            }
 //        }

}