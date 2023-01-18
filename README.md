# php_faker_composer

## A simple code with PHP which imports the php Faker package from packagist and use it in the project
[![Hits](https://hits.seeyoufarm.com/api/count/incr/badge.svg?url=https%3A%2F%2Fgithub.com%2FAmirMGhanem%2Fphp_faker_composer&count_bg=%230078FF&title_bg=%23555555&icon=php.svg&icon_color=%23E7E7E7&title=HITS&edge_flat=false)](https://hits.seeyoufarm.com)


First, you have to make sure you have composer installed in your machine

 - using homebrew 
```bash
brew install composer
```

- using the installer script

https://getcomposer.org/download/

```bash
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```


once you have composer installed to your machine,
install FakerPhp Library 

```bash
composer require fakerphp/faker
```

## Clone the project and run it :) 
Good luck.