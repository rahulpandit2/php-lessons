## First set up your git environment to be able to push to github
```bash
# This is important to rename the branch from master to main
git config --global init.defaultBranch main
# Configure your name and email
git config --global user.name "Rahul Pandit"
git config --global user.email 92500570+rahulpandit2@users.noreply.github.com
# Set your default branch reconciliation behavior to merging
git config --global pull.rebase false
# Check your configuration
git config --list
git config --get user.name
git config --get user.email
```

## Set up ssh connection to github
```bash
# check if you have ssh key
ls ~/.ssh/id_ed25519.pub
# if you don't have ssh key, generate one
ssh-keygen -t ed25519 # Enter Enter
# Read the ssh key
cat ~/.ssh/id_ed25519.pub
```
**Go to github and add the ssh key to your account (Click on profiel > settings > SSH and GPG keys > New SSH key)**
```bash
# Test the ssh connection
ssh -T git@github.com
# Make sure your fingerprint is the same as the one on github
```
[Check your github fingerprint](https://docs.github.com/en/authentication/keeping-your-account-and-data-secure/githubs-ssh-key-fingerprints)

## commit your changes and push to github
```bash
# Add the origin url to your github repository
git remote add origin
# may need this for the first time you push your changes
git push --set-upstream origin main
# Push your changes to github
git push -u origin main
# If you get an error, try this
git push -u origin main --force
```