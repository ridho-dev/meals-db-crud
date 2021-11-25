# Meals - PHP CRUD

This is a website that implement CRUD (Create, Read, Update, Delete) operation using mainly PHP and sql for database query. Also this website runs in local server using XAMPP.

If you want to use this project, you can follow these instructions:
1. Get the file into your computer with download zip or clone, and save it in htdocs. htdocs is a folder inside xampp folder.
2. Open XAMPP, start apache and mysql.
3. Open PhpMyAdmin in your browser (localhost/phpmyadmin/), import the sql file.
4. Open the web with localhost/folder_name/index.php. It will bring you to login page.
5. Its already have 2 user, user is u:user1 p:user123; admin is u:admin1, p:admin123.

Its use pure php, bootstrap framework for css. 

The feature:
1. Login
   It use user table in the database, currently you can only edit user in phpmyadmin.
2. CRUD
   Create, make new meal data with '+' button in left.
   Read, display the meals data from database as shown in web table.
   Update, edit the meal data, with 'Edit' button.
   Delete, delete a meal data.
3. Logout
   Log out, and delete current session.
4. User Level
   Two different level, user and admin. If you are a user, you can only see the displayed data. If you are an admin you can create, update, and delete data.
