<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;
use Cviebrock\EloquentTaggable\Taggable;
use Webpatser\Uuid\Uuid;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes, LogsActivity, HasRoles, Taggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id', 'uuid','created_at', 'updated_at', 'deleted_at',
    ];

    /**
     * For Activity Log settings
     *
     */
    protected static $logName = 'System';
    protected static $logUnguarded = true;
    protected static $submitEmptyLogs = false;
    protected static $recordEvents = ['created', 'updated', 'deleted'];

    public function getDescriptionForEvent(string $eventName): string
    {
        return "User {$eventName} successfully";
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'museum'            => 'array'
    ];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = (string) Uuid::generate(4);
        });
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'uuid';
    }

    public function art()
    {
        return $this->hasMany('App\Artwork');
    }

    public function watch()
    {
        return $this->hasMany('App\Model\Art\Watch');
    }

    public function reserve()
    {
        return $this->hasMany('App\Model\Art\Reserve');
    }

    public function sold()
    {
        return $this->hasMany('App\Model\Art\Sold');
    }

    //Accessors
    public function getNameAttribute($value)
    {
        return ucwords($value);
    }

    public function getGalleryAttribute($value)
    {
        return ucwords($value);
    }

}
