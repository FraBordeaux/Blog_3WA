<?php
require_once dirname(__DIR__, 2) . "/lib/Controller/AbstractController.php";
require_once dirname(__DIR__, 2) . "/lib/Repository/AbstractRepository.php";
require_once dirname(__DIR__, 2) . "/src/model/User.php";
//require_once dirname(__DIR__, 2) . "/template/base.phtml";

class UserRepository extends AbstractRepository
{
    //check if username exists
    public function userExists(string $username)
    {
        $question = "SELECT * FROM user WHERE username = :username ; ";
        $params = [":username"=>$username];
        $class = "User";
        return ($this->executeQuery($question, $class, $params));
    }
    
    //check if username exists
    public function verifyPassword(string $username, string $password) :bool
    {
        $question = "SELECT * FROM user WHERE username = :username; ";
        $params = 
        [
            ":username"=>$username
        ];
        
        $class = "User";
        $return = $this->executeQuery($question, $class, $params);
        $hash = $return->getPassword();
        
        if(password_verify($password, $hash))
        {
            $_SESSION["login"] = true;
            $_SESSION['username'] = $return->getFirstname();
            return true;
        } else 
        {
            return false;
        }
    }


    // add user object/model to database "user"
    public function add(User $user)
    {
        $query = "INSERT INTO user(lastname, firstname, username, password) 
                  VALUES(:lastname, :firstname, :username, :password);" ;
        
        $class = "User" ;
        
        // use variables for protection and security
        $params = 
        [
            ":lastname" => $user->getLastname(),
            ":firstname" => $user->getFirstname(),
            ":username" => $user->getUsername(),
            ":password" => $user->getPassword()
        ];
        
        echo "user added successfully";
        
        return ($this->executeQuery($query, $class, $params));
    }
    
    
    // retrieve user information from database "user"
     public function retrieve() : ?array
    {
        $query = "SELECT * FROM user; ";
        $class = "User";
        return ($this->executeQuery($query, $class));
    }
    
 
}

