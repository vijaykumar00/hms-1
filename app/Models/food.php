<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class food extends Model
{
    use HasFactory;
    protected $table="food";
    public $timestamps = false;

    public function GetById($id)
    {
    	$query="SELECT * FROM Food WHERE id=". $id;
    	// $data=DB::select(DB::raw($query));
    	// return $data;
    }
    // public function getFood(){

    // }
}
