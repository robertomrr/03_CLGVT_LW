<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomLog extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'CUSTOM_LOGS';
    protected $primarykey = 'id';
    public $fillable = ['content','operation','user_id','todo_id'];
}
