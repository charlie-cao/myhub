<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Music
 * @package App\Models
 * @version November 30, 2017, 3:13 pm UTC
 *
 * @property string name
 * @property string memo
 * @property string author
 */
class Music extends Model
{

    public $table = 'musics';
    //默认主键
    public $primaryKey = "id";
    //默认含有创建和更新字段
    public $timestamps = true;
    //默认主键自增
    public $incrementing = true;
//    存储的时间格式
//    protected $dateFormat = 'U';
//这是创建和更新字段的常量名称
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
//    默认情况下，所有的 Eloquent 模型会使用应用程序中默认的数据库连接设置。如果你想为模型指定不同的连接，可以使用 $connection 属性：
//    protected $connection = 'connection-name';
//    一旦你创建并 关联了一个模型到数据表 上，那么你就可以从数据库中获取数据。可把每个 Eloquent 模型想像成强大的 查询构造器，它让你可以流畅地查询与模型关联的数据表。
/*
use App\Flight;

$flights = App\Flight::all();

foreach ($flights as $flight) {
echo $flight->name;
}
查找
$flights = App\Flight::where('active', 1)
               ->orderBy('name', 'desc')
               ->take(10)
               ->get();
添加
        $flight = new Flight;

        $flight->name = $request->name;

        $flight->save();
更新
$flight = App\Flight::find(1);

$flight->name = 'New Flight Name';

$flight->save();

批量更新
App\Flight::where('active', 1)
          ->where('destination', 'San Diego')
          ->update(['delayed' => 1]);



*/
    /**
     * 可以被批量赋值的属性。
     *
     * @var array
     */
//    protected $fillable = ['name'];
//$flight = App\Flight::create(['name' => 'Flight 10']);
//如果你已经有一个 model 实例，你可以使用一个数组传递给 fill 方法：
    /**
     * 不可被批量赋值的属性。
     *
     * @var array
     */
//    protected $guarded = [];

//updateOrCreate#

//其次，你可能会碰到模型已经存在则更新，否则创建新模型的情形，Laravel 提供了一个 updateOrCreate 方法来一步完成该操作，类似 firstOrCreate 方法， updateOrCreate 方法会持久化模型，所以无需调用 save() :
//要删除模型，必须在模型实例上调用 delete 方法：
//
//$flight = App\Flight::find(1);
//
//$flight->delete();

//通过主键来删除现有的模型#
//
//在上面的例子中，我们在调用 delete 方法之前会先从数据库中取回模型。不过，如果你已知道了模型中的主键，则可以不用取回模型就能直接删除它。若要直接删除，请调用 destroy 方法：
//
//App\Flight::destroy(1);
//
//App\Flight::destroy([1, 2, 3]);
//
//App\Flight::destroy(1, 2, 3);

//通过查询来删除模型#
//
//当然，你也可以运行在一组模型删除查询。在这个例子中，我们会删除被标记为不活跃的所有航班。 像批量更新那样，批量删除不会删除的任何被删除的模型的事件：
//
//$deletedRows = App\Flight::where('active', 0)->delete();
//    use SoftDeletes;
//
//    /**
//     * 需要被转换成日期的属性。
//     *
//     * @var array
//     */
//    protected $dates = ['deleted_at'];
//Schema::table('flights', function ($table) {
//    $table->softDeletes();
//});
//if ($flight->trashed()) {
//    //
//}
//查询被软删除的模型#
//包含被软删除的模型#
//
//如上所述，被软删除的模型将会自动从所有的查询结果中排除。不过，你可以通过在查询中调用 withTrashed 方法来强制查询已被软删除的模型：
//
//$flights = App\Flight::withTrashed()
//->where('account_id', 1)
//->get();
//withTrashed 方法也可以被用在 关联 查询：
//
//$flight->history()->withTrashed()->get();
//只取出软删除数据#
//
//onlyTrashed 会只取出软删除数据：
//
//$flights = App\Flight::onlyTrashed()
//->where('airline_id', 1)
////->get();
//恢复被软删除的模型#
//
//有时候你可能希望「取消删除」一个已被软删除的模型。要恢复一个已被软删除的模型到有效状态，则可在模型实例上使用 restore 方法：
//
//$flight->restore();
//你也可以在查询上使用 restore 方法来快速地恢复多个模型：
//
//App\Flight::withTrashed()
//->where('airline_id', 1)
//->restore();
//与 withTrashed 方法类似，restore 方法也可以被用在 关联 查询上:
//
//$flight->history()->restore();
//永久地删除模型#
//
//有时候你可能需要真正地从数据库移除模型。要永久地从数据库移除一个已被软删除的模型，则可使用 forceDelete 方法：
//
//// 强制删除单个模型实例...
//$flight->forceDelete();
//
//// 强制删除所有相关模型...
//$flight->history()->forceDelete();
//查询作用域#
//
//全局作用域#
//全局作用域允许我们为给定模型的所有查询添加条件约束。Laravel 自带的 软删除功能 就使用了全局作用域来从数据库中拉出所有没有被删除的模型。编写自定义的全局作用域可以提供一种方便的、简单的方式，来确保给定模型的每个查询都有特定的条件约束。
//
//编写全局作用域#
//
//自定义全局作用域很简单，首先定义一个实现 Illuminate\Database\Eloquent\Scope 接口的类，该接口要求你实现一个方法：apply。需要的话可以在 apply 方法中添加 where 条件到查询：
//
//<?php
//
//namespace App\Scopes;
//
//    use Illuminate\Database\Eloquent\Scope;
//    use Illuminate\Database\Eloquent\Model;
//    use Illuminate\Database\Eloquent\Builder;
//
//class AgeScope implements Scope
//{
//    /**
//     * 应用作用域
//     *
//     * @param  \Illuminate\Database\Eloquent\Builder  $builder
//     * @param  \Illuminate\Database\Eloquent\Model  $model
//     * @return void
//     */
//    public function apply(Builder $builder, Model $model)
//    {
//        return $builder->where('age', '>', 200);
//    }
//}
//Laravel 没有规定你需要把这些类放置于哪个文件夹，你可以自由在 app 文件夹下创建 Scopes 文件夹来存放。
//
//应用全局作用域#
//
//要将全局作用域分配给模型，需要重写给定模型的 boot 方法并使用 addGlobalScope 方法：
//
//<?php
//
//namespace App;
//
//use App\Scopes\AgeScope;
//use Illuminate\Database\Eloquent\Model;
//
//class User extends Model
//{
//    /**
//     * 数据模型的启动方法
//     *
//     * @return void
//     */
//    protected static function boot()
//    {
//        parent::boot();
//
//        static::addGlobalScope(new AgeScope);
//    }
//}
//添加作用域后，如果使用 User::all() 查询则会生成如下SQL语句：
//
//select * from `users` where `age` > 200
//匿名的全局作用域#
//
//Eloquent 还允许我们使用闭包定义全局作用域，这在实现简单作用域的时候特别有用，这样的话，我们就没必要定义一个单独的类了：
//
//<?php
//
//namespace App;
//
//    use Illuminate\Database\Eloquent\Model;
//    use Illuminate\Database\Eloquent\Builder;
//
//class User extends Model
//{
//    /**
//     * 数据模型的启动方法
//     *
//     * @return void
//     */
//    protected static function boot()
//    {
//        parent::boot();
//
//        static::addGlobalScope('age', function(Builder $builder) {
//            $builder->where('age', '>', 200);
//        });
//    }
//}
//我们还可以通过以下方式，利用 age 标识符来移除全局作用：
//
//User::withoutGlobalScope('age')->get();
//移除全局作用域#
//
//如果想要在给定查询中移除指定全局作用域，可以使用 withoutGlobalScope：
//
//User::withoutGlobalScope(AgeScope::class)->get();
//如果你想要移除某几个或全部全局作用域，可以使用 withoutGlobalScopes 方法：
//
//User::withoutGlobalScopes()->get();
//
//User::withoutGlobalScopes([FirstScope::class, SecondScope::class])->get();
//
//本地作用域#
//本地作用域允许我们定义通用的约束集合以便在应用中复用。例如，你可能经常需要获取最受欢迎的用户，要定义这样的一个作用域，只需简单在对应 Eloquent 模型方法前加上一个 scope 前缀，作用域总是返回查询构建器：
//
//<?php
//
//namespace App;
//
//    use Illuminate\Database\Eloquent\Model;
//
//class User extends Model
//{
//    /**
//     * 限制查询只包括受欢迎的用户。
//     *
//     * @return \Illuminate\Database\Eloquent\Builder
//     */
//    public function scopePopular($query)
//    {
//        return $query->where('votes', '>', 100);
//    }
//
//    /**
//     * 限制查询只包括活跃的用户。
//     *
//     * @return \Illuminate\Database\Eloquent\Builder
//     */
//    public function scopeActive($query)
//    {
//        return $query->where('active', 1);
//    }
//}
//利用查询范围#
//
//一旦定义了范围，则可以在查询模型时调用范围方法。在进行方法调用时不需要加上 scope 前缀。你甚至可以链式调用不同的范围，如：
//
//$users = App\User::popular()->active()->orderBy('created_at')->get();

//
//动态范围#
//
//有时候，你可能希望定义一个可接受参数的范围。这时只需给你的范围加上额外的参数即可。范围参数应该被定义在 $query 参数之后：
//
//<?php
//
//namespace App;
//
//    use Illuminate\Database\Eloquent\Model;
//
//class User extends Model
//{
//    /**
//     * 限制查询只包括指定类型的用户。
//     *
//     * @return \Illuminate\Database\Eloquent\Builder
//     */
//    public function scopeOfType($query, $type)
//    {
//        return $query->where('type', $type);
//    }
//}
//现在，你可以在范围调用时传递参数：
//
//$users = App\User::ofType('admin')->get();
//事件#
//Eloquent 模型会触发许多事件，让你在模型的生命周期的多个时间点进行监控： creating, created, updating, updated, saving, saved, deleting, deleted, restoring, restored.
//
//事件让你每当有特定的模型类在数据库保存或更新时，执行代码。
//
//当一个新模型被初次保存将会触发 creating 以及 created 事件。如果一个模型已经存在于数据库且调用了 save 方法，将会触发 updating 和 updated 事件。在这两种情况下都会触发 saving 和 saved 事件。
//
//开始前，在你的 Eloquent 模型上定义一个 $dispatchesEvents 属性，将 Eloquent 模型的生命周期的各个点映射到你的 事件类 中。
//
//<?php
//
//namespace App;
//
//    use App\Events\UserSaved;
//    use App\Events\UserDeleted;
//    use Illuminate\Notifications\Notifiable;
//    use Illuminate\Foundation\Auth\User as Authenticatable;
//
//class User extends Authenticatable
//{
//    use Notifiable;
//
//    /**
//     * 模型的事件映射。
//     *
//     * @var array
//     */
//    protected $dispatchesEvents = [
//        'saved' => UserSaved::class,
//        'deleted' => UserDeleted::class,
//    ];
//}
//
//观察者#
//如果你在一个给定的模型中监听许多事件，您可以使用观察者将所有监听器变成一个类。观察者类里的方法名应该反映Eloquent想监听的事件。 每种方法接收 model 作为其唯一的参数。 Laravel不包括观察者默认目录，所以你可以创建任何你喜欢你的目录来存放：
//
//<?php
//
//namespace App\Observers;
//
//use App\User;
//
//class UserObserver
//{
//    /**
//     * 监听用户创建的事件。
//     *
//     * @param  User  $user
//     * @return void
//     */
//    public function created(User $user)
//    {
//        //
//    }
//
//    /**
//     * 监听用户删除事件。
//     *
//     * @param  User  $user
//     * @return void
//     */
//    public function deleting(User $user)
//    {
//        //
//    }
//}
//要注册一个观察者，需要用模型中的observe方法去观察。你可以在你的服务提供商之一的boot方法中注册观察者。在这个例子中，我们将在AppServiceProvider注册观察者：
//
//<?php
//
//namespace App\Providers;
//
//use App\User;
//use App\Observers\UserObserver;
//use Illuminate\Support\ServiceProvider;
//
//class AppServiceProvider extends ServiceProvider
//{
//    /**
//     * 运行所有应用.
//     *
//     * @return void
//     */
//    public function boot()
//    {
//        User::observe(UserObserver::class);
//    }
//
//    /**
//     * 注册服务提供.
//     *
//     * @return void
//     */
//    public function register()
//    {
//        //
//    }
//}

//
//
//Eloquent：关联#
//简介
//定义关联
//一对一
//一对多
//一对多（反向）
//多对多
//远层一对多
//多态关联
//多对多多态关联
//查询关联
//关联方法 Vs. 动态属性
//基于存在的关联查询
//基于不存在的关联查询
//关联数据计数
//预加载
//为预加载添加约束条件
//延迟预加载
//插入 & 更新关联模型
//save 方法
//create 方法
//更新 belongsTo 关联
//多对多关联
//更新父级时间戳
//
//简介#
//数据库表通常相互关联。 例如，一篇博客文章可能有许多评论，或者一个订单对应一个下单用户。Eloquent 让这些关联的管理和使用变得简单，并支持多种类型的关联：
//
//一对一
//一对多
//多对多
//远层一对多
//多态关联
//多对多多态关联
//
//定义关联#
//Eloquent 关联在 Eloquent 模型类中以方法的形式呈现。如同 Eloquent 模型本身，关联也可以作为强大的 查询语句构造器 使用，提供了强大的链式调用和查询功能。例如，我们可以在 posts 关联的链式调用中附加一个约束条件：
//
//$user->posts()->where('active', 1)->get();
//不过，在深入使用关联之前，让我们先学习如何定义每种关联类型。
//
//
//一对一#
//一对一关联是最基本的关联关系。例如，一个 User 模型可能关联一个 Phone 模型。为了定义这个关联，我们要在 User 模型中写一个 phone 方法，在phone 方法内部调用 hasOne 方法并返回其结果：
//
//<?php
//
//namespace App;
//
//    use Illuminate\Database\Eloquent\Model;
//
//class User extends Model
//{
//    /**
//     * 获得与用户关联的电话记录。
//     */
//    public function phone()
//    {
//        return $this->hasOne('App\Phone');
//    }
//}
//hasOne 方法的第一个参数是关联模型的类名。关联关系定义好后，我们就可以使用 Eloquent 动态属性获得相关的记录。您可以像在访问模型中定义的属性一样，使用动态属性：
//
//$phone = User::find(1)->phone;
//Eloquent 会基于模型名决定外键名称。在当前场景中，Eloquent 假设 Phone 模型有一个 user_id 外键，如果外键名不是这个，可以通过给 hasOne 方法传递第二个参数覆盖默认使用的外键名：
//
//return $this->hasOne('App\Phone', 'foreign_key');
//此外，Eloquent 假定外键值是与父级 id（或自定义 $primaryKey）列的值相匹配的。 换句话说，Eloquent 将在 Phone 记录的 user_id 列中查找与用户表的 id 列相匹配的值。 如果您希望该关联使用 id以外的自定义键名，则可以给 hasOne 方法传递第三个参数：
//
//return $this->hasOne('App\Phone', 'foreign_key', 'local_key');
//定义反向关联#
//
//我们已经能从 User 模型访问到 Phone 模型了。现在，再在 Phone 模型中定义一个关联，此关联能让我们访问到拥有此电话的 User 模型。这时，使用的是与 hasOne 方法对应的 belongsTo 方法：
//
//<?php
//
//namespace App;
//
//use Illuminate\Database\Eloquent\Model;
//
//class Phone extends Model
//{
//    /**
//     * 获得拥有此电话的用户。
//     */
//    public function user()
//    {
//        return $this->belongsTo('App\User');
//    }
//}
//在上面的例子中，Eloquent 会尝试匹配 Phone 模型上的 user_id 至 User 模型上的 id。 它是通过检查关系方法的名称并使用 _id 作为后缀名来确定默认外键名称的。 但是，如果Phone模型的外键不是user_id，那么可以将自定义键名作为第二个参数传递给belongsTo方法：
//
///**
// * 获得拥有此电话的用户。
// */
//public function user()
//{
//    return $this->belongsTo('App\User', 'foreign_key');
//}
//如果父级模型没有使用 id 作为主键，或者是希望用不同的字段来连接子级模型，则可以通过给 belongsTo 方法传递第三个参数的形式指定父级数据表的自定义键：
//
///**
// * 获得拥有此电话的用户。
// */
//public function user()
//{
//    return $this->belongsTo('App\User', 'foreign_key', 'other_key');
//}
//
//默认模型#
//
//belongsTo 关联允许定义默认模型，这适应于当关联结果返回的是 null 的情况。这种设计模式通常称为 空对象模式，为您免去了额外的条件判断代码。在下面的例子中，user 关联如果没有找到文章的作者，就会返回一个空的 App\User 模型。
//
///**
// * 获得此文章的作者。
// */
//public function user()
//{
//    return $this->belongsTo('App\User')->withDefault();
//}
//您也可以通过传递数组或者使用闭包的形式，填充默认模型的属性：
//
///**
// * 获得此文章的作者。
// */
//public function user()
//{
//    return $this->belongsTo('App\User')->withDefault([
//        'name' => '游客',
//    ]);
//}
//
///**
// * 获得此文章的作者。
// */
//public function user()
//{
//    return $this->belongsTo('App\User')->withDefault(function ($user) {
//        $user->name = '游客';
//    });
//}
//
//一对多#
//「一对多」关联用于定义单个模型拥有任意数量的其它关联模型。例如，一篇博客文章可能会有无限多条评论。就像其它的 Eloquent 关联一样，一对多关联的定义也是在 Eloquent 模型中写一个方法：
//
//<?php
//
//namespace App;
//
//use Illuminate\Database\Eloquent\Model;
//
//class Post extends Model
//{
//    /**
//     * 获得此博客文章的评论。
//     */
//    public function comments()
//    {
//        return $this->hasMany('App\Comment');
//    }
//}
//记住，Eloquent 会自动确定 Comment 模型上正确的外键字段。按照约定，Eloquent 使用父级模型名的「snake case」形式、加上 _id 后缀名作为外键字段。对应到上面的场景，就是 Eloquent 假定 Comment 模型对应到 Post 模型上的那个外键字段是 post_id。
//
//关联关系定义好后，我们就可以通过访问 comments 属性获得评论集合。记住，因为 Eloquent 提供了「动态属性」，所以我们可以像在访问模型中定义的属性一样，访问关联方法：
//
//$comments = App\Post::find(1)->comments;
//
//foreach ($comments as $comment) {
//    //
//}
//当然，由于所有的关联还可以作为查询语句构造器使用，因此你可以使用链式调用的方式、在 comments 方法上添加额外的约束条件：
//
//$comments = App\Post::find(1)->comments()->where('title', 'foo')->first();
//形如 hasOne 方法，您也可以在使用 hasMany 方法的时候，通过传递额外参数来覆盖默认使用的外键与本地键。
//
//return $this->hasMany('App\Comment', 'foreign_key');
//
//return $this->hasMany('App\Comment', 'foreign_key', 'local_key');
//
//一对多（反向）#
//现在，我们已经能获得一篇文章的所有评论，接着再定义一个通过评论获得所属文章的关联。这个关联是 hasMany 关联的反向关联，在子级模型中使用 belongsTo 方法定义它：
//
//<?php
//
//namespace App;
//
//use Illuminate\Database\Eloquent\Model;
//
//class Comment extends Model
//{
//    /**
//     * 获得此评论所属的文章。
//     */
//    public function post()
//    {
//        return $this->belongsTo('App\Post');
//    }
//}
//关联关系定义好后，我们就可以在 Comment 模型上使用 post 「动态属性」获得 Post 模型了。
//
//$comment = App\Comment::find(1);
//
//echo $comment->post->title;
//在上面的例子中，Eloquent 会尝试用 Comment 模型的 post_id 与 Post 模型的 id 进行匹配。默认外键名是 Eloquent 依据关联名、并在关联名后加上 _id 后缀确定的。当然，如果 Comment 模型的外键不是 post_id，那么可以将自定义键名作为第二个参数传递给belongsTo方法：
//
///**
// * 获得此评论所属的文章。
// */
//public function post()
//{
//    return $this->belongsTo('App\Post', 'foreign_key');
//}
//如果父级模型没有使用 id 作为主键，或者是希望用不同的字段来连接子级模型，则可以通过给 belongsTo方法传递第三个参数的形式指定父级数据表的自定义键：
//
///**
// * 获得此评论所属的文章。
// */
//public function post()
//{
//    return $this->belongsTo('App\Post', 'foreign_key', 'other_key');
//}
//
//多对多#
//多对多关联比 hasOne 和 hasMany 关联稍微复杂些。这种关联的一个例子就是具有许多角色的用户，而角色也被其他用户共享。例如，许多用户都可以有「管理员」角色。要定义这种关联，需要用到三个数据库表：users、roles 和 role_user。role_user 表是以相关联的两个模型数据表、依照字母顺序排列命名的，并且包含 user_id 和 role_id 字段。
//
//多对多关联是通过写一个方法定义的，在方法内部调用 belongsToMany 方法并返回其结果。例如，我们在 User 模型中定义一个 roles 方法：
//
//<?php
//
//namespace App;
//
//use Illuminate\Database\Eloquent\Model;
//
//class User extends Model
//{
//    /**
//     * 获得此用户的角色。
//     */
//    public function roles()
//    {
//        return $this->belongsToMany('App\Role');
//    }
//}
//关联关系定义好后，我们就可以通过 roles 动态属性获得用户的角色了：
//
//$user = App\User::find(1);
//
//foreach ($user->roles as $role) {
//    //
//}
//当然，如同所有其它的关联类型，您可以调用 roles 方法，利用链式调用对查询语句添加约束条件：
//
//$roles = App\User::find(1)->roles()->orderBy('name')->get();
//如前所述，为了确定连接表表名，Eloquent 会按照字母顺序合并两个关联模型的名称。 当然，您可以自由地覆盖这个约定，通过给 belongsToMany 方法指定第二个参数实现：
//
//return $this->belongsToMany('App\Role', 'role_user');
//除了自定义连接表表名，您也可以通过给 belongsToMany 方法再次传递额外参数来自定义连接表里的键的字段名称。第三个参数是定义此关联的模型在连接表里的键名，第四个参数是另一个模型在连接表里的键名：
//
//return $this->belongsToMany('App\Role', 'role_user', 'user_id', 'role_id');
//定义反向关联#
//
//定义多对多关联的反向关联，您只要在对方模型里再次调用 belongsToMany 方法就可以了。让我们接着以用户角色为例，在 Role 模型中定义一个 users 方法。
//
//<?php
//
//namespace App;
//
//use Illuminate\Database\Eloquent\Model;
//
//class Role extends Model
//{
//    /**
//     * 获得此角色下的用户。
//     */
//    public function users()
//    {
//        return $this->belongsToMany('App\User');
//    }
//}
//如你所见，除了引入的模型变为 App\User 外，其它与在 User 模型中定义的完全一样。由于我们重用了 belongsToMany 方法，自定义连接表表名和自定义连接表里的键的字段名称在这里同样适用。
//
//获得中间表字段#
//
//您已经学到，多对多关联需要有一个中间表支持，Eloquent 提供了一些有用的方法来和这张表进行交互。例如，假设我们的 User 对象关联了许多的 Role 对象。在获得这些关联对象后，可以使用模型的 pivot 属性访问中间表数据：
//
//$user = App\User::find(1);
//
//foreach ($user->roles as $role) {
//    echo $role->pivot->created_at;
//}
//需要注意的是，我们取得的每个 Role 模型对象，都会被自动赋予 pivot 属性，它代表中间表的一个模型对象，能像其它的 Eloquent 模型一样使用。
//
//默认情况下，pivot 对象只包含两个关联模型的键。如果中间表里还有额外字段，则必须在定义关联时明确指出：
//
//return $this->belongsToMany('App\Role')->withPivot('column1', 'column2');
//如果您想让中间表自动维护 created_at 和 updated_at 时间戳，那么在定义关联时加上 withTimestamps 方法即可。
//
//return $this->belongsToMany('App\Role')->withTimestamps();
//通过中间表过滤关联数据#
//
//在定义关联时，您可以使用 wherePivot 和 wherePivotIn 方法过滤 belongsToMany 返回的结果：
//
//return $this->belongsToMany('App\Role')->wherePivot('approved', 1);
//
//return $this->belongsToMany('App\Role')->wherePivotIn('priority', [1, 2]);
//定义自定义中间表模型#
//
//如果您想定义一个自定义模型来表示关联关系中的中间表，可以在定义关联时调用 using 方法。所有自定义中间表模型都必须扩展自 Illuminate\Database\Eloquent\Relations\Pivot 类。例如， 我们在写 Role 模型的关联时，使用自定义中间表模型 UserRole：
//
//<?php
//
//namespace App;
//
//use Illuminate\Database\Eloquent\Model;
//
//class Role extends Model
//{
//    /**
//     * 获得此角色下的用户。
//     */
//    public function users()
//    {
//        return $this->belongsToMany('App\User')->using('App\UserRole');
//    }
//}
//当定义 UserRole 模型时，我们要扩展自 Pivot 类：
//
//<?php
//
//namespace App;
//
//use Illuminate\Database\Eloquent\Relations\Pivot;
//
//class UserRole extends Pivot
//{
//    //
//}
//
//远层一对多#
//「远层一对多」关联提供了方便、简短的方式通过中间的关联来获得远层的关联。例如，一个 Country 模型可以通过中间的 User 模型获得多个 Post 模型。在这个例子中，您可以轻易地收集给定国家的所有博客文章。让我们来看看定义这种关联所需的数据表：
//
//countries
//    id - integer
//    name - string
//
//users
//    id - integer
//    country_id - integer
//    name - string
//
//posts
//    id - integer
//    user_id - integer
//    title - string
//虽然 posts 表中不包含 country_id 字段，但 hasManyThrough 关联能让我们通过 $country->posts 访问到一个国家下所有的用户文章。为了完成这个查询，Eloquent 会先检查中间表 users 的 country_id 字段，找到所有匹配的用户 ID 后，使用这些 ID，在 posts 表中完成查找。
//
//现在，我们已经知道了定义这种关联所需的数据表结构，接下来，让我们在 Country 模型中定义它：
//
//<?php
//
//namespace App;
//
//use Illuminate\Database\Eloquent\Model;
//
//class Country extends Model
//{
//    /**
//     * 获得某个国家下所有的用户文章。
//     */
//    public function posts()
//    {
//        return $this->hasManyThrough('App\Post', 'App\User');
//    }
//}
//hasManyThrough 方法的第一个参数是我们最终希望访问的模型名称，而第二个参数是中间模型的名称。
//
//当执行关联查询时，通常会使用 Eloquent 约定的外键名。如果您想要自定义关联的键，可以通过给 hasManyThrough 方法传递第三个和第四个参数实现，第三个参数表示中间模型的外键名，第四个参数表示最终模型的外键名。第五个参数表示本地键名，而第六个参数表示中间模型的本地键名：
//
//class Country extends Model
//{
//    public function posts()
//    {
//        return $this->hasManyThrough(
//            'App\Post',
//            'App\User',
//            'country_id', // 用户表外键...
//            'user_id', // 文章表外键...
//            'id', // 国家表本地键...
//            'id' // 用户表本地键...
//        );
//    }
//}
//
//多态关联#
//数据表结构#
//
//多态关联允许一个模型在单个关联上属于多个其他模型。例如，想象一下使用您应用的用户可以「评论」文章和视频。使用多态关联，您可以用一个 comments 表同时满足这两个使用场景。让我们来看看构建这种关联所需的数据表结构：
//
//posts
//    id - integer
//    title - string
//    body - text
//
//videos
//    id - integer
//    title - string
//    url - string
//
//comments
//    id - integer
//    body - text
//    commentable_id - integer
//    commentable_type - string
//comments 表中有两个需要注意的重要字段 commentable_id 和 commentable_type。commentable_id 用来保存文章或者视频的 ID 值，而 commentable_type 用来保存所属模型的类名。commentable_type 是在我们访问 commentable 关联时， 让 ORM 确定所属的模型是哪个「类型」。
//
//模型结构#
//
//接下来，我们来看看创建这种关联所需的模型定义：
//
//<?php
//
//namespace App;
//
//use Illuminate\Database\Eloquent\Model;
//
//class Comment extends Model
//{
//    /**
//     * 获得拥有此评论的模型。
//     */
//    public function commentable()
//    {
//        return $this->morphTo();
//    }
//}
//
//class Post extends Model
//{
//    /**
//     * 获得此文章的所有评论。
//     */
//    public function comments()
//    {
//        return $this->morphMany('App\Comment', 'commentable');
//    }
//}
//
//class Video extends Model
//{
//    /**
//     * 获得此视频的所有评论。
//     */
//    public function comments()
//    {
//        return $this->morphMany('App\Comment', 'commentable');
//    }
//}
//获取多态关联#
//
//一旦您的数据库表准备好、模型定义完成后，就可以通过模型来访问关联了。例如，我们只要简单地使用 comments 动态属性，就可以获得某篇文章下的所有评论：
//
//$post = App\Post::find(1);
//
//foreach ($post->comments as $comment) {
//    //
//}
//您也可以在多态模型上，通过访问调用了 morphTo 的关联方法获得多态关联的拥有者。在当前场景中，就是 Comment 模型的 commentable 方法。所以，我们可以使用动态属性来访问这个方法：
//
//$comment = App\Comment::find(1);
//
//$commentable = $comment->commentable;
//Comment 模型的 commentable 关联会返回 Post 或者 Video 实例，这取决于评论所属的模型类型。
//
//自定义多态关联的类型字段#
//
//默认，Laravel 会使用完全限定类名作为关联模型保存在多态模型上的类型字段值。比如，在上面的例子中，Comment 属于 Post 或者 Video，那么 commentable_type的默认值对应地就是 App\Post 和 App\Video。但是，您可能希望将数据库与程序内部结构解耦。那样的话，你可以定义一个「多态映射表」来指示 Eloquent 使用每个模型自定义类型字段名而不是类名：
//
//use Illuminate\Database\Eloquent\Relations\Relation;
//
//Relation::morphMap([
//    'posts' => 'App\Post',
//    'videos' => 'App\Video',
//]);
//您可以在 AppServiceProvider 中的 boot 函数中使用 Relation::morphMap 方法注册「多态映射表」，或者使用一个独立的服务提供者注册。
//
//
//多对多多态关联#
//数据表结构#
//
//除了传统的多态关联，您也可以定义「多对多」的多态关联。例如，Post 模型和 Video 模型可以共享一个多态关联至 Tag 模型。 使用多对多多态关联可以让您在文章和视频中共享唯一的标签列表。首先，我们来看看数据表结构：
//
//posts
//    id - integer
//    name - string
//
//videos
//    id - integer
//    name - string
//
//tags
//    id - integer
//    name - string
//
//taggables
//    tag_id - integer
//    taggable_id - integer
//    taggable_type - string
//模型结构#
//
//接下来，我们准备在模型上定义关联关系。Post 和 Video 两个模型都有一个 tags 方法，方法内部都调用了 Eloquent 类自身的 morphToMany 方法：
//
//<?php
//
//namespace App;
//
//use Illuminate\Database\Eloquent\Model;
//
//class Post extends Model
//{
//    /**
//     * 获得此文章的所有标签。
//     */
//    public function tags()
//    {
//        return $this->morphToMany('App\Tag', 'taggable');
//    }
//}
//定义反向关联#
//
//接下里，在 Tag 模型中，您应该为每个关联模型定义一个方法。在这个例子里，我们要定义一个 posts 方法和一个 videos 方法：
//
//<?php
//
//namespace App;
//
//use Illuminate\Database\Eloquent\Model;
//
//class Tag extends Model
//{
//    /**
//     * 获得此标签下所有的文章。
//     */
//    public function posts()
//    {
//        return $this->morphedByMany('App\Post', 'taggable');
//    }
//
//    /**
//     *  获得此标签下所有的视频。
//     */
//    public function videos()
//    {
//        return $this->morphedByMany('App\Video', 'taggable');
//    }
//}
//获取关联#
//
//一旦您的数据库表准备好、模型定义完成后，就可以通过模型来访问关联了。例如，我们只要简单地使用 tags 动态属性，就可以获得某篇文章下的所有标签：
//
//$post = App\Post::find(1);
//
//foreach ($post->tags as $tag) {
//    //
//}
//您也可以在多态模型上，通过访问调用了 morphedByMany 的关联方法获得多态关联的拥有者。在当前场景中，就是 Tag 模型上的 posts 方法和 videos 方法。所以，我们可以使用动态属性来访问这两个方法：
//
//$tag = App\Tag::find(1);
//
//foreach ($tag->videos as $video) {
//    //
//}
//
//查询关联#
//由于所有类型的关联都通过方法定义，您可以调用这些方法来获取关联实例，而不需要实际运行关联的查询。此外，所有类型的关联都可以作为 查询语句构造器 使用，让你在向数据库执行 SQL 语句前，使用链式调用的方式添加约束条件。
//
//例如，假设一个博客系统，其中 User 模型有许多关联的 Post 模型：
//
//<?php
//
//namespace App;
//
//use Illuminate\Database\Eloquent\Model;
//
//class User extends Model
//{
//    /**
//     * 获得此用户所有的文章。
//     */
//    public function posts()
//    {
//        return $this->hasMany('App\Post');
//    }
//}
//您也可以像这样在 posts 关联上添加额外约束条件：
//
//$user = App\User::find(1);
//
//$user->posts()->where('active', 1)->get();
//您可以在关联上使用任何 查询语句构造器 的方法，所以，欢迎查阅查询语句构造器的相关文档以便了解您可以使用哪些方法。
//
//
//关联方法 Vs. 动态属性#
//如果您不需要给 Eloquent 关联查询添加额外约束条件，你可以简单的像访问属性一样访问关联。例如，我们刚刚的 User 和 Post 模型例子中，我们可以这样访问所有用户的文章：
//
//$user = App\User::find(1);
//
//foreach ($user->posts as $post) {
//    //
//}
//动态属性是「懒加载」的，意味着它们的关联数据只在实际被访问时才被加载。因此，开发者经常使用 预加载 提前加载他们之后会用到的关联数据。预加载有效减少了 SQL 语句请求数，避免了重复执行一个模型关联加载数据、发送 SQL 请求带来的性能问题。
//
//
//基于存在的关联查询#
//当获取模型记录时，您可能希望根据存在的关联对结果进行限制。例如，您想获得至少有一条评论的所有博客文章。为了实现这个功能，您可以给 has 方法传递关联名称：
//
//// 获得所有至少有一条评论的文章...
//$posts = App\Post::has('comments')->get();
//您也可以指定一个运算符和数目，进一步自定义查询：
//
//// 获得所有有三条或三条以上评论的文章...
//$posts = Post::has('comments', '>=', 3)->get();
//也可以使用「点」符号构造嵌套的的 has 语句。例如，您可以获得所有至少有一条获赞评论的文章：
//
//// 获得所有至少有一条获赞评论的文章...
//$posts = Post::has('comments.votes')->get();
//如果您需要更高级的用法，可以使用 whereHas和 orWhereHas 方法在 has 查询里设置「where」条件。此方法可以让你增加自定义条件至关联约束中，例如对评论内容进行检查：
//
//// 获得所有至少有一条评论内容满足 foo% 条件的文章
//$posts = Post::whereHas('comments', function ($query) {
//    $query->where('content', 'like', 'foo%');
//})->get();
//
//基于不存在的关联查询#
//当获取模型记录时，您可能希望根据不存在的关联对结果进行限制。例如，您想获得 没有 任何评论的所有博客文章。为了实现这个功能，您可以给 doesntHave 方法传递关联名称：
//
//$posts = App\Post::doesntHave('comments')->get();
//如果您需要更高级的用法，可以使用 whereDoesntHave 方法在 doesntHave 查询里设置「where」条件。此方法可以让你增加自定义条件至关联约束中，例如对评论内容进行检查：
//
//$posts = Post::whereDoesntHave('comments', function ($query) {
//    $query->where('content', 'like', 'foo%');
//})->get();
//
//关联数据计数#
//如果您只想统计结果数而不需要加载实际数据，那么可以使用 withCount 方法，此方法会在您的结果集模型中添加一个 {关联名}_count 字段。例如：
//
//$posts = App\Post::withCount('comments')->get();
//
//foreach ($posts as $post) {
//    echo $post->comments_count;
//}
//您可以为多个关联数据「计数」，并为其查询添加约束条件：
//
//$posts = Post::withCount(['votes', 'comments' => function ($query) {
//    $query->where('content', 'like', 'foo%');
//}])->get();
//
//echo $posts[0]->votes_count;
//echo $posts[0]->comments_count;
//您也可以为关联数据计数结果起别名，允许在同一个关联上多次计数：
//
//$posts = Post::withCount([
//    'comments',
//    'comments as pending_comments_count' => function ($query) {
//        $query->where('approved', false);
//    }
//])->get();
//
//echo $posts[0]->comments_count;
//
//echo $posts[0]->pending_comments_count;
//
//预加载#
//当作为属性访问 Eloquent 关联时，关联数据是「懒加载」的。意味着在你第一次访问该属性时，才会加载关联数据。不过，是当你查询父模型时，Eloquent 可以「预加载」关联数据。预加载避免了 N + 1 查询问题。要说明 N + 1 查询问题，试想一个 Book 模型关联到 Author 模型：
//
//<?php
//
//namespace App;
//
//use Illuminate\Database\Eloquent\Model;
//
//class Book extends Model
//{
//    /**
//     * 获得此书的作者。
//     */
//    public function author()
//    {
//        return $this->belongsTo('App\Author');
//    }
//}
//现在，让我们来获得所有书籍和作者数据：
//
//$books = App\Book::all();
//
//foreach ($books as $book) {
//    echo $book->author->name;
//}
//这个循环会运行一次查询取回所有数据表上的书籍数据，然后又运行一次查询获得每本书的作者数据。如果我们有 25 本书，则循环就会执行 26 次查询：1 次是获得所有书籍数据，另外 25 条查询用来获得每本书的作者数据。
//
//谢天谢地，我们使用预加载让整个查询减少到 2 次。这是通过指定关联给 with 方法办到的：
//
//$books = App\Book::with('author')->get();
//
//foreach ($books as $book) {
//    echo $book->author->name;
//}
//整个操作，只执行了两条查询：
//
//select * from books
//
//select * from authors where id in (1, 2, 3, 4, 5, ...)
//预加载多个关联#
//
//有时，你需要在一次操作中预加载几个不同的关联。为了实现这个功能，只需在 with 方法上传递额外的参数即可：
//
//$books = App\Book::with(['author', 'publisher'])->get();
//嵌套预加载#
//
//预加载嵌套关联，可以使用「点」语法。例如，在一个 Eloquent 语句中，预加载所有书籍作者和这些作者的联系信息：
//
//$books = App\Book::with('author.contacts')->get();
//
//为预加载添加约束条件#
//有时，你可能希望在预加载关联数据的时候，为查询指定额外的约束条件。这有个例子：
//
//$users = App\User::with(['posts' => function ($query) {
//    $query->where('title', 'like', '%first%');
//}])->get();
//在这个例子中，Eloquent 只会预加载标题里包含 first 文本的文章。您也可以调用其它的 查询语句构造器 进一步自定义预加载约束条件：
//
//$users = App\User::with(['posts' => function ($query) {
//    $query->orderBy('created_at', 'desc');
//}])->get();
//
//延迟预加载#
//有时，您可能需要在获得父级模型后才去预加载关联数据。例如，当你需要来动态决定是否加载关联模型时，这可能很有帮助：
//
//$books = App\Book::all();
//
//if ($someCondition) {
//    $books->load('author', 'publisher');
//}
//如果您想设置预加载查询的额外约束条件，可以通过给 load 添加数组键的形式达到目的，数组值是接收查询实例的闭包：
//
//$books->load(['author' => function ($query) {
//    $query->orderBy('published_date', 'asc');
//}]);
//
//插入 & 更新关联模型#
//
//save 方法#
//Eloquent 提供了便捷的方法来将新的模型增加至关联中。例如，也许你需要为一个 Post 模型插入一个新的 Comment。这是你无须为 Comment 手动设置 posts 属性，直接在关联上使用 save 方法插入 Comment 即可：
//
//$comment = new App\Comment(['message' => '一条新的评论。']);
//
//$post = App\Post::find(1);
//
//$post->comments()->save($comment);
//需要注意的是，我们没有使用动态属性形式访问 comments 关联。相反，我们调用了 comments 方法获得关联实例。save 方法会自动在新的 Comment 模型中添加正确的 post_id值。
//
//如果您需要保存多个关联模型，可以使用 saveMany 方法：
//
//$post = App\Post::find(1);
//
//$post->comments()->saveMany([
//    new App\Comment(['message' => '一条新的评论。']),
//    new App\Comment(['message' => '另一条评论。']),
//]);
//
//create 方法#
//除了 save 和 saveMany 方法，您也可以使用 create 方法，它接收一个属性数组、创建模型并插入数据库。还有，save 和 create 的不同之处在于，save 接收的是一个完整的 Eloquent 模型实例，而 create 接收的是一个纯 PHP 数组：
//
//$post = App\Post::find(1);
//
//$comment = $post->comments()->create([
//    'message' => '一条新的评论。',
//]);
//在使用 create 方法前，请确认您已经浏览了本文档的 批量赋值 章节。
//
//您可以使用 createMany 方法保存多个关联模型：
//
//$post = App\Post::find(1);
//
//$post->comments()->createMany([
//    [
//        'message' => '一条新的评论。',
//    ],
//    [
//        'message' => '另一条新的评论。',
//    ],
//]);
//
//更新 belongsTo 关联#
//当更新 belongsTo 关联时，可以使用 associate 方法。此方法会在子模型中设置外键：
//
//$account = App\Account::find(10);
//
//$user->account()->associate($account);
//
//$user->save();
//当删除 belongsTo 关联时，可以使用 dissociate方法。此方法会设置关联外键为 null：
//
//$user->account()->dissociate();
//
//$user->save();
//
//多对多关联#
//附加 / 移除#
//
//Eloquent 也提供了几个额外的辅助方法，让操作关联模型更加便捷。例如：我们假设一个用户可以拥有多个角色，并且每个角色都可以被多个用户共享。给某个用户附加一个角色是通过向中间表插入一条记录实现的，使用 attach 方法：
//
//$user = App\User::find(1);
//
//$user->roles()->attach($roleId);
//使用 attach 方法时，您也可以通过传递一个数组参数向中间表写入额外数据：
//
//$user->roles()->attach($roleId, ['expires' => $expires]);
//当然，有时也需要移除用户的角色。删除多对多关联记录，使用 detach 方法。detach 方法会移除掉正确的记录；当然，这两个模型数据依然保存在数据库中：
//
//// 移除用户的一个角色...
//$user->roles()->detach($roleId);
//
//// 移除用户的所有角色...
//$user->roles()->detach();
//为了方便，attach 和 detach 都允许传入 ID 数组：
//
//$user = App\User::find(1);
//
//$user->roles()->detach([1, 2, 3]);
//
//$user->roles()->attach([
//    1 => ['expires' => $expires],
//    2 => ['expires' => $expires]
//]);
//同步关联#
//
//您也可以使用 sync 方法来构造多对多关联。sync 方法可以接收 ID 数组，向中间表插入对应关联数据记录。所有没放在数组里的 IDs 都会从中间表里移除。所以，这步操作完成后，只有在数组里的 IDs 会被保留在中间表中。
//
//$user->roles()->sync([1, 2, 3]);
//您可以通过 ID 传递其他额外的数据到中间表：
//
//$user->roles()->sync([1 => ['expires' => true], 2, 3]);
//如果您不想移除现有的 IDs，可以使用 syncWithoutDetaching 方法：
//
//$user->roles()->syncWithoutDetaching([1, 2, 3]);
//切换关联#
//
//多对多关联也提供了一个 toggle 方法用于「切换」给定 IDs 的附加状态。如果给定 ID 已附加，就会被移除。同样的，如果给定 ID 已移除，就会被附加：
//
//$user->roles()->toggle([1, 2, 3]);
//在中间表上保存额外数据#
//
//当处理多对多关联时，save 方法还可以使用第二个参数，它是一个属性数组，包含插入到中间表的额外字段数据。
//
//App\User::find(1)->roles()->save($role, ['expires' => $expires]);
//更新中间表记录#
//
//如果您需要更新中间表中已存在的记录，可以使用 updateExistingPivot 方法。此方法接收中间记录的外键和一个属性数组进行更新：
//
//$user = App\User::find(1);
//
//$user->roles()->updateExistingPivot($roleId, $attributes);
//
//更新父级时间戳#
//当一个模型 belongsTo 或者 belongsToMany 另一个模型，比如一个 Comment 属于一个 Post，有时更新子模型导致更新父模型时间戳非常有用。例如，当一个 Comment 模型更新时，您要自动「触发」父级 Post 模型的 updated_at 时间戳的更新，Eloquent 让它变得简单。只要在子模型加一个包含关联名称的 touches 属性即可：
//
//<?php
//
//namespace App;
//
//use Illuminate\Database\Eloquent\Model;
//
//class Comment extends Model
//{
//    /**
//     * 所有会被触发的关联。
//     *
//     * @var array
//     */
//    protected $touches = ['post'];
//
//    /**
//     * 获得此评论所属的文章。
//     */
//    public function post()
//    {
//        return $this->belongsTo('App\Post');
//    }
//}
//现在，当你更新一个 Comment 时，对应父级 Post 模型的 updated_at 字段也会被同时更新，使其更方便得知何时让一个 Post 模型的缓存失效：
//
//$comment = App\Comment::find(1);
//
//$comment->text = '编辑了这条评论！';
//
//$comment->save();
//
//Eloquent：集合#
//简介
//可用的方法
//自定义集合
//
//简介#
//Eloquent 返回的所有多结果集都是 Illuminate\Database\Eloquent\Collection 对象的实例，
//
//默认情况下 Eloquent 返回的都是一个 Illuminate\Database\Eloquent\Collection 对象的实例，包括通过 get 方法检索或通过访问关联关系获取到的结果。Eloquent 的集合对象继承了 Laravel 的 集合基类，因此它自然也继承了数十种能优雅地处理 Eloquent 模型底层数组的方法。
//
//当然，所有的集合都可以作为迭代器，可以就像简单的 PHP 数组一样来遍历它们：
//
//$users = App\User::where('active', 1)->get();
//
//foreach ($users as $user) {
//echo $user->name;
//}
//然而，集合比数组更加强大，它通过更直观的接口暴露出可链式调用的 map/reduce 等操作。举个例子，我们要删除模型中所有未激活的并收集剩余用户的名字：
//
//$users = App\User::where('active', 1)->get();
//
//$names = $users->reject(function ($user) {
//    return $user->active === false;
//})
//    ->map(function ($user) {
//        return $user->name;
//    });
//大多数 Eloquent 集合方法会返回新的 Eloquent 集合实例，但是 pluck, keys, zip, collapse, flatten 和 flip 方法除外，它们会返回 集合基类 实例。同样，如果 map 操作返回的集合不包含任何 Eloquent 模型，那么它会被自动转换成集合基类。
//
//
//可用的方法#
//集合基类#
//所有 Eloquent 集合都继承了基础的 Laravel 集合 对象。因此，它们也继承了所有集合基类提供的强大的方法：
//
//all
//average
//avg
//chunk
//collapse
//combine
//contains
//containsStrict
//count
//diff
//diffKeys
//each
//every
//except
//filter
//first
//flatMap
//flatten
//flip
//forget
//forPage
//get
//groupBy
//has
//implode
//intersect
//isEmpty
//isNotEmpty
//keyBy
//keys
//last
//map
//mapWithKeys
//max
//median
//merge
//min
//mode
//nth
//only
//partition
//pipe
//pluck
//pop
//prepend
//pull
//push
//put
//random
//reduce
//reject
//reverse
//search
//shift
//shuffle
//slice
//sort
//sortBy
//sortByDesc
//splice
//split
//sum
//take
//tap
//toArray
//toJson
//transform
//union
//unique
//uniqueStrict
//values
//when
//where
//whereStrict
//whereIn
//whereInStrict
//whereNotIn
//whereNotInStrict
//zip
//
//
//自定义集合#
//如果你需要在自己的扩展方法中使用自定义的 Collection 对象，可以在你自己的模型中重写 newCollection 方法：
//
//<?php
//
//namespace App;
//
//use App\CustomCollection;
//use Illuminate\Database\Eloquent\Model;
//
//class User extends Model
//{
//    /**
//     * 创建一个新的 Eloquent 集合实例对象。
//     *
//     * @param  array  $models
//     * @return \Illuminate\Database\Eloquent\Collection
//     */
//    public function newCollection(array $models = [])
//    {
//        return new CustomCollection($models);
//    }
//}
//一旦你定义了 newCollection 方法，任何时候都可以在 Eloquent 返回的模型的 Collection 实例中获取你的自定义集合实例。如果你想要在应用程序的每个模型中使用自定义集合，则应该在所有的模型继承的模型基类中重写 newCollection 方法。

    public $fillable = [
        'name',
        'memo',
        'author'
    ];
    /**
     * 应该被转换成原生类型的属性。
     *
     * @var array
     */
//    protected $casts = [
//        'options' => 'array',
//    ];
    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'memo' => 'string',
        'author' => 'string'
    ];
//一旦类型转换被定义，你就可以访问 options 属性，它将会自动把 JSON 反序列化成一个 PHP 数组。当你设置 options 属性的值时，接收到的数组将会被自动序列化成 JSON 以便进行保存：
//
//$user = App\User::find(1);
//
//$options = $user->options;
//
//$options['key'] = 'value';
//
//$user->options = $options;
//
//$user->save();
    /**
     * Validation rules
     * 这是自己加的一个验证定义
     * @var array
     */
    public static $rules = [
        
    ];

    
}
