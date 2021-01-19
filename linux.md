## sed
### 两个文件的交集，并集
```shell
cat file1 file2 | sort | uniq > result
cat file1 file2 | sort | uniq -d > result
cat file1 file2 | sort | uniq -u > result
```
第一条命名求两个文件的并集，如果有重复的行只保留一行。
第二条命令求两个文件的交集，即两个文件中都有的行。
第三条命令求两个文件的差集，即只有一个文件中有的行。

### 两个文件合并
```shell
cat file1 file2 > result
paste file1 file2 > result
```
第一条命令是追击的方式，如果file1有n行，file2有m行，result为n+m行。
第二条命令是一个文件的内容在左边，一个文件命令在右边。

### 单个文件去重
```shell
sort file |uniq
sort file |uniq -u
```
第一条命令将重复的多行变为一行！
第二条命令是将有重复的行全部去掉！

### CentOS 8 开启 BBR
```shell
echo "net.core.default_qdisc=fq" >> /etc/sysctl.conf
echo "net.ipv4.tcp_congestion_control=bbr" >> /etc/sysctl.conf
sysctl -p
reboot
sysctl -n net.ipv4.tcp_congestion_control
lsmod | grep bbr
```

### 配置terminal proxy
```shell
alias proxy="
    export http_proxy=socks5://127.0.0.1:1080;
    export https_proxy=socks5://127.0.0.1:1080;
    export all_proxy=socks5://127.0.0.1:1080;
    export no_proxy=socks5://127.0.0.1:1080;
    export HTTP_PROXY=socks5://127.0.0.1:1080;
    export HTTPS_PROXY=socks5://127.0.0.1:1080;
    export ALL_PROXY=socks5://127.0.0.1:1080;
    export NO_PROXY=socks5://127.0.0.1:1080;"
alias unproxy="
    unset http_proxy;
    unset https_proxy;
    unset all_proxy;
    unset no_proxy;
    unset HTTP_PROXY;
    unset HTTPS_PROXY;
    unset ALL_PROXY;
    unset NO_PROXY"
```

### 挂载swap
```shell
sudo mkdir /opt/images/
sudo rm -rf /opt/images/swap
sudo dd if=/dev/zero of=/opt/images/swap bs=1024 count=2048000
sudo mkswap /opt/images/swap
sudo swapon /opt/images/swap
# 卸载
sudo swapoff /opt/images/swap
sudo rm -f /opt/images/swap
```

### 链接缺失
```shell
sudo echo "include /usr/local/lib" >> /etc/ld.so.conf
sudo ldconfig 
```

### 测试cdn加速
```shell
curl -vk --output /dev/null --header "Host:gimg.cdn.pandora.xiaomi.com" https://gimg.cdn.pc.mi.com.w.alikunlun.com/c1738ab9b8a660e139dfca0f12457fc2.webp
```

### 测试cpu速度
```shell
time echo "scale=5000; 4*a(1)" | bc -l -q
```
