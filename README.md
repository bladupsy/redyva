<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Cubet Techno Labs](https://cubettech.com)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[Many](https://www.many.co.uk)**
-   **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
-   **[DevSquad](https://devsquad.com)**
-   **[Curotec](https://www.curotec.com/)**
-   **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Proyecto RedYvá

  RedYvá es un sistema de gestión y pedidos para conectar pequeños productores y clientes potenciales. Nuestro objetivo fue sistematizar un sistema de ventas y facilitar a los productores que puedan vender sus bolsones, conectandolos directamente con los usuarios, haciendo que estos puedan solicitar sus bolsones a domicilio o retirarlos en sus respectivas sucursales.

  Para lograrlo se crearon las páginas dentro del framework Laravel. Se basa en el MVC con cliente liviano, el back-end genera las vistas. Donde cada modulo es independiente de las demas partes, pero interconectadas.
  Utilizando: Xammp y Workbench para la realizacion de la base de datos relacional (SQL). Laravel para el Back-end junto con libreria de generacion de PDF(DOMPdf). Html5, CSS3, Javascript más las librerías Bootstrap, Jquery y AJAX, Leaflet para el Front-end.

* Alcance:

  Para lograr realizarlo se diseñó toda la interfaz mediante Figma y se le dió interactividad con Bootstrap y Jquery. Tenemos como objetivo faciliar a los usuarios realizar pedidos, y para ellos a futuro se planea introducir una funcionalidad de Login y Registro de usuarios para evitar que cada vez que el cliente necesite pedir un Bolson tenga que rellenar el formulario una y otra vez. Este contaría con la opcin de agregar y modificar sus datos dentro de su cuenta. Además una seccion especial para administradores, y que estos puedan gestionar los datos y visualizar la base de datos. Pero lo primero y principal es poner en funcionamiento un producto mínimo viable que pueda como minimo insertar Pedidos en la DB, y que estos puedan visualizarse.
  
  Todo esto es a lo que apuntamos como objetivo, intentando incrementar la complejidad poco a poco agregando y mejorando todo el sitio. 

  Tiene la modularización suficiente para agregar funcionalidades a futuro sin modificar ni perjudicar el funcionamiento del front-end, del back-end y de la database. Asegurando poder seguir incrementando la complejidad del proyecto. Está pensado para agregar un sistema de Login para los administradores.

  La página ofrece 3 tipos de bolsones, PESADO, CITRUS y VERDE, cada uno con sus respectivos precios y sus respectivos productos. Dandole la oportunidad al cliente a seleccionar un bolsón y realizar el pedido, en el cual especifica la sucursal a retirar sus productos (El cual solo se reparten cada viernes del mes), al retirarlo o al llevarselo a su dimicilio deberá mostrar su comprobante y pagar por sus productos.

## Front-end

  Para utilzar bootstrap he instalado atraves de composer los paquetes:
  Instalación paquete Laravel/ui
  composer require laravel/ui
  Después de instalar el paquete anterior, estamos listos para instalar Boostrap 4 en nuestro proyecto.

## Instalación Boostrap 4:

  <pre><code>php artisan ui bootstrap</code></pre>

  Recurso obtenido en [Codersfree](https://codersfree.com/blog/como-instalar-bootstrap-4-en-tu-proyecto-laravel-7).

  Sino en cambio lo podemos instalar a traves de Composer Bootstrap 5

  <pre><code>composer require twbs/bootstrap:5.0.0-beta2 </code></pre>

  Para instalar los iconos de Bootstrap 5

  <pre><code>npm i bootstrap-icons</code></pre>

  Para poder instalar todas las dependencias que necesitamos, debemos instalar npm en nuestro proyecto (para instalar npm debemos tener instalado Node Js en nuestra computadora):
  Instalación npm

  <pre><code> npm install </code></pre>

  Compilar nuestros archivos

    <pre><code>npm run dev</code></pre>

  Listo, ya tenemos nuestros archivos js y css listo para utilizar.

  Para poder usarlos debemos escribir en el head de nuestra plantilla lo siguiente:

  <link rel="stylesheet" href="{{asset('css/app.css')}}">

  Y justo antes de finalizar el body lo siguiente:

  <script src="{{asset('js/app.js')}}"></script>

## Instale Leaflet

  Através de npm con el siguiente comando

  <pre><code>npm install leaflet</code><pre>

## Jquery

  Se utilizó Jquery como librería de Javascript para interactuar con el DOM de las páginas, pero principalmente para que, mediante AJAX, las vistas puedan enviar datos al Back-end y poder actualizar y mostrar datos asincronicamente en la misma página sin necesidad de recargar.

  Se utilizó el CDN de jquery, y se lo puede ver al inicio de cada código Html dentro del <head>
  de la siguiente manera:    

<pre><code> <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> </code></pre>

## Back-End

  En esta parte solamente se utilizó PHP con el framework Laravel, donde se codearon todas las rutas de acceso, asi como los controladores y los modelos para acceder a la base de datos

  En Laravel, se utilizan los siguientes Controladores donde se reciben los datos y se procesan para hacer generar las consultas a la DB: 
  - PedidosController:Se encarga de recibir datos del Front-End y tratarlos, para luego enviarlos por medio de un método del Modelo (PedidosModel) y agregar en los registros el pedido del producto enviado por el usuario.
  - PdfController: Se encarga de recibir los datos del usuario mediante AJAX y poder generar un PDF descargable que funcionará como comprobante del pedido solicitado por dicho usuario.
  - NavegacionController: Se encarga de redireccionar a sus respectivas vistas, permitiendo la navegación en la página.
  - AdminController: Tiene como objetivo capturar los datos de los últimos pedidos de la base de datos y mostrarlos en una tabla, permitiendo al administrador acceder a ellos y mmodificarlos. En el futuro contendría tambien la lógica para el funcionamiento de un sistema de Login.

## DOMPdf - Librería Dependencias DOMPDF para generar archivo pdf

  - Hay que colocarle target="_blank" como atributo en el HTML

  Poner los siguientes comandos:
  <pre><code>composer require barryvdh/laravel-dompdf</code></pre>

  En config /app.php poner en "Providers" este codigo:

  -   Barryvdh\DomPDF\ServiceProvider::class,

  y en "aliases" el otro:

  -   'PDF' => Barryvdh\DomPDF\Facade::class,

  Luego:

  <pre><code>php artisan vendor:publish</code></pre> (el 1 o todos)

  En el controllador usado va:

  -   use Barryvdh\DomPDF\Facade as PDF;

  Limpiar cache :

  <pre><code>php artisan cache:clear</code></pre>

  Cerrar el servidor, el Visual Code, y volverlo a abrir.

  Utilizar:

  <pre><code>composer install</code></pre>

  Para actualizar todas las librerías necesarias en el proyecto de Laravel.

## Base de Datos

  Para la gestión Base de Datos (DB), se utilizó Workbench, donde se crearon un 
  usuario: "root"
  contraseña: ""

  Una Schema llamado 'Pedidos', las demás especificaciones siguen a continuación:

  La base de Datos nombrada: 'pedidos' (configurada con UTF8 - utf_spanish2_ci), contiene 5 tablas llamadas: pedidos, productos, bolsones, sucursales, email.

  Tablas:
  ------------------------------------------------------------------
  * pedidos: 
  - 'idpedidos' (PK) INT(100) Not Null Autoincremental; 
  - nombre Varchar(45);
  - apellido Varchar(50);
  - email Varchar(100);
  - direccion Varchar(100);
  - aDomicilio Varchar(45);
  - id_bolson (FK) Int(200) Default(1);
  - id_sucursal (FK) Int(200) Default(1).
  ------------------------------------------------------------------
  * productos:
  - codproductos (PK) Int(100) NotNull Autoincremental;
  - nombre_productos Varchar(45);
  - idbolson (FK) Int(200).
  ------------------------------------------------------------------
  * bolsones:
  - idbolsones (Pk) Int(100) Not Null;
  - nombre_bolson Varchar(45).
  ------------------------------------------------------------------
  * sucursales:
  - idsucursales (PK) Int(200) Not Null;
  - direccion_sucursal Varchar(100);
  ------------------------------------------------------------------
  * email:
  - idemail (PK) Int(100) Not Null AutoIncremental;
  - correo Varchar(50);
  - mensaje  Varchar(100);
  - nombre  Varchar(45)

  Se utilizó para enlazar las tablas unas Foreign Keys en la tabla 'pedidos', vinculandolas con los id's de las tablas 'sucursales' y 'bolsones'. Así como una Foreign Key vinculando la tabla 'productos' con la tabla 'bolsones', donde cada producto contiene sus respectivos bolsones.

## Instalación

  Para poder poner en funcionamiento el proyecto, solo se necesitan tener 3 cosas principales:
  - Instalar Composer y Laravel.
  - Tener Visual Studio Code como IDE.
  - Crear la Base de Datos, para ello XAMMP y WORKBENCH (MySQL).

  Lo demás se lo puede descargar o clonar del repositorio de GitHub.

  Arriba en la parte de Front y Back end se detallan las dependencias y librerias utilizadas y como instalarlas y/o utilizar su CDN.