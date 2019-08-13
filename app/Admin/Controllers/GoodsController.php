<?php

namespace App\Admin\Controllers;

use App\Model\GoodsModel;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class GoodsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Model\GoodsModel';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new GoodsModel);

        $grid->column('goods_id', __('Goods id'));
        $grid->column('goods_sn', __('Goods sn'));
        $grid->column('goods_name', __('Goods name'));
        $grid->column('goods_up', __('Goods up'));
        $grid->column('goods_new', __('Goods new'));
        $grid->column('goods_best', __('Goods best'));
        $grid->column('goods_hot', __('Goods hot'));
        $grid->column('goods_num', __('Goods num'));
        $grid->column('goods_img', __('Goods img'));
        $grid->column('goods_desc', __('Goods desc'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('created_at', __('Created at'));

        $grid->actions(function ($actions) {
            $actions->add(new Replicate);
        });
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
        $show = new Show(GoodsModel::findOrFail($id));

        $show->field('goods_id', __('Goods id'));
        $show->field('goods_sn', __('Goods sn'));
        $show->field('goods_name', __('Goods name'));
        $show->field('goods_up', __('Goods up'));
        $show->field('goods_new', __('Goods new'));
        $show->field('goods_best', __('Goods best'));
        $show->field('goods_hot', __('Goods hot'));
        $show->field('goods_num', __('Goods num'));
        $show->field('goods_img', __('Goods img'))->image();
        $show->field('goods_desc', __('Goods desc'));
        $show->field('updated_at', __('Updated at'));
        $show->field('created_at', __('Created at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new GoodsModel);

        $form->number('goods_id', __('Goods id'));
        $form->text('goods_sn', __('Goods sn'));
        $form->text('goods_name', __('Goods name'));
        $form->switch('goods_up', __('Goods up'));
        $form->switch('goods_new', __('Goods new'))->default(2);
        $form->switch('goods_best', __('Goods best'))->default(2);
        $form->switch('goods_hot', __('Goods hot'))->default(2);
        $form->number('goods_num', __('Goods num'));
        $form->file('goods_img', __('Goods img'));
        $form->textarea('goods_desc', __('Goods desc'));

        return $form;
    }
}
