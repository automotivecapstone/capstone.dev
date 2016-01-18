# Setup Steps
- make an organization in GitHub and add members
- create a repository and add your contributors
- name the repository project.dev
- One person on the team does the following:
    - from /vagrant/sites on your VAGRANT box
    composer create-project laravel/laravel blog.dev 4.2.* --prefer-dist
    - from Mac ~/vagrant-lamp/ folder, run `ansible-playbook ansible/playbooks/vagrant/site/php.yml`
    - from Mac subl /etc/hosts and add a record for your .dev
    - add any packages
    - add, commit, and push to github

Other teammembers,
    - cd ~/vagrant-lamp/sites
    - git clone <github ssh clone link from the repo>
    - from Mac ~/vagrant-lamp/ folder, run `ansible-playbook ansible/playbooks/vagrant/site/php.yml`
    - from Mac subl /etc/hosts and add a record for your .dev
    - do `composer install` from Vagrant box inside the .dev folder
------
# Everybody
- make a new DB with the ansible-playbook ansible/playbooks/vagrant/mysql/database.yml command

Follow instruction at http://app.codeup.com/content/laravel/intro/environment.html to modify your bootstrap/start.php file, create a .env.local.php file, and create an env-template.php file for sharing.

