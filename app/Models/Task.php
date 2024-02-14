<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable =[

        "id",
        "title",
        "description",
        "created_at",
        "updated_at",
        "user_id",
        "category1",
        "category2",
        "datedue",
        "timedue",

    ];
}
