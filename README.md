
INSTALLATION
------------
1. composer install
2. create virtual hosts
3. create database and put settings
4. run migrations
php yii migrate --migrationPath=@app/modules/adm/migrations
php yii migrate --migrationPath=@app/modules/bam/migrations
   

after that you will have yii2 default api routes for authors and books management

POST /bam/book/create - need to pass first_name, last_name params <br>
POST /adm/author/create - need to pass title, author_id params <br>
POST /bam/book/update/{id} <br>
POST /adm/author/update/{id} <br>
POST /bam/book/delete/{id} <br>
POST /adm/author/delete/{id} <br>
GET /bam <br>
GET /adm <br>
