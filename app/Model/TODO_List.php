<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TODO_List extends Model
{
    protected $table = 'todo_list';

    protected $fillable = [
        'task',
    ];

    protected $hidden = [
    ];
}
