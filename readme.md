<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## About Volunteer System

This is a pre-semester project for Senior Project CIS4327.

### Group Members

- Kevin Bell
- [Andrew Greer](https://github.com/Initech9)
- [Stephen Hartman](https://github.com/stephenhartman)
- Lindsey Wanta


## Laravel

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

## Learning Laravel

Laravel has the most extensive and thorough documentation and video tutorial library of any modern web application framework. The [Laravel documentation](https://laravel.com/docs) is thorough, complete, and makes it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 900 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Installation

### Mac OSX

1. Clone [VolunteerSystem repository](https://github.com/stephenhartman/VolunteerSystem) into project folder of choice

`git clone https://github.com/stephenhartman/VolunteerSystem`

2. Install [PHP](http://php.net/)

- Install [Homebrew](https://github.com/Homebrew/brew)
`brew tap homebrew/hombrew-php`

3. Install [Composer](https://getcomposer.org/download/) Dependency Manager

```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '669656bab3166a7aff8a7506b8cb2d1c292f042046c5a994c43155c0be6190fa0355160742ab2e1c88d40d5be660b410') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

4. Download [Laravel](https://laravel.com/) using Composer

`composer global require "laravel/installer"`

- Add $HOME/.composer/vendor/bin to $PATH in terminal rc file (e.g. ~/.bashrc)

5. Install npm in project folder

```
brew install npm
brew install node
```

6. Install [Laravel Mix](https://laravel.com/docs/5.4/mix) in project folder

`npm install`

`np run watch` will monitor all relevant files for changes to compile
