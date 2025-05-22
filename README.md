# GIT Exercise

## Bundle 1

### Exercise 1

```bash
A@emmyb23 MINGW64 ~/git-exercise (master)
$ git init
Reinitialized existing Git repository in C:/Users/A/git-exercise/.git/  

A@emmyb23 MINGW64 ~/git-exercise (master)
$ git branch

A@emmyb23 MINGW64 ~/git-exercise (master)
$ git branch -m master main

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git add .

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git commit -m 'Switched branches'
On branch main

Initial commit

nothing to commit (create/copy files and use "git add" to track)        

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git push -u origin main
error: src refspec main does not match any
error: failed to push some refs to 'origin'

A@emmyb23 MINGW64 ~/git-exercise (main)
$ - Create a project folder & initialize git
[1] 1202
bash: -: command not found
bash: initialize: command not found
[1]+  Exit 127                - Create a project folder

A@emmyb23 MINGW64 ~/git-exercise (main)
$ - Make changes to the project (add files and contents)
bash: syntax error near unexpected token `('

A@emmyb23 MINGW64 ~/git-exercise (main)
$ - Rename your main branch from `master` to `main` (If your branch name is already `main` then rename it to `master` and then back to `main`)  
bash: syntax error near unexpected token `('

A@emmyb23 MINGW64 ~/git-exercise (main)
$ - Stage your changes and commit them
bash: -: command not found

A@emmyb23 MINGW64 ~/git-exercise (main)
$ - Create a Github repo and connect it with your project
bash: -: command not found

A@emmyb23 MINGW64 ~/git-exercise (main)
$ - Push your changes to GitHub     
bash: -: command not found

A@emmyb23 MINGW64 ~/git-exercise (main)
$ - Create a new branch `dev`       
bash: dev: command not found
bash: -: command not found

A@emmyb23 MINGW64 ~/git-exercise (ma

A@emmyb23 MINGW64 ~/git-exercise (main)in)
$ git init
Reinitialized existing Git repository in C:/Users/A/git-exercise/.git/  

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git branch

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git branch -m main master

A@emmyb23 MINGW64 ~/git-exercise (master)
$ git branch -m master main

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git add .

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git commit -m 'Switched branches'
On branch main

Initial commit

nothing to commit (create/copy files and use "git ad
$ git remote add origin https://github.com/Emmykarem

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git add README.md
fatal: pathspec 'README.md' did not match any files

fatal: The current branch main has no upstream branch.
To push the current branch and set the remote as upstream, use

    git push --set-upstream origin main

To have this happen automatically for branches without a tracking
upstream, see 'push.autoSetupRemote' in 'git help config'.


A@emmyb23 MINGW64 ~/git-exercise (main)
$ git add .

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git commit -m "I created README file"
[main (root-commit) 7b16a8f] I created README file
 1 file changed, 0 insertions(+), 0 deletions(-)    
 create mode 100644 README.md

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git push
fatal: The current branch main has no upstream branch.
To push the current branch and set the remote as upstream, use

    git push --set-upstream origin main

To have this happen automatically for branches without a tracking
upstream, see 'push.autoSetupRemote' in 'git help config'.


A@emmyb23 MINGW64 ~/git-exercise (main)
$ git push --set-upstream origin main
Enumerating objects: 3, done.
Counting objects: 100% (3/3), done.
Writing objects: 100% (3/3), 220 bytes | 220.00 KiB/s, done.
Total 3 (delta 0), reused 0 (delta 0), pack-reused 0 (from 0)
To https://github.com/Emmykaremera/Gym-Git-Exercise-Solutions.git
 * [new branch]      main -> main
branch 'main' set up to track 'origin/main'.        

A@emmyb23 MINGW64 ~/git-exercise (main)
$
A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git checkout -b test
Switched to a new branch 'test'

A@emmyb23 MINGW64 ~/git-exercise (test)
$ git checkout dev
Switched to branch 'dev'
Your branch is up to date with 'origin/dev'.        

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git branch -d test
Deleted branch test (was 130c3c7).

A@emmyb23 MINGW64 ~/git-exercise (dev)
```

### Exercise 2

```bash
A@emmyb23 MINGW64 ~/git-exercise (master)
$ git init
Reinitialized existing Git repository in C:/Users/A/git-exercise/.git/  

A@emmyb23 MINGW64 ~/git-exercise (master)
$ git branch

A@emmyb23 MINGW64 ~/git-exercise (master)
$ git branch -m master main

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git add .

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git commit -m 'Switched branches'
On branch main

Initial commit

nothing to commit (create/copy files and use "git add" to track)        

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git push -u origin main
error: src refspec main does not match any
error: failed to push some refs to 'origin'

A@emmyb23 MINGW64 ~/git-exercise (main)
$ - Create a project folder & initialize git
[1] 1202
bash: -: command not found
bash: initialize: command not found
[1]+  Exit 127                - Create a project folder

A@emmyb23 MINGW64 ~/git-exercise (main)
$ - Make changes to the project (add files and contents)
bash: syntax error near unexpected token `('

A@emmyb23 MINGW64 ~/git-exercise (main)
$ - Rename your main branch from `master` to `main` (If your branch name is already `main` then rename it to `master` and then back to `main`)  
bash: syntax error near unexpected token `('

A@emmyb23 MINGW64 ~/git-exercise (main)
$ - Stage your changes and commit them
bash: -: command not found

A@emmyb23 MINGW64 ~/git-exercise (main)
$ - Create a Github repo and connect it with your project
bash: -: command not found

A@emmyb23 MINGW64 ~/git-exercise (main)
$ - Push your changes to GitHub     
bash: -: command not found

A@emmyb23 MINGW64 ~/git-exercise (main)
$ - Create a new branch `dev`       
bash: dev: command not found
bash: -: command not found

A@emmyb23 MINGW64 ~/git-exercise (ma

A@emmyb23 MINGW64 ~/git-exercise (main)in)
$ git init
Reinitialized existing Git repository in C:/Users/A/git-exercise/.git/  

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git branch

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git branch -m main master

A@emmyb23 MINGW64 ~/git-exercise (master)
$ git branch -m master main

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git add .

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git commit -m 'Switched branches'
On branch main

Initial commit

nothing to commit (create/copy files and use "git ad
$ git remote add origin https://github.com/Emmykarem

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git add README.md
fatal: pathspec 'README.md' did not match any files

fatal: The current branch main has no upstream branch.
To push the current branch and set the remote as upstream, use

    git push --set-upstream origin main

To have this happen automatically for branches without a tracking
upstream, see 'push.autoSetupRemote' in 'git help config'.


A@emmyb23 MINGW64 ~/git-exercise (main)
$ git add .

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git commit -m "I created README file"
[main (root-commit) 7b16a8f] I created README file
 1 file changed, 0 insertions(+), 0 deletions(-)    
 create mode 100644 README.md

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git push
fatal: The current branch main has no upstream branch.
To push the current branch and set the remote as upstream, use

    git push --set-upstream origin main

To have this happen automatically for branches without a tracking
upstream, see 'push.autoSetupRemote' in 'git help config'.


A@emmyb23 MINGW64 ~/git-exercise (main)
$ git push --set-upstream origin main
Enumerating objects: 3, done.
Counting objects: 100% (3/3), done.
Writing objects: 100% (3/3), 220 bytes | 220.00 KiB/s, done.
Total 3 (delta 0), reused 0 (delta 0), pack-reused 0 (from 0)
To https://github.com/Emmykaremera/Gym-Git-Exercise-Solutions.git
 * [new branch]      main -> main
branch 'main' set up to track 'origin/main'.        

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git add .

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git commit 'I add my codes to README file'
error: pathspec 'I add my codes to README file' did 
not match any file(s) known to git

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git checkout dev
error: pathspec 'dev' did not match any file(s) known to git

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git checkout -b dev
Switched to a new branch 'dev'

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git add .

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git commit -m "I created another branch"
[dev 130c3c7] I created another branch
 1 file changed, 142 insertions(+)

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git push --set-upstream origin dev
Enumerating objects: 5, done.
Counting objects: 100% (5/5), done.
Delta compression using up to 4 threads
Compressing objects: 100% (2/2), done.
Writing objects: 100% (3/3), 1.27 KiB | 648.00 KiB/s, done.
Total 3 (delta 0), reused 0 (delta 0), pack-reused 0 (from 0)
remote: 
remote: Create a pull request for 'dev' on GitHub by visiting:
remote:      https://github.com/Emmykaremera/Gym-Git-Exercise-Solutions/pull/new/dev
remote:
To https://github.com/Emmykaremera/Gym-Git-Exercise-Solutions.git
 * [new branch]      dev -> dev
branch 'dev' set up to track 'origin/dev'.

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git git checkout -b test
git: 'git' is not a git command. See 'git --help'.

The most similar command is
        init

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git checkout -b test
Switched to a new branch 'test'

A@emmyb23 MINGW64 ~/git-exercise (test)
$ git checkout dev
Switched to branch 'dev'
Your branch is up to date with 'origin/dev'.        

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git branch -d test
Deleted branch test (was 130c3c7).

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git add.
git: 'add.' is not a git command. See 'git --help'.

The most similar command is
        add

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git add .

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git commit -m "I created test branch and deleted it"
[dev 598304b] I created test branch and deleted it
 1 file changed, 14 insertions(+)

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git push

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ touch home.html

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git add home.html

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git stash push -m 'home.html changes'
Saved working directory and index state On dev: home.html changes

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ touch about.html

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git add about.html

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git stash push -m 'about.html changes'
Saved working directory and index state On dev: about.html changes

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ touch team.html

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git add team.html

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git stash push -m 'team.html changes'
Saved working directory and index state On dev: team.html changes

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git stash list
stash@{0}: On dev: team.html changes
stash@{1}: On dev: about.html changes
stash@{2}: On dev: home.html changes

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git stash pop stash@{1}
On branch dev
Your branch is up to date with 'origin/dev'.        

Changes to be committed:
  (use "git restore --staged <file>..." to unstage) 
        new file:   about.html

Dropped stash@{1} (73f0f0174aac74c0e72d4f065bb63c564251dc9e)

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git stash apply stash@{1}
On branch dev
Your branch is up to date with 'origin/dev'.        

Changes to be committed:
  (use "git restore --staged <file>..." to unstage) 
        new file:   about.html
        new file:   home.html


A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git add .

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git commit -m 'Restored about.html and home.html' 
[dev c9658f1] Restored about.html and home.html
 2 files changed, 22 insertions(+)
 create mode 100644 about.html
 create mode 100644 home.html

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git push
Enumerating objects: 5, done.
Counting objects: 100% (5/5), done.
Delta compression using up to 4 threads
Compressing objects: 100% (4/4), done.
Writing objects: 100% (4/4), 665 bytes | 221.00 KiB/s, done.
Total 4 (delta 1), reused 0 (delta 0), pack-reused 0 (from 0)
remote: Resolving deltas: 100% (1/1), done.
To https://github.com/Emmykaremera/Gym-Git-Exercise-Solutions.git
   598304b..c9658f1  dev -> dev

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git stash list
stash@{0}: On dev: team.html changes
stash@{1}: On dev: home.html changes

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git stash pop stash@{0}
On branch dev
Your branch is up to date with 'origin/dev'.        

Changes to be committed:

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git checkout -b ft/bundle-2
Switched to a new branch 'ft/bundle-2'

A@emmyb23 MINGW64 ~/git-exercise (ft/bundle-2)        
$ touch services.html

A@emmyb23 MINGW64 ~/git-exercise (ft/bundle-2)
$ git add services.html

A@emmyb23 MINGW64 ~/git-exercise (ft/bundle-2)
$ git commit -m "Add services.html page'
> 
> ^C

A@emmyb23 MINGW64 ~/git-exercise (ft/bundle-2)
$ git commit -m 'Add services.html page'
[ft/bundle-2 c3c73ba] Add services.html page
 1 file changed, 0 insertions(+), 0 deletions(-)    
 create mode 100644 services.html

A@emmyb23 MINGW64 ~/git-exercise (ft/bundle-2)      
$ git push --set-upstream origin ft/bundle-2
Enumerating objects: 4, done.
Counting objects: 100% (4/4), done.
Delta compression using up to 4 threads
Compressing objects: 100% (2/2), done.
Writing objects: 100% (3/3), 278 bytes | 139.00 KiB/s, done.
Total 3 (delta 1), reused 0 (delta 0), pack-reused 0 (from 0)
                                                     1 local object.
A@emmyb23 MINGW64 ~/git-exercise (ft/bundle-2)
$ git checkout main                                 itHub by visiting:
error: Your local changes to the following files wou-Exercise-Solutions/pull/new/ft/bundle-2ld be overwritten by checkout:
        README.md                                   Solutions.git
Please commit your changes or stash them before you 
switch branches.                                    le-2'.
Aborting

A@emmyb23 MINGW64 ~/git-exercise (ft/bundle-2)
$ git add README.md

A@emmyb23 MINGW64 ~/git-exercise (ft/bundle-2)
$ git commit -m 'Save changes to README before switching branch'
[ft/bundle-2 9e9dca3] Save changes to README before 
switching branch
 1 file changed, 657 insertions(+)

A@emmyb23 MINGW64 ~/git-exercise (ft/bundle-2)      
$ git checkout main
Switched to branch 'main'
Your branch is up to date with 'origin/main'.       

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git pull origin main
From https://github.com/Emmykaremera/Gym-Git-Exercise-Solutions
 * branch            main       -> FETCH_HEAD       
Already up to date.

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git checkout -b ft/sercice-redesign
Switched to a new branch 'ft/sercice-redesign'

A@emmyb23 MINGW64 ~/git-exercise (ft/sercice-redesign)
$ git checkout main
Switched to branch 'main'
Your branch is up to date with 'origin/main'.       

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git pull
remote: Enumerating objects: 1, done.
remote: Counting objects: 100% (1/1), done.
remote: Total 1 (delta 0), reused 0 (delta 0), pack-reused 0 (from 0)
Unpacking objects: 100% (1/1), 926 bytes | 71.00 KiB/s, done.
From https://github.com/Emmykaremera/Gym-Git-Exercise-Solutionse-Solutions
   7b16a8f..623683b  main       -> origin/main        
Updating 7b16a8f..623683b
Fast-forward                                          +++++++++++++++++++++++++
 README.md     | 156 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 about.html    |  11 +++++
 home.html     |  11 +++++
 services.html |   0
 4 files changed, 178 insertions(+)
 create mode 100644 about.html
 create mode 100644 home.html
 create mode 100644 services.html

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git checkout ft/service-redesign
error: pathspec 'ft/service-redesign' did not match 
any file(s) known to git

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git checkout -b ft/service-redesign
Switched to a new branch 'ft/service-redesign'

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign)
$ git add services.html

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign)
$ git commit -m 'I added heading on services.html file'
[ft/service-redesign 5c809f4] I added heading on services.html file
 1 file changed, 11 insertions(+)

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign)
$ git push --set-upstream origin ft/service-redesignEnumerating objects: 5, done.
Counting objects: 100% (5/5), done.
Delta compression using up to 4 threads
Compressing objects: 100% (3/3), done.
Writing objects: 100% (3/3), 434 bytes | 144.00 KiB/s, done.
Total 3 (delta 1), reused 0 (delta 0), pack-reused 0 (from 0)
remote: Resolving deltas: 100% (1/1), completed with 1 local object.
remote:
remote: Create a pull request for 'ft/service-redesign' on GitHub by visiting:gn' on GitHub by visiting:                            xercise-Solutions/pull/new/ft/service-redesign
remote:      https://github.com/Emmykaremera/Gym-Git-E-Exercise-Solutions/pull/new/ft/service-redesign      lutions.git
remote:                                               -redesign
To https://github.com/Emmykaremera/Gym-Git-Exercise-Sot/service-redesign'.Solutions.git
 * [new branch]      ft/service-redesign -> ft/servicece-redesign
branch 'ft/service-redesign' set up to track 'origin/f/ft/service-redesign'.

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign)n)
$ touch '<p>New redesign content</p>' >> services.html
touch: cannot touch '<p>New redesign content</p>': No such file or directory

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign)
$ echo "<p>New redesign content</p>" >> services.html

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign)
$ git add services.html
warning: in the working copy of 'services.html', LF 
will be replaced by CRLF the next time Git touches it

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign)
$ git commit -m 'Updated services.html with new redesign content'
[ft/service-redesign 34001c1] Updated services.html 
with new redesign content
 1 file changed, 1 insertion(+), 1 deletion(-)      

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign)
$ git push
Enumerating objects: 5, done.
Counting objects: 100% (5/5), done.
Delta compression using up to 4 threads
Compressing objects: 100% (3/3), done.
Writing objects: 100% (3/3), 334 bytes | 167.00 KiB/s, done.s, done.                                              from 0)
Total 3 (delta 2), reused 0 (delta 0), pack-reused 0 ( local objects. (from 0)                                             lutions.git
remote: Resolving deltas: 100% (2/2), completed with 2-redesign 2 local objects.
To https://github.com/Emmykaremera/Gym-Git-Exercise-SoSolutions.git
   5c809f4..34001c1  ft/service-redesign -> ft/servicece-redesign

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign)n)
$ git checkout main
Switched to branch 'main'
Your branch is up to date with 'origin/main'.       

A@emmyb23 MINGW64 ~/git-exercise (main)
$ echo "<!-- Updated header section -->" >> services.html
echo "<- Go back to the `dev` branch and delete the 
`test` Updated header section -->" >> services.html 
bash: dev: command not found

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git add services.html
warning: in the working copy of 'services.html', LF 
will be replaced by CRLF the next time Git touches it

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git commit -m "Update services.html header section on main"
[main ae7d076] Update services.html header section on main
 1 file changed, 1 insertion(+)

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git push origin main
Enumerating objects: 5, done.
Counting objects: 100% (5/5), done.
Delta compression using up to 4 threads
Compressing objects: 100% (3/3), done.
Writing objects: 100% (3/3), 335 bytes | 111.00 KiB/s, done.
Total 3 (delta 1), reused 0 (delta 0), pack-reused 0 (from 0)
remote: Resolving deltas: 100% (1/1), completed with 1 local object.
To https://github.com/Emmykaremera/Gym-Git-Exercise-Solutions.git
   623683b..ae7d076  main -> main

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git checkout ft/service-redesign
Switched to branch 'ft/service-redesign'
Your branch is up to date with 'origin/ft/service-redesign'.

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign)
$ git diff main..ft/service-redesign -- services.html
diff --git a/services.html b/services.html
index b483fda..ae62794 100644
--- a/services.html
+++ b/services.html
@@ -1 +1,11 @@
-<- Go back to the  branch and delete the  Updated header section -->
+<!DOCTYPE html>
+<html lang="en">
+<head>
+    <meta charset="UTF-8">
+    <meta name="viewport" content="width=device-width, initial-scale=1.0">
+    <title>Document</title>
+</head>
+<body>

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign)
$ git diff main..ft/service-redesign -- services.html
diff --git a/services.html b/services.html
index b483fda..ae62794 100644
--- a/services.html
+++ b/services.html
@@ -1 +1,11 @@
-<- Go back to the  branch and delete the  Updated header section -->
+<!DOCTYPE html>
+<html lang="en">
+<head>
+    <title>Document</title>
+</head>                                              , initial-scale=1.0">
+<body>
+    <h3>Aliane Isimbi</h3>
+</body>
+</html><p>New redesign content</p>
~
~

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign)

$ a
bash: a: command not found

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign)

$ git merge main
error: Your local changes to the following files would be overwritten by merge:
        services.html
Please commit your changes or stash them before you merge.
Aborting
Merge with strategy ort failed.

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign)$ git add services.html

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign)$ git commit -m Finish services.html before merging ma
to main'
> a
> ^C

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign)$ git commit -m "Finish services.html before merging to main"$ git commit -m "Finish services.html before merging tore merging to maino main"
[ft/service-redesign 70e38ec] Finish services.html before merging to main                                   $ git merge main
 1 file changed, 2 insertions(+), 1 deletion(-)       

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign)the result.$ git merge main
Auto-merging services.html                            MERGING)
CONFLICT (content): Merge conflict in services.html   
Automatic merge failed; fix conflicts and then commit 
the result.

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign|MERGING)
$ git add servicees.html
fatal: pathspec 'servicees.html' did not match any files

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign|MERGING)
$ git add services.html

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign|MERGING)
$ git commit -m "Resolve merge conflict in services.html"
[ft/service-redesign 0972575] Resolve merge conflict in services.html

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign)$ git push
Enumerating objects: 10, done.
Counting objects: 100% (10/10), done.
Delta compression using up to 4 threads
Compressing objects: 100% (6/6), done.
Writing objects: 100% (6/6), 674 bytes | 224.00 KiB/s, done.
Total 6 (delta 4), reused 0 (delta 0), pack-reused 0 (from 0)
remote: Resolving deltas: 100% (4/4), completed with 2 local objects.
To https://github.com/Emmykaremera/Gym-Git-Exercise-Solutions.git
   34001c1..0972575  ft/service-redesign -> ft/service-redesign

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign)$
```

## Bundle 3

### Exercise 1

```bash
A@emmyb23 MINGW64 ~/git-exercise (master)
$ git init
Reinitialized existing Git repository in C:/Users/A/git-exercise/.git/  

A@emmyb23 MINGW64 ~/git-exercise (master)
$ git branch

A@emmyb23 MINGW64 ~/git-exercise (master)
$ git branch -m master main

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git add .

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git commit -m 'Switched branches'
On branch main

Initial commit

nothing to commit (create/copy files and use "git add" to track)        

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git push -u origin main
error: src refspec main does not match any
error: failed to push some refs to 'origin'

A@emmyb23 MINGW64 ~/git-exercise (main)
$ - Create a project folder & initialize git
[1] 1202
bash: -: command not found
bash: initialize: command not found
[1]+  Exit 127                - Create a project folder

A@emmyb23 MINGW64 ~/git-exercise (main)
$ - Make changes to the project (add files and contents)
bash: syntax error near unexpected token `('

A@emmyb23 MINGW64 ~/git-exercise (main)
$ - Rename your main branch from `master` to `main` (If your branch name is already `main` then rename it to `master` and then back to `main`)  
bash: syntax error near unexpected token `('

A@emmyb23 MINGW64 ~/git-exercise (main)
$ - Stage your changes and commit them
bash: -: command not found

A@emmyb23 MINGW64 ~/git-exercise (main)
$ - Create a Github repo and connect it with your project
bash: -: command not found

A@emmyb23 MINGW64 ~/git-exercise (main)
$ - Push your changes to GitHub     
bash: -: command not found

A@emmyb23 MINGW64 ~/git-exercise (main)
$ - Create a new branch `dev`       
bash: dev: command not found
bash: -: command not found

A@emmyb23 MINGW64 ~/git-exercise (ma

A@emmyb23 MINGW64 ~/git-exercise (main)in)
$ git init
Reinitialized existing Git repository in C:/Users/A/git-exercise/.git/  

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git branch

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git branch -m main master

A@emmyb23 MINGW64 ~/git-exercise (master)
$ git branch -m master main

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git add .

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git commit -m 'Switched branches'
On branch main

Initial commit

nothing to commit (create/copy files and use "git ad
$ git remote add origin https://github.com/Emmykarem

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git add README.md
fatal: pathspec 'README.md' did not match any files

fatal: The current branch main has no upstream branch.
To push the current branch and set the remote as upstream, use

    git push --set-upstream origin main

To have this happen automatically for branches without a tracking
upstream, see 'push.autoSetupRemote' in 'git help config'.


A@emmyb23 MINGW64 ~/git-exercise (main)
$ git add .

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git commit -m "I created README file"
[main (root-commit) 7b16a8f] I created README file
 1 file changed, 0 insertions(+), 0 deletions(-)    
 create mode 100644 README.md

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git push
fatal: The current branch main has no upstream branch.
To push the current branch and set the remote as upstream, use

    git push --set-upstream origin main

To have this happen automatically for branches without a tracking
upstream, see 'push.autoSetupRemote' in 'git help config'.


A@emmyb23 MINGW64 ~/git-exercise (main)
$ git push --set-upstream origin main
Enumerating objects: 3, done.
Counting objects: 100% (3/3), done.
Writing objects: 100% (3/3), 220 bytes | 220.00 KiB/s, done.
Total 3 (delta 0), reused 0 (delta 0), pack-reused 0 (from 0)
To https://github.com/Emmykaremera/Gym-Git-Exercise-Solutions.git
 * [new branch]      main -> main
branch 'main' set up to track 'origin/main'.        

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git add .

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git commit 'I add my codes to README file'
error: pathspec 'I add my codes to README file' did 
not match any file(s) known to git

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git checkout dev
error: pathspec 'dev' did not match any file(s) known to git

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git checkout -b dev
Switched to a new branch 'dev'

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git add .

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git commit -m "I created another branch"
[dev 130c3c7] I created another branch
 1 file changed, 142 insertions(+)

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git push --set-upstream origin dev
Enumerating objects: 5, done.
Counting objects: 100% (5/5), done.
Delta compression using up to 4 threads
Compressing objects: 100% (2/2), done.
Writing objects: 100% (3/3), 1.27 KiB | 648.00 KiB/s, done.
Total 3 (delta 0), reused 0 (delta 0), pack-reused 0 (from 0)
remote: 
remote: Create a pull request for 'dev' on GitHub by visiting:
remote:      https://github.com/Emmykaremera/Gym-Git-Exercise-Solutions/pull/new/dev
remote:
To https://github.com/Emmykaremera/Gym-Git-Exercise-Solutions.git
 * [new branch]      dev -> dev
branch 'dev' set up to track 'origin/dev'.

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git git checkout -b test
git: 'git' is not a git command. See 'git --help'.

The most similar command is
        init

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git checkout -b test
Switched to a new branch 'test'

A@emmyb23 MINGW64 ~/git-exercise (test)
$ git checkout dev
Switched to branch 'dev'
Your branch is up to date with 'origin/dev'.        

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git branch -d test
Deleted branch test (was 130c3c7).

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git add.
git: 'add.' is not a git command. See 'git --help'.

The most similar command is
        add

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git add .

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git commit -m "I created test branch and deleted it"
[dev 598304b] I created test branch and deleted it
 1 file changed, 14 insertions(+)

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git push

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ touch home.html

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git add home.html

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git stash push -m 'home.html changes'
Saved working directory and index state On dev: home.html changes

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ touch about.html

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git add about.html

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git stash push -m 'about.html changes'
Saved working directory and index state On dev: about.html changes

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ touch team.html

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git add team.html

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git stash push -m 'team.html changes'
Saved working directory and index state On dev: team.html changes

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git stash list
stash@{0}: On dev: team.html changes
stash@{1}: On dev: about.html changes
stash@{2}: On dev: home.html changes

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git stash pop stash@{1}
On branch dev
Your branch is up to date with 'origin/dev'.        

Changes to be committed:
  (use "git restore --staged <file>..." to unstage) 
        new file:   about.html

Dropped stash@{1} (73f0f0174aac74c0e72d4f065bb63c564251dc9e)

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git stash apply stash@{1}
On branch dev
Your branch is up to date with 'origin/dev'.        

Changes to be committed:
  (use "git restore --staged <file>..." to unstage) 
        new file:   about.html
        new file:   home.html


A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git add .

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git commit -m 'Restored about.html and home.html' 
[dev c9658f1] Restored about.html and home.html
 2 files changed, 22 insertions(+)
 create mode 100644 about.html
 create mode 100644 home.html

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git push
Enumerating objects: 5, done.
Counting objects: 100% (5/5), done.
Delta compression using up to 4 threads
Compressing objects: 100% (4/4), done.
Writing objects: 100% (4/4), 665 bytes | 221.00 KiB/s, done.
Total 4 (delta 1), reused 0 (delta 0), pack-reused 0 (from 0)
remote: Resolving deltas: 100% (1/1), done.
To https://github.com/Emmykaremera/Gym-Git-Exercise-Solutions.git
   598304b..c9658f1  dev -> dev

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git stash list
stash@{0}: On dev: team.html changes
stash@{1}: On dev: home.html changes

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git stash pop stash@{0}
On branch dev
Your branch is up to date with 'origin/dev'.        

Changes to be committed:

A@emmyb23 MINGW64 ~/git-exercise (dev)
$ git checkout -b ft/bundle-2
Switched to a new branch 'ft/bundle-2'

A@emmyb23 MINGW64 ~/git-exercise (ft/bundle-2)        
$ touch services.html

A@emmyb23 MINGW64 ~/git-exercise (ft/bundle-2)
$ git add services.html

A@emmyb23 MINGW64 ~/git-exercise (ft/bundle-2)
$ git commit -m "Add services.html page'
> 
> ^C

A@emmyb23 MINGW64 ~/git-exercise (ft/bundle-2)
$ git commit -m 'Add services.html page'
[ft/bundle-2 c3c73ba] Add services.html page
 1 file changed, 0 insertions(+), 0 deletions(-)    
 create mode 100644 services.html

A@emmyb23 MINGW64 ~/git-exercise (ft/bundle-2)      
$ git push --set-upstream origin ft/bundle-2
Enumerating objects: 4, done.
Counting objects: 100% (4/4), done.
Delta compression using up to 4 threads
Compressing objects: 100% (2/2), done.
Writing objects: 100% (3/3), 278 bytes | 139.00 KiB/s, done.
Total 3 (delta 1), reused 0 (delta 0), pack-reused 0 (from 0)
                                                     1 local object.
A@emmyb23 MINGW64 ~/git-exercise (ft/bundle-2)
$ git checkout main                                 itHub by visiting:
error: Your local changes to the following files wou-Exercise-Solutions/pull/new/ft/bundle-2ld be overwritten by checkout:
        README.md                                   Solutions.git
Please commit your changes or stash them before you 
switch branches.                                    le-2'.
Aborting

A@emmyb23 MINGW64 ~/git-exercise (ft/bundle-2)
$ git add README.md

A@emmyb23 MINGW64 ~/git-exercise (ft/bundle-2)
$ git commit -m 'Save changes to README before switching branch'
[ft/bundle-2 9e9dca3] Save changes to README before 
switching branch
 1 file changed, 657 insertions(+)

A@emmyb23 MINGW64 ~/git-exercise (ft/bundle-2)      
$ git checkout main
Switched to branch 'main'
Your branch is up to date with 'origin/main'.       

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git pull origin main
From https://github.com/Emmykaremera/Gym-Git-Exercise-Solutions
 * branch            main       -> FETCH_HEAD       
Already up to date.

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git checkout -b ft/sercice-redesign
Switched to a new branch 'ft/sercice-redesign'

A@emmyb23 MINGW64 ~/git-exercise (ft/sercice-redesign)
$ git checkout main
Switched to branch 'main'
Your branch is up to date with 'origin/main'.       

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git pull
remote: Enumerating objects: 1, done.
remote: Counting objects: 100% (1/1), done.
remote: Total 1 (delta 0), reused 0 (delta 0), pack-reused 0 (from 0)
Unpacking objects: 100% (1/1), 926 bytes | 71.00 KiB/s, done.
From https://github.com/Emmykaremera/Gym-Git-Exercise-Solutionse-Solutions
   7b16a8f..623683b  main       -> origin/main        
Updating 7b16a8f..623683b
Fast-forward                                          +++++++++++++++++++++++++
 README.md     | 156 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 about.html    |  11 +++++
 home.html     |  11 +++++
 services.html |   0
 4 files changed, 178 insertions(+)
 create mode 100644 about.html
 create mode 100644 home.html
 create mode 100644 services.html

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git checkout ft/service-redesign
error: pathspec 'ft/service-redesign' did not match 
any file(s) known to git

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git checkout -b ft/service-redesign
Switched to a new branch 'ft/service-redesign'

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign)
$ git add services.html

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign)
$ git commit -m 'I added heading on services.html file'
[ft/service-redesign 5c809f4] I added heading on services.html file
 1 file changed, 11 insertions(+)

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign)
$ git push --set-upstream origin ft/service-redesignEnumerating objects: 5, done.
Counting objects: 100% (5/5), done.
Delta compression using up to 4 threads
Compressing objects: 100% (3/3), done.
Writing objects: 100% (3/3), 434 bytes | 144.00 KiB/s, done.
Total 3 (delta 1), reused 0 (delta 0), pack-reused 0 (from 0)
remote: Resolving deltas: 100% (1/1), completed with 1 local object.
remote:
remote: Create a pull request for 'ft/service-redesign' on GitHub by visiting:gn' on GitHub by visiting:                            xercise-Solutions/pull/new/ft/service-redesign
remote:      https://github.com/Emmykaremera/Gym-Git-E-Exercise-Solutions/pull/new/ft/service-redesign      lutions.git
remote:                                               -redesign
To https://github.com/Emmykaremera/Gym-Git-Exercise-Sot/service-redesign'.Solutions.git
 * [new branch]      ft/service-redesign -> ft/servicece-redesign
branch 'ft/service-redesign' set up to track 'origin/f/ft/service-redesign'.

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign)n)
$ touch '<p>New redesign content</p>' >> services.html
touch: cannot touch '<p>New redesign content</p>': No such file or directory

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign)
$ echo "<p>New redesign content</p>" >> services.html

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign)
$ git add services.html
warning: in the working copy of 'services.html', LF 
will be replaced by CRLF the next time Git touches it

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign)
$ git commit -m 'Updated services.html with new redesign content'
[ft/service-redesign 34001c1] Updated services.html 
with new redesign content
 1 file changed, 1 insertion(+), 1 deletion(-)      

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign)
$ git push
Enumerating objects: 5, done.
Counting objects: 100% (5/5), done.
Delta compression using up to 4 threads
Compressing objects: 100% (3/3), done.
Writing objects: 100% (3/3), 334 bytes | 167.00 KiB/s, done.s, done.                                              from 0)
Total 3 (delta 2), reused 0 (delta 0), pack-reused 0 ( local objects. (from 0)                                             lutions.git
remote: Resolving deltas: 100% (2/2), completed with 2-redesign 2 local objects.
To https://github.com/Emmykaremera/Gym-Git-Exercise-SoSolutions.git
   5c809f4..34001c1  ft/service-redesign -> ft/servicece-redesign

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign)n)
$ git checkout main
Switched to branch 'main'
Your branch is up to date with 'origin/main'.       

A@emmyb23 MINGW64 ~/git-exercise (main)
$ echo "<!-- Updated header section -->" >> services.html
echo "<- Go back to the `dev` branch and delete the 
`test` Updated header section -->" >> services.html 
bash: dev: command not found

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git add services.html
warning: in the working copy of 'services.html', LF 
will be replaced by CRLF the next time Git touches it

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git commit -m "Update services.html header section on main"
[main ae7d076] Update services.html header section on main
 1 file changed, 1 insertion(+)

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git push origin main
Enumerating objects: 5, done.
Counting objects: 100% (5/5), done.
Delta compression using up to 4 threads
Compressing objects: 100% (3/3), done.
Writing objects: 100% (3/3), 335 bytes | 111.00 KiB/s, done.
Total 3 (delta 1), reused 0 (delta 0), pack-reused 0 (from 0)
remote: Resolving deltas: 100% (1/1), completed with 1 local object.
To https://github.com/Emmykaremera/Gym-Git-Exercise-Solutions.git
   623683b..ae7d076  main -> main

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git checkout ft/service-redesign
Switched to branch 'ft/service-redesign'
Your branch is up to date with 'origin/ft/service-redesign'.

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign)
$ git diff main..ft/service-redesign -- services.html
diff --git a/services.html b/services.html
index b483fda..ae62794 100644
--- a/services.html
+++ b/services.html
@@ -1 +1,11 @@
-<- Go back to the  branch and delete the  Updated header section -->
+<!DOCTYPE html>
+<html lang="en">
+<head>
+    <meta charset="UTF-8">
+    <meta name="viewport" content="width=device-width, initial-scale=1.0">
+    <title>Document</title>
+</head>
+<body>

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign)
$ git diff main..ft/service-redesign -- services.html
diff --git a/services.html b/services.html
index b483fda..ae62794 100644
--- a/services.html
+++ b/services.html
@@ -1 +1,11 @@
-<- Go back to the  branch and delete the  Updated header section -->
+<!DOCTYPE html>
+<html lang="en">
+<head>
+    <title>Document</title>
+</head>                                              , initial-scale=1.0">
+<body>
+    <h3>Aliane Isimbi</h3>
+</body>
+</html><p>New redesign content</p>
~
~

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign)

$ a
bash: a: command not found

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign)

$ git merge main
error: Your local changes to the following files would be overwritten by merge:
        services.html
Please commit your changes or stash them before you merge.
Aborting
Merge with strategy ort failed.

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign)$ git add services.html

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign)$ git commit -m Finish services.html before merging ma
to main'
> a
> ^C

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign)$ git commit -m "Finish services.html before merging to main"$ git commit -m "Finish services.html before merging tore merging to maino main"
[ft/service-redesign 70e38ec] Finish services.html before merging to main                                   $ git merge main
 1 file changed, 2 insertions(+), 1 deletion(-)       

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign)the result.$ git merge main
Auto-merging services.html                            MERGING)
CONFLICT (content): Merge conflict in services.html   
Automatic merge failed; fix conflicts and then commit 
the result.

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign|MERGING)
$ git add servicees.html
fatal: pathspec 'servicees.html' did not match any files

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign|MERGING)
$ git add services.html

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign|MERGING)
$ git commit -m "Resolve merge conflict in services.html"
[ft/service-redesign 0972575] Resolve merge conflict in services.html

A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesign)$ git push
Enumerating objects: 10, done.
Counting objects: 100% (10/10), done.
Delta compression using up to 4 threads
Compressing objects: 100% (6/6), done.
                                                    s, done.
A@emmyb23 MINGW64 ~/git-exercise (ft/service-redesig  from 0)n)                                                   ( local objects.
$ git checkout -b ft/team-page                        lutions.git
Switched to a new branch 'ft/team-page'              2-redesign

A@emmyb23 MINGW64 ~/git-exercise (ft/team-page)     So$ git push
$ touch team.html
                                                    ce
A@emmyb23 MINGW64 ~/git-exercise (ft/team-page)
$ git add team.html
                                                    n)
A@emmyb23 MINGW64 ~/git-exercise (ft/team-page)
$ git commit -m 'Added team.html page'
[ft/team-page fe6c4a8] Added team.html page
 1 file changed, 11 insertions(+)
 create mode 100644 team.html

A@emmyb23 MINGW64 ~/git-exercise (ft/team-page)     
$ git push --set-upstream origin ft/team-page
Enumerating objects: 4, done.
Counting objects: 100% (4/4), done.
Delta compression using up to 4 threads
Compressing objects: 100% (3/3), done.
Writing objects: 100% (3/3), 433 bytes | 216.00 KiB/s, done.
Total 3 (delta 1), reused 0 (delta 0), pack-reused 0 (from 0)
remote: Resolving deltas: 100% (1/1), completed with 1 local object.
remote:
remote: Create a pull request for 'ft/team-page' on 
GitHub by visiting:
remote:      https://github.com/Emmykaremera/Gym-Git-Exercise-Solutions/pull/new/ft/team-page
remote:
To https://github.com/Emmykaremera/Gym-Git-Exercise-Solutions.git
 * [new branch]      ft/team-page -> ft/team-page   
branch 'ft/team-page' set up to track 'origin/ft/team-page'.

A@emmyb23 MINGW64 ~/git-exercise (ft/team-page)     
$ git checkout main
M       README.md
Switched to branch 'main'
Your branch is up to date with 'origin/main'.

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git checkout -b ft/contact-page
Switched to a new branch 'ft/contact-page'

A@emmyb23 MINGW64 ~/git-exercise (ft/contact-page)  
$ git checkout ft/team-page
M       README.md
Switched to branch 'ft/team-page'
Your branch is up to date with 'origin/ft/team-page'.

A@emmyb23 MINGW64 ~/git-exercise (ft/team-page)     
$ git log -1 --oneline
fe6c4a8 (HEAD -> ft/team-page, origin/ft/team-page) 
Added team.html page

A@emmyb23 MINGW64 ~/git-exercise (ft/team-page)     
$ git log
commit fe6c4a8f9869f4ee082aa6d1442f50fbf47bcdf5 (HEAD -> ft/team-page, origin/ft/team-page)
-> ft/team-page, origin/ft/team-page)
Author: Emmy <emmyb0853@gmail.com>
Date:   Thu May 22 11:33:51 2025 +0200

    Added team.html page
                                                      n/ft/service-redesign, ft/service-redesign)
commit 097257502810ddc0889f1b501d69d2f23f9be464 (origin/ft/service-redesign, ft/service-redesign)
Merge: 70e38ec ae7d076
Author: Emmy <emmyb0853@gmail.com>
Date:   Thu May 22 11:20:56 2025 +0200

    Resolve merge conflict in services.html

commit 70e38ec4d2b4a420adc811e2e185509d6b6e91ed       

A@emmyb23 MINGW64 ~/git-exercise (ft/team-page)       
$ git checkout ft/contact-page
M       README.md
Switched to branch 'ft/contact-page'

A@emmyb23 MINGW64 ~/git-exercise (ft/contact-page)    
$ git cherry-pick ^C

A@emmyb23 MINGW64 ~/git-exercise (ft/contact-page)    
$ git cherry-pick fe6c4a8f9869f4ee082aa6d1442f50fbf47bcdf5
[ft/contact-page 0a681c6] Added team.html page
 Date: Thu May 22 11:33:51 2025 +0200
 1 file changed, 11 insertions(+)
 create mode 100644 team.html

A@emmyb23 MINGW64 ~/git-exercise (ft/contact-page)    
$ touch contact.html

A@emmyb23 MINGW64 ~/git-exercise (ft/contact-page)    
$ git add contact.html

A@emmyb23 MINGW64 ~/git-exercise (ft/contact-page)    
$ git commit -m "Add contact.html page"
[ft/contact-page 12f5edf] Add contact.html page
 1 file changed, 11 insertions(+)
 create mode 100644 contact.html

A@emmyb23 MINGW64 ~/git-exercise (ft/contact-page)    
$ git push --set-pustream origin ft/contact-page
error: unknown option `set-pustream'
usage: git push [<options>] [<repository> [<refspec>...]]

    -v, --[no-]verbose    be more verbose
    -q, --[no-]quiet      be more quiet
    --[no-]repo <repository>
                          repository
    --[no-]all            push all branches
    --[no-]branches       alias of --all
    --[no-]mirror         mirror all refs
    -d, --[no-]delete     delete refs
    --[no-]tags           push tags (can't be used with --all or --branches or --mirror)
    -n, --[no-]dry-run    dry run
    --[no-]porcelain      machine-readable output     
    -f, --[no-]force      force updates
    --[no-]force-with-lease[=<refname>:<expect>]      
                          require old value of ref to 
be at this value
    --[no-]force-if-includes
                          require remote updates to be integrated locally
    --[no-]recurse-submodules (check|on-demand|no)    
                          control recursive pushing of submodules
    --[no-]thin           use thin pack
    --[no-]receive-pack <receive-pack>
                          receive pack program        
    --[no-]exec <receive-pack>
                          receive pack program        
    -u, --[no-]set-upstream
                          set upstream for git pull/status
    --[no-]progress       force progress reporting    
    --[no-]prune          prune locally removed refs  
    --no-verify           bypass pre-push hook        
    --verify              opposite of --no-verify     
    --[no-]follow-tags    push missing but relevant tags
    --[no-]signed[=(yes|no|if-asked)]
                          GPG sign the push
    --[no-]atomic         request atomic transaction on remote side
    -o, --[no-]push-option <server-specific>
                          option to transmit
    -4, --ipv4            use IPv4 addresses only     
    -6, --ipv6            use IPv6 addresses only     


A@emmyb23 MINGW64 ~/git-exercise (ft/contact-page)    
$ git brach
git: 'brach' is not a git command. See 'git --help'.

The most similar command is
        branch

A@emmyb23 MINGW64 ~/git-exercise (ft/contact-page)    
$ git branch
  dev
  ft/bundle-2
* ft/contact-page
  ft/sercice-redesign
  ft/service-redesign
  ft/team-page
  main

A@emmyb23 MINGW64 ~/git-exercise (ft/contact-page)    
$ git push
fatal: The current branch ft/contact-page has no upstream branch.tream branch.                                         eam, use
To push the current branch and set the remote as upstrtream, use

    git push --set-upstream origin ft/contact-page     a tracking
                                                      ig'.
To have this happen automatically for branches withoutut a tracking
upstream, see 'push.autoSetupRemote' in 'git help confnfig'.


A@emmyb23 MINGW64 ~/git-exercise (ft/contact-page)    
$ git push --set-upstream origin ft/contact-page
Enumerating objects: 7, done.
Counting objects: 100% (7/7), done.
Delta compression using up to 4 threads
Compressing objects: 100% (6/6), done.
Writing objects: 100% (6/6), 697 bytes | 174.00 KiB/s, done.
Total 6 (delta 3), reused 0 (delta 0), pack-reused 0 (from 0)
remote: Resolving deltas: 100% (3/3), completed with 1 local object.
remote:
remote: Create a pull request for 'ft/contact-page' 
on GitHub by visiting:
remote:      https://github.com/Emmykaremera/Gym-Git-Exercise-Solutions/pull/new/ft/contact-page        
remote:
To https://github.com/Emmykaremera/Gym-Git-Exercise-Solutions.git
 * [new branch]      ft/contact-page -> ft/contact-page
branch 'ft/contact-page' set up to track 'origin/ft/contact-page'.

A@emmyb23 MINGW64 ~/git-exercise (ft/contact-page)  
$ git checkout -b ft/faq-page
Switched to a new branch 'ft/faq-page'

A@emmyb23 MINGW64 ~/git-exercise (ft/faq-page)      
$ touch faq.html

A@emmyb23 MINGW64 ~/git-exercise (ft/faq-page)      
$ git commit -m "Add faq.html page"
On branch ft/faq-page
Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git restore <file>..." to discard changes in working directory)
        modified:   README.md

Untracked files:
  (use "git add <file>..." to include in what will be committed)
        faq.html

no changes added to commit (use "git add" and/or "git commit -a")

A@emmyb23 MINGW64 ~/git-exercise (ft/faq-page)      
$ git add faq.html

A@emmyb23 MINGW64 ~/git-exercise (ft/faq-page)      
$ git commit -m "Add faq.html page"
[ft/faq-page 23cc47d] Add faq.html page
 1 file changed, 11 insertions(+)
 create mode 100644 faq.html

A@emmyb23 MINGW64 ~/git-exercise (ft/faq-page)      
$ git push --set-upstream origin ft/faq-page
Enumerating objects: 4, done.
Counting objects: 100% (4/4), done.
Delta compression using up to 4 threads
Compressing objects: 100% (3/3), done.
Writing objects: 100% (3/3), 429 bytes | 143.00 KiB/s, done.
Total 3 (delta 1), reused 0 (delta 0), pack-reused 0 (from 0)
remote: Resolving deltas: 100% (1/1), completed with 1 local object.
remote:
remote: Create a pull request for 'ft/faq-page' on GitHub by visiting:
remote:      https://github.com/Emmykaremera/Gym-Git-Exercise-Solutions/pull/new/ft/faq-page
remote:
To https://github.com/Emmykaremera/Gym-Git-Exercise-Solutions.git
 * [new branch]      ft/faq-page -> ft/faq-page     
branch 'ft/faq-page' set up to track 'origin/ft/faq-page'.

A@emmyb23 MINGW64 ~/git-exercise (ft/faq-page)      
$ git log
commit 23cc47d0ce45aad7655d055ffdb3530a42cd1248 (HEAD -> ft/faq-page, origin/ft/faq-page)
Author: Emmy <emmyb0853@gmail.com>
Date:   Thu May 22 11:52:03 2025 +0200

    Add faq.html page

commit 12f5edffdb035b4c5264e005770fda1e3b9b5f24 (origin/ft/contact-page, ft/contact-page)
Author: Emmy <emmyb0853@gmail.com>
Date:   Thu May 22 11:42:37 2025 +0200

    Add contact.html page

commit 0a681c65b5b1d06e18c79f569ab7f7737ff8e547
Author: Emmy <emmyb0853@gmail.com>

A@emmyb23 MINGW64 ~/git-exercise (ft/faq-page)
$ git checkout ft/team-page
M       README.md
Switched to branch 'ft/team-page'
Your branch is up to date with 'origin/ft/team-page'.

A@emmyb23 MINGW64 ~/git-exercise (ft/team-page)
$ git revert fe6c4a8f9869f4ee082aa6d1442f50fbf47bcdf5
```