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

  `/path/to/the/laravel-blog/database/database.sqlite`

* In your command line interface, run the following command
  
  `php artisan key:generate`

* Run `php artisan serve`

* Finally, open your terminal and go to `localhost:8000/`

Now you can view the home page. To get access to other pages, you will need to register or log in, using `admin@example.org` as an email address and `admin123` as a password.

## Testing

In website's main page you can access `Articles` page, `Contact` page, and authentification page. Let's start with the first one.

### Articles page

Explain what these tests test and why

```
Give an example
```

### And coding style tests

Explain what these tests test and why

```
Give an example
```

## Deployment

Add additional notes about how to deploy this on a live system

## Built With

* [Dropwizard](http://www.dropwizard.io/1.0.2/docs/) - The web framework used
* [Maven](https://maven.apache.org/) - Dependency Management
* [ROME](https://rometools.github.io/rome/) - Used to generate RSS Feeds

## Authors

* **Billie Thompson** - *Initial work* - [PurpleBooth](https://github.com/PurpleBooth)

## Acknowledgments

* Hat tip to anyone whose code was used
* Inspiration
* etc
