<?php
require_once ('./models/model.php');


class User extends Model {
	public $id = '';
	public $firstName = '';
	public $lastName = '';
	public $birthday = '';
	public $email = '';
    public $password = '';
    public $sessionId = 0;
    
    public function associateWithDB($id) {
        $this->id = $id;
        if ($id != null) {
            $this->loadFromDB();
            return true;
        }
        return false;
    }
    public function validateSession($id, $sessionId) {
        $this->id = $id;
        if ($id != null) {
            $this->loadFromDB();
            return $this->sessionId == $sessionId;
        }
        return false;
    }

    private function loadFromColumns($columns) {
        $this->id = $columns['Id'];
        $this->firstName = $columns['Name'];
        $this->lastName = $columns['Lastname'];
        $this->birthday = $columns['Birthday'];
        $this->email = $columns['Email'];    
    }

    public function login($email, $password) {
        $this->connectDB();
        $result = $this->conn->query("SELECT * FROM Users WHERE Email = '$email' AND Password = '$password'") or die ($this->conn->error());
        var_dump ($password);
        if ($result->num_rows === 0) {
            print_r($result);
            return false;
        }
        $data = $result->fetch_assoc();
        $this->loadFromColumns($data);
        return true;
	}

    public function loadFromDB() {
        $columns = $this->loadFromTable('Users',  $this->id,  null);
        $this->loadFromColumns($columns);
    }

	public function saveToDB() {
        $columns = [
            'Name' => $this->firstName,
            'Lastname' => $this->lastName,
            'Birthday' => date("Y-m-d H:i:s", $this->birthday),
            'Email' => $this->email,
            'Password' => $this->password
        ];
        if ($this->id == null) {
            $this->id = $this->insertIntoTable('Users', $columns);
            return ;
        } 
        
        $this->updateToTable('Users', $this->id, $columns);        
    }

    public function deleteUserFromDB() {
        deleteFromTable('User', $this->id);
    }

}

?>