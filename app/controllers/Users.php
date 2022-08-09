<?php
    class Users extends Controller
    {
        public function __construct()
        {
          $this->userModel = $this->model('User');
        }
        
        public function index()
        {
            $posts = $this->userModel->getData();
            $data = [
              'posts' => $posts
           ];
            $this->view('users/hello', $data);
        }
        public function add(){
           $this->view('users/insert');
        }
        public function adddata(){
            if ($_SERVER['REQUEST_METHOD']=='POST') {
                $data = [
                    'name' => $_POST['name'],
                    'email' => $_POST['email'],
                    'password' => $_POST['password']
               ];
                $post = $this->userModel->register($data);
            }
            if($post){
                redirect('users/index');
            }
        }
        public function update($id){
            
            $posts = $this->userModel->getPostById($id);
            $data = [
              'posts' => $posts
           ];
            $this->view('users/update', $data);
        }
        public function updatedata($id){
            $dataid = $id;
            if ($_SERVER['REQUEST_METHOD']=='POST') {
                $data = [
                    'name' => $_POST['name'],
                    'email' => $_POST['email'],
                    'password' => $_POST['password']
               ];
            
                $post = $this->userModel->updatedata($data,$dataid);
                if($post){
                    redirect('users/index');
                }
            }
        }
        public function delete($id){
            $posts = $this->userModel->deletedata($id);
            if($posts){
                redirect('users/index');
            }
        }
    }
?>