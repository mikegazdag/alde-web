ALDE Art
========

1. Uses middleman

##### To Run

Run these commands after `git cloning` repo, assuming ruby is installed and `gem install bundle`.

1. `bundle install`
2. `bundle ex middleman server`

##### To Deploy

Have changes commited to git, will need a .env file setup for deployment to the proper bucket.

1. `bundle ex middleman build`
2. `bundle ex foreman run middleman deploy`


