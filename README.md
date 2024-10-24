# laravel-rabbitmq

<p align="center"><a href="https://laravel.com" target="_blank"><img src="0_qPPyTKTmoUY4EciU.webp" width="400" alt="Laravel Logo"></a></p>

## RabbitMQ

# Browser
- http://localhost/send
- http://laravel.test/consumer

## Instalado - Primeiro precisamos instalar a biblioteca php-amqplib

`composer require php-amqplib/php-amqplibcomposer require php-amqplib/php-amqplib`

## Visualizando a mensagem enviada
Para visualizar a mensagem enviada acesse no seu navegador o endereço http://localhost:15672

O usuário e senha padrão é guest.

## Queues do RabbitMQ

## Cenário 1
    Exchange: pdf_events
    Queue A: create_pdf_queue
    Binding entre a exchange (pdf_events) e a Queue A (create_pdf_queue): pdf_create

## Cenário 2
    Exchange: pdf_events
    Queue B: pdf_log_queue
    Binding entre a exchange (pdf_events) e a Queue B (pdf_log_queue): pdf_log

## queue

php artisan queue:work rabbitmq
