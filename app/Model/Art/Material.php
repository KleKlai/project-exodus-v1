<?php

namespace App\Model\Art;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Material extends Model
{
    use LogsActivity;

    protected $fillable = ['name', 'description'];

    /**
     * For Activity Log settings
     *
     */
    protected static $logName = 'System';
    protected static $submitEmptyLogs = false;
    protected static $recordEvents = ['created', 'deleted'];

    public function getDescriptionForEvent(string $eventName): string
    {
        return "Art material component {$eventName} successfully";
    }
}
