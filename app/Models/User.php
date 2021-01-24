<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//if the table name is users, Model name must be Users, to get automatic connectivity

class User extends Model{
    use HasFactory;
    public $timestamps = false;
    //public $table = 'employee';                   //but we can change also to use like, table name employee and model name also employee
    public function getCityAttribute($value)        //Accessor Function, to show data with some att. in html
    {
        return $value . ', India';              // Here adding India with city name
    }

    public function getUserNameAttribute($value)  //Name should be like get[table_name]Attribute
    {
        return ucfirst($value);
    }

    public function setNameAttribute($value)        //Mutator function to edit/change the data before saving it to Db
    {
        $this->attributes['user_name'] = 'Hacker' . $value; 
    }

    /*
    public function setCityAttribute($value)   //Mutator to add India in city, before saving to DB
    {
        $this->atttributes['city'] = $value . ',India'; 
    }
    */
}



