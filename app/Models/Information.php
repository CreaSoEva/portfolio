<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
	protected $table = 'informations';
    protected $fillable = [
        'user_id','name', 'email', 'postcode', 'city' , 'phone'
    ];
}

?>