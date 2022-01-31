## About ASSIGNMENT

This assignment create crud for add,update,delete product and create order for paticular product

## Installation
1. create database
2. set database credentials in .env file
3. go to project directory in terminal
4. run command "php artisan migrate"
5. run command "php artisan serve"

## API 
# You can import collection(https://www.getpostman.com/collections/978120f3e706b96643b1) or use bellow api and payload

# List of product
Url - http://127.0.0.1:8000/api/products
Method - GET
payload - No need

# Create product
Url - http://127.0.0.1:8000/api/product
Mehod - POST
payload - {
    "title": "Product Title",
    "description": "Product description",
    "price": 100,
    "stock": 10
}

# Update product
Url - http://127.0.0.1:8000/api/product/{id}
Mehod - PUT
payload - {
    "title": "Product Title",
    "description": "Product description",
    "price": 100,
    "stock": 10
}

# Delete Product
Url - http://127.0.0.1:8000/api/product/{id}
Mehod - DELETE
payload - No need

# Order List
Url - http://127.0.0.1:8000/api/orders
Method - GET
payload - No need

# Create Order
Url - http://127.0.0.1:8000/api/order
Mehod - POST
payload - {
    "product_id": 1,
    "quantity": 2,
    "total":10
}