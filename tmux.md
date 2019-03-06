#tmux简明手册
##新建一个session
```shell
tmux # 匿名会话
tmux new -s demo # 命名会话 
```
## 离开一个会话
```shell
exit # 离开当前会话并清理掉session
tmux detach # 断开当前会话，会话在后台运行
```
## 查看tmux session list
```shell
tmux list-session # 查看所有会话
tmux ls # 查看所有会话，提倡使用简写形式
```
## 回到session中
```shell
tmux a # 默认进入第一个会话
tmux a -t demo # 进入到名称为demo的会话
```
##清理session
```shell
tmux kill-session -t demo # 关闭demo会话
tmux kill-server # 关闭服务器，所有的会话都将关闭
```
