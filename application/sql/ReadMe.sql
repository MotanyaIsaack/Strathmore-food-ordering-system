Id like us to have the same database configurations for this project

Open your CMD.
Do the following commands.

cd C://xampp/mysql/bin

type mysql -u root

Then, type

GRANT ALL PRIVILEGES ON *.* TO 'ordering'@'localhost' IDENTIFIED BY 'system';

Then, change your database config