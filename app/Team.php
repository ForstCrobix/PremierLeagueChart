<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    // The table name
    protected $table = "teams";

    // Sets the primary key column ID to id - this is the default but has been left as a reminder that we can change it
    //protected $primaryKey = "id";

    //public $id;
    //public $name;
}
