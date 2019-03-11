# macos
## 显卡选择
```shell
### 强制使用核显(集成显卡)
sudo pmset -a GPUSwitch 0
### 强制使用独立显卡
sudo pmset -a GPUSwitch 1
### 自动切换
sudo pmset -a GPUSwitch 2
```