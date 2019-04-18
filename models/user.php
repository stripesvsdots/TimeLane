<?php
require_once ('./models/model.php');


class User extends Model {
	public $id = '';
	public $firstName = '';
	public $lastName = '';
	public $birthday = '';
	public $email = '';
	public $password = '';
    

    //get the memory card id
    public function associateWithDB($id) {
        $this->id = $id;
        if ($id != null) {
            $this->loadFromDB();
        }
	}

	public function saveUserToDB() {
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