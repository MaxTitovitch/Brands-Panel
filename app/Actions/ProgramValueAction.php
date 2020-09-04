<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class ProgramValueAction extends AbstractAction
{
    public function getTitle()
    {
        return 'Values';
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
            'class' => 'btn btn-sm btn-dark pull-right view',
        ];
    }

    public function getDefaultRoute()
    {
        return route('voyager.program-values.index', ['key' => 'affiliate_program_id', 'filter' => 'equals', 's' => $this->data->id]);
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'affiliate-programs';
    }
}