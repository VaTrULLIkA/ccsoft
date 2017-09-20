# Install composer ================================================================================

composer install

# Create database =================================================================================
mysql -uroot -e "DROP DATABASE if exists ccsoft_db; CREATE DATABASE ccsoft_db CHARACTER SET utf8 COLLATE utf8_general_ci;"

# Migration up ====================================================================================
yii migrate up --interactive=0