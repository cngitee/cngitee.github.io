+++
title = 'Hugo-Code代码复制'
date = 2024-08-29T21:40:47+08:00
draft = false
tags = 'html'
categories = '技术文摘'
+++


## 建立一个CSS，一个JS文件，细节如下，实现代码复制功能
### 1、CSS：命名为add-copy-btn.css 放在 你的主题/static/js 目录下
``` css 
.highlight {
    position: relative;
}

.highlight pre {
    padding-right: 75px;
    /* background-color:#f8f8f8 !important; */
}

.highlight-copy-btn {
    position: absolute;
    top: 7px;
    right: 7px;
    border: 0;
    border-radius: 4px;
    padding: 1px;
    font-size: 0.8em;
    line-height: 1.5;
    color: #fff;
  background-color: #222; 
    min-width: 50px;
    text-align: center;
}

.highlight-copy-btn:hover {
    background-color: #e70d9f;
}
```
### 2、JS：命名为add-copy-btn.js 放在 你的主题/static/css 目录下
``` js 
(function() {
  'use strict';

  if(!document.queryCommandSupported('copy')) {
    return;
  }

  function flashCopyMessage(el, msg) {
    el.textContent = msg;
    setTimeout(function() {
      el.textContent = "📝复制代码";
    }, 1000);
  }

  function selectText(node) {
    var selection = window.getSelection();
    var range = document.createRange();
    range.selectNodeContents(node);
    selection.removeAllRanges();
    selection.addRange(range);
    return selection;
  }

  function addCopyButton(containerEl) {
    var copyBtn = document.createElement("button");
    copyBtn.className = "highlight-copy-btn";
    copyBtn.textContent = "📝复制代码";
   
  var codeEl = containerEl.firstElementChild;
    copyBtn.addEventListener('click', function() {
      try {
        var selection = selectText(codeEl);
        document.execCommand('Copy');
        selection.removeAllRanges();

        flashCopyMessage(copyBtn, '🖨复制完成')
      } catch(e) {
        console && console.log(e);
        flashCopyMessage(copyBtn, 'Failed :\'(')
      }
    });

    containerEl.appendChild(copyBtn);
  }

  // Add copy button to code blocks
  var highlightBlocks = document.getElementsByClassName('highlight');
  Array.prototype.forEach.call(highlightBlocks, addCopyButton);
})();
```
### 3、在 你的主题/layouts/partials/footer.html 结尾 增加下面代码
``` html
<style><!-- copy code -->
@import url(/css/add-copy-btn.css);
</style>
<script src="{{"/js/add-copy-btn.js" | relURL}}"></script>
```
### 4、在主目录 hugo.toml 文件下加入以下代码配置
``` go
[markup]
  [markup.highlight]
    lineNos = true
    lineNumbersInTable = false
 ```







