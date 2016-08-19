<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Departments
 * @package App
 */
class Departments extends Model
{
    /**
     * Mass-assign fields.
     *
     * @var array
     */
    protected $fillable = ['name', 'description'];

    /**
     * Hidden fields
     *
     * @var array
     */
    protected $hidden = ['name', 'description'];

    /**
     * Department managers relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function managers()
    {
        return $this->belongsToMany('App\User');
    }

    /**
     * Departments members relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function members()
    {
        return $this->belongsToMany('App\User', 'departments_members', 'id', 'user_id');
    }
}
