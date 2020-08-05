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

## 黑苹果
### 引导时卡在一堆加号 ++++
``` shell
Kernel and Kexts Patches->kernelPm 勾选
或者Driverx64UEFI缺少驱动，升级clover 补选一下驱动
```

# proxy list
``` shell
vim ~/.zshrc

alias proxy='export all_proxy=socks5://127.0.0.1:1080'
alias unproxy='unset all_proxy'
```
