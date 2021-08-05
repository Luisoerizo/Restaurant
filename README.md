# Sistema de reservaciones para restaurantes con Laravel 8

La funcionalidad del sistema es llevar a cabo un registro de reservaciones para un restaruante.
Además de estas mismas, se pueden crear posts tales como artículos del restaurante, promociones, etc.

## Ejecutar de manera local

Clonar el proyecto
```bash
  git clone https://github.com/Luisoerizo/Restaurant.git
```

Ir al directorio del proyecto

```bash
  cd blog
```

Instalar las dependencias

```bash
  composer install
```
```bash
  npm install
```

Base de datos (en cualquier gestor de bbdd)
```bash
  create database 'restaurant'
```

Iniciar servidor
```bash
  php artisan serve
```

Si los estilos de TailwindCSS no te cargan correctamente, elimina  o comenta la primera línea del archivo ```tailwind.confij.js```
```bash
 //mode: 'jit',
```
y posteriormente corre el siguiente comando:
```bash
 npm run dev
```
## Creación de servidor local
en la carpeta:  ```C:\Windows\System32\drivers\etc ``` abre el archivo: ```hosts```
y al final del documento agrega la línea siguiente: 

```127.0.0.1 restaurant.test```

Ahora en la carpeta  ```C:\xampp\apache\conf\extra``` selecciona el archivo 
 ```httpd-vhosts.conf``` y agrega al final del documento las siguientes líneas:
 ```
<VirtualHost *:80>
    DocumentRoot "C:\xampp\htdocs\restaurant\public"
    ServerName restaurant.test
    <Directory "C:\xampp\htdocs\restaurant\public">
            Options All
            AllowOverride All
            Require all granted
    </Directory>
</VirtualHost>
```

## Variables de entorno

Variables de entorno utilizadas en este proyecto en el archivo .env

`FILESYSTEM_DRIVER = public` 

`DB_DATABASE= restaurant`

`APP_URL=http://restaurant.test/`
## Documentación

[Laravel](https://laravel.com/docs/8.x)

[Laravel en español](https://codersfree.com/documentacion/laravel-espa%C3%B1ol)

[Laravel Livewire](https://laravel-livewire.com/)

[TailwindCSS](https://tailwindcss.com/docs)

[AdminLTE](https://github.com/jeroennoten/Laravel-AdminLTE)

[Bootstrap 4](https://getbootstrap.com/docs/4.0/getting-started/introduction/)

## Autores

- [Luis Andrés García Perdomo](https://www.github.com/luisoerizo)

## Tech Stack

**Cliente:**  TailwindCSS

**Administrador:** AdminLTE, Bootstrap 4

**Server:** Laravel, Livewire

  