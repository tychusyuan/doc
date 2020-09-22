# github cli

## git clone

```shel
yuanliqiang@DESKTOP-1MIG7AB workspace % gh repo clone tychusyuan/ltdptp
Welcome to GitHub CLI!

To authenticate, please run `gh auth login`.
You can also set the GITHUB_TOKEN environment variable, if preferred.
yuanliqiang@DESKTOP-1MIG7AB workspace % gh auth login
? What account do you want to log into? GitHub.com
- Logging into github.com
? How would you like to authenticate? Login with a web browser

! First copy your one-time code: 063B-8556
- Press Enter to open github.com in your browser...
✓ Authentication complete. Press Enter to continue...

? Choose default git protocol HTTPS
- gh config set -h github.com git_protocol https
✓ Configured git protocol
✓ Logged in as tychusyuan
yuanliqiang@DESKTOP-1MIG7AB workspace % gh repo clone tychusyuan/ltdptp
正克隆到 'ltdptp'...
Username for 'https://github.com': tychusyuan@gmail.com
Password for 'https://tychusyuan@gmail.com@github.com':
remote: Enumerating objects: 3, done.
remote: Counting objects: 100% (3/3), done.
remote: Compressing objects: 100% (2/2), done.
remote: Total 3 (delta 0), reused 0 (delta 0), pack-reused 0
展开对象中: 100% (3/3), 完成.
```
