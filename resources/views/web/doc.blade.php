@extends('layouts.app')
@section('content')
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <script src="http://jq22.qiniudn.com/masonry-docs.min.js"></script>
    <div class="container box">
        <div class="row" style="margin-top: -18px;">
            <ol class="breadcrumb">
                <li><a href="{{url('/home')}}">首页</a></li>
                <li class="active"><a href="{{url('/quicklog')}}">速查表</a></li>
            </ol>
        </div>
        <div class="text-center">
            <h1 class="blog-title">2020 WEB技术试验场</h1>
            <p class="lead blog-description">聚焦新开发模式。前后端最新开发技术试验场，以及最佳实践。</p>
        </div>
        <div id="c" class="row">
            <div class="col-sm-12">
            好吧,今年就差上线了.
            注册公司开始生产产品.

            大数据
            人工智能
            开源系统
            容器化管理
            DevOps
            监控系统
            积分系统
            安防系统
            SEO SEM
            DM
            英语

            </div>
            <div class="col-sm-3">
                <h4>MyHub技术栈</h4>
                <ol>
                    <li><a href="">基于API的开发 前端使用React Vue</a></li>
                    <li><a href="">Docker 容器 Paas Saas K8 分布式架构</a></li>
                    <li><a href="">DevOpt 版本控制 自动化测试 自动化部                <p>署</p>
                        </a></li>
                    <li><a href="">Dtt 测试驱动开发</a></li>
                    <li><a href="">性能监控</a></li>
                </ol>
            </div>
            <div class="col-sm-3">
                <h4>Laravel</h4>
                <ol>
                    <li>工作流</li>
                    <li><a target="_blank" href="{{ asset('laraveldemo/l_view') }}">模版</a></li>
                    <li><a target="_blank" href="laraveldemo/l_route">路由</a></li>
                    <li>控制器</li>
                    <li><a target="_blank" href="laraveldemo/l_db">数据层</a></li>
                    <li><a target="_blank" href="laraveldemo/l_cache">Cache</a></li>
                    <li><a target="_blank" href="laraveldemo/l_cache">自动生成用户授权</a></li>
                    <li><a target="_blank" href="http://labs.infyom.com/">自动生成增删改查</a></li>
                    <li><a target="_blank" href="{{url('/apples')}}">增删改查例子</a></li>
                    <li><a target="_blank" href="laraveldemo/l_cache">组装更多的特性</a></li>
                    <li><a target="_blank" href="doc/home">MDEveryDemo</a></li>
                    <li><a target="_blank"
                           href="https://appdividend.com/2017/08/31/laravel-5-5-reactjs-tutorial/">超级好的laravel +
                            React例程</a></li>
                    <li><a target="_blank"
                           href="https://laravel-china.org/topics/3188/vuejs-2-laravel-53-cors-cross-domain-resource-sharing-1">CORS
                            跨域资源共享</a></li>
                    <li><a target="_blank" href="http://www.ruanyifeng.com/blog/2016/04/cors.html">跨域资源共享 CORS
                            详解</a></li>
                    <li><a target="_blank" href="http://laravel-admin.org/">laravel-admin</a></li>
                    <li><a target="_blank" href="http://laravelacademy.org/post/8029.html">数据库操作 ——
                            快速入门：基本配置和使用、读写分离 & 数据库事务</a></li>
                    <li><a target="_blank" href="http://laravelacademy.org/post/7930.html">基于 Laravel 5.5 开发的适用于
                            API 开发的神器 —— laravel-smart</a></li>
                    <li><a target="_blank" href="https://github.com/dingo">dingo 可以自动生成api文档【试了一下貌似不好使】</a></li>
                    <li><a target="_blank" href="http://labs.infyom.com/laravelgenerator/">laravelgenerator</a>
                    </li>
                    <li><a target="_blank"
                           href="https://laravel-china.org/articles/3825/laravel-authentication-principle-and-full-custom-authentication">laravel用户认证模块原理</a>
                    </li>
                    <li><a target="_blank" href="https://swagger.io/docs/specification/about/">接口定义</a></li>
                    <li><a target="_blank"
                           href="https://laravel-china.org/articles/3825/laravel-authentication-principle-and-full-custom-authentication">SESSION原理</a>
                    </li>
                    <li><a target="_blank" href="https://www.swoole.com/">高性能Laravel Swoole</a></li>
                    <li><a target="_blank" href="">性能</a></li>
                    <li><a target="_blank" href="">扩展</a></li>
                    <li><a target="_blank" href="">云平台</a></li>
                    <li><a target="_blank" href="">自动任务</a></li>
                    <li><a target="_blank" href="http://blog.csdn.net/j7lfhdxh/article/details/57419796">如何用docker安装laravel开发环境</a>
                    </li>
                    <li><a target="_blank" href="http://www.jianshu.com/p/8e81968c5963">Laravel 下使用 Guzzle
                            编写多线程爬虫实战</a></li>
                    <li><a href="http://scrapy-chs.readthedocs.io/zh_CN/0.24/intro/tutorial.html">scrapy</a></li>
                    <li><a target="_blank"
                           href="https://laravel-china.org/articles/3701/goutte-a-simple-and-easy-to-use-php-reptile-library">Goutte
                            一个简单易用的 PHP 爬虫类库</a></li>
                    <li><a target="_blank" href="https://laravel-china.org/topics/1402/laravel-timing-task">Laravel
                            定时任务</a></li>
                    <li><a target="_blank" href="http://www.nginx.cn/doc/">Nginx中文文档</a></li>
                    <li><a target="_blank" href="http://www.nginx.cn/doc/">php-fpm</a></li>
                    <li><a target="_blank" href="http://www.runoob.com/memcached/memcached-tutorial.html">Memcached</a>
                    </li>
                    <li><a target="_blank" href="http://www.runoob.com/redis/redis-php.html">Redis中文文档</a></li>
                    <li><a target="_blank"
                           href="http://www.runoob.com/mongodb/mongodb-tutorial.html">mongodb</a></li>
                    <li><a target="_blank" href="https://spark.laravel.com/login">spark</a></li>
                    <li><a href="https://www.cnblogs.com/yangxiaoyi/p/7359236.html">Kafka</a></li>
                    <li><a href="https://www.swoole.com/">swoole</a></li>
                </ol>
            </div>
            <div class="col-sm-3">
                <h4>Vue</h4>
                <ol>
                    <li><a target="_blank" href="https://cn.vuejs.org/v2/guide/index.html">vue文档</a></li>
                    <li><a target="_blank" href="https://router.vuejs.org/zh-cn/">vue-router文档</a></li>
                    <li><a target="_blank" href="https://vuex.vuejs.org/zh-cn/">vuex文档</a></li>
                    <li><a target="_blank" href="https://vux.li/">vux.li</a></li>
                    <li><a target="_blank" href="http://www.muse-ui.org/">muse-ui</a></li>
                    <li><a target="_blank" href="http://blog.csdn.net/zgrkaka/article/details/53897202">vue 常用ui组件</a>
                    </li>
                    <li><a target="_blank" href="http://mockjs.com/">mockjs</a></li>
                    <li><a target="_blank" href="http://dplayer.js.org/">dplayer Html5播放器</a></li>
                    <li><a target="_blank" href="http://cordova.axuer.com/">cordova</a></li>
                    <li><a target="_blank" href="https://www.vue-js.com">vue.js论坛</a></li>
                    <li><a target="_blank"
                           href="https://www.jianshu.com/p/176a95db647d?utm_campaign=maleskine&utm_content=note&utm_medium=seo_notes&utm_source=recommendation">Vue相关开源项目库汇总(史上最新最全)</a>
                    </li>
                    <li><a target="_blank" href="http://blog.csdn.net/github_37516320/article/details/77865759">pug </a>
                    </li>
                </ol>
            </div>
            <div class="col-sm-3">
                <h4>CSS</h4>
                <ol>
                    <li><a href="https://vux.li/">CSS3</a></li>
                    <li><a href="http://www.muse-ui.org/">SCSS</a></li>
                    <li><a href="https://segmentfault.com/a/1190000013325778?utm_source=channel-hottest">50道CSS基础面试题</a>
                    </li>
                    <li><a href="https://segmentfault.com/a/1190000008416556">Flex布局</a></li>
                    <li><a href="https://segmentfault.com/a/1190000008242429">Grid布局</a></li>
                    <li><a href="https://segmentfault.com/a/1190000002620786">CSS3 Animation</a></li>
                    <li><a href="https://github.com/daneden/animate.css">animate.css</a></li>
                    <li><a href="https://www.awesomes.cn/">前端站点awesomes</a></li>
                    <li><a href="https://segmentfault.com/">segmentfault.com</a></li>
                </ol>
            </div>
            <div class="col-sm-3">
                <h4>HTML5</h4>
                <ol>
                    <li><a href="http://www.w3school.com.cn/html5/index.asp">HTML5教程</a></li>
                    <li><a href="http://blog.csdn.net/l333f/article/details/60877276">HTML5中 audio标签的样式修改</a></li>
                    <li><a href="http://blog.csdn.net/zhuchunyan_aijia/article/details/52290864">使用jQuery和CSS自定义HTML5
                            Video 控件</a></li>
                    <li><a href="https://segmentfault.com/a/1190000013364007?utm_source=channel-newest">前端面试题总结——H5</a>
                    </li>
                </ol>
            </div>


            <div class="col-sm-3">
                <h4>Docker</h4>
                <ol>
                    <li><a target="_blank"
                           href="https://yq.aliyun.com/articles/63035?utm_campaign=wenzhang&utm_medium=article&utm_source=QQ-qun&utm_content=m_7538">大白话Docker入门（一）</a>
                    </li>
                    <li><a target="_blank" href="http://dockone.io/article/395">基于Docker快速搭建多节点Hadoop集群</a></li>
                    <li><a target="_blank" href="https://www.cnblogs.com/2018/archive/2015/08/02/4664432.html">docker中建立私有git服务器[gitlab]</a>
                    </li>
                    <li>PaaS是Platform-as-a-Service的缩写，意思是平台即服务</li>
                    <li><a href="https://www.zhihu.com/question/20387284">怎么理解 IaaS、SaaS 和 PaaS 的区别？</a></li>
                    <li><a target="_blank"
                           href="http://blog.csdn.net/qq_29245097/article/details/52996911?_t_t_t=0.22371753382246717">Docker+Git效率工作</a>
                    </li>
                    <li><a href="http://www.cnblogs.com/2018/p/4654239.html">程序员的生产力始于需求而非工具</a></li>
                    <li>
                        <a href="http://blog.csdn.net/u010705480/article/details/60578259">Docker适合应用于生产环境了吗?</a>
                    </li>
                    <li><a href="http://blog.csdn.net/linuxnews/article/details/51626342">在生产环境使用Docker部署应用</a>
                    </li>
                    <li><a href="http://www.hishenyi.com/archives/640">Docker生产环境架构讨论</a></li>
                    <li>
                        <a href="http://www.infoq.com/cn/news/2015/06/jd-618-docker/">京东618：Docker扛大旗，弹性伸缩成重点</a>
                    </li>
                    <li><a href="http://blog.csdn.net/u010246789/article/details/54234217">Docker实践(七)：Docker
                            Hub(镜像分发、自动化构建)</a></li>
                    <li><a href="http://www.cnblogs.com/felixzh/p/5194517.html">在CentOS 6上搭建私有的Docker
                            Registry</a></li>
                    <li><a href="https://www.cnblogs.com/felixzh/p/5194527.html">使用 Docker 建立 Mysql 集群</a></li>
                    <li><a href="https://www.cnblogs.com/junneyang/p/5238333.html">【架构】docker环境搭建mysql主从</a>
                    </li>
                    <li><a href="https://segmentfault.com/a/1190000004353368">docker搭建redis集群</a></li>
                    <li><a href="https://segmentfault.com/a/1190000006907443">使用 Docker 一步搞定 ZooKeeper 集群的搭建</a>
                    </li>
                    <li><a href="https://segmentfault.com/a/1190000006907443">使用 Docker 一步搞定 ZooKeeper 集群的搭建</a>
                    </li>
                    <li><a href="http://blog.csdn.net/pmlpml/article/details/53698104">docker 集群（单主机）部署web
                            应用入门（Nginx）</a></li>
                    <li><a href="https://www.myfreax.com/build-the-nginx-cluster-on-the-docker-swarm/">在Docker的swarm上构建Nginx集群</a>
                    </li>
                    <li><a href="http://m.dockerinfo.net/4118.html">用Docker容器开发区块链应用</a></li>
                    <li><a href="https://segmentfault.com/a/1190000010216732">docker安装openface进行人脸识别</a></li>
                    <li><a href="http://www.runoob.com/docker/docker-image-usage.html">Docker 镜像使用</a></li>
                    <li><a href="https://www.alpinelinux.org/about/">alpinelinux 微系统</a></li>
                    <li>容器大幅减少了配置的过程</li>
                    <li><a href="https://www.kubernetes.org.cn/">另一个容器工具 kubernetes</a></li>
                    <li><a href="https://www.kubernetes.org.cn/doc-11">K8s</a></li>
                </ol>
            </div>
            <div class="col-sm-3">
                <h4>扩展问题</h4>
                <ol>
                    <li><a target="_blank"
                           href="https://www.cnblogs.com/xiaochaohuashengmi/archive/2011/04/24/2026559.html">服务器日志设置和分析，避免大日志文件当掉服务器</a>
                    </li>
                    <li><a target="_blank" href="">PHP OpCache </a></li>
                    <li><a target="_blank" href="">OAuth2 </a></li>
                    <li><a target="_blank" href="">短信接口 </a></li>
                    <li><a target="_blank" href="">分布式存储（CDN） </a></li>
                    <li><a target="_blank" href="https://www.oschina.net/question/2896879_2212316">鸟哥惠新宸：PHP 7.1
                            的新特性我并不是很喜欢--认识到开发的本质，问题域 </a></li>
                    <li><a target="_blank" href="http://www.jb51.net/article/59469.htm"> apache AB 性能重点概念 每秒访问数
                            每日IP数 </a></li>
                    <li><a target="_blank" href="">SEO </a></li>
                    <li><a target="_blank" href="http://www.laozuo.org/5503.html">Apache安全 </a></li>
                    <li><a target="_blank" href="http://www.jb51.net/article/95832.htm">Ngix安全 </a></li>
                    <li><a target="_blank" href="https://www.zhihu.com/question/21606800">web安全 </a></li>
                    <li><a target="_blank"
                           href="https://baike.baidu.com/item/%E5%88%86%E5%B8%83%E5%BC%8F%E6%8B%92%E7%BB%9D%E6%9C%8D%E5%8A%A1%E6%94%BB%E5%87%BB/3802159?fr=aladdin&fromid=444572&fromtitle=DDOS">DDOS </a>
                    </li>
                    <li><a target="_blank" href="https://www.zhihu.com/question/19581905">互联网创业公司如何防御 DDoS
                            攻击 </a></li>
                    <li><a target="_blank"
                           href="http://netsecurity.51cto.com/art/200811/97281.htm">Web安全测试之跨站请求伪造（CSRF） </a>
                    </li>
                    <li><a target="_blank" href="http://www.jb51.net/article/95832.htm">防止机器人 </a></li>
                    <li><a target="_blank" href="http://www.jb51.net/article/95832.htm">https </a></li>
                    <li><a target="_blank" href="https://segmentfault.com/a/1190000008784051">使用Token认证 </a>
                    </li>
                    <li><a target="_blank" href="https://www.cnblogs.com/2881064178dinfeng/p/6203391.html">[
                            Laravel 5.3 文档 ] 安全 ―― API认证（Passport）保障安全性。
                        </a></li>
                    <li><a href="http://www.jianshu.com/p/f670b37336ff">用vue.js和laravel实现微信授权登陆</a></li>
                    <li><a href="http://www.jianshu.com/p/f670b37336ff">laravel-cors 解决跨域问题</a></li>
                    <li><a href="https://www.cnblogs.com/5207/p/6297020.html">静态缓存中分页问题【百度】</a></li>
                    <li><a href="https://www.cnblogs.com/lei2007/p/3837288.html">类似微博的分布式缓存问题【新浪】</a></li>
                    <li><a href="https://www.cnblogs.com/ismallboy/p/5574006.html">数据库锁问题</a></li>
                    <li><a href="https://www.cnblogs.com/richardcuick/p/6384122.html">TPS及计算方法</a></li>
                    <li><a href="https://www.juhe.cn/docs">聚合数据</a></li>
                    <li>
                        <a href="https://laravel-china.org/topics/2566/an-implementation-of-laravel-real-time-application">及时应用</a>
                    </li>
                    <li><a href="http://www.jianshu.com/p/f670b37336ff">OpenNI</a></li>
                    <li><a href="http://www.jianshu.com/p/f670b37336ff">大数据</a></li>
                    <li><a href="https://www.zhihu.com/search?type=content&q=%E5%A4%A7%E6%95%B0%E6%8D%AE%20">大数据
                            呵呵</a></li>
                    <li><a href="http://tech.qq.com/a/20170414/040241.htm">人工智能</a></li>
                    <li><a href="http://tech.qq.com/a/20170414/040241.htm">深度学习</a></li>
                    <li><a href="http://tech.qq.com/a/20170414/040241.htm">语音识别</a></li>
                    <li><a href="http://tech.qq.com/a/20170414/040241.htm">内容识别</a></li>
                    <li>
                        <a href="http://baijiahao.baidu.com/s?id=1570416001078402&wfr=spider&for=pc">52个人工智能API</a>
                    </li>
                    <li>
                        <a href="https://www.zhihu.com/question/50372376/answer/141373868">人工智能开放API，百度大脑和微软认知服务，哪个更好一些？</a>
                    </li>
                    <li><a href="http://www.jianshu.com/p/f670b37336ff">翻译</a></li>
                    <li><a href="https://segmentfault.com/a/1190000011620411">区块链</a></li>
                    <li><a href="http://www.arcsoft.com.cn/ai/arcface.html?utm_source=baiduad&utm_medium=cpc">面部识别</a>
                    <li><a href="https://segmentfault.com/a/1190000013331105?utm_source=index-hottest">面试的信心来源于过硬的基础</a>
                    </li>
                    </li>
                </ol>
            </div>
            <div class="col-sm-3">
                <h4>DevOps(Develop与Operations的缩写)</h4>
                <ol>
                    <li><a href="https://baike.baidu.com/item/devops/2613029?fr=aladdin#7_1">logrotate</a></li>
                    <li><a href="https://baike.baidu.com/item/devops/2613029?fr=aladdin#7_1">DevOps</a></li>
                    <li><a href="http://os.51cto.com/art/201606/512423.htm">成功DevOps必备的20款顶级工具</a></li>
                </ol>
            </div>
            <div class="col-sm-3">
                <h4>React</h4>
                <ol>
                    <li>React 英文文档 中文文档</li>
                    <li>React-Router 英文文档 中文文档</li>
                    <li>React-Redux 英文文档 中文文档</li>
                    <li>redux-saga <a href="https://redux-saga.js.org/docs/introduction/BeginnerTutorial.html">英文文档</a>
                        <a href="http://leonshi.com/redux-saga-in-chinese/docs/basics/UsingSagaHelpers.html">中文文档（没法看）</a>
                    </li>
                    <li>create-react-app 英文文档 中文文档</li>
                    <li>Dav 英文文档 中文文档</li>
                    <li><a href="https://ant.design">ant.design 很完整的react web组件库</a></li>
                    <li>react-bootstrap</li>
                    <li>material-ui</li>
                    <li>获取数据</li>
                    <li>客户端存储</li>
                    <li>脚手架</li>
                    http://www.jianshu.com/p/e84493c7af35
                    <li><a target="_blank"
                           href="https://ykloveyxk.github.io/2017/02/25/axios%E5%85%A8%E6%94%BB%E7%95%A5/">axios全攻略</a>
                    </li>
                    <li><a target="_blank" href="https://segmentfault.com/q/1010000004053019">用户登录</a></li>
                    <li><a href="https://pro.ant.design">pro.ant.design 老马牛大了 开箱即用的web后台系统</a></li>
                </ol>
            </div>
            <div class="col-sm-3">
                <h4>angular</h4>
                <ol>
                    <li><a href="https://angular.cn">angular</a></li>
                    <li><a href="https://www.jianshu.com/p/1baf40713c1c">Ionic 3</a></li>
                    <li><a href="https://ionicframework.com/framework">ionicframework</a></li>
                </ol>
            </div>
            <div class="col-sm-3">
                <h4>JQuery</h4>
                <ol>
                    <li><a href="http://www.htmleaf.com/">JQuery之家</a></li>
                    <li><a href="http://www.jq22.com/yanshi1320">jQuery引导插件intro.js</a></li>
                    <li><a href="https://introjs.com/">introjs.com</a></li>
                </ol>
            </div>
            <div class="col-sm-3">
                <h4>Angular</h4>
                <ol>
                    <li><a href="https://angular.io/">angular</a></li>
                </ol>
            </div>
            <div class="col-sm-3">
                <h4>游戏引擎</h4>
                <ol>
                    <li><a href="">egret</a></li>
                    <li><a href="">Cocos</a></li>
                    <li><a href="">unity</a></li>
                    <li><a href="">unreal</a></li>
                </ol>
            </div>
            <div class="col-sm-3">
                <h4>Typescript</h4>
                <ol>
                    <li><a href="https://www.tslang.cn/samples/index.html">Typescript 中文网</a></li>
                    <li><a href="TypeScript React">Typescript React</a></li>
                    <li><a href="https://github.com/Microsoft/TypeScript-Vue-Starter#typescript-vue-starter">Typescript
                            Vue</a></li>
                    <li><a href="https://www.egret.com/">Egret</a></li>
                </ol>
            </div>
            <div class="col-sm-3">
                <h4>ECMAScript</h4>
                <ol>
                    <li><a href="http://es6.ruanyifeng.com/">ECMAScript 6 入门</a></li>
                    <li><a href="http://www.jianshu.com/p/a138a525c287">ES7 and ES8 特性</a></li>
                    <li><a href="https://www.zhihu.com/question/39993685">如何评价 ECMAScript 2016（ES7）只新增2个特性？</a>
                    </li>
                    <li><a href="https://segmentfault.com/a/1190000007116715">快速理解和使用 ES7 await/async</a></li>
                    <li><a href="https://segmentfault.com/a/1190000010159725">重新认识ES6中的语法糖</a></li>
                </ol>
            </div>
            <div class="col-sm-3">
                <h4>前端</h4>
                <ol>
                    <li>前端工作流</li>
                    <li><a target="_blank" href="laraveldemo/l_vue">VUE单页程序</a></li>
                    <li><a target="_blank"
                           href="https://segmentfault.com/a/1190000013356663?utm_source=channel-hottest">前端面试题总结——综合问题</a>
                    </li>
                    <li><a target="_blank" href="https://wrapbootstrap.com/themes">好用的模版</a></li>
                    <li><a target="_blank" href="http://www.mycodes.net/154/">源码之家</a></li>
                    <li><a target="_blank"
                           href="https://www.froala.com/wysiwyg-editor/docs/server/php/image-upload">php7上传进度</a>
                    </li>
                    <li><a target="_blank" href="http://fontawesome.io/">FONTAWESOME</a></li>
                    <li><a target="_blank" href="http://www.bootcdn.cn/font-awesome/">FONT-AWESOME</a></li>
                    <li><a target="_blank" href="http://www.gettemplate.com/">GETTEMPLATE</a></li>
                    <li><a target="_blank" href="https://www.froala.com/design-blocks">Froala Desing Block</a>
                    </li>
                    <li><a target="_blank" href="http://ace.jeka.by/">ACE</a></li>
                    <li><a target="_blank"
                           href="http://webapplayers.com/inspinia_admin-v2.7.1/">inspinia_admin</a></li>
                    <li><a target="_blank" href="http://win10ui.yuri2.cn/2.x.php">win10ui</a></li>
                    <li><a target="_blank" href="{{url('doc/newpage')}}">Froala Desing Block Demo</a></li>
                    <li><a href="http://www.jqhtml.com/bootstraps-syntaxhigh/index.html">前端资源站点</a></li>
                    <li><a href="http://www.codingdrama.com/bootstrap-markdown/">BOOTSTRAP-MARKDOWN</a></li>
                    <li><a href="http://www.bootcss.com/p/bootstrap-wysiwyg/">BOOTSTRAP-WYSIWYG</a></li>
                    <li><a href="https://mp.weixin.qq.com/s/wxxGavmw5mH-Rhe4i7e8LA">ECMAScript 6</a></li>
                    <li><a href="https://www.cnblogs.com/zfc2201/p/3452476.html">ECMAScript 7</a></li>
                    <li><a href="http://m.blog.csdn.net/lihefei_coder/article/details/75068578">ECMAScript 8</a>
                    </li>
                    <li><a href="https://zhuanlan.zhihu.com/p/29869797">21天造React</a></li>
                    <li><a href="https://segmentfault.com/u/jinyunlong/articles?page=3">全栈REACT</a></li>
                    <li><a href="https://segmentfault.com/u/jinyunlong/articles?page=3">全栈REACT</a></li>
                    <li><a href="https://electronjs.org/">electronjs.org</a></li>
                    <li><a href="https://segmentfault.com/a/1190000006207600">electronjs指南</a></li>
                    <li><a href="https://mobile.ant.design/index-cn">支付宝移动组件库</a></li>
                    <li><a href="https://segmentfault.com/a/1190000006207600">微信移动组件库</a></li>
                    <li><a href="https://mp.weixin.qq.com">微信小程序</a></li>
                    <li><a href="http://developer.baidu.com/">百度开发者中心</a></li>
                    <li><a href="http://developer.baidu.com/">腾讯开发者中心</a></li>
                    <li><a href="http://developer.baidu.com/">阿里开发者中心</a></li>
                    <li><a href="https://open.weixin.qq.com/">腾讯开放平台</a></li>
                    <li><a href="http://www.easyicon.net/">简单图标搜索</a></li>
                    <li><a href="http://www.iconfont.cn/">iconfont</a></li>
                    <li><a href="https://www.hotjar.com">hotjar把我想做的跨站点赞的插件做了:D基于Nodejs 和 React</a></li>
                    <li><a href="https://www.swoole.com/">php swoole</a></li>
                    <li><a href="http://less.bootcss.com/">less 参考</a></li>
                    <li><a href="http://www.gruntjs.net/">Grunt</a></li>
                    <li><a href="http://www.gulpjs.com.cn/">Glup</a></li>
                    <li><a href="http://webpack.github.io/">webpack</a></li>
                    <li><a href="http://www.jianshu.com/p/42e11515c10f">webpack 看这一篇就够了</a></li>
                    <li><a href="https://www.cnblogs.com/willian/p/5603764.html">Grunt、gulp、webpack、不要听着高大上你就上，试试Codekit?</a>
                    </li>
                    <li><a href="https://weex.apache.org/cn/playground.html">weex</a></li>
                    <li><a href="https://segmentfault.com/a/1190000011027225">网易严选App感受Weex开发</a></li>
                    <li><a href="http://www.foundcss.com/sites">foundcss</a></li>
                    <li><a href="http://node-os.com/">node-os</a></li>
                    <li><a href="http://blog.ywulin.com/201709102311.html">ywulin前端总结</a></li>
                    <li><a href="http://framework7.cn/Index/index.html">framework7 比较完善好用的移动前端库</a></li>
                    <li><a href="http://cordova.apache.org/">cordova</a></li>
                    <li><a href="https://github.com/yawuling/vue-framework7">vue-framework7
                            的栗子，感觉性能略微比不用vue的差了一点</a></li>
                    <li><a href="https://zhuanlan.zhihu.com/p/23503986">HTML5移动端交互——手势操作篇</a></li>
                    <li><a href="http://www.jianshu.com/p/b8a6824c8e07">后台小白前端入门－－RequireJS</a></li>
                </ol>
            </div>
            <div class="col-sm-3">
                <h4>重点话题</h4>
                <ol>
                    <li><a href="https://travis-ci.org/">持续集成</a></li>
                    <li><a href="https://codecov.io">自动化测试</a></li>
                    <li><a href="https://www.gitbook.com">文档自动分析</a></li>
                    <li><a href="https://tongji.baidu.com/web/welcome/login">百度统计</a></li>
                    <li><a href="https://tongji.baidu.com/web/welcome/login">Google统计 被墙了</a></li>
                    <li><a href="https://www.bugzilla.org/">bugzilla</a></li>
                    <li><a href="http://tool.chinaz.com/">站长工具</a></li>
                    <li><a href="https://github.com/tqchen/tinyflow">分布式系统 CDN</a></li>
                    <li>大数据接口 【开放接口】</li>
                    <li>人工智能接口【开放接口】</li>
                    <li>IDE使用 【storm系列】</li>
                    <li>团队管理技巧 【敏捷】</li>
                    <li>源码管理技巧 【git】</li>
                    <li>已有资源接入 【这个话题太大了】</li>
                    <li><a href="https://app.apiary.io/caolei/editor">Rest接口文档工具</a></li>
                    <li><a href="http://open.leancloud.cn/">IT公司管理规范</a></li>
                    <li><a href="https://docsify.js.org">docsify</a></li>
                    <li><a href="https://docute.js.org/">docute</a></li>
                </ol>
            </div>

            <div class="col-sm-3">
                <h4>待解决问题</h4>
                <ol>
                    <li>Session使用和跨域</li>
                    <li>curd后的修改</li>
                    <li>发布命令详解</li>
                    <li>运行环境的配置</li>
                    <li><a href="https://vectormagic.com/">svg图标生成</a></li>
                    <li><a href="http://simurai.com/archive/buttons/#markup">BonBon</a></li>
                    <li><a href="http://www.bootcdn.cn/sweetalert/readme/">sweetalert</a></li>
                    <li><a href="https://bjango.com/ios/istat/">bjango</a></li>
                    <li><a href="http://flexboxgrid.com/">flexboxgrid</a></li>
                    <li><a href="http://flexboxgrid.com/">normalize.css</a></li>
                </ol>
            </div>
            <div class="col-sm-3">
                <h4>静态页面生成器</h4>
                <ol>
                    <li><a href="http://gohugo.io/">hugo</a></li>
                    <li><a href="http://www.gohugo.org/">hugo 中文文档</a></li>
                    <li><a href="https://hexo.io/">hexo</a></li>
                    <li><a href="https://hexo.io/zh-cn/docs/">hexo 中文文档</a></li>
                    <li><a href="https://jekyllrb.com/">jekyll</a></li>
                    <li><a href="http://jekyll.com.cn/">jekyll 中文文档</a></li>
                </ol>
            </div>
            <div class="col-sm-3">
                <h4>持续集成</h4>
                <ol>
                    <li>Git Hub</li>
                    <li>Git Book</li>
                    <li>Git CI</li>
                    <li><a href="https://yeasy.gitbooks.io">Docker</a></li>
                    <li><a href="https://www.vagrantup.com/"> Vagrant </a></li>
                </ol>
            </div>

            <div class="col-sm-3">
                <h4>各种规范</h4>
                <ol>
                    <li>Stack Overflow Markdown 规范</li>
                    <li>文案排版指北</li>
                    <li>提问的智慧</li>
                </ol>
            </div>
            <div class="col-sm-3">
                <h4>各种协议</h4>
                <ol>
                    <li>「署名-非商业性使用」</li>
                    <li>MIT</li>
                </ol>
            </div>
            <div class="col-sm-3">
                <h4>CDN</h4>
                <ol>
                    <li><a href="http://www.bootcdn.cn/font-awesome/">BOOTCDN</a></li>
                    <li><a href="http://www.bootcdn.cn/">又拍云CDN</a></li>
                    <li><a href="http://cdn.code.baidu.com/">百度CDN</a></li>
                    <li>淘宝CDN</li>
                    <li>腾讯CDN</li>
                    <li><a href="https://www.staticfile.org/">九牛CDN</a></li>
                    <li><a href="http://lib.sinaapp.com/">Sina CDN</a></li>
                </ol>
            </div>
            <div class="col-sm-3">
                <h4>社会化网络</h4>
                <ol>
                    <li><i class="fa fa-github"></i> <a target="_blank"
                                                        href="https://github.com/pplboy">Github</a></li>
                    <li><i class="fa fa-linkedin"></i> <a target="_blank"
                                                          href="http://cn.linkedin.com/in/pplboy">LinkIn</a>
                    </li>
                    <li><i class="fa fa-linkedin"></i> <a target="_blank"
                                                          href="http://www.jianshu.com/u/773f33ffa8d9">简书</a>
                    </li>
                    <li><i class="fa fa-linkedin"></i> <a target="_blank"
                                                          href="https://www.douban.com/people/169342722/">豆瓣</a>
                    </li>
                    <li><i class="fa fa-linkedin"></i> <a target="_blank"
                                                          href="https://segmentfault.com/u/charlie_cao">SementFault</a>
                    </li>
                    <li><i class="fa fa-linkedin"></i> <a target="_blank" href="https://twitter.com/pplboy">Twitter</a>
                    </li>
                    <li><i class="fa fa-linkedin"></i> <a target="_blank"
                                                          href="https://www.instagram.com/pplboy">Instagram</a>
                    </li>
                    <li><i class="fa fa-facebook"></i> <a target="_blank"
                                                          href="https://www.facebook.com/pplboy">FaceBook</a>
                    </li>
                    <li><i class="fa fa-linkedin"></i> <a target="_blank"
                                                          href="https://www.zhihu.com/people/charlie_cao">知乎</a>
                    </li>
                    <li><a href="https://xueqiu.com/6784378572">雪球</a></li>
                    <li><i class="fa fa-linkedin"></i> <a target="_blank" href="http://weibo.com/charlie19817">微博</a>
                    </li>
                </ol>
            </div>
            <div class="col-sm-3">
                <h4>头条</h4>
                <ol>
                    <li>开发者头条</li>
                    <li>极客头条</li>
                    <li> 掘金稀土</li>
                    <li>CocoaChina</li>
                    <li>稀土掘金</li>
                    <li>伯乐在线</li>
                </ol>
            </div>
            <div class="col-sm-3">
                <h4>网络时代的节点</h4>
                <ol>
                    <li><a href="">WIKI</a></li>
                    <li><a href="">GITHUB</a></li>
                    <li><a href="">TED</a></li>
                    <li><a href="">buffer.com</a></li>
                </ol>
            </div>
            <div class="col-sm-3">
                <h4>网络时代全球工作机会</h4>
                <ol>
                    <li>
                        <a href="https://www.eventbrite.com/e/hangzhou-hiring-tournament-multiple-tech-roles-tickets-39220520633?aff=jarod">全球工作机会</a>
                    </li>
                    <li><a href="">seek</a></li>
                    <li><a href="https://jarodise.com/">数字游民部落</a></li>
                    <li><a href="">斯坦福大学的计算机科学公开课</a></li>
                    <li><a href="">b站上的俩老外，学英语的好地方</a></li>
                </ol>
            </div>
            <div class="col-sm-3">
                <h4>算法</h4>
                <ol>
                    <li><a href="https://www.zhihu.com/question/20368410">算法站点</a></li>
                </ol>
            </div>
            <div class="col-sm-3">
                <h4>Hack</h4>
                <ol>
                    <li><a href="https://wenku.baidu.com/view/87b3cffa581b6bd97e19ea48.html">黑客站点</a></li>
                    <li><a href="https://news.ycombinator.com/news">黑客新闻</a></li>
                </ol>
            </div>
            <div class="col-sm-3">
                <h4>信仰和造物者</h4>
                <ol>
                    <li><a href="">工程师</a></li>
                </ol>
            </div>

            <div class="col-sm-3">
                <h4>工作机会</h4>
                <ol>
                    <li><a href="">51job</a></li>
                    <li><a href="">澳洲招聘</a></li>
                    <li><a href="">美国招聘</a></li>
                    <li><a href="">加拿大招聘</a></li>
                    <li><a href="">日本招聘</a></li>
                    <li><a href="">英国招聘</a></li>
                    <li><a href="">新加坡招聘</a></li>
                    <li><a href="">网络兼职</a></li>
                    <li><a href="">创业项目</a></li>
                    <li><a href="">这里有个想法，通过爬虫汇聚这些网站的最新招聘信息</a></li>
                </ol>
            </div>

            <div class="col-sm-3">
                <h4>碎片</h4>
                <ol>
                    <li>各种零碎</li>
                </ol>
            </div>
            <div class="col-sm-3">
                <h4>PPT</h4>
                <ol>
                    <li><a href="https://slides.com/">在线PPT slides</a></li>
                </ol>
            </div>
            <div class="col-sm-3">
                <h4>脑图</h4>
                <ol>
                    <li></li>
                </ol>
            </div>
            <div class="col-sm-3">
                <pre>
    基本学习
    laravel 创建基本应用
    laravle + React构建单页应用(SPA)
    laravle + Vue构建单页应用(SPA)
    laravle + React + antd
    用户登录授权
    Oauth2
    接口即服务
    进阶学习
    docker 构建统一开发部署环境 容器即服务
    编辑器统一
    版本管理
    持续集成
    文档支持 API + 应用方法
    团队开发规范
    开发扩展性
    扩展，产品原型设计
    软件质量，测试覆盖
    这个系列的文章完成后可以灵活的构建web应用系统
                </pre>
            </div>
            <div class="col-sm-3">
                <pre>
<b>首页规划</b>
首页三大区块，1 本项目目的区域，2 文档区域，3，解决的问题区域
【目的】
1。使用了最新的开发技术和流程进行开发。实验了各种新特性和新理念。
2。提供各种文档的快捷链接，方便国内开发者
3。提供各种新技术的试验文档。
4。创建讨论区，讨论一套真正开放和便捷的开发辅助站点。
                </pre>
            </div>
            <div class="col-sm-3">
                <pre>
<b>平台互通</b>
用户 -> SEO搜索 { 谷歌，百度，必应 } -> 博客 -> { Weibo，Github，Twitter，Facebook }
用户 -> 微博 -> { 博客，Instagram }
用户 -> Github -> 博客
                    用户 -> 知乎，SegmentFault -> { 博客 } </pre>
            </div>
            <div class="col-sm-3">
                <pre>
<b>git项目参与方法</b> <a href="https://www.gitbook.com/book/ryancao/php-developer-prepares/details">参考</a>
本项目在 Github 上维护，欢迎参与：https://github.com/zacao/php-developer-prepares。
在 GitHub 上把本项目 fork 到自己的仓库，如 your-username>/php-developer-prepares，然后 clone 到本地，并设置用户信息。
$ git clone git@github.com:your-username/php-developer-prepares.git
$ cd php-developer-prepares
$ git config user.name "yourname"
$ git config user.email "your email"
修改代码后提交，并推送到自己的仓库。
$ #do some change on the content
$ git commit -am "Fix issue #1: change helo to hello"
$ git push
在 GitHub 网站上提交 pull request。
定期使用项目仓库内容更新自己仓库内容。
$ git remote add upstream https://github.com/zacao/php-developer-prepares
$ git fetch upstream
$ git checkout master
$ git rebase upstream/master
                    $ git push -f origin master</pre>
            </div>
            <div class="col-sm-3">
                <pre>
<b>用ptyhon写一个个人内容管理工具</b>
这个工具基于 tag 进行内容分类和检索
内容可以选择各种输入类型
比如链接 文本 音频 重要日期等等
这个系统基于 github 管理 并使用 git生态链中的工具自动化生成
比如，平时看到比较好的链接
就选择 链接模式，输入文本，链接，标签，标签可以包含为什么寻找到这个链接的关键字
再比如 每天需要写日记
就选择 日记，输入标题，日记内容，标签，标签可以归类日记形成日记本
再比如 需要记住重要人的生日
就选择 重要时间， 输入 时间，备注，标签，自动打上重要时间标签
再比如 需要记下日更的身体状态
再比如 需要记下各种系统的密码
再比如 需要记下资产状况
再比如 需要记下读后感
https://ryancao.gitbooks.io/php-developer-prepares/content/preface/cross-the-gfw.html
提交的同时，本地缓存一个无格式的文档数据库中，并在合适的时候【比如有wifi】自动上传进入git个人home
定期的本地内容会pull出去，防止本地爆掉。
为通过github托管的这个库增加一个生态工具
可以通过站点查看自己所有的内容，并管理内容生成自动化的比如 gitbook，gitlist ，git日更之类的展现，可评论，可分享，加入社会化属性，
有的内容可以做版本控制，有的内容可以合并别人的提交。
一切的入口，通过一个跨平台的应用简单构成，核心使用python来调用各种工具。
并且暴露出接口，为各种内容管理工具提供插件，让内容管理工具变成客户端。
人类历史上的真正的大数据汇集，相当于网络人脑的存储空间。
这也算是一种计算机神经网络吧。
                    太有意思了。可以考虑做做。。。。。</pre>


                <pre>

sudo docker run --detach \
    --hostname 192.168.1.103:880 \
    --publish 8443:443 --publish 880:80 --publish 822:22 \
    --name gitlab \
    --restart always \
    --volume /Users/caolei/Desktop/gitlab/config:/etc/gitlab \
    --volume /Users/caolei/Desktop/gitlab/logs:/var/log/gitlab \
    --volume /Users/caolei/Desktop/gitlab/data:/var/opt/gitlab \
    gitlab/gitlab-ce:latest


                    docker run -d --name gitlab-runner --restart always \
  -v /Users/caolei/Desktop/gitlab/gitlab-runner/config:/etc/gitlab-runner \
  -v /var/run/docker.sock:/var/run/docker.sock \
  gitlab/gitlab-runner:latest
                </pre>

            <pre>
                PHP 生产力

                GitLab https://docs.gitlab.com/omnibus/settings/configuration.html
                php运行环境 laravel
                GitLab Ci 持续集成 https://blog.csdn.net/aixiaoyang168/article/details/72168834
                php测试环境
                php线上环境
                分布式可扩展可监控的线上环境
                项目文档仓库
                汇总面板
                项目博客
                统一登录 OAuth
                配合scrum的项目管理工具
                TDD自动化测试

                开发工具镜像

                日志服务
                大数据服务 hadoop
                通知服务 swoop
                搜索服务 sphinx

                统一脚本部署



            </pre>

            </div>

            <div class="col-sm-3">
                <ol>
                    <li>快捷键:大写所选 Command+Shift+U</li>
                    <li>快捷键:选中内容之外生成标签 选中 Command+alt+t 输入 需要的标签</li>
                    <li>快捷键:表达式生成html标签 ol>li>h1> tab</li>
                </ol>
            </div>
        </div>
    </div>
    <script>
        $(function () {
            var $container = $('#c');
            $container.imagesLoaded(function () {
                $container.masonry({
                    itemSelector: '.col-sm-3',
                    gutter: 0,
                    isAnimated: true,
                });
            });
        });
    </script>
@stop
