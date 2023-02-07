# Servetus
Repositorio oficial del proyecto para el alumnado de APSD

---

##  Manera de trabajo antes de subir cualquier cambio

Antes de empezar a trabajar se debe traer todos los cambios que tenga la rama principal del proyecto.

El método a realizar es el siguiente:

```
Git checkout main
Git fetch
Git pull
```

En caso de que no exista la rama de trabajo en la que se vaya a trabajar:

```
Git checkout -b feature/MiRamaDeTrabajo
```

En caso de existir:

```
Git checkout feature/MiRamaDeTrabajo
Git rebase main
```

Si <u>**NO**</u> se recibe el siguiente mensaje **CURRENT BRANCH IS UP TO DATE** se deben solucionar los conflictos (Si no se sabe cómo hacer, preguntar a quién sepa).

En caso de recibir el mensaje, finaliza el procedimiento. Escribir dentro de la <u>**RAMA LOCAL**</u>:

```
Git push -f
```

Empezar a trabajar en esa rama.

---

##  Manera de trabajo para subir cambios

Cada vez que se termine cualquier cosa, asegurando siempre que todo lo integrado functiona correctamente con todo lo programado existente:

```
Git checkout main
Git fetch
Git pull
```

Para añadir <u>**TODOS**</u> los archivos modificados, para añadir todos:

```
Git add .
```

Para añadir los archivos modificados que se deseen, para añadir todos:

```
Git add carpeta/archivo
```

Crear un commit con los cambios realizados:

``` 
Git commit -m "Texto descriptivo"
``` 

Subir los cambios de <u>**rama local**</u> a <u>**GIT**</u> se deberá introducir:

```
Git push
```

Crear una pull request, para ello se puede seguir el siguiente [tutorial](https://docs.github.com/es/pull-requests/collaborating-with-pull-requests/proposing-changes-to-your-work-with-pull-requests/creating-a-pull-request).

---

## Licencias
[MIT](https://choosealicense.com/licenses/mit/)

# Changelog

Se reflejan todos los cambios realizados en el proyecto.

## [03/02/2023]

### Añadidos 
1. Archivo [index.php](./index.php)
2. Directorio [css](./assets/css/):
    - Añadido archivo [main.css](./assets/css/main.css)
3. Directorio [js](./assets/js/):
    - Añadido archivo [main.js](./assets/js/main.js)
4. Directorio [views](./views/):
    - Añadido archivo [header.php](./views/header.php)
    - Añadido archivo [footer.php](./views/footer.php)

### Modificados 
1. Archivo **header.php**:
    - Creada la estructura HTML para el Header
2. Archivo **footer.php**:
    - Creada la estructura HTML para el Footer
3. Archivo **main.php**:*
    - Creado el CSS de dar la apariencia para el **header** y el **footer**

## [05/02/2023]

### Añadidos 
1. Directorio [hiring](./views/hiring):
    -   Añadido archivo [1.php](./views/hiring/1.php) encargado de la vista de los datos personales de registro.
    -   Añadido archivo [2.php](./views/hiring/2.php) encargado de la vista del calendario de disponibilidad
    -   Añadido archivo [3.php](./views/hiring/3.php) encargado de la vista de seleccionar al trabajador/a
    -   Añadido archivo [4.php](./views/hiring/4.php) encargado de la vista del pago
2. Directorio [views](./views):
    -   Añadido archivo [login.php](./views/login.php) encargado de la vista del login
    -   Añadido archivo [home.php](./views/home.php) encargado de la vista del main
    -   Añadido archivo [payment.php](./views/payment.php) encargado de la vista del payment
    -   Añadido archivo [service.php](./views/service.php) encargado de la vista del service

### Modificados 
1. Archivo **header.php**:
    - Corrigiendo las rutas
2. Archivo **footer.php**:
    - Corrigiendo las rutas
3. Archivo **index.php**:
    - Añadido código PHP que permite cargar contenido dinámico
    - Añadido código PHP que permite las url amigables
