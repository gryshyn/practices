#!/bin/bash
echo "Start Deploy Script"
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento indexer:reindex
php bin/magento setup:static-content:deploy -f
php bin/magento c:f
php bin/magento c:c
sudo chmod -R 777 var/ generated/ pub/
