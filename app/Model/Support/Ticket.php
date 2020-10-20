<?php

namespace App\Model\Support;

use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;
use Auth;

class Ticket extends Model
{
    use LogsActivity;

    protected $guarded = [
        'id', 'uuid', 'created_at', 'updated_at'
    ];

    /**
     * For Activity Log settings
     *
     */
    protected static $logName = 'Support Ticket';
    protected static $logUnguarded = true;
    protected static $submitEmptyLogs = false;
    protected static $recordEvents = ['created', 'updated', 'deleted'];

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

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
