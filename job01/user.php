
<?php

class User {
    private $id = '';
    public $login = '';
    public $email = '';
    public $firstname = '';
    public $lastname = '';
   
   
    public function register($login,$password,$email,$firstname,$lastname) 
    {
      $connexion = mysqli_connect ("localhost", "root", "", "classe");
      $requete="INSERT INTO user (login,password,email,firstname,lastname) VALUES ('$login','$password','$email','$firstname','$lastname')";
      $query=mysqli_query($connexion,$requete);
      return array($login,$password,$email,$firstname,$lastname); 
          
    }

    public function connect($login, $password){
        $connexion = mysqli_connect ("localhost", "root", "", "classe");
      $requete="SELECT * FROM user WHERE login='".$login."'";
      $query=mysqli_query($connexion,$requete);
      $user=mysqli_fetch_assoc($query);
      if ($login==$user['login'] && $password==$user['password']) 
      {
          $this->id = $user['id'];
          $this->login = $login;
          $this->password = $password;
          $this->email = $user['email'];
          $this->firstname = $user['firstname'];
          $this->lastname = $user['lastname'];
          return($this);
      }
    else{
      echo "Mauvais login /mot de passe .Merci de recommencer";
    }
 
}
   
    public function disconnect(){
           session_unset();
        }

    public function delete($login,$password,$email,$firstname,$lastname){
      $connect = mysqli_connect ("localhost","root", "", "classe");
      $req = "DELETE  FROM user WHERE login='".$login."'";
      $query = mysqli_query($connect,$req);
      return array($login,$password,$email,$firstname,$lastname); 

    }

    public function update($login,$password,$email,$firstname,$lastname){
        $con = mysqli_connect ("localhost","root", "", "classe");
        $id = $this->id;
        $requet = "UPDATE user SET login = '$login', password = '$password', email = '$email', firstname = '$firstname', lastname = '$lastname' WHERE id = '$id'";
        $query = mysqli_query($con,$requet); 
        return array($login,$password,$email,$firstname,$lastname);    
    }

    public function isConnected(){
        $connexion = mysqli_connect ("localhost", "root", "", "classe");
           
        if ($login=true){
            echo "Bonjour";
        } 

        
     }

      public function getAllInfos(){
       var_dump($this);
    
      }


      public function getLogin(){
      $connexion = mysqli_connect ("localhost", "root", "", "classe");
      $id = $this->id;
      $requete = "SELECT login FROM user WHERE  id = '$id'";
      $requete = mysqli_query($connexion,$requete);
      $reponse = mysqli_fetch_array($requete);
      var_dump($reponse);
      }

      public function getEmail(){
      $connexion = mysqli_connect ("localhost", "root", "", "classe");
      $id = $this->id;
      $requete = "SELECT email FROM user WHERE  id = '$id'";
      $requete = mysqli_query($connexion,$requete);
      $reponse = mysqli_fetch_array($requete);
      var_dump($reponse);

      }

      public function getFirstname(){
      $connexion = mysqli_connect ("localhost", "root", "", "classe");
      $id = $this->id;
      $requete = "SELECT firstname FROM user WHERE  id = '$id'";
      $requete = mysqli_query($connexion,$requete);
      $reponse = mysqli_fetch_array($requete);
      var_dump($reponse);
      }

      public function getLastname(){
      $connexion = mysqli_connect ("localhost", "root", "", "classe");
      $id = $this->id;
      $requete = "SELECT firstname FROM user WHERE  id = '$id'";
      $requete = mysqli_query($connexion,$requete);
      $reponse = mysqli_fetch_array($requete);
      var_dump($reponse);
      }

      public function refresh($login,$password,$email,$firstname,$lastname){
      $connexion = mysqli_connect ("localhost", "root", "", "classe");
      $id = $this->id;
      $requete = "SELECT * FROM user WHERE id = '$id'";
      $requete = mysqli_query($connexion,$requete);
      $reponse = mysqli_fetch_array($requete);
      $this->login=$reponse[1];
      $this->password=$reponse[2];
      $this->email=$reponse[3];
      $this->firstname=$reponse[4];
      $this->lastname=$reponse[5];
      return array($this); 
      //var_dump($reponse);

        

      }


          }
 
   ?>



   	
