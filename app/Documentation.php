<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Documentation
 * @package App
 */
class Documentation extends Model
{
    /**
     * Mass-assign fields
     *
     * @var array
     */
    protected $fillable = ['name', 'category', 'description'];

    /**
     * Hidden fields
     *
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at'];
}
