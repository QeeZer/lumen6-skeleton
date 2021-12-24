# Lumen skeleton

* It can format code and check the error code when submit code.
* Use the best api response package of QeeZer/api-responder. 
* Comprehensive stratification ensures project decoupling.

### The directory structure

```
app
    Constants               All projects constants.
    Logics                  Project's logics, the service every step logic.
    Models                  Database models, just define data model.
    Repositories            The data repository, exec all db query.
    Services                Project's service and business.

doc                         The project's docs, named start with secret is not push to git repository.

libraries
    businessHelpers.php     The project's business helper function, like defined `su_opt_log()` function for save the superuser operation log.
    helpers.php             The project's helper function, like `e()` function to `throw new Exception()`
    HelperUtils.php         The Object-oriented style helpers.
```

### usage

#### download

`git clone https://github.com/QeeZer/lumen6-skeleton.git`

or 

`git clone git@github.com:QeeZer/lumen6-skeleton.git`

next run 

`composer install`

#### composer command

```
composer update-env             Replace env.example file to the .env file
composer serve                  It same as php -S 0.0.0.0:9090 -t public
composer test                   Run phpunit test
composer test-                  Run phpunit coverage test and save html doc to doc directory
composer cs-fix                 Run php-cs-fixer format code
composer analyse                Run phpstan check code
```
