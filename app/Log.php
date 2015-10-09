<?php
namespace App;

use Illuminate\Database\Eloquent\Model as EloquentModel;

class Log extends EloquentModel
{
    protected $table = 'logs';
    protected $fillable = [
        'level',
        'message',
    ];

    public static function artisan($command)
    {
        self::info('run artisan ' . $command);
    }

    public static function error($message)
    {
        self::create([
            'level' => 3,
            'message' => $message,
        ]);
    }

    public static function info($message)
    {
        self::create([
            'level' => 6,
            'message' => $message,
        ]);
    }

    public static function debug($message)
    {
        self::create([
            'level' => 7,
            'message' => $message,
        ]);
    }
}
