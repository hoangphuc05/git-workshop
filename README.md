# Git workshop

Git workshop project

# Contributors
Add you name at line 8

[Phuc Cai](mailto:pcai22@my.whitworth.edu)</br>
Jeremy Muriungi</br>
Caleb Grodegit push
Oof
Sadie's been left out

# Getting started
## Things you will need
1. [Git bash](https://git-scm.com/downloads)
2. [Visual studio code](https://code.visualstudio.com/)

# Setting up your information
To use git, you need to first set up your identities....
```bash
git config --global user.name "Your name"
git config --global user.email "Your email"
```
You can also set Git to use your favorite editor when resolving conflict, create push message,...
```bash
git config --global core.editor "code --wait"
```

# Starting

## Cloning this repository
You can clone this repository by using VS Code UI or using command line
### VSCode User Interface
Add some picture here
### Command line
```bash
git clone https://github.com/hoangphuc05/git-workshop.git
```
A new folder with the name git-workshop will be create.

## Creating new files
Now, let's try adding some files to our projects.

Let's open the folder `pages` and create a file with your Whitworth username, it should look something like this: `{yourWhitworthUsername}.html` (Example: `pcai22.html`)
Open the file that you just create and add (add what??)

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{Your name}'s website</title>
</head>
<body>
    <h1>This is {your name} awesome website</h1>
</body>
</html>
```

## Staging your file
New, modified, and/or deleted files need to be staged before pushing them to the master 
branch on git.

You can add all files that you made change (create, edit, delete) by using `git add`
```sh
git add .
```

## Git commit
You can commit your change with a message using the flag `-m`
```sh
git commit -m "Your commit message"
```
## Pull remote changes
You can pull changes from remote repository by using `git pull`
```sh
git pull
```
### Merge conflict
If the remote repository contain changes that cannot be merged automatically, you will need to resolve the conflict manually


## Push your change to online repository

```sh
git push
```

# Github flow on collaborating with others
[somethign about branches based flow]

## List out the current branch in your repository
```bash
git branch
```
## Create a new branch
You can create a new branch by doing `git checkout -b <branch name>`

Example:
```bash
git checkout -b development
```

## Change to a specific branch
After creating a new branch, you can move your work place to that specific branch by doing
```sh
git checkout <branch name>
```

## Perform some change on that branch
[do some change on the different branch]
[commit those changes]

## Seperation of branches
One of the main reason for you to work on a seperate branch is to isolate what you are working on in a different environment untill you ready to merge those change backed to the `main` branch

After commiting your change on the new branch, try switching back to the `main` branch using
```bash
git checkout main
```
You can see that all your changes are now gone as they are not a part of the main branch. You can see your changes again by switching back
```bash
git checkout <your new branch>
```

## Git merge
2 way to merge? Pull request to merge and merge directly?
