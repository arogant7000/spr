<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
   protected $table = 'meetings';

   protected $primaryKey = 'id_meeting';

   protected $fillable = ['perihal','tempat'];

   protected $guarded = [];
}
