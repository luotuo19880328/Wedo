Wedo快速开发框架

根据数据表，快速生成控制器、模型、VUE界面、接口文档！

系统组成： 
PHP框架使用ThinkPHP5，官网：http://www.thinkphp.cn/ 
UI框架使用iview-admin，官网：https://www.iviewui.com/； 
接口文档使用apidoc，官网：http://apidocjs.com/;

接口生成： 
1、选择你要生成文件的模块； 
2、选择一个数据表，如sys_user表； 
3、生成控制器文件SysUser.php（带接口注释，符合restful标准）和模型文件SysUser.php； 
4、生成路由；

前端生成： 
1、选择一个接口（上步已经生成）； 
2、选择存放文件的目录； 
3、填写该功能的菜单配置； 
4、勾选该数据表中，每个字段的表单组件类型、哪些字段显示在列表、哪些字段用于搜索、哪些字段显示在编辑新增界面； 
例如：
姓名字段，使用输入框； 
出生日期，使用日期控件； 
头像，使用上传； 
简介，使用文本框； 
学历，使用下拉框，同时，你可以为该下拉框配置数据源接口。 
5、生成文件。

这个环节，可以完成后台开发工作至少一半以上的工作量，剩下就是在此基础上写逻辑代码......

如果你只需要生成接口文件，则只进行第一步操作即可
