## Laravel simple API for CRM ( customer relationship management ) 
simple Task for creating customers and actions on customers and also authentication with laravel passport
we can do CRUD operations on customers , add and update actions on customers 
The whole project test with postman 

### Installation ###
- Clone the repository with __git clone__
- Copy __.env.example__ file to __.env__ and edit database credentials there
- Run __composer install__
- Run __php artisan key:generate__
- Run __php artisan migrate__
- Run __php artisan serve__ 

### Main Features ###

* Authentication with laravel passport 
* CRUD operation on customers 
* Adding or updating actions of customer 


### Output ###
Register API: Verb: POST, URL: http://127.0.0.1:8000/api/register

![register](https://user-images.githubusercontent.com/18046350/71545900-8701d200-2999-11ea-862f-5426f5d586cc.PNG)

Login API: Verb: POST, URL: http://127.0.0.1:8000/api/login

![login](https://user-images.githubusercontent.com/18046350/71545914-b44e8000-2999-11ea-8736-291462c72425.PNG)

Create customer  API: Verb: POST, URL: http://127.0.0.1:8000/api/customers

![create-customer](https://user-images.githubusercontent.com/18046350/71545925-dc3de380-2999-11ea-8823-0449dc2a79c7.PNG)

All customers API: Verb: GET, URL: http://127.0.0.1:8000/api/customers

![list all customers](https://user-images.githubusercontent.com/18046350/71545934-faa3df00-2999-11ea-8641-9aec8c67a8b4.PNG)

Show Single Customer API: Verb: GET, URL: http://127.0.0.1:8000/api/customers/4

![get single customer](https://user-images.githubusercontent.com/18046350/71545940-0beceb80-299a-11ea-903c-74ed3df207d0.PNG)

Update Customer API: Verb: PUT, URL: http://127.0.0.1:8000/api/customers/4

![update-customer](https://user-images.githubusercontent.com/18046350/71545956-38a10300-299a-11ea-810c-29bad648dbf5.PNG)

Delete Customer API: Verb: DELETE, URL: hhttp://127.0.0.1:8000/api/customers/5

![delete-customer](https://user-images.githubusercontent.com/18046350/71545967-5f5f3980-299a-11ea-8b34-3f3252f25028.PNG)

Add action on customer   API: Verb: POST, URL: http://127.0.0.1:8000/api/actions

![add-action-to-customer](https://user-images.githubusercontent.com/18046350/71546210-4015db80-299d-11ea-8fbf-fe829b83356b.PNG)

Update action on customer   API: Verb: PUT, URL: http://127.0.0.1:8000/api/actions/10

![update-action-on-customer](https://user-images.githubusercontent.com/18046350/71546225-6e93b680-299d-11ea-8a46-8a65c26ea822.PNG)


Thank you.
