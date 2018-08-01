<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'status', 'user_id', 'assign'
    ];

    protected $primaryKey = 'id';



    /**
     * Get the user that owns the task.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }


    public function assignTo()
    {
        return $this->belongsTo('App\User','assign','id');
    }

}
