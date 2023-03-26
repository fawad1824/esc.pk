<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectsDesign extends Model
{
    use HasFactory;
    protected $table = "projectdesign";
    protected $fillable = [
        'name',
        'document',
        'project_id',
    ];
}
