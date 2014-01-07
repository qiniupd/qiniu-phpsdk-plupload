qiniu-nodejs-plupload-demo
==========================

a upload demo using qiniu-nodejs-sdk and plupload

======================


一个基于 [七牛云存储](http://www.qiniu.com/)、 [七牛Node.js SDK] (http://developer.qiniu.com/docs/v6/sdk/nodejs-sdk.html)及[Plupload](http://www.plupload.com/) 开发的上传Demo。
示例网站：[七牛Plupload上传Demo]( )

##依赖

1、Plupload 2.0.0 
2、jQuery 1.9.1
3、Node.js SDK 6.0.0
4、express

## 安装和运行程序

1. 获取源代码：
    `git clone https://github.com/SunLn/qiniu-nodejs-plupload-demo.git`

2. 安装express 、七牛Node.js SDK 6.0.0
```{javascript}
npm install express
npm install qiniu
```
3. 编辑 `server.js` 文件
```{javascript}
qiniu.conf.ACCESS_KEY = '<Your Access Key>'
qiniu.conf.SECRET_KEY = '<Your Secret Key>'
var uptoken = new qiniu.rs.PutPolicy('<Your Buckete Name>');
```

4. make install

## 说明

1. 本示例仅为了简单演示如何使用Plupload上传文件至七牛，并未引入服务端程序，所以在前端初始化了token值。实际生产环境中，token参数的构建应由服务端完成。

2. 如果您想了解更多七牛的上传策略，建议您仔细阅读七牛的官方文档 - [七牛官方文档-资源上传](http://docs.qiniu.com/api/v6/put.html#uploadToken)

3. 通过[七牛Plupload上传Demo](http://plupload-demo.u.qiniudn.com/)上传文件后，可以通过访问  'http://qiniu-plupload-example.u.qiniudn.com/' + 文件名 获取上传的资源
