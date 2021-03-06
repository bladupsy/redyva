# About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Como Levantar proyecto

 Para agregar las dependencias de composer

`Composer install`

Para instalar laravel:
`composer global require laravel/installer`

Para clonar en .env
 `cp .env.example .env`

Sin datos comprobables o entendibles:
 `php artisan key:generate`

 Sección Frontend

Para utilzar bootstrap he instalado atraves de composer los paquetes:
`Instalación paquete Laravel/ui`

`composer require laravel/ui`

Después de instalar el paquete anterior, estamos listos para instalar Boostrap 4 en nuestro proyecto.

Instalación Boostrap 4:

`php artisan ui bootstrap`

Recurso obtenido en [Codersfree](https://codersfree.com/blog/como-instalar-bootstrap-4-en-tu-proyecto-laravel-7).

Sino en cambio lo podemos instalar a traves de Composer Bootstrap 5

`composer require twbs/bootstrap:5.0.0-beta2`

Para instalar los iconos de Bootstrap 5
`npm i bootstrap-icons`

Para poder instalar todas las dependencias que necesitamos, debemos instalar npm en nuestro proyecto (para instalar npm debemos tener instalado Node Js en nuestra computadora):
Instalación npm

 ` npm install `

Compilar nuestros archivos

  `npm run dev`

Listo, ya tenemos nuestros archivos js y css listo para utilizar.

Para poder usarlos debemos escribir en el head de nuestra plantilla lo siguiente:

`<link rel="stylesheet" href="{{asset('css/app.css')}}">

Y justo antes de finalizar el body lo siguiente:

`<script src="{{asset('js/app.js')}}"></script>

## Instale Leaflet

 Através de npm con el siguiente comando

`npm install leaflet`
