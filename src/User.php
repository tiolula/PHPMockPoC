<?php

namespace Obonobo\Phpmock;

class User
{
    public $db = null;
    function __construct($db) 
    {
        $this->db = $db;
    }
    public function greeting($id)
    {
        $friend = $this->db->getPersonByID($id);
        $friendName = $friend->name;
        return "Hello $friendName";
    }
}