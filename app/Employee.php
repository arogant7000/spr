<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Employee extends Model
{

    use Notifiable;

    
    protected $table = 'employees';

    protected $primaryKey = 'id_karyawan';

    protected $fillable = ['nama_karyawan', 'email', 'alamat'];

    protected $guarded = [];    
}
