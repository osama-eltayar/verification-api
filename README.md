<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Api to verify user using email or phone  

<p>to run the project please follow this intructions</p>
<ol>
  <li>git clone https://github.com/osama-eltayar/verification-api.git </li>
  <li>open the project  cd /verification-api</li>
  <li>composer install</li>
  <li>cp .env.example .env</li>
  <li>php artisan key:generate</li>
  <li>configure your twilio keys in .env file</li>
  <li>php artisan serve</li>
</ol>
<hr>
<h4> by default application use sms verification if any error it use email but you must have a valid twilio account integrated with email </h4>
