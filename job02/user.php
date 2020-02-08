
<?php

class User 
{

    private $id = '';
    public $login = '';
    public $email = '';
    public $firstname = '';
    public $lastname = '';
   
    public function register($login,$password,$email,$firstname,$lastname) 
    {
      $connexion = new PDO('mysql:host=localhost;dbname=classe', 'root', '');
      $reponse = $connexion->query("INSERT INTO user (login,password,email,firstname,lastname) VALUES ('$login','$password','$email','$firstname','$lastname')");
      return array($login,$password,$email,$firstname,$lastname); 
          
    }

    public function connect($login, $password)
      {
        $connexion = new PDO('mysql:host=localhost;dbname=classe', 'root', '');
        $reponse= $connexion->query("SELECT * FROM user WHERE login='".$login."'");
        $user = $reponse->fetch();
        if ($login==$user['login'] && $password==$user['password']) 
      {
        echo "Vous etes bien connecté ";
          $this->id = $user['id'];
          $this->login = $login;
          $this->password = $password;
          $this->email = $user['email'];
          $this->firstname = $user['firstname'];
          $this->lastname = $user['lastname'];
          return($this);   
      }
        
    else
    {
      echo "Mauvais login /mot de passe .Merci de recommencer";
    }
    $reponse->closeCursor();
 
    }  
   
    public function disconnect()
        {
           session_unset();
        }

    public function delete($login,$password,$email,$firstname,$lastname)
    {
      $connexion = new PDO('mysql:host=localhost;dbname=classe', 'root', '');
      $reponse = $connexion->query("DELETE  FROM user WHERE login='".$login."'");
      return array($login,$password,$email,$firstname,$lastname); 

    }

    public function update($login,$password,$email,$firstname,$lastname)
    {
      $connexion = new PDO('mysql:host=localhost;dbname=classe', 'root', '');
      $id = $this->id;
      $reponse = $connexion->query("UPDATE user SET login = '$login', password = '$password', email = '$email', firstname = '$firstname', lastname = '$lastname' WHERE id = '$id'"); 
      return array($login,$password,$email,$firstname,$lastname);    
    }

    public function isConnected()
    {
        $connexion = new PDO('mysql:host=localhost;dbname=classe', 'root', '');
           
        if ($login=true)
        {
            echo "Bonjour";
        } 

        
    }

      public function getAllInfos()
      {
       var_dump($this);
    
      }


      public function getLogin()
      {
        $connexion = new PDO('mysql:host=localhost;dbname=classe', 'root', '');
        $id = $this->id;
        $reponse = $connexion->query("SELECT login FROM user WHERE  id = '$id'");
        $user = $reponse->fetch();
        var_dump($user);
      }

      public function getEmail()
      {
        $connexion = new PDO('mysql:host=localhost;dbname=classe', 'root', '');
        $id = $this->id;
        $reponse = $connexion->query("SELECT email FROM user WHERE  id = '$id'");
        $user = $reponse->fetch();
        var_dump($user);
      }

      public function getFirstname()
      {
        $connexion = new PDO('mysql:host=localhost;dbname=classe', 'root', '');
        $id = $this->id;
        $reponse = $connexion->query("SELECT firstname FROM user WHERE  id = '$id'");
        $user = $reponse->fetch();
        var_dump($user);
     
      }

        public function getLastname(){
        $connexion = new PDO('mysql:host=localhost;dbname=classe', 'root', '');
        $id = $this->id;
        $reponse = $connexion->query("SELECT lastname FROM user WHERE  id = '$id'");
        $user = $reponse->fetch();
        
     
      }

      public function refresh($login,$password,$email,$firstname,$lastname)
      {
        $connexion = new PDO('mysql:host=localhost;dbname=classe', 'root', '');
        $id = $this->id;
        $reponse = $connexion->query("SELECT * FROM user WHERE  id = '$id'");
        var_dump($reponse);
        $user = $reponse->fetch();
        $this->login=$reponse;
        $this->password=$reponse;
        $this->email=$reponse;
        $this->firstname=$reponse;
        $this->lastname=$reponse;
        return ($this); 
 
      //var_dump($this);
      }
      
     


}
 
?>



   	
