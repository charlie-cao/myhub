<?php

namespace App\Admin\Controllers;

use App\User;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class UserController extends Controller
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

            $content->header('用户');
            $content->description('可爱的用户们');

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

            $content->header('用户');
            $content->description('可爱的用户们');


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

            $content->header('用户');
            $content->description('可爱的用户们');


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
        return Admin::grid(User::class, function (Grid $grid) {

            $grid->id('ID')->sortable();

            $grid->column('name', '用户名');
            $grid->column('email', '邮箱')->display(function ($email) {
                return "<a href='mailto:$email'>$email</a>";
            });

            $grid->column('password', '密码');




            $grid->paginate(15);

//            $grid->disableCreation();

            $grid->created_at('注册时间');
            $grid->updated_at('最后登录');
            $grid->model()->orderBy('id', 'desc');
            // filter($callback)方法用来设置表格的简单搜索框
            $grid->filter(function ($filter) {

                // 设置created_at字段的范围查询
                $filter->between('created_at', 'Created Time')->datetime();
            });

        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(User::class, function (Form $form) {

            $form->display('id', 'ID');


            $form->text('name', '姓名');
            $form->text('email', '邮箱');
            $form->password('password', '密码');

            // 复杂的验证规则可以在回调里面实现
            $form->password('password2',"确认密码")->rules(function ($form) {

                // 如果不是编辑状态，则添加字段唯一验证
                if ($form->model()->password2!==$form->model()->password) {
                    return '两次密码不一致';
                }

            });

            $form->ignore(['password2']);
            $form->display('created_at', '注册时间');
            $form->display('updated_at', '最后登录');
        });
    }
}
