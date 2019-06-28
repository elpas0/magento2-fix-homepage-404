# Magento 2: Homepage 404 error

## 1. Description

Full page cache can't distinguish GET request from HEAD request. If you do not have cached data or it is invalidated and web crawler send HEAD type request to your site, magento return 404 page and cache it. After that any GET request with see 404 page until you flush FPC. Magento team stated that bug is fixed in Magento 2.3.2 https://github.com/magento/magento2/issues/21299#issuecomment-485144642

## 2. How to install

### Install via composer (recommend)

Run the following command in Magento 2 root folder:

```
composer require elpas0/magento2-fix-homepage-404
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
php bin/magento cache:clean
```

### Install ready-to-paste package

- Download package from [magento2-fix-homepage-404.zip](https://nwdthemes.com/files/magento2-fix-homepage-404.zip)
- Unzip it
- Upload it to your magento root ( package/app >> magento_root/app )
- Run the following command in Magento 2 root folder:
```
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
php bin/magento cache:clean
```

### Contributors

NWDthemes team

### Quick Links

- [In-depth details](https://nwdthemes.com/2019/06/28/magento-2-homepage-404-error/)
- [Get Support](https://github.com/elpas0/magento2-fix-homepage-404/issues)
- [Contribute on Github](https://github.com/elpas0/magento2-fix-homepage-404/)