<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blueprint extends Model
{
    protected $table="blueprint";
    protected $fillable = [
        'name_blueprint',
        'document',
        'projects_id',
        'version',
        'sheet'
    ];
}
