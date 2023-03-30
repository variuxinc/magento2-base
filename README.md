# Module Variux Base

    `variux/module-base`

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
This is Variux base module, that fix some Magento issues. And extends default Magento features.

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Variux`
 - Enable the module by running `php bin/magento module:enable Variux_Base`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require variux/module-base`
 - enable the module by running `php bin/magento module:enable Variux_Base`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration

 - Enable (general/fetching_news/enable)


## Specifications

 - Crongroup
	- variux

 - Cronjob
	- variux_base_fetchingnews

 - Helper
	- Variux\Base\Helper\CoreHelper

 - Helper
	- Variux\Base\Helper\UrlHelper


## Attributes



