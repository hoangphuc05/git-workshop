# Git workshop

## Git workshop project - Let's build a website together<br/>
Made by Whitworth ACM club - 2022<br/>
Website link: [acm.meorung.me](https://acm.meorung.me)<br/>
Github link: [github.com/hoangphuc05/git-workshop](https://github.com/hoangphuc05/git-workshop)<br/>

# Contributors

[Kaelan Kramer](mailto:kkramer22@my.whitworth.edu)<br/>


# Step 1. Setup
## Things you will need
1. [Git bash](https://git-scm.com/downloads)
2. [Visual studio code](https://code.visualstudio.com/)

# Setting up your information
To use git, you need to first set up your identities....
```bash
git config --global user.name "Your name"
git config --global user.email "Your email"
```

# Step 2. Getting Started

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
Open the file that you just create and add your own website. Here's a template:

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

# Step 3. Basic Commands
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


## Push your change to online repository

```sh
git push
```
# Step 4. Merges & Conflict
## Pull remote changes
You can pull changes from remote repository by using `git pull`
```sh
git pull
```

## Add your own changes to the readme file
Add your name and link to your email on line 10 of the readme file
```markdown
[Your name](mailto:yourEmail)<br/>
```

## Stage your changes
You can stage your changes by using `git add`
```sh
git add README.md
```

## Commit your changes
You can commit your changes with a message using the flag `-m`
```sh
git commit -m "Your commit message"
```

## Pull remote changes
**Don't do this until we told you to**<br/>
You can pull changes from remote repository by using `git pull`
```sh
git pull
```
## Merge conflict
If the remote repository contain changes that cannot be merged automatically, you will need to resolve the conflict manually<br/>
In this specific example, you want to add everyone name. Choose `accept both change` to add both remote and local changes.

### Add your own merge and commit it before pushing
```sh
git add .
git commit -m "Merge <yourname> to the contributor list"
git pull
git push
```
# Branching
Collaborating and making change directly on `main` can be problematic sometimes, especially when there are services relying on your `main` code base to function. To avoid publishing unfinished code on `main` while still saving and sharing your code with your team, you can create a new branch (ex: `development`) and publish your code on that branch. Once the feature is properly implemented, you can merge your code from `development` to `main`

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
1. Add a broken page to the new branch
2. Commit the new broken page to new branch

## Coming back to main
You can always come back to main or to any other branch by doing
```sh
git checkout main
```

## Pushing your new branch to remote server
Just like main branch, you can push your development branch online
```sh
git push --set-upstream origin <your branch name>
```

## Merging your changes
### Merge locally
Once you want to publish your change to main, you can switch to `main` branch, and merge your current development branch to branch

```sh
git checkout main
git merge development
```

### Merge by creating a pull request
Another way of publishing your change is to create a pull request, this will help your team keep track of what being added to main and comment those changes if needed

