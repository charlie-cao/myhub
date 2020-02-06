<?php

namespace App\Admin\Controllers;

use App\Models\Music;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class MusicController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('音乐');
            $content->description('好听的音乐');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('音乐');
            $content->description('好听的音乐');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('音乐');
            $content->description('好听的音乐');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Music::class, function (Grid $grid) {

            $grid->id('ID')->sortable();

            $grid->name("名称");
            $grid->memo("简介");
            $grid->author("演奏者");

            $grid->created_at("创建");
            $grid->updated_at("更新");
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Music::class, function (Form $form) {

            $form->display('id', 'ID');

            $form->text('name',"名称")->rules('required|min:3',[
                'required' => '音乐名称不能为空',
                'min'   => '音乐名称不能少于3个字符',
            ]);;
            $form->textarea('memo',"简介")->rules('required|min:3',[
                'required' => '简介不能为空',
                'min'   => '简介不能少于3个字符',
            ]);;
            $form->text('author',"演奏者")->rules('required|min:3',[
                'required' => '演奏者不能为空',
                'min'   => '演奏者不能少于3个字符',
            ]);;

            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
