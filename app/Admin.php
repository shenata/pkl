<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';
    protected $primarykey = 'email';
    protected $fillable = [
    'email','nama','password','kantor'];


}
