<?php


namespace App\Admin\Controllers;


use App\Community;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;


class IndexCommunityController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'コミュニティ詳細一覧';


    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Community);


        $grid->column('id', __('Id'));
        $grid->column('permalink', __('Permalink'));
        $grid->column('eyecatch_path', __('Eyecatch path'));
        $grid->column('name', __('Name'));
        $grid->column('pref', __('Pref'));
        $grid->column('information', __('Information'));
        $grid->column('image1_path', __('Image1 path'));
        $grid->column('image2_path', __('Image2 path'));
        $grid->column('image3_path', __('Image3 path'));
        $grid->column('video1_link', __('Video1 link'));
        $grid->column('video2_link', __('Video2 link'));
        $grid->column('video3_link', __('Video3 link'));
        $grid->column('message_image_path', __('Message image path'));
        $grid->column('message', __('Message'));
        $grid->column('contact', __('Contact'));
        $grid->column('facebook_link', __('Facebook link'));
        $grid->column('instagram_link', __('Instagram link'));
        $grid->column('website_link', __('Website link'));
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
        $show = new Show(Community::findOrFail($id));


        $show->field('id', __('Id'));
        $show->field('permalink', __('Permalink'));
        $show->field('eyecatch_path', __('Eyecatch path'));
        $show->field('name', __('Name'));
        $show->field('pref', __('Pref'));
        $show->field('information', __('Information'));
        $show->field('image1_path', __('Image1 path'));
        $show->field('image2_path', __('Image2 path'));
        $show->field('image3_path', __('Image3 path'));
        $show->field('video1_link', __('Video1 link'));
        $show->field('video2_link', __('Video2 link'));
        $show->field('video3_link', __('Video3 link'));
        $show->field('message_image_path', __('Message image path'));
        $show->field('message', __('Message'));
        $show->field('contact', __('Contact'));
        $show->field('facebook_link', __('Facebook link'));
        $show->field('instagram_link', __('Instagram link'));
        $show->field('website_link', __('Website link'));
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
        $form = new Form(new Community);

        $form->text('permalink', __('Permalink'));
        $form->text('eyecatch_path', __('Eyecatch path'));
        $form->text('name', __('Name'));
        $form->text('pref', __('Pref'));
        $form->text('information', __('Information'));
        $form->text('image1_path', __('Image1 path'));
        $form->text('image2_path', __('Image2 path'));
        $form->text('image3_path', __('Image3 path'));
        $form->text('video1_link', __('Video1 link'));
        $form->text('video2_link', __('Video2 link'));
        $form->text('video3_link', __('Video3 link'));
        $form->text('message_image_path', __('Message image path'));
        $form->text('message', __('Message'));
        $form->text('contact', __('Contact'));
        $form->text('facebook_link', __('Facebook link'));
        $form->text('instagram_link', __('Instagram link'));
        $form->text('website_link', __('Website link'));


        return $form;
    }
}
