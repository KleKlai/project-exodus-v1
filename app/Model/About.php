<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class About extends Model
{
    use LogsActivity;

    protected $fillable = [
        'about'
    ];

    /**
     * For Activity Log settings
     *
     */
    protected static $logName = 'System';
    protected static $submitEmptyLogs = false;
    protected static $recordEvents = ['updated'];

    public function getDescriptionForEvent(string $eventName): string
    {
        return "About {$eventName} successfully";
    }
}
