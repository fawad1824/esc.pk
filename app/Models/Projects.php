<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    protected $table = "projectsdetails";
    protected $fillable =
    [
        'name',
        'types',
        'location',
        'typeof',
        'budget',
        'area',
        'desc',
        'stories',
        'phone',
        'email',
        'status',
        'is_commerical',
        'is_residential',
        'is_maintaning',
        'is_retrofitting',
        'is_plumbing',
        'userName',
        'userID'
    ];
}
