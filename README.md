<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# email-send-laravel-10

- if you downloaded this project make sure to run the command to install all dependencies
```sh
composer install
```
## Steps
- firstly you need to create app-password form your gmail account settings
- if the app-password is not visible to you. make sure turn on 2-step verification and search for 'App password' in the search box of google account

- following configuration for env file
```sh

MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=yourEmail@gmail.com
MAIL_PASSWORD=xxxxxxxxxxxxxxxx   #your app password here(12 digit)
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="yourEmail@gmail.com"
MAIL_FROM_NAME="${APP_NAME}"

```
- create a mail
```sh
php artisan make:mail DemoMail
```


- create controller to send mails
```sh
php artisan make:controller MailController
```

- if you are sending attachments: make sure your storage is linked with application
```sh
php artisan storage:link
```

- for optimizing new configurations you can run these two commands
```sh
php artisan cache:clear
php artisan optimize
```

### Files where we made changes

- .env
- app\Mail\DemoMail.php
- app\Http\Controllers\MailController.php
- resources\views\welcome.blade.php
- routes\web.php
- resources\views\emails\demoMail.blade.php
- public\storage\attachments\dummy.pdf
- public\storage\attachments\earth.png