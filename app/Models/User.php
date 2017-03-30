<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use LaravelRocket\Foundation\Models\AuthenticatableBase;

class User extends AuthenticatableBase
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'profile_image_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $dates  = [];

    protected $presenter = \App\Presenters\UserPresenter::class;

    // Relations
    public function profileImage()
    {
        return $this->belongsTo('App\Models\File', 'profile_image_id', 'id');
    }

    // Utility Functions

}
