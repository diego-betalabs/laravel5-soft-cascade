<?php

namespace Askedio\SoftCascade\Listeners;

use Askedio\SoftCascade\SoftCascade;

class CascadeDeleteListener
{
    /**
     * Handel the event for eloquent delete.
     *
     * @param $event
     * @param  $models
     * @return void
     */
    public function handle($event, $models)
    {
        (new SoftCascade())->cascade($models, 'delete');
    }
}
