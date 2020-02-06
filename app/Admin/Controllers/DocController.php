<?php

namespace App\Admin\Controllers;

use App\Models\Doc;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class DocController extends Controller
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

            $content->header('文档');
            $content->description('写下最棒的内容');

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

            $content->header('文档');
            $content->description('写下最棒的内容');


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

            $content->header('文档');
            $content->description('写下最棒的内容');


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
        return Admin::grid(Doc::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->u_id("作者");
            $grid->title("标题")->limit(30);
            $grid->column('image','图片')->image();
            $grid->column('file','文件');
            $grid->content("内容")->limit(30)->editable('textarea');
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
        return Admin::form(Doc::class, function (Form $form) {

            $form->display('id', 'ID');

            $form->text('u_id','创建者');

            $form->text('title','标题');

           $form->image('image',"附件图片");
            // $form->multipleImage('image',"附件图片")->removable();
            $form->file('file',"附件文件");

//            $form->map("42 39 18.85 n", "94 10 00.80 e", "选择一个地点");

            $form->editor('content',"内容");

            $form->display('created_at', '创建');
            $form->display('updated_at', '修改');

            // $form->saving(function (Form $form) {
            //     throw new \Exception('虽然异常但是还是 搞定了。。。');
            // });
        });
    }
}
