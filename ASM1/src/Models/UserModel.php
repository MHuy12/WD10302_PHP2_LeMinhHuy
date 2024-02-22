<?php

namespace src\Models;



class UserModel extends BaseModel
{
    protected $name = "UserModel";
    public $tableName = 'users';

    public $table = "users";


    public function __construct()
    {

        parent::__construct();
    }

    public function getAllUser()
    {
        return $this->getAll()->get();
    }

    public function checkUserExist($email)
    {
        return $this->select()->where('email', '=', $email)->first();
    }

    public function getAllWithPaginate(int $limit = 10, int $offset = 0)
    {
        // return $this->select()->where('email', '=', $email)->first();
    }

    public function registerUser($data)
    {
        // $tableName = $this->tableName;
        $user = $this->insert($this->table, $data);
    }

    public function create($data)
    {
        var_dump($this->tableName);
    }
    public function updateUserPasswordByEmail($email, $newPassword)
    {
        $user = $this->select()->where('email', '=', $email)->first();
        if ($user) {
            $id = $user['id']; // Lấy ID của người dùng từ dữ liệu trả về
            $this->update($id, ['password' => $newPassword]);
        }
    }



    public function isConfirmationCodeValid($email, $code)
    {
        $this->table('confirmation_code');


        $result = $this->select()
            ->where('email', '=', $email)
            ->where('code', '=', $code)
            ->where('expiry_time', '>', 'NOW()')
            ->get();

        return !empty($result);
    }

}