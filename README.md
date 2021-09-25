# Ozone Admin Panel

Ozone admin panel is base on blade template engine, also the routing will handle dynamically by Somfony routing system.

## Installation
Fist clone the project by following command in your localhost directory: 

`git clone https://github.com/OzoneTeamWork/OzoneAdminPanel.git`

Then fetch all branches

`git fetch --all`

When you have all branches you can check out the route branch by following command: 

`git checkout route`

Now you are ready to install dependencies by following commands: 

`composer install`

`npm intall`

**Node: To install dependencies you need to install Composer and Node first.**

## How to browse pages?
For example in my case I clone Ozone Admin Panel in the following directory: 

`D:\xampp\htdocs\Projects\OzoneAdminPanel`

Which mean I can access it with following address by XAMPP, if my localhost is run:

`http://localhost/Projects/OzoneAdminPanel` 

By visiting related address you can see the welcome page.

## Run PHP server
You can run the following commend in the root project directory then browse the `127.0.0.1:8000` with your web browser.

`php -S 127.0.0.1:8000 -t public/`

## How to add new pages?
By adding `*.blade.php` file in the `view` folder you can add simple pages, also you can just `save as` one of the existed page to create new pages, for example: 

Open the `dashboard.blade.php` and save as it by new name like `test.blade.php`, now you can access that page by visiting following link: 

`http://localhost/Projects/OzoneAdminPanel/index.php/pages/test`

