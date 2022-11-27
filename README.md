# Testing-PHP-Composer-Template
Plantilla entorno de prueba PHP-Composer.
<p align="center">
    <a href="https://getcomposer.org/">
        <img alt="Logotipo de Composer" src="images/composer_logo.png">
    </a>
</p>
Composer te ayuda a declarar, gestionar, e instalar dependencias de proyectos PHP.

 Ver https://getcomposer.org/ para más información y documentación.

## Instalación Composer en el sistema operativo Ubuntu:
``` bash
# Actualizar repositorios.
sudo apt-get update
# Instalar Composer en el sistema operativo.
sudo apt-get install composer -y
```
## Listado de comandos disponibles en Composer
``` bash
composer list
```
![Listado de comandos disponibles en Composer](/images/composer_list.png)

## Creación del paquete comoposer.json

Crea un fichero basico de configuración *composer.json* en el directorio actual.

``` bash
# Crea un fichero basico de configuración en el directorio actual.

composer init
```

## Instalación

``` bash
# Instalar dependencias
composer install
```

## Test

``` bash
composer test
```
