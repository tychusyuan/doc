# python

## 创建python虚拟环境
```shell
virtualenv -p python3.8 --no-site-packages venv
source venv/bin/activate
pip install --upgrade pip
```
## 配置vscode python 解释器
```shell
vscode配置中搜索 Python: Python Path
${workspaceFolder}/venv/bin/python
```

## python 分组替换
```python
re.sub(r"^([a-zA-Z]+)([0-9]+)([\.]{1}[\w\.]+)$",r"\1*\3","file1.market.xiaomi.com")

file*.market.xiaomi.com
```

## python list 排序
```python
# 简单的dict
lst = [('d', 2), ('a', 4), ('b', 3), ('c', 2)]

# 按照value排序
lst.sort(key=lambda k: k[1])
print lst

# 按照key排序
lst.sort(key=lambda k: k[0])
print lst

# 先按value排序再按key排序
lst.sort(key=lambda k: (k[1], k[0]))
print lst
```
```shell
# 输出---->>>
[('d', 2), ('c', 2), ('b', 3), ('a', 4)]
[('a', 4), ('b', 3), ('c', 2), ('d', 2)]
[('c', 2), ('d', 2), ('b', 3), ('a', 4)]
```
```python
# 复杂的dict

lst = [{'level': 19, 'star': 36, 'time': 1},
       {'level': 20, 'star': 40, 'time': 2},
       {'level': 20, 'star': 40, 'time': 3},
       {'level': 20, 'star': 40, 'time': 4},
       {'level': 20, 'star': 40, 'time': 5},
       {'level': 18, 'star': 40, 'time': 1}]

# 需求:
# level越大越靠前;
# level相同, star越大越靠前;
# level和star相同, time越小越靠前;

# 先按time排序
lst.sort(key=lambda k: (k.get('time', 0)))

# 再按照level和star顺序
lst.sort(key=lambda k: (k.get('level', 0), k.get('star', 0)), reverse=True)

for idx, r in enumerate(lst):
    print 'idx[%d]\tlevel: %d\t star: %d\t time: %d\t' % (idx, r['level'], r['star'],r['time'])
```
```shell
# 输出---->>>
idx[0]   level: 20       star: 40        time: 2        
idx[1]   level: 20       star: 40        time: 3        
idx[2]   level: 20       star: 40        time: 4        
idx[3]   level: 20       star: 40        time: 5        
idx[4]   level: 19       star: 36        time: 1        
idx[5]   level: 18       star: 40        time: 1   
```
