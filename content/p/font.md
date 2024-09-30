+++
title = 'Hugo-Congo主题修改字体'
date = 2024-08-17T14:43:27+08:00
draft = false
tags = 'html'
categories = '技术文摘'
+++

首先，在本主题 themes/congo/layouts/partials/ 目录下，创建名 extend-head.html 的文件,
然后添加内容如下，保存部署即可！


``` html {linenos=inline}
<html>
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lxgw-wenkai-screen-web/style.css" />
  <style>
    body {
      font-family: "LXGW WenKai Screen";
      font-weight: normal;
    }
  </style>
</head>
<body>
  
</body>
</html>
```
