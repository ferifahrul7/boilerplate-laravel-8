<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $table      = 'sliders';
    protected $primaryKey = 'id';
    protected $fillable   = ['title','description','image','is_active',
                             'started_at','ended_at','deleted_at','deleted_by',
                             'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function deleted_by()
    {
        return $this->belongsTo(User::class,'deleted_by');
    }
    

}
