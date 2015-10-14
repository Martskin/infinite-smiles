echo "Creating database 'wordpress-infinite-smiles' (if it does not exist)..."

mysql -u root --password=root -e "CREATE DATABASE IF NOT EXISTS \`wordpress-infinite-smiles\`"
mysql -u root --password=root -e "GRANT ALL PRIVILEGES ON \`wordpress-infinite-smiles\`.* TO wp@localhost IDENTIFIED BY 'wp';"

if [ ! -d "htdocs" ]; then
	echo 'Installing WordPress (release version) in wordpress-infinite-smiles/htdocs...'
	mkdir ./htdocs
cd ./htdocs
	wp core download --allow-root 
	wp core config --dbname="wordpress-infinite-smiles" --dbuser=wp --dbpass=wp --dbhost="localhost" --allow-root
	wp core install --url=wordpress-infinite-smiles.dev --title="wordpress-infinite-smiles - A WordPress Site" --admin_user=admin --admin_password=password --admin_email=demo@example.com --allow-root
		cd -
else
	echo 'Updating WordPress in wordpress-infinite-smiles/htdocs...'
	wp core update --allow-root
	wp core update-db --allow-root
fi
