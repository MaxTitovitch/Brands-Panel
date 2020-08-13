<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class ScorecardsAction extends AbstractAction
{
    public function getTitle()
    {
        return 'Scorecards';
    }

    public function getIcon()
    {
        return 'voyager-eye';
    }

    public function getPolicy()
    {
        return 'read';
    }

    public function getAttributes()
    {
        return [
            'style' => 'margin-left: 2px; margin-top 2px;',
            'class' => 'btn btn-sm btn-dark pull-right view mx-1',
        ];
    }

    public function getDefaultRoute()
    {
        return route('voyager.scorecards.index', ['key' => 'brand_id', 'filter' => 'equals', 's' => $this->data->id]);
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'brands';
    }
}