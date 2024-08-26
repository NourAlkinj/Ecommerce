<?php


namespace App\Traits\ActivityLog;

use App\Models\Activity;
use App\Models\Trash;
use Illuminate\Support\Facades\Auth;

trait  ActivityLog
{
    public function makeActivity($activity)
    {

        if ($activity['operation'] == 'delete') {
            Activity::create([
                'table' => $activity['table'],
                'user_id' => Auth::id(),
                'table_id' => $activity['parameters']['id'],
            ]);
            Activity::create([
                'table' => $activity['table'],
                'operation' => $activity['operation'],
                'user_id' => Auth::id(),
                'table_id' => $activity['parameters']['id'],
            ]);
        } else
            Activity::create([
                'table' => $activity['table'],
                'operation' => $activity['operation'],
                'user_id' => Auth::id(),
                'table_id' => $activity['parameters']['id'],
            ]);

    }


}
