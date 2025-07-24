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


## Bundle 3
### Exercise 2

```bash

A@emmyb23 MINGW64 ~/git-exercise (ft/team-page)
$ git --version
git version 2.47.0.windows.2

A@emmyb23 MINGW64 ~/git-exercise (ft/team-page)
$
 *  History restored 


A@emmyb23 MINGW64 ~/git-exercise (ft/team-page)
$ git checkout ft/faq-page
error: Your local changes to the following files would be overwritten by checkout:
        README.md
Please commit your changes or stash them before you switch branches.   
Aborting

A@emmyb23 MINGW64 ~/git-exercise (ft/team-page)
$ git commit -m "Updated README before switching branches"
On branch ft/team-page
Your branch is up to date with 'origin/ft/team-page'.

Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git restore <file>..." to discard changes in working directory)        modified:   README.md

no changes added to commit (use "git add" and/or "git commit -a")      

A@emmyb23 MINGW64 ~/git-exercise (ft/team-page)
$ git checkout ft/faq-page
error: Your local changes to the following files would be overwritten by checkout:
        README.md
Please commit your changes or stash them before you switch branches.   
Aborting

A@emmyb23 MINGW64 ~/git-exercise (ft/team-page)
$ git push 
Everything up-to-date

A@emmyb23 MINGW64 ~/git-exercise (ft/team-page)
$ git commit -m "Updated README before switching branches"
On branch ft/team-page
Your branch is up to date with 'origin/ft/team-page'.

Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git restore <file>..." to discard changes in working directory)        modified:   README.md

no changes added to commit (use "git add" and/or "git commit -a")      

A@emmyb23 MINGW64 ~/git-exercise (ft/team-page)
$ git push
Everything up-to-date

A@emmyb23 MINGW64 ~/git-exercise (ft/team-page)
$ git checkout ft/faq-page
error: Your local changes to the following files would be overwritten by checkout:
        README.md
Please commit your changes or stash them before you switch branches.   
Aborting

A@emmyb23 MINGW64 ~/git-exercise (ft/team-page)
$ git stash
Saved working directory and index state WIP on ft/team-page: 69c4c03 Update README.md

A@emmyb23 MINGW64 ~/git-exercise (ft/team-page)
$ git checkout ft/faq-page
Switched to branch 'ft/faq-page'
Your branch is up to date with 'origin/ft/faq-page'.

A@emmyb23 MINGW64 ~/git-exercise (ft/faq-page)
$ git checkout -b ft/home-page-redesign
Switched to a new branch 'ft/home-page-redesign'

A@emmyb23 MINGW64 ~/git-exercise (ft/home-page-redesign)
$ git checkout main
Switched to branch 'main'
Your branch is up to date with 'origin/main'.

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git add .

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git commit -m "Added a paragraph in home file"
[main 74cb072] Added a paragraph in home file
 1 file changed, 1 insertion(+)

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git push origin main
Enumerating objects: 5, done.
Counting objects: 100% (5/5), done.
Delta compression using up to 4 threads
Compressing objects: 100% (3/3), done.
Writing objects: 100% (3/3), 567 bytes | 189.00 KiB/s, done.
Total 3 (delta 1), reused 0 (delta 0), pack-reused 0 (from 0)
remote: Resolving deltas: 100% (1/1), completed with 1 local object.   
To https://github.com/Emmykaremera/Gym-Git-Exercise-Solutions.git      
   ae7d076..74cb072  main -> main

A@emmyb23 MINGW64 ~/git-exercise (main)
$ git checkout ft/home-page-redesign
Switched to branch 'ft/home-page-redesign'

A@emmyb23 MINGW64 ~/git-exercise (ft/home-page-redesign)
$ git fetch origin

A@emmyb23 MINGW64 ~/git-exercise (ft/home-page-redesign)
$ git rebase origin/main
Successfully rebased and updated refs/heads/ft/home-page-redesign.     

A@emmyb23 MINGW64 ~/git-exercise (ft/home-page-redesign)
$ git add .

A@emmyb23 MINGW64 ~/git-exercise (ft/home-page-redesign)
$ git commit -m "I made changes in home file"
[ft/home-page-redesign 054a2af] I made changes in home file
 1 file changed, 1 insertion(+)

A@emmyb23 MINGW64 ~/git-exercise (ft/home-page-redesign)
$ git push
fatal: The current branch ft/home-page-redesign has no upstream branch.To push the current branch and set the remote as upstream, use

    git push --set-upstream origin ft/home-page-redesign

To have this happen automatically for branches without a tracking      
upstream, see 'push.autoSetupRemote' in 'git help config'.


A@emmyb23 MINGW64 ~/git-exercise (ft/home-page-redesign)
$ git push --set-upstream origin ft/home-page-redesign
Enumerating objects: 14, done.
Counting objects: 100% (14/14), done.
Delta compression using up to 4 threads
Compressing objects: 100% (12/12), done.
Writing objects: 100% (12/12), 1.28 KiB | 262.00 KiB/s, done.
Total 12 (delta 6), reused 0 (delta 0), pack-reused 0 (from 0)
remote: Resolving deltas: 100% (6/6), completed with 1 local object.
remote:
remote: Create a pull request for 'ft/home-page-redesign' on GitHub by visiting:
remote:      https://github.com/Emmykaremera/Gym-Git-Exercise-Solutions/pull/new/ft/home-page-redesign
remote:
To https://github.com/Emmykaremera/Gym-Git-Exercise-Solutions.git
 * [new branch]      ft/home-page-redesign -> ft/home-page-redesign
branch 'ft/home-page-redesign' set up to track 'origin/ft/home-page-redesign'.

A@emmyb23 MINGW64 ~/git-exercise (ft/home-page-redesign)
$

```


## Bundle 4
### Exercise 1


```bash

