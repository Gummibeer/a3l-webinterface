<?php namespace A3LWebInterface\Handlers\Events;

use A3LWebInterface\Events\LoggableActionDone;

use A3LWebInterface\Player;
use A3LWebInterface\Weblog;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;
use Illuminate\Support\Facades\Auth;

class WebLogAction
{

    /**
     * Create the event handler.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param  LoggableActionDone $event
     * @return void
     */
    public function handle($event)
    {
        $table = $event->model->getTable();
        $weblog = new Weblog();
        if ($table == 'users' && $event->action == 'CREATE') {
            $weblog->editor_id = 0;
            $weblog->editor_name = 'Server';
        } else {
            $weblog->editor_id = Auth::User()->id;
            $weblog->editor_name = Auth::User()->name;
        }
        switch ($table):
            case 'players':
                $weblog->object_id = $event->model->uid;
                $weblog->object_name = $event->model->name;
                break;
            case 'vehicles':
                $owner = Player::where('playerid', $event->model->pid)->first();
                $weblog->object_id = $event->model->id;
                $weblog->object_name = $event->model->classname;
                $weblog->player_id = $owner->uid;
                $weblog->player_name = $owner->name;
                break;
            default:
                $weblog->object_id = $event->model->id;
                $weblog->object_name = $event->model->name;
                break;
        endswitch;
        $weblog->table = $table;
        $weblog->type = $event->action;
        $weblog->comment = $event->comment;
        $weblog->save();
    }

}
