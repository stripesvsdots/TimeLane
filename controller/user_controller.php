<?php 
    require_once('./models/user.php');
	session_start();

    class UserController {
        
        public function registerUserfromPOST($postData){
         
            $user = new User();
            //get data from form
            $user->firstName =  htmlspecialchars($postData['first_name'], ENT_QUOTES, "ISO-8859-1");
            $user->lastName = htmlspecialchars($postData['last_name'], ENT_QUOTES, "ISO-8859-1");   
            $user->birthday = strtotime($postData['birthday']);
            $user->email = filter_var($postData['email'], FILTER_SANITIZE_EMAIL);     
            $user->password =md5(htmlspecialchars($postData['password'], ENT_QUOTES, "ISO-8859-1"));
            $user->saveToDB();
            $_SESSION['userId'] = $user->id;
            //add sessionId here

            //require ('views/user_view.php');

            
        }

        public function validateUserLogin($postData) {
            //get data from form
            $user = new User();
            $email = filter_var($postData['email'], FILTER_SANITIZE_EMAIL);     
            $password = md5(htmlspecialchars($postData['password'], ENT_QUOTES, "ISO-8859-1"));
        
            if ( $user->login( $email, $password))  {  
                echo ("succes!");
                $_SESSION['userId'] = $user->id;
                return true;
            }
            return false;
        }
        
        public function validateUserSession() {
            $userId = $_SESSION['userId'];
            $sessionId = 0;//$_SESSION['userId']; //ADD ME
            $user = new User();
            if ($user->validateSession($userId, $sessionId ) == true) {
                return $user;
            }
            return null;
        }
    }
?>     