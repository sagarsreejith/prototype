# Prototype

Create Application Like Gmail

## Getting Started

Tecnologies which I used to develope this application PHP and JS.

### Prerequisites

What things you need to install the software and how to install them

<ul>
    <li>PHP &gt;= 7.1.3</li>
    <li>OpenSSL PHP Extension</li>
    <li>PDO PHP Extension</li>
    <li>Mbstring PHP Extension</li>
    <li>Tokenizer PHP Extension</li>
    <li>XML PHP Extension</li>
    <li>Ctype PHP Extension</li>
    <li>JSON PHP Extension</li>
    <li>MySql</li>
    <li>Composer</li>
</ul>

```
I have used PHP Laravel Framework for backend MSA and Vue.js for frontend. PASSPORT for token based validation for Micro services.
```

### Installing

You can use artisan command for database migration, database seed and starting the project.

````
Please change the db credentials in .env file.
````

For database migration run the code below.

```
php artisan migrate
```

For datbase seed please run the code below.

```
php artisan db:seed
```

Finally you can start the application. Please run the code below.

```
php artisan serve.
```
### Micro Service end points

```
Login API

    URL: /api/login
    Method: POST
    Request Payload: {
        "email": "your_login email. You can find that in mysql db",
        "password": "policy"
    }

Insert Mail API

    URL: /api/insert-mail
    Method: POST
    Request Header: Autherization : Barear (Which you will get on success of login)
    Request Payload: {
        "subject": "subject",
        "body": "message",
        "senndTo":"2,34,33,21",
        "sender":"39",
        "status": "draft/send",
    }

Fetch Mails

    URL: /api/fetch-mail
    Method: POST
    Request Header: Autherization : Barear (Which you will get on success of login)
    Request Payload: {
        "userId": "user_id"
    }

Update the Mail status

    URL: /api/update-mail
    Method: POST
    Request Header: Autherization : Barear (Which you will get on success of login)
    Request Payload: {
        "mailId": "user_id"
    }
```

# Scaling the application

```
If you guys want to scale the application, seperate the Micro services and fronend and add a WorkFlow manager to handle various flows.
```
