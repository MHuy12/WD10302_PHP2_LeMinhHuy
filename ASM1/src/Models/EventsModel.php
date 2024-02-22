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

    public function addEvent($data)
    {
        // $tableName = $this->tableName;
        $events = $this->insert($this->table, $data);
    }
    public function getOneEvent($id)
    {
        return $this->getOne($id);
    }
    public function create($data)
    {
        var_dump($this->tableName);
    }
    public function updateEvent($id, $data)
    {
        return $this->update($id, $data);
    }
    public function DeleteEvent($id)
    {
        return $this->remove($id);
    }
}