# laravelProject

#-- CLONING A LARAVEL PROJECT FROM GIT

Step 1:- Clone project from git using the command git clone repository_url

Step 2:- Goto the project folder using terminal.

Step 3:- Run the command composer update, this will generate the vendor folder in the root directory.

Step 4:- Run the command npm install, this will generate the node_modules folder in the root directory.

Step 5:- Create the .env text file in the project root folder and copy then paste all the contents of .env.example text file which is already in the root folder itself.

Step 6:- Generate the key APP_KEY by using the following command php artisan key:generate.

Step 7:- Hit php artisan serve to run the project. Your project will be running on uri: http://localhost:8000 .
