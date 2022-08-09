<?php
    class User{

        private $db;

        public function __construct()
        {
            $this->db = new Database();
        }

        public function getData(){
            $this->db->query('select * from users');
           return $this->db->resultSet();
        }

        public function register($data){
            $this->db->query('INSERT INTO users (name, email, password) values (:name, :email, :password)');
            $this->db->bind(':name', $data['name']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':password', $data['password']);
            // Execute
            if ( $this->db->execute() ) {
                return true;
            } else {
                return false;
            }
        }
        public function getPostById($id){
            $this->db->query('select * from users where id = :id');
           $this->db->bind(':id',$id);
           return $this->db->single();
        }
        public function updatedata($data,$dataid){
            $this->db->query('UPDATE users SET name = :name, email = :email,password = :password where id = :id');
               // Bind values
           $this->db->bind(':name', $data['name']);
           $this->db->bind(':id', $dataid);
           $this->db->bind(':email', $data['email']);
           $this->db->bind(':password', $data['password']);

           // Execute
           if( $this->db->execute()){
               return true;
           } else {
               return false;
           }

        }
        public function deletedata($id){
            $this->db->query("DELETE FROM users where id = $id");
            if( $this->db->execute()){
               return true;
           } else {
               return false;
           }
        }
    }

?>