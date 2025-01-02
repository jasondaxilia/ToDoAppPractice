<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'description',
        'completed_at'
    ];
    public $table = 'tasks';

    public function checkIfCompleted()
    {
        return $this->completed_at !== null;
    }

    public function checkIfDeleted()
    {
        return $this->deleted_at !== null;
    }

}
