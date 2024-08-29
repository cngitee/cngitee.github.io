+++
title = 'Hugo-Notice短标签'
date = 2024-08-30T05:18:46+08:00
draft = false
tags = 'html'
categories = '技术文摘'
+++


1、将您现有的站点初始化为 hugo 模块
``` html
hugo mod init github.com/用户名/REPO
```

2、添加 作为 hugo 模块，以便以后能够获取方便更改hugo-notice
``` html
hugo mod get github.com/martignoni/hugo-notice
```

3、在站点 hugo.toml 配置文件 或 中，添加一个新部分，将当前使用的主题定义为要导入的模块。
``` html
  [module]
  [[module.imports]]
    path = "github.com/martignoni/hugo-notice"
  [[module.imports]]
    path = "你的主题"
```
4、这里要说的如何改中文，官方描述不详细，全靠自己摸石头，  命名为 en.yaml 放在根目录 i18n\ 下就可以
``` html
- id: warning
  translation: "警告"
- id: note
  translation: "注释"
- id: info
  translation: "信息"
- id: tip
  translation: "提示"
  ```
演示：
{{< notice warning >}}
这里是内容！
{{< /notice >}}

{{< notice tip >}}
这里是内容！
{{< /notice >}}

{{< notice note >}}
这里是内容！
{{< /notice >}}

{{< notice info >}}
这里是内容！
{{< /notice >}}