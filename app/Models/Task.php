<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'description',
        'completed_at'
    ];
    public $table = 'tasks';

    public function checkIfCompleted()
    {
        return $this->completed_at !== null;
    }
}
