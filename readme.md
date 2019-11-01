<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About This giftano-test app

This is a very simple REST API function. 

## How to run
Please access https://giftano-test.herokuapp.com/. To access the product and category REST, kindly use link as follow:

- https://giftano-test.herokuapp.com/api/category
- https://giftano-test.herokuapp.com/api/product

## Add new data
For example:

**Category**
1. Use this link https://giftano-test.herokuapp.com/api/category
2. Select GET
3. Insert data in the form (form-data, x-www-form-urlencoded) by using following columns:
- name
- status
- description
4. Click SEND

**Product**
1. Go to link https://giftano-test.herokuapp.com/api/product
2. Select GET
3. Insert data in the form (form-data, x-www-form-urlencoded):
- name
- status
- category_id
- description
- price
4. Click SEND

## Update data
**Category**
1. Go to https://giftano-test.herokuapp.com/api/category/{id}
Please change {id} into any existing category id
2. Select PUT
3. Insert data in the form (form-data, x-www-form-urlencoded) by using following columns:
- name
- status
- description
4. Click SEND

**Product**
1. Go to https://giftano-test.herokuapp.com/api/product/{id}
Please change {id} into any existing product id
2. Select PUT
3. Insert data in the form (form-data, x-www-form-urlencoded) by using following columns:
- name
- status
- category_id
- description
- price
4. Click SEND

## Delete data
**Category && Product**
1. Go to https://giftano-test.herokuapp.com/api/product/{id} for product, https://giftano-test.herokuapp.com/api/category/{id} for category. Please change {id} accordingly.
2. Select DELETE
3. Click SEND