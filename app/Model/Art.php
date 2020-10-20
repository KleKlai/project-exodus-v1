<?php

namespace App\Model;

use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;
use Auth;


class Art extends Model
{
    use SoftDeletes, LogsActivity;

    protected $guarded = [
        'uuid', 'id', 'created_at', 'updated_at'
    ];

    /**
     * For Activity Log settings
     *
     */
    protected static $logName = 'Art';
    protected static $logUnguarded = true;
    protected static $submitEmptyLogs = false;
    protected static $recordEvents = ['created', 'updated', 'deleted'];

    public function getDescriptionForEvent(string $eventName): string
    {
        return Auth::user()->name . " {$eventName} art successfully";
    }


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

    protected $casts = [
        'tag' => 'array'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function watch()
    {
        return $this->hasMany('App\Model\Art\Watch');
    }

    public function reserve()
    {
        return $this->hasOne('App\Model\Art\Reserve');
    }
}
