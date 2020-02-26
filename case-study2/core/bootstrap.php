<?php
    require 'core/model/customer.php';
    require 'core/model/deliver.php';
    require 'core/model/order.php';
    require 'core/model/payment.php';
    require 'core/model/product.php';
    require 'core/model/shiper.php';
    require 'Router.php';
    require 'Request.php';
    require 'database/Connection.php';
    require 'database/QueryBuilder.php';
   
    return new QueryBuilder(Connection::connect());
    