# gost
## quic
```shell
# 生成私钥
openssl genrsa -out privkey.pem 2048
# 生成证书
openssl req -new -x509 -key privkey.pem -out cacert.pem -days 9999
```

```shell
cat > gost.service << EOF
[Unit]
Description=Gost Proxy
After=network.target
Wants=network.target

[Service]
Type=simple
ExecStart=/usr/local/bin/gost -L=:8080
Restart=always

[Install]
WantedBy=multi-user.target
EOF
```
