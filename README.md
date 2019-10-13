# Boat Admin Challenge

## About

This web app consists of a full CRUD functionality made with [Symfony] and [Sonata Admin], for a [Doctrine] entity called Boat.

## Installation

Clone or download this repository and execute `composer install`

Execute `php bin/console doctrine:migrations:migrate` to create the entity.

## Run

Execute `php bin/console server:run` and open in your browser at `http://localhost:8000/admin`


[Symfony]: <https://github.com/symfony/symfony>
[Sonata Admin]: <https://github.com/sonata-project/SonataAdminBundle>
[Doctrine]: <https://github.com/doctrine/orm>
