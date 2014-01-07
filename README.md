qiniu-phpsdk-plupload-demo
==========================

一个基于 [七牛云存储](http://www.qiniu.com/)、 [七牛PHP SDK] (https://github.com/qiniu/php-sdk)及[Plupload](http://www.plupload.com/) 开发的上传Demo。
示例网站：[七牛Plupload上传Demo-配合PHP SDK](http://plupload.sinaapp.com/)

##依赖

1、Plupload 2.0.0 
2、jQuery 1.9.1
3、PHP SDK v6.1.4


## 安装和运行程序

1. 获取源代码：
    `git clone git@github.com:SunLn/qiniu-phpsdk-plupload.git`

2. 编辑 `token.php` 文件,保存
```{php}
$bucket = '<Your Buckete Name>';
$accessKey = '<Your Access Key>';
$secretKey = '<Your Secret Key>';
```
3. 运行网站、选择文件后上传

## 说明

1. 本示例仅演示了如何通过Plupload、七牛PHP SDK上传文件至七牛空间，其中PHP SDK为Plupload颁发uptOken后，Plupload进行上传操作。

2. 如果您想了解更多七牛的上传策略，建议您仔细阅读七牛的官方文档 - [七牛官方文档-上传](http://developer.qiniu.com/docs/v6/api/reference/up/)

3. 通过[七牛Plupload上传Demo-配合PHP SDK](http://plupload.sinaapp.com/)上传文件后，可以通过访问  'http://qiniu-plupload.u.qiniudn.com/' + key 获取上传的资源
