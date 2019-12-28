## Laravel simple API for CRM ( customer relationship management ) 
simple Task for creating customers and actions on customers and also authentication with laravel passport
we can do CRUD operations on customers , add and update actions on customers 
The whole project test with postman 
## steps on building this api 

## 
### 1. creating migrations for customers , actions and the Many-to-many relation between them 
![1](https://user-images.githubusercontent.com/18046350/71545648-8c115200-2996-11ea-8fb3-4bce1d60942c.PNG)
![3](https://user-images.githubusercontent.com/18046350/71545676-c5e25880-2996-11ea-898e-bdfb73ea3d6d.PNG)
![action-customer-migration](https://user-images.githubusercontent.com/18046350/71545680-cf6bc080-2996-11ea-92d7-b82f2e14d76f.PNG)
![action-customer-table](https://user-images.githubusercontent.com/18046350/71545702-f75b2400-2996-11ea-9eb0-40879f843e36.PNG)

2. [Install Passport Package](https://www.mynotepaper.com/build-laravel-restful-api-crud-with-authentication-using-passport.html#step2)
3. [Migrate and Install Passport](https://www.mynotepaper.com/build-laravel-restful-api-crud-with-authentication-using-passport.html#step3)
4. [Passport Configuration](https://www.mynotepaper.com/build-laravel-restful-api-crud-with-authentication-using-passport.html#step4)
5. [Create Book Table](https://www.mynotepaper.com/build-laravel-restful-api-crud-with-authentication-using-passport.html#step5)
6. [Create Model and Controllers](https://www.mynotepaper.com/build-laravel-restful-api-crud-with-authentication-using-passport.html#step6)
7. [Create API Routes](https://www.mynotepaper.com/build-laravel-restful-api-crud-with-authentication-using-passport.html#step7)
8. [Call API using Postman](https://www.mynotepaper.com/build-laravel-restful-api-crud-with-authentication-using-passport.html#step8)


## Output
Register API: Verb: POST, URL: http://laravel_api.test/api/register

![Register API](https://user-images.githubusercontent.com/13184472/54782638-8b9a9c80-4c49-11e9-945f-1538e9cdec9f.png)

Login API: Verb: POST, URL: http://laravel_api.test/api/login

![Register API](https://user-images.githubusercontent.com/13184472/54782683-a66d1100-4c49-11e9-88d2-46abe97db75c.png)

Create Book API: Verb: POST, URL: http://laravel_api.test/api/books

![Create Book API](https://user-images.githubusercontent.com/13184472/54782728-c3a1df80-4c49-11e9-8a03-7af741697eb7.png)

All Books API: Verb: GET, URL: http://laravel_api.test/api/books

![All Books API](https://user-images.githubusercontent.com/13184472/54782770-df0cea80-4c49-11e9-92c4-c6e011d4d4a9.png)

Show Single Book API: Verb: GET, URL: http://laravel_api.test/api/books/1

![Show Single Book API](https://user-images.githubusercontent.com/13184472/54782830-02379a00-4c4a-11e9-91da-73f4b3a9f8e4.png)

Update Book API: Verb: PUT, URL: http://laravel_api.test/api/books/1

![Update Single Book API](https://user-images.githubusercontent.com/13184472/54782871-1c717800-4c4a-11e9-9d17-5847b86a92ae.png)

Delete Book API: Verb: DELETE, URL: http://laravel_api.test/api/books/1

![Delete Single Book API](https://user-images.githubusercontent.com/13184472/54782902-357a2900-4c4a-11e9-8963-8dc70a5e3bde.png)


## LICENCE

You can download the project, modify the code and use it anywhere you want without re-posting to your blog. Happy Coding :)

Thank you.
