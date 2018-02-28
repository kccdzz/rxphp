# rxphp
A PHP framework written by renxing

概述
--------
本人根据多年PHP开发经验，使用纯底层PHP代码实现的一个简洁的MVC三层框架。
借鉴ThinkPHP的访问模式：`http://localhost/?c=controller&a=action&var=value`

目前PHP相关的框架有很多，我大多都使用或了解过，个人的感受就是这些框架虽然
功能很多很完善，但也因此造成了较大的学习成本。对于很多人来说，可能就是想做
一个简单的小型网站，就是基本的增、删、改、查，想要使用某个框架，光是手册就
得学习好长一段时间。因此，我根据自己多年的所学，编写了这套简洁的PHP框架，
一是用在自己的网站上，同时也希望能够帮助想要快速搭建简单PHP站点的开发者。
大家在使用过程中有任何问题或者建议，都可以告诉我：kccdzz@qq.com。

目录结构
--------
    ├─rxphp 框架系统根目录（需要将服务器的虚拟主机根目录定位到这里）
    │  ├─app            用户自己的MVC代码
    │  │  ├─run.php     框架核心运行文件
    │  │  ├─Index       网站前台入口
    │  │  │  ├─controller  控制器访问层
    │  │  │  ├─logic       业务逻辑层
    │  │  │  ├─model       数据模型层
    │  │  │  ├─view        HTML页面视图层(Smarty模板)
    │  │  │  ├─view_c      Smarty模板的缓存目录
    │  │  ├─Admin       网站后台入口
    │  │  ├─ ...        其他自定义入口
    │  ├─core           框架核心代码
    │  │  ├─common.php  框架内置的常用的函数
    │  │  ├─conn_db.php 数据库连接信息
    │  │  ├─mysql.class.php MySQL数据库的基本操作封装
    │  │  ├─require.php 核心入口文件包含
    │  │  ├─func        自定义函数目录
    │  │  ├─service     自定义服务类目录
    │  │  ├─smarty      smarty核心文件目录
    │  ├─data           此目录存放一些资源文件
    │  ├─static         存放css和js静态资源文件
    │  ├─config.php     基础配置文件
    │  ├─index.php      框架入口访问文件
    │  ├─README.md      框架说明文档

运行方法
--------
clone项目到你自己的开发目录下，然后将服务器(nginx/apache)的虚拟主机根目录指向`rxphp目录`，
在本地创建数据库`rxphp`(utf8编码)，然后导入数据库SQL文件(`/rxphp/data/rxphp.sql`)。
然后，在浏览器访问 `http://yourdomain` 即可。


![Alt text](https://raw.githubusercontent.com/kccdzz/rxphp/master/data/png/web1.png)

使用说明
--------
假设想要开发一个用户信息的列表，那么首先进入 `/rxphp/app/Index` 目录：
在`controller`目录创建`UserController.php`，
在`logic`目录创建`UserLogic.php`，
在`model`目录创建`UserModel.php`，
在`view`目录创建`User`目录，然后创建具体action的html文件。
具体每个文件的内容可以参考Index的Demo。
如果要访问用户列表，使用：`http://yourdomain/index.php?c=User&a=index`,
如果要添加用户，使用：`http://yourdomain/index.php?c=User&a=add`。





















