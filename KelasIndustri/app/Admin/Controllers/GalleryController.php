<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Gallery;

class GalleryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Gallery';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Gallery());

        $grid->column('id', __('Id'));
        $grid->column('department', __('Department'));
        $grid->column('image')->image()->width(150);
        $grid->column('description', __('Description'))->limit(15);
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Gallery::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('department', __('Department'));
        $show->field('image')->image();
        $show->field('description', __('Description'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Gallery());

        $form->select('department', __('Department'))->options([
            'DKV' => 'DKV',
            'TITL' => 'TITL',
            'TJKT' => 'TJKT',
            'RPL' => 'RPL',
        ]);
        $form->multipleImage('image', 'Image')->removable();
        $form->text('description', __('Description'));

        return $form;
    }
}
