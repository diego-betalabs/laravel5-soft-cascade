<?php

namespace Askedio\SoftCascade\Listeners;

use Askedio\SoftCascade\SoftCascade;

class CascadeRestoreListener
{
    /**
     * Handel the event for eloquent restore.
     *
     * @param $event
     * @param  $models
     * @return void
     */
    public function handle($event, $models)
    {
        (new SoftCascade())->cascade($models, 'restore');
    }
}
