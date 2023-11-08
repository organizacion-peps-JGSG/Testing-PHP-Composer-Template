# Testing-PHP-PHPUnit-Composer-Template
<a name="top"></a>
Plantilla entorno de prueba PHP-Composer y Testing con PHPUnit.
<p align="center">
    <a href="https://getcomposer.org/">
        <img alt="Logotipo de Composer" src="images/composer_logo.png">
    </a>
</p>
Composer te ayuda a declarar, gestionar, e instalar dependencias de proyectos PHP.

 Ver https://getcomposer.org/ para más información y documentación.

## [Instalación Composer en el sistema operativo Ubuntu:](#recomendado)
``` bash
# Actualizar repositorios.
sudo apt-get update
# Instalar Composer en el sistema operativo.
sudo apt-get install composer -y
```
## Instalación PHPUnit
``` bash
# Instalar Composer en el sistema operativo.
sudo apt-get install phpunit -y
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

[Subir](#top)
<a name="recomendado"></a>
## Instalación de PHP 8.1.4

### Actualizar el Sistema Operativo

``` bash
sudo apt update && sudo apt upgrade -y
```
### Incluir nuenvo repositorio para PHP 8

``` bash
# Añadimos un nuevo repostorio
sudo apt install software-properties-common && sudo add-apt-repository ppa:ondrej/php -y

# Actualizamos la lista de repositorios APT
sudo apt update

# A continuación actualizaremos los paquetes que así lo requieran
sudo apt upgrade -y
```

### Instalar el módulo Apache

``` bash
# Instalación de PHP 8.1 con el módulo Apache 2
sudo apt install php8.1 libapache2-mod-php8.1

# Reiniciamos el servidor Apache para que cargue el módulo de nuevo.
sudo systemctl restart apache2

# Comprobamos la versión de PHP instalada
php -- version
```

### Actualización de Composer
``` bash
#!/bin/bash
# Eliminamos la instalación de composer previa
sudo apt-get remove composer -y
```
Descargar e instalar composer

``` bash
sudo su

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php --install-dir=/usr/bin --filename=composer

# Comprobamos que se ha instalado la ultima versión de composer
composer
```
![Composer 2](images/Composer2.png)

# Ejercicios PHP
**Elementos básicos:**
- [Ejercicio 1](ejercicio1.php). Mostrar en pantalla Hola mundo.
- [Ejercicio 2](ejercicio2.php). Pide la edad y el nombre por teclado. En caso de ser mayor de 18 años indica que ya puede conducir.
- [Ejercicio 2b](ejercicio2b.php). Implemente el Ejercicio 2 utilizando una función esMayorEdad(edad) : booleano.
**Esctructura de control altenativa:**
- [Ejercicio 3](ejercicio3.php). Pide una nota (número). Muestra la calificación según la nota:
``bash
    0-3: Muy deficiente.
    3-5: Insuficiente.
    5-6: Suficiente.
    6-7: Bien.
    7-9: Notable.
    9-10: Sobresaliente
``
    
**Utilice la estructura de control if-elif-else.**

**Impltemente una función obtenerCalificacion(nota).**

- [Ejercicio 4](ejercicio4.php). Escriba un programa que simule el juego Piedra, papel, tijera para dos jugadores. Las reglas del juego son las siguientes: Imagen: Juego Piedra, paepel y tijera mclibre.org

Simultáneamente, los dos jugadores muestran una mano en tres posibles posiciones:

Piedra: se muestra el puño cerrado.
Papel: se muestra la palma de la mano.
Tijera: se muestra la palma de la mano con los dedos separados en dos grupos.
El jugador que ha sacado Piedra gana al jugador que ha sacado Tijera.
El jugador que ha sacado Tijera gana al jugador que ha sacado Papel.
El jugador que ha sacado Papel gana al jugador que ha sacado Piedra.
- [Ejercicio 4b](ejercicio4.php). Reescriba el Ejercicio4 empleadno formatos en las salidas por pantalla ,print("{0} {1} {2}... ".format(cero,uno,dos)).

- [Ejercicio 5](ejercicio5.php). Par e impar. Implemente las siguientes funciones:
    - `esPar(numero): booleano.` Comprueba si numero es par.
    - `esImpar(numero): booleano`. Comprueba si numero es impar.
    - `generarPeres(n, valor_inicial)` : [ enteros ]. Genera un vector de n números enteros pares. Si el valor_inicial es impar entoces el primer elemento del array será su sucesor,
    - `generarInpares(n, valor_inicial)` : [ enteros ]. Genera un vector de n números enteros imppares. Si el valor_inicial es par entoces el primer elemento del array será su sucesor,
- [Ejercicio 6](ejercicio6.php). `esPrimo(numero)`. Escriba una función que devuelva un booleano para determinar si un número es primo o no. Utilice un bucle *for*.
- [Ejercicio 7](ejercicio7.php). Realizar la serie de Fibonacci. Utiliza bucle *for*
- [Ejercicio 8](ejercicio8.php). Realizar la serie de Fibonacci. Utiliza bucle while..
- [Ejercicio 9](ejercicio9.php). Implementar una calculadora con un menú similar al siguiente:

``bash
  Menu:
      1. Sumar
      2. Restar
      3. Multiplicar
      4. Dividir
      0. Salir
  Introduzca opción:
``
**Manejo de Cadenas de caracteres:**
- Ejemplo 01. En este ejemplo vamos a estudiar los metodos más importantes que existen para el manejo de cadenas en PHP.
    - Convertimos el "Nombre" a MAYÚSCULAS.
    - Convertimos todo el "Nombre" a minúsculas.
    - Obtener la longitud del "Nombre".
    - Concatena el Nombre y los Apellidos con concat(). Obtén la longitud de la nueva cadena.
    - Del Nombre completo extrae la subcadena comprendida entre las posiciones 5 y 10.
    - Del Nombre completo extrae los 3 primeros carácteres.
    - En el Nombre completo remplaza Pedro por Antonio.


## Referencias:
- [PHP](https://www.php.net/).
- [PHP Unit](https://phpunit.de/).
- [Composer](https://getcomposer.org/).
- [Cómo instalar PHP 8.1 sobre Ubuntu 20.04](https://es.linuxcapable.com/how-to-install-php-8-1-on-ubuntu-20-04/).
- [Actualizar Composer en Ubuntu](https://techvblogs.com/blog/update-composer-in-ubuntu).
- [Composer: Dependency manager to PHP](https://github.com/composer/composer).


[Subir](#top)