# learnaway

LearnAway is a tool to facilitate the self-learning created by two technology enthusiasts, who live far from each other but linked by the passion for programming.

## Requirements

LearnAway api requires php and composer:

### PHP

```
sudo apt update && sudo apt install wget php-cli php-zip unzip curl
```
### Composer
```
curl -sS https://getcomposer.org/installer |php
sudo mv composer.phar /usr/local/bin/composer
```

### Installing api dependencies

```
cd api/
composer install
```

## Run learnaway API
```
cd api/
php bin/console server:start
```

## Test API listing items method

```
/api/items
```



