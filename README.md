# SLIM ADR

## Introduction

> This project is a tutorial of [使用 PHP Slim 4 建立一個 RESTful 框架 (進階篇)](https://poabob.github.io/2022-09-02/Build-a-PHP-RESTful-Framework-using-Slim-4-Part2/)

### Minimal requirements

* docker/docker-compose
* php: >=8.0
* composer

## Installation

### Config


* .env configuration

> Just COPY .env.exampl to .env!

```
# dev/prod/stage/test
MODE=dev
# MYSQL CONFIG
DB_DRIVER=mysql
DB_NAME=Example
DB_HOST=mysql
DB_USER=root
DB_PASS=root
DB_CHARSET=utf8mb4

# SQLITE CONFIG
# DB_DRIVER=sqlite
# DB_NAME=./path/Example.db

# SETTINGS
DISPLAY_ERROR_DETAILS=1
LOG_ERROR_DETAILS=1
LOG_ERRORS=1


# JWT SETTINGS
JWT_ISSUER=SLIM_4
JWT_LIFETIME=86400
JWT_PRIVATE_KEY="-----BEGIN RSA PRIVATE KEY-----
MIIBPQIBAAJBALSlDUfngNVzILQh0UDzg22Wd3NCvHrl1PMK+IxRoTQovLN3TQ8E
oBgL7GqHTYSrnnADrV0JSgf8onbDzkvZoYcCAwEAAQJBALEY5w5JPZsFRViTlsww
b/bt/qk3EgUCcWTcqpMWLA4vBBH7/guLZvyWG1U4Q63vgO1SSA7g+bwMvmDMCj6l
fhECIQDc6/A9mYXirCwHL0iKb5o1R/ri4NqZYrcoGUrYhpntZQIhANFT7k4SffT0
3PSK1Pa2OcsnfuBMmqZcld3DP8+lCip7AiEAhRaZ9vIaxxBDwdxJTiSneLuxN6aP
6mGex0hdX43PA0UCIQDNZjD41LZZjYfeQPg1WZueF5QsnZ5GTaUUpIjRxF0UTwIh
AMa/1Gkl/FUaiZaFm6KMysKHAeWg3YZudouHoDLDcDbl
-----END RSA PRIVATE KEY-----"
JWT_PUBLIC_KEY="-----BEGIN PUBLIC KEY-----
MFwwDQYJKoZIhvcNAQEBBQADSwAwSAJBALSlDUfngNVzILQh0UDzg22Wd3NCvHrl
1PMK+IxRoTQovLN3TQ8EoBgL7GqHTYSrnnADrV0JSgf8onbDzkvZoYcCAwEAAQ==
-----END PUBLIC KEY-----"
```

## Run

```
composer install
docker-compose up -d
```

