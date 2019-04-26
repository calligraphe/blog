# The Laravel Blog

Website for a blog created using the Laravel Framework.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

* [Git](https://git-scm.com/downloads)
* [Composer](https://getcomposer.org/download/)
* [PHP 7.1.3](https://www.php.net/downloads.php) or higher

You may want to follow [this guide](https://laravel.com/docs/5.7#installation) to install Laravel .

### Installing project

* Open your terminal and change to the directory where you want to store the downloaded project

* Paste the following line and press enter

  `git clone https://github.com/calligraphe/laravel-blog.git`

* Move to the project direcotry

  `cd laravel-blog`
   
* Run `composer update`

* Open the project in some [IDE](https://en.wikipedia.org/wiki/Integrated_development_environment), like [Sublime](https://www.sublimetext.com)

* Find `.env.example` file and rename it to `.env`

* Open `.env` file and change `DB_CONNECTION` to `sqlite`

  `DB_CONNECTION=sqlite`

* For `DB_DATABASE` put the absolute path to the database file, which is in `database` folder. For example

  `/path/to/laravel-blog/database/database.sqlite`

* In your command line interface, run the following command
  
  `php artisan key:generate`

* Run `php artisan serve`

* Finally, open your terminal and go to `localhost:8000/`

Now you can view the home page. To get access to other pages, you will need to register or log in, using `admin@example.org` as an email address and `admin123` as a password.

## Testing

You are currently at `Home` page, where you can see the titles of the 3 latest articles, which are the link to the full article. But to view those article, or access the `Articles` or `Home` pages, you will need to autheticate, by logging in or registering.

### Articles page

This page shows the titles of all available posts and IDs of their authors. Clicking the title will redirect you to the page with the single article that you chose to read.

### Single article page

Here you can view the full article and the information about it: title, author, body. This page also contains comments section: the oldest are on top and the latest ones in bottom. There is also a form to add a new comment. You can write your comment in the text field and send it by clicking `Add comment` button.

### Contact page

This page contains a form for a certain data: name, email address and message. After completing the form and sending the message, you'll be redirected to the confirmation page.

In the same `Contact` page, there is a link `Voir la liste des contacts`, which redirects to the page with the information of all previous contact requests: name, date, email and message.


## Remarks about the project

At the very beginning the whole concept of Laravel was very confusing for me, especially putting the right pieces of code into the right file. Building the application with this framework required much deeper knowledge in OOP PHP, interaction with database, MVC model, dependecies, and especially the errors. To get that, I finished the [`Laravel 5.7 From Scratch`](https://laracasts.com/series/laravel-from-scratch-2018) course, which is of a very high quality and helped me a lot.

What also helped me in my learning was the following the path, starting from `wep.php` to `xxxController` and so on, to find the source of the problem. Doing that multiple times, gave me a better understanding of the famework logic, and why its efficient.

