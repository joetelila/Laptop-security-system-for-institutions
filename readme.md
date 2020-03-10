# About

ASTU used to register all student's, staff's and new guest's laptops on paper to prevent possible laptop theft around campus. Since registration is on paper it is very difficult to keep track of data and it is time consuming to check. So, I came up with this idea to solve the problem. I created a web based system to register new laptops. After registration each users will be given a unique and encrypted QR code and will be attached on their laptops. After that, whenever users leave the compound the security guards scans the QR code using Android/IOS App to check the owner. Easy and convenient.

# Getting started

Steps:
  1. Clone the repo
  2. Create a database with the name <b>ASTU</b>, mySQL database would be nice.
  3. Import the tables and data from the <b>lms_sql.sql</b> file to the database you just created
  4. launch this command from project direcory 
  
  ``` php artisan serve ```   or   ``` php artisan serve --host=127.0.0.1 --port=8383 ```
     
 
      
     
# Demo
https://www.youtube.com/watch?v=_V58S7NxeQw

# Banner
![ASTU LAPTOP MANAGEMENT SYSTEM](https://user-images.githubusercontent.com/40062131/76290560-77b5d380-62bc-11ea-849b-6413ec09a85b.jpg)

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
