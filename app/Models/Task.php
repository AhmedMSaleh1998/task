<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'assigned_to_id',
        'assigned_by_id',
    ];
    public function assignedBy()
    {
        return $this->belongsTo('App\Models\Admin', 'assigned_by_id');
    }

    public function assignedTo()
    {
        return $this->belongsTo('App\Models\User', 'assigned_to_id');
    }
}
