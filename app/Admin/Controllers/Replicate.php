<?php

namespace App\Admin\Controllers;

use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;

class Replicate extends RowAction
{
    public $name = 'sku管理';

    public function handle(Model $model)
    {
        // $model ...
        $model->replicate()->save();

        return $this->response()->success('Success message.')->refresh();
    }

}