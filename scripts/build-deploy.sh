#!/usr/bin/env sh

cd `dirname $0`

hash uglifyjs 2>&- || { echo >&2 "\033[31mError: 'uglifyjs' program not found. Node JS and NPM required. Then install: 'npm install uglify-js -g'033[m\n" ; exit 1; }

sitename='alde.com'
ver=$(git rev-list --all | wc -l)
ver=$(($ver + 1))

verFolder=$sitename-v$ver

mkdir -p ../build/$verFolder
cd ..
pwd

echo '---- CSS: PRODUCTIONIFING'
	# compass clean
	# compass compile -c conf/compass-production.rb
	echo ''

echo '--- JAVASCRIPT BUNDLEING'
	uglifyjs webroot/js/bootstrap-modal.js webroot/js/bootstrap-transition.js webroot/js/jquery.xeyes-1.3.min.js webroot/js/jquery-lettering.js -c -o webroot/js/site-plugins.min.js 

echo '----	SYNCING FILES'
	#rm $sitename-v$ver.tgz
	rsync -atrvq webroot/* --exclude=sass-cache* build/$verFolder

	cd build/$verFolder/includes

	rm mysql-connect.php
	ln -s mysql-prod-connect.php mysql-connect.php
	
	cd ../../
	
echo '---- CREATING TARBALL WITH EXCLUDES'
	gnutar -czf $sitename-v$ver.tgz $verFolder/ --overwrite --exclude="*.tgz" --exclude="sass" --exclude=".git" --exclude=".sass-cache" --exclude="build" --exclude="*.rb" --exclude="scripts"

echo '---- DONE'
	rm -rf $verFolder

if [[ "$1" == "" ]]; then
	echo "usage: deploy.sh [dev]"
	exit
fi

if [[ "$1" == "ball" ]]; then
	echo '---- TARBALL CREATED IN build/'

elif [[ "$1" == "dev" ]]; then
	HOST="orm"

	REMOTEPATH="~/www/dev.allandehaan.com/"

	echo '---- SENDING FILE TO DEV to' $HOST':'$REMOTEPATH
	
	scp $sitename-v$ver.tgz $HOST:"$REMOTEPATH".
	#ssh -t $HOST "cd $REMOTEPATH; echo '-- YOU ARE NOW ON $HOST --'";bash --rcfile ~/.bash_profile

elif [[ "$1" == "prod" ]]; then
	HOST="orm"

	REMOTEPATH="~/www/allandehaan.com/"

	echo '---- SENDING FILE TO PRODUCTION to' $HOST':'$REMOTEPATH
	
	scp $sitename-v$ver.tgz $HOST:"$REMOTEPATH".
	#ssh -t $HOST "cd $REMOTEPATH; echo '-- YOU ARE NOW ON $HOST --'";bash --rcfile ~/.bash_profile


fi
