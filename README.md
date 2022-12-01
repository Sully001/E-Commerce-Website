# E-Commerce-Website
E-Commerce site made with PHP using the Laravel Framework

<h1>Description</h1>
Hardware 28 is an online e-commerce website dedicated to bring the best PC hardware at the cheapest price possible. The backend of this site was built with a PHP framework (Laravel). The front end of the site was built using HTML, CSS, a CSS framwework (Bootsrap) A and Javascript. Our database uses MySQL and it is hosted on PHPMyAdmin.

-------------------------------------------------------------------------------------------------

<h2>Website Features</h2>
Users can create accounts and login/logout of the site 
Products are listed and are available to be added to a user's basket
Users can deleted items from their basket
Users can checkout

<ul>
  <li>Users can create accounts and login/logout of the site</li>
  <li>Users can create accounts and login/logout of the site</li>
  <li>Products are listed and are available to be added to a user's basket</li>
  <li>Users can deleted items from their basket</li>
  <li>Users can checkout</li>
  <li>There's an about/contact/welcome page</li>
  <li>Admin's can login/ manage products(viewwing orders) and users</li>
  <li>Admin's can grant permissions/</li>
</ul>

-------------------------------------------------------------------------------------------------

<h1>Setup Requirements</h1>
<ul>
  <li>PHP Version <= 8.1.10</li>
  <li>Laravel Version <=9.41.0</li>
  <li>Composer Version <= 2.4.2</li>
  <li>XAMPP (For any OS)</li>
</ul>


<h3>Working locally</h3>
<ol>
  <li>Make sure that XAMPP is installed on your local machine</li>
  <li>Make sure that Composer is installed as well</li>
  <li>Clone this Github repo</li>
  <li>Change the filename of (example.env) => (env)</li>
  <li>
    Make sure that your database variables are correct.
        <ul>
            <li>DB_CONNECTION=mysql</li>
            <li>DB_HOST=localhost</li>
            <li>DB_PORT=3306</li>
            <li>DB_DATABASE=laravel_site</li>
            <li>DB_USERNAME=root</li>
            <li>DB_PASSWORD=''</li>
        </ul>
  </li>
</ol>

Next run the command `php artisan migrate:refresh --seed`
1. `Move into the laravel-site directory`
2. Run command `composer install` in the terminal
3. `php artisan key:generate`
4. `php artisan serve`
5. Open the website in your browser `http://127.0.0.1:8000`

------------------------------------------------------------------------------------------------

<h2>Admin Access</h2>
<ul>
    <li>Email:`test@example.com`</li>
    <li>Password:</li>`test`

</ul>
