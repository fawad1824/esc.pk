<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectsBiddig extends Model
{
    use HasFactory;
    protected $table = "projectbidding";
    protected $fillable = [
        'price',
        'desc',
        'project_id',
        'user_id'
    ];
    public function project()
    {
        return $this->hasOne(Projects::class,'id','project_id');
    }
    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
}
