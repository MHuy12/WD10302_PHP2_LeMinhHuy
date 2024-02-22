<?php

namespace src\Models;



class ParticipantModel extends BaseModel
{
    protected $name = "UserModel";
    public $tableName = 'participant';

    public $table = "participant";


    public function __construct()
    {

        parent::__construct();
    }

    public function getAllParticipant()
    {
        return $this->getAll()->get();
    }

   
    public function getAllWithPaginate(int $limit = 10, int $offset = 0)
    {
        // return $this->select()->where('email', '=', $email)->first();
    }

   
    public function create($data)
    {
        var_dump($this->tableName);
    }
}