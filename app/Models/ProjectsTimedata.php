<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectsTimedata extends Model
{
    use HasFactory;

    protected $table = "projectstimedata";
    protected $fillable = [
        'from',
        'to',
        'project_id'
    ];
}
