<?php

namespace App\Admin\Controllers;

use App\News;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class IndexNewsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'News一覧';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new News);

        $grid->column('id', __('Id'));
        $grid->column('news_permalink', __('News permalink'));
        $grid->column('news_title', __('News title'));
        $grid->column('news_eyecatch_path', __('News eyecatch path'));
        $grid->column('news_writer', __('News writer'));
        $grid->column('news_body', __('News body'));
        $grid->column('news_website_link', __('News website link'));
        $grid->column('news_image1_path', __('News image1 path'));
        $grid->column('news_image2_path', __('News image2 path'));
        $grid->column('news_image3_path', __('News image3 path'));
        $grid->column('news_video1_link', __('News video1 link'));
        $grid->column('news_video2_link', __('News video2 link'));
        $grid->column('news_video3_link', __('News video3 link'));
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
        $show = new Show(News::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('news_permalink', __('News permalink'));
        $show->field('news_title', __('News title'));
        $show->field('news_eyecatch_path', __('News eyecatch path'));
        $show->field('news_writer', __('News writer'));
        $show->field('news_body', __('News body'));
        $show->field('news_website_link', __('News website link'));
        $show->field('news_image1_path', __('News image1 path'));
        $show->field('news_image2_path', __('News image2 path'));
        $show->field('news_image3_path', __('News image3 path'));
        $show->field('news_video1_link', __('News video1 link'));
        $show->field('news_video2_link', __('News video2 link'));
        $show->field('news_video3_link', __('News video3 link'));
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
        $form = new Form(new News);

        $form->text('news_permalink', __('News permalink'));
        $form->text('news_title', __('News title'));
        $form->text('news_eyecatch_path', __('News eyecatch path'));
        $form->text('news_writer', __('News writer'));
        $form->text('news_body', __('News body'));
        $form->text('news_website_link', __('News website link'));
        $form->text('news_image1_path', __('News image1 path'));
        $form->text('news_image2_path', __('News image2 path'));
        $form->text('news_image3_path', __('News image3 path'));
        $form->text('news_video1_link', __('News video1 link'));
        $form->text('news_video2_link', __('News video2 link'));
        $form->text('news_video3_link', __('News video3 link'));

        return $form;
    }
}
