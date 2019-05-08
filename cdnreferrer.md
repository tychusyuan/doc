# cdn 防盗链
## 目标
防止cdn资源被他人盗用
防止不必要的支出
### 目前防盗链手段有三种
referer
时间戳+md5
中央鉴权
## referer/ip过滤
在nginx那里利用valid_referers来定义有效来源，然后返回相关的状态码即可
## 时间戳+md5
### URL地址类似：
#### 目录方式 
http://DomainName/TimeID/HashID/FileName
#### 参数方式
http://DomainName/Filename?auth_key=timestamp-rand-uid-md5hash
### DomainName：
客户网站的域名
### TimeID: 
用户访问时客户源服务器的时间，做为 URL 的一部分，同时作为计 算 HashID 的一个因子，格式：YYYYMMDDHHMM
### HashID: 
以 TimeID、FileName 和预先设定好的 SecureID 共同做 MD5 获得的 字符串，即 md5（SecureID +TimeID+FileName）
### FileName:
媒体文件存储的目录名和文件名，应该保证不同的媒体文件用不同 的名字，作为 ChinaCache 节点应用服务器回源站取内容的基础。
### 具体实现使用nginx+lua
#### 基于时间的md5值多组实现平滑替换
#### 可以使用动态链接库so文件 
## 中央鉴权
### 鉴权服务
集中鉴权
不再依赖时间戳和md5值，鉴权方式更丰富
### 自建鉴权服务
使用自己的鉴权服务器，cdn将需要鉴权的信息发给鉴权服务器进行鉴权，业务逻辑对外黑盒，通用性和安全性较高
#### 使用cdn提供的鉴权服务
租用第三方cdn提供的鉴权服务，cdn将需要鉴权的信息发给鉴权服务器进行鉴权，业务逻辑对外变成白盒