# git

## git add 
git add .                               提交被修改的和新建的文件，但不包括被删除的文件                            

git add -u    # --update          update tracked files    更新所有改变的文件，即提交所有变化的文件

git add -A   # --all                  add changes from all tracked and untracked files   提交已被修改和已被删除文件，但是不包括新的文件

## git checkout 
git checkout -- file # 放弃本地修改的某个文件，强制更新为最新版本

git checkout . #本地所有修改的。没有的提交的，都返回到原来的状态

git stash #把所有没有提交的修改暂存到stash里面。可用git stash pop回复。

git reset --hard HASH #返回到某个节点，不保留修改。

git reset --soft HASH #返回到某个节点。保留修改