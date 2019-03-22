# gost
## quic
```shell
# 生成私钥
openssl genrsa -out privkey.pem 2048
# 生成证书
openssl req -new -x509 -key privkey.pem -out cacert.pem -days 9999
```