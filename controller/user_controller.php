<?php 
    require ('./models/user.php');

    class UserController {
        
        public function registerUserfromPOST($postData){
         
            $user = new User();
            //get data from form
            $user->firstName =  htmlspecialchars($postData['first_name'], ENT_QUOTES, "ISO-8859-1");
            $user->lastName = htmlspecialchars($postData['last_name'], ENT_QUOTES, "ISO-8859-1");   
            $user->birthday = strtotime($postData['birthday']);
            $user->email = filter_var($postData['email'], FILTER_SANITIZE_EMAIL);     
            $user->password =md5(htmlspecialchars($postData['password'], ENT_QUOTES, "ISO-8859-1"));
            $user->saveUserToDB();

            //require ('views/user_view.php');

            
        }
        

       



        
    }
?>     