+++
title = '网络安全学习知识库'
date = 2024-09-01T20:11:12+08:00
draft = false
tags = 'Hacker'
categories = '信息安全'
+++

## 1.1. Web技术演化
### 1.1.1. 静态页面
在互联网最初开始的时候，Web网站的主要内容是静态的，由文字和图片组成，制作和表现形式也是以表格为主。当时的用户行为也非常简单，仅仅是浏览网页。

### 1.1.2. 多媒体阶段
随着技术的不断发展，音频、视频、Flash等多媒体技术诞生了。多媒体的加入使得网页变得更加生动形象，网页上的交互也给用户带来了更好的体验。

### 1.1.3. CGI阶段
渐渐的，多媒体已经不能满足人们的请求，于是CGI（Common Gateway Interface）应运而生。CGI定义了Web服务器与外部应用程序之间的通信接口标准，因此Web服务器可以通过CGI执行外部程序，让外部程序根据Web请求内容生成动态的内容。

在这个时候，各种编程语言如PHP/ASP/JSP也逐渐加入市场，基于这些语言可以实现更加模块化的、功能更强大的应用程序。

### 1.1.4. Ajax
在开始的时候，用户提交整个表单后才能获取结果，用户体验极差。于是Ajax（Asynchronous Javascript And XML）技术逐渐流行起来，它使得应用在不更新整个页面的前提下也可以获得或更新数据。这使得Web应用程序更为迅捷地回应用户动作，并避免了在网络上发送那些没有改变的信息。

### 1.1.5. MVC
随着Web应用开发越来越标准化，出现了MVC等思想。MVC是Model/View/Control的缩写，Model用于封装数据和数据处理方法，视图View是数据的HTML展现，控制器Controller负责响应请求，协调Model和View。

Model，View和Controller的分开，是一种典型的关注点分离的思想，使得代码复用性和组织性更好，Web应用的配置性和灵活性也越来越好。而数据访问也逐渐通过面向对象的方式来替代直接的SQL访问，出现了ORM（Object Relation Mapping）的概念。

除了MVC，类似的设计思想还有MVP，MVVM等。

### 1.1.6. RESTful
在CGI时期，前后端通常是没有做严格区分的，随着解耦和的需求不断增加，前后端的概念开始变得清晰。前端主要指网站前台部分，运行在PC端、移动端等浏览器上展现给用户浏览的网页，由HTML5、CSS3、JavaScript组成。后端主要指网站的逻辑部分，涉及数据的增删改查等。

此时，REST（Representation State Transformation）逐渐成为一种流行的Web架构风格。

REST鼓励基于URL来组织系统功能，充分利用HTTP本身的语义，而不是仅仅将HTTP作为一种远程数据传输协议。一般RESTful有以下的特征：

#### 域名和主域名分开
api.example.com
example.com/api/
#### 带有版本控制
api.example.com/v1
api.example.com/v2
#### 使用URL定位资源
GET /users 获取所有用户
GET /team/:team/users 获取某团队所有用户
POST /users 创建用户
PATCH/PUT /users 修改某个用户数据
DELETE /users 删除某个用户数据
#### 用 HTTP 动词描述操作
GET 获取资源，单个或多个
POST 创建资源
PUT/PATCH 更新资源，客户端提供完整的资源数据 是
DELETE 删除资源
#### 正确使用状态码
使用状态码提高返回数据的可读性
默认使用 JSON 作为数据响应格式
有清晰的文档
### 1.1.7. 云服务
随着时间的发展，Web的架构越发复杂，负载均衡、数据库分表、异地容灾、缓存、CDN、消息队列等技术开始应用，增加了Web开发和运维的复杂度。同时云服务开始逐渐发展，部署环境容器化，各个功能拆成微服务或是Serverless的架构。

### 1.1.8. 参考链接
[Scaling webapps for newbs](https://arcentry.com/blog/scaling-webapps-for-newbs-and-non-techies/)  
` GitHub 的 Restful HTTP API 设计分解 <https://learnku.com/articles/24050>`_

## 1.2. 计算机网络
### 1.2.1. 计算机通信网的组成
计算机网络由通信子网和资源子网组成。

其中通信子网负责数据的无差错和有序传递，其处理功能包括差错控制、流量控制、路由选择、网络互连等。

其中资源子网： 是计算机通信的本地系统环境，包括主机、终端和应用程序等， 资源子网的主要功能是用户资源配置、数据的处理和管理、软件和硬件共享以及负载 均衡等。

计算机通信网就是一个由通信子网承载的、传输和共享资源子网的各类信息的系统。

### 1.2.2. 通信协议
为了完成计算机之间有序的信息交换，提出了通信协议的概念，其定义是相互通信的双方（或多方）对如何进行信息交换所必须遵守的一整套规则。

协议涉及到三个要素，分别为：

语法：语法是用户数据与控制信息的结构与格式，以及数据出现顺序的意义
语义：用于解释比特流的每一部分的意义
时序：事件实现顺序的详细说明
## 1.2.3. OSI七层模型
### 1.2.3.1. 简介
OSI（Open System Interconnection）共分为物理层、数据链路层、网络层、传输层、会话层、表示层、应用层七层，其具体的功能如下。

### 1.2.3.2. 物理层
提供建立、维护和释放物理链路所需的机械、电气功能和规程等特性
通过传输介质进行数据流(比特流)的物理传输、故障监测和物理层管理
从数据链路层接收帧，将比特流转换成底层物理介质上的信号
### 1.2.3.3. 数据链路层
在物理链路的两端之间传输数据
在网络层实体间提供数据传输功能和控制
提供数据的流量控制
检测和纠正物理链路产生的差错
格式化的消息称为帧
### 1.2.3.4. 网络层
负责端到端的数据的路由或交换，为透明地传输数据建立连接
寻址并解决与数据在异构网络间传输相关的所有问题
使用上面的传输层和下面的数据链路层的功能
格式化的消息称为分组
### 1.2.3.5. 传输层
提供无差错的数据传输
接收来自会话层的数据，如果需要，将数据分割成更小的分组，向网络层传送分组并确保分组完整和正确到达它们的目的地
在系统之间提供可靠的透明的数据传输,提供端到端的错误恢复和流量控制
### 1.2.3.6. 会话层
提供节点之间通信过程的协调
负责执行会话规则（如：连接是否允许半双工或全双工通信）、同步数据流以及当故障发生时重新建立连接
使用上面的表示层和下面的传输层的功能
### 1.2.3.7. 表示层
提供数据格式、变换和编码转换
涉及正在传输数据的语法和语义
将消息以合适电子传输的格式编码
执行该层的数据压缩和加密
从应用层接收消息，转换格式，并传送到会话层，该层常合并在应用层中
### 1.2.3.8. 应用层
包括各种协议，它们定义了具体的面向拥护的应用：如电子邮件、文件传输等
### 1.2.3.9. 总结
低三层模型属于通信子网，涉及为用户间提供透明连接，操作主要以每条链路（ hop-by-hop）为基础，在节点间的各条数据链路上进行通信。由网络层来控制各条链路上的通信，但要依赖于其他节点的协调操作。

高三层属于资源子网，主要涉及保证信息以正确可理解形式传送。

传输层是高三层和低三层之间的接口，它是第一个端到端的层次，保证透明的端到端连接，满足用户的服务质量（ QoS）要求，并向高三层提供合适的信息形式。

## 1.3. 域名系统
### 1.3.1. 域名系统工作原理
DNS解析过程是递归查询的，具体过程如下：

用户要访问域名www.example.com时，先查看本机hosts是否有记录或者本机是否有DNS缓存，如果有，直接返回结果，否则向递归服务器查询该域名的IP地址
递归缓存为空时，首先向根服务器查询com顶级域的IP地址
根服务器告知递归服务器com顶级域名服务器的IP地址
递归向com顶级域名服务器查询负责example.com的权威服务器的IP
com顶级域名服务器返回相应的IP地址
递归向example.com的权威服务器查询www.example.com的地址记录
权威服务器告知www.example.com的地址记录
递归服务器将查询结果返回客户端
### 1.3.2. 根服务器
根服务器是DNS的核心，负责互联网顶级域名的解析，用于维护域的权威信息，并将DNS查询引导到相应的域名服务器。

根服务器在域名树中代表最顶级的 . 域， 一般省略。

13台IPv4根服务器的域名标号为a到m，即a.root-servers.org到m.root-servers.org，所有服务器存储的数据相同，仅包含ICANN批准的TLD域名权威信息。

### 1.3.3. 权威服务器
权威服务器上存储域名Zone文件，维护域内域名的权威信息，递归服务器可以从权威服务器获得DNS查询的资源记录。

权威服务器需要在所承载的域名所属的TLD管理局注册，同一个权威服务器可以承载不同TLD域名，同一个域也可以有多个权威服务器。

### 1.3.4. 递归服务器
递归服务器负责接收用户的查询请求，进行递归查询并相应用户查询请求。在初始时递归服务器仅有记录了根域名的Hint文件。

### 1.3.5. DGA
DGA（Domain Generate Algorithm，域名生成算法）是一种利用随机字符来生成C&C域名，从而逃避域名黑名单检测的技术手段，常见于botnet中。

### 1.3.6. DNS隧道
DNS隧道工具将进入隧道的其他协议流量封装到DNS协议内，在隧道上传输。这些数据包出隧道时进行解封装，还原数据。

## 1.4. HTTP标准
### 1.4.1. 报文格式
### 1.4.1.1. 请求报文格式
``` html
<method><request-URL><version>
<headers>

<entity-body>
```
### 1.4.1.2. 响应报文格式
``` html
<version><status><reason-phrase>
<headers>

<entity-body>
```    
### 1.4.1.3. 字段解释
#### method
HTTP动词
常见方法：HEAD / GET / POST / PUT / DELETE / PATCH / OPTIONS / TRACE
扩展方法：LOCK / MKCOL / COPY / MOVE  
#### version
报文使用的HTTP版本  
格式为HTTP/<major>.<minor>  
#### url  
``` html
<scheme>://<user>:<password>@<host>:<port>/<path>;<params>?<query>#<frag>
```
### 1.4.2. 请求头列表
#### Accept  
指定客户端能够接收的内容类型  
Accept: text/plain, text/html  
#### Accept-Charset  
浏览器可以接受的字符编码集  
Accept-Charset: iso-8859-5  
#### Accept-Encoding  
指定浏览器可以支持的web服务器返回内容压缩编码类型  
Accept-Encoding: compress, gzip  
#### Accept-Language  
浏览器可接受的语言  
Accept-Language: en,zh  
#### Accept-Ranges  
可以请求网页实体的一个或者多个子范围字段  
Accept-Ranges: bytes  
#### Authorization  
HTTP授权的授权证书  
Authorization: Basic QWxhZGRpbjpvcGVuIHNlc2FtZQ==  
#### Cache-Control
指定请求和响应遵循的缓存机制 Cache-Control: no-cache
#### Connection
表示是否需要持久连接 // HTTP 1.1默认进行持久连接
Connection: close
#### Cookie
HTTP请求发送时，会把保存在该请求域名下的所有cookie值一起发送给web服务器  
Cookie: role=admin;ssid=1
#### Content-Length
请求的内容长度  
Content-Length: 348  
#### Content-Type  
请求的与实体对应的MIME信息  
Content-Type: application/x-www-form-urlencoded
#### Date
请求发送的日期和时间  
Date: Tue, 15 Nov 2010 08:12:31 GMT
#### Expect
请求的特定的服务器行为  
Expect: 100-continue
#### From
发出请求的用户的Email  
From: user@email.com
#### Host
指定请求的服务器的域名和端口号  
Host: www.github.com
#### If-Match
只有请求内容与实体相匹配才有效  
If-Match: “737060cd8c284d8af7ad3082f209582d”
#### If-Modified-Since
如果请求的部分在指定时间之后被修改则请求成功，未被修改则返回304代码  
If-Modified-Since: Sat, 29 Oct 2018 19:43:31 GMT
#### If-None-Match
如果内容未改变返回304代码，参数为服务器先前发送的Etag，与服务器回应的Etag比较判断是否改变  
If-None-Match: “737060cd8c284d8af7ad3082f209582d”
#### If-Range
如果实体未改变，服务器发送客户端丢失的部分，否则发送整个实体。参数也为Etag
If-Range: “737060cd8c284d8af7ad3082f209582d”
#### If-Unmodified-Since
只在实体在指定时间之后未被修改才请求成功  
If-Unmodified-Since: Sat, 29 Oct 2010 19:43:31 GMT
#### Max-Forwards
限制信息通过代理和网关传送的时间  
Max-Forwards: 10
#### Pragma  
用来包含实现特定的指令  
Pragma: no-cache  
#### Proxy-Authorization  
连接到代理的授权证书  
Proxy-Authorization: Basic QWxhZGRpbjpvcGVuIHNlc2FtZQ==
#### Range
只请求实体的一部分，指定范围  
Range: bytes=500-999  
#### Referer  
先前网页的地址，当前请求网页紧随其后,即来路  
Referer: http://www.zcmhi.com/archives/71.html
#### TE
客户端愿意接受的传输编码，并通知服务器接受接受尾加头信息  
TE: trailers,deflate;q=0.5  
#### Upgrade
向服务器指定某种传输协议以便服务器进行转换（如果支持）  
Upgrade: HTTP/2.0, SHTTP/1.3, IRC/6.9, RTA/x11
#### User-Agent
User-Agent的内容包含发出请求的用户信息
User-Agent: Mozilla/5.0 (Linux; X11)
#### Via
通知中间网关或代理服务器地址，通信协议  
Via: 1.0 fred, 1.1 nowhere.com (Apache/1.1)  
#### Warning  
关于消息实体的警告信息  
Warn: 199 Miscellaneous warning
### 1.4.3. 响应头列表
#### Accept-Ranges
表明服务器是否支持指定范围请求及哪种类型的分段请求  
Accept-Ranges: bytes
#### Age
从原始服务器到代理缓存形成的估算时间（以秒计，非负）  
Age: 12
#### Allow
对某网络资源的有效的请求行为，不允许则返回405  
Allow: GET, HEAD
#### Cache-Control
告诉所有的缓存机制是否可以缓存及哪种类型  
Cache-Control: no-cache
#### Content-Encoding
web服务器支持的返回内容压缩编码类型。  
Content-Encoding: gzip
#### Content-Language
响应体的语言  
Content-Language: en,zh
#### Content-Length
响应体的长度  
Content-Length: 348
#### Content-Location
请求资源可替代的备用的另一地址  
Content-Location: /index.htm
#### Content-MD5
返回资源的MD5校验值  
Content-MD5: Q2hlY2sgSW50ZWdyaXR5IQ==
#### Content-Range
在整个返回体中本部分的字节位置
Content-Range: bytes 21010-47021/47022
#### Content-Type
返回内容的MIME类型  
Content-Type: text/html; charset=utf-8
#### Date
原始服务器消息发出的时间  
Date: Tue, 15 Nov 2010 08:12:31 GMT
#### ETag
请求变量的实体标签的当前值
ETag: “737060cd8c284d8af7ad3082f209582d”
#### Expires
响应过期的日期和时间  
Expires: Thu, 01 Dec 2010 16:00:00 GMT
#### Last-Modified
请求资源的最后修改时间
Last-Modified: Tue, 15 Nov 2010 12:45:26 GMT
#### Location
用来重定向接收方到非请求URL的位置来完成请求或标识新的资源  
Location: http://www.zcmhi.com/archives/94.html
#### Pragma
包括实现特定的指令，它可应用到响应链上的任何接收方  
Pragma: no-cache
#### Proxy-Authenticate
它指出认证方案和可应用到代理的该URL上的参数
Proxy-Authenticate: Basic
#### Refresh
应用于重定向或一个新的资源被创造，在5秒之后重定向（由网景提出，被大部分浏览器支持）
Refresh: 5; url=http://www.zcmhi.com/archives/94.html
#### Retry-After
如果实体暂时不可取，通知客户端在指定时间之后再次尝试  
Retry-After: 120
#### Server
web服务器软件名称  
Server: Apache/1.3.27 (Unix) (Red-Hat/Linux)
#### Set-Cookie
设置Http Cookie Set-Cookie: UserID=JohnDoe; Max-Age=3600;   Version=1
#### Trailer
指出头域在分块传输编码的尾部存在 Trailer: Max-Forwards  
#### Transfer-Encoding
文件传输编码  
Transfer-Encoding:chunked
#### Vary
告诉下游代理是使用缓存响应还是从原始服务器请求  
Vary: *
#### Via
告知代理客户端响应是通过哪里发送的  
Via: 1.0 fred, 1.1 nowhere.com (Apache/1.1)
#### Warning
警告实体可能存在的问题  
Warning: 199 Miscellaneous warning
#### WWW-Authenticate
表明客户端请求实体应该使用的授权方案
#### WWW-Authenticate: Basic
### 1.4.4. HTTP状态返回代码 1xx（临时响应）  
表示临时响应并需要请求者继续执行操作的状态代码。

| Code | 代码 | 说明 |
| :----| :-- | :--- |
| 100 | 继续 |	服务器返回此代码表示已收到请求的第一部分，正在等待其余部分 |
| 101  | 切换协议 |	请求者已要求服务器切换协议，服务器已确认并准备切换 |

### 1.4.5. HTTP状态返回代码 2xx （成功）
表示成功处理了请求的状态代码。

| Code | 代码 | 说明 |
| :----| :--- | :-- |
|200 | 成功 | 服务器已成功处理了请求。 通常，这表示服务器提供了请求的网页
|201|	已创建|	请求成功并且服务器创建了新的资源
|202|	已接受|	服务器已接受请求，但尚未处理
|203|	非授权信息|	服务器已成功处理了请求，但返回的信息可能来自另一来源
|204|	无内容|	服务器成功处理了请求，但没有返回任何内容
|205|	重置内容|	m服务器成功处理了请求，但没有返回任何内容
|206|	部分内容|	服务器成功处理了部分GET请求
### 1.4.6. HTTP状态返回代码 3xx （重定向）
表示要完成请求，需要进一步操作。 通常，这些状态代码用来重定向。

|Code|代码|说明|
|:-- |:- |:-- |
|300|	多种选择|	针对请求，服务器可执行多种操作。 服务器可根据请求者 (user agent) 选择一项操作，或提供操作列表供请求者选择。
|301|	永久移动|	请求的网页已永久移动到新位置。 服务器返回此响应（对 GET 或 HEAD 请求的响应）时，会自动将请求者转到新位置。
|302|	临时移动|	服务器目前从不同位置的网页响应请求，但请求者应继续使用原有位置来进行以后的请求。
|303|	查看其他位置|	请求者应当对不同的位置使用单独的 GET 请求来检索响应时，服务器返回此代码。
|304|	未修改|	自从上次请求后，请求的网页未修改过。 服务器返回此响应时，不会返回网页内容。
|305|	使用代理|	请求者只能使用代理访问请求的网页。如果服务器返回此响应，还表示请求者应使用代理。
|307|	临时重定向|	服务器目前从不同位置的网页响应请求，但请求者应继续使用原有位置来进行以后的请求。

### 1.4.7. HTTP状态返回代码 4xx（请求错误）
这些状态代码表示请求可能出错，妨碍了服务器的处理。

|Code| 代码 |说明 |
|:-- |:- |:-- |
|400|	错误请求|	服务器不理解请求的语法。
|401|	未授权|	请求要求身份验证。对于需要登录的网页，服务器可能返回此响应。
|403|	禁止|	服务器拒绝请求。
|404|	未找到|	服务器找不到请求的网页。
|405|	方法禁用|	禁用请求中指定的方法。
|406|	不接受|	无法使用请求的内容特性响应请求的网页。
|407|	需要代理授权|	此状态代码与 401（未授权）类似，但指定请求者应当授权使用代理。
|408|	请求超时|	服务器等候请求时发生超时。
|409|	冲突|	服务器在完成请求时发生冲突。 服务器必须在响应中包含有关冲突的信息。
|410| 已删除|	如果请求的资源已永久删除，服务器就会返回此响应。
|411|	需要有效长度|	服务器不接受不含有效内容长度标头字段的请求。
|412|	未满足前提条件|	服务器未满足请求者在请求中设置的其中一个前提条件。
|413|	请求实体过大|	服务器无法处理请求，因为请求实体过大，超出服务器的处理能力。
|414|	请求的 URI 过长|	请求的 URI（通常为网址）过长，服务器无法处理。
|415|	不支持的媒体类型|	请求的格式不受请求页面的支持。
|416|	请求范围不符合要求|	如果页面无法提供请求的范围，则服务器会返回此状态代码。
|417|	未满足期望值|	服务器未满足”期望”请求标头字段的要求。

### 1.4.8. HTTP状态返回代码 5xx（服务器错误）
这些状态代码表示服务器在尝试处理请求时发生内部错误。 这些错误可能是服务器本身的错误，而不是请求出错。

|Code|	代码|	说明|
|:-- |:- |:-- |
|500|	服务器内部错误|	服务器遇到错误，无法完成请求。
|501|	尚未实施|	服务器不具备完成请求的功能。例如，服务器无法识|别请求方法时可能会返回此代码。
|502|	错误网关|	服务器作为网关或代理，从上游服务器收到无效响应。
|503|	服务不可用|	服务器目前无法使用（由于超载或停机维护）。 通常，这只是暂时状态。
|504|	网关超时|	服务器作为网关或代理，但是没有及时从上游服务器收到请求。
|505|	HTTP 版本不受支持|	服务器不支持请求中所用的 HTTP 协议版本。