<?php

namespace src\Models;



class EventsModel extends BaseModel
{
    protected $name = "EventsModel";
    public $tableName = 'events';

    public $table = "events";


    public function __construct()
    {

        parent::__construct();
    }

    public function getAllEvents()
    {
        return $this->getAll()->get();
    }

    

    public function getAllWithPaginate(int $limit = 10, int $offset = 0)
    {
        // return $this->select()->where('email', '=', $email)->first();
    }

    public function registerUser($data){
        // $tableName = $this->tableName;
        $user = $this->insert($this->table,$data);
    }

    public function create($data)
    {
        var_dump($this->tableName);
    }
}