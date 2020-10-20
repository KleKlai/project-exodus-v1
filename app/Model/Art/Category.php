<?php

namespace App\Model\Art;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Category extends Model
{
    use LogsActivity;

    protected $fillable = ['name', 'description'];

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
        return "Art category component {$eventName} successfully";
    }
}
