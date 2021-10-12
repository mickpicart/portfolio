## **Portfolio - Mickaël Picart**

### 1. Clone repository

### 2. Installation :
  - Change to directory :
      ```
      cd back
      ```
  - Install dependencies :
      ```
      composer install
      ```
  - Copy .env file :
      ```
      cp .env.example .env
      ```
  - Modify DB_* value in .env with your database config.
  - Generate application key:
      ```
      php artisan key:generate
      ```
  - Migrate :
      ```
      php artisan migrate
      ```
  
   - Serve (the web server artisan is the PHP built-in web server, which is **not for use in any scenario other than development**) :
      ```
      php artisan serve
 
