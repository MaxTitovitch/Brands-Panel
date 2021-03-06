<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class AffiliateProgramAction extends AbstractAction
{
    public function getTitle()
    {
        return 'Affiliate';
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
            'style' => 'margin-right: 5px; margin-top 2px; ',
            'class' => 'btn btn-sm btn-success pull-right view',
        ];
    }

    public function getDefaultRoute()
    {
        return route('voyager.affiliate-programs.index', ['key' => 'brand_id', 'filter' => 'equals', 's' => $this->data->id]);
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'brands';
    }
}