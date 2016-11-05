#slide first
docker pull php:5.6  
docker run -it php:5.6 bash    
**PHP**:  php -r "new PDO('mysql:dbname=testdb;host=cmysql', '', '');"
# slide linking
docker pull mysql/mysql-server:5.6  
docker run -p 3306:3306 --name cmysql -e MYSQL_ROOT_PASSWORD=root -d mysql/mysql-server:5.6  
docker run -tid --name cphp --link cmysql php:5.6  

#Useful links

https://github.com/wsargent/docker-cheat-sheet  
https://docs.docker.com/compose/  
https://hub.docker.com  

# Tips

**docker-compose.override.yml** très utiles pour le travail en équipe  
