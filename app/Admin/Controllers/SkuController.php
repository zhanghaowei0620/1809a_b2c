<?php

namespace App\Admin\Controllers;

use App\Model\SkuModel;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SkuController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Model\SkuModel';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new SkuModel);

        $grid->column('sku_id', __('Sku id'));
        $grid->column('goods_sn', __('Goods sn'));
        $grid->column('create_time', __('Create time'));
        $grid->column('color', __('Color'));
        $grid->column('ram', __('Ram'));
        $grid->column('price', __('Price'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(SkuModel::findOrFail($id));

        $show->field('sku_id', __('Sku id'));
        $show->field('goods_sn', __('Goods sn'));
        $show->field('create_time', __('Create time'));
        $show->field('color', __('Color'));
        $show->field('ram', __('Ram'));
        $show->field('price', __('Price'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new SkuModel);

        $form->number('sku_id', __('Sku id'));
        $form->text('goods_sn', __('Goods sn'));
        $form->datetime('create_time', __('Create time'))->default(date('Y-m-d H:i:s'));
        //$form->datetime('update_time', __('Update time'))->default(date('Y-m-d H:i:s'));
        $form->color('color', __('Color'));
        $form->text('ram', __('Ram'));
        $form->text('price', __('Price'));

        return $form;
    }
}
