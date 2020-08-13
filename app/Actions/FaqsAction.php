<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class FaqsAction extends AbstractAction
{
    public function getTitle()
    {
        return 'FAQ';
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
            'class' => 'btn btn-sm btn-dark pull-right view',
        ];
    }

    public function getDefaultRoute()
    {
        return route('voyager.faqs.index', ['key' => 'brand_id', 'filter' => 'equals', 's' => $this->data->id]);
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'brands';
    }
}