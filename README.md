# Servetus
Repositorio oficial del proyecto para el alumnado de APSD. Para el registro de cambios por favor seguir este [enlace](CHANGELOG.md)

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

## Documentación

Todos los textos se encuentran alojados en el directorio [/demo](./demo/), para los idiomas:

* [ES](./demo/data_es.json)

El archivo está estructurado por todos todas las páginas compuestas:

1. **Footer**: Pie de página
    *   **Contact**: Textos de contacto
    *   **Promotions**: Textos de promociones
3. **Header**: Cabecera
    *   **Menu**: Textos del menú del sitio web
    *   **Slogan**: Textos del eslogan
    *   **Title**: Textos de título de la empresa
4. **Home**: Textos de la página principal
5. **Hiring**: Textos a la hora de contratar, dividido en:
8. **Login**: Textos de la página de inicio de sesión
6. **Services**: Textos de la página servicios

Si se desea añadir una página y mantener la estructura del proyecto, se debe añadir al archivo **JSON** después del último, un objeto. 

Para añadir los cambios al archivo PHP, antes de nada, no hay que realizar ninguna acción, el objeto **$section** se encarga.

```
<?php $section; ?>
```

Para agregar los textos al HTML, dentro de la etiqueta, seguir la estructura del **<u>objeto JSON</u>** se deberá añadir:

```
<?= $section->tuPropiedad ?>
```

---

## Licencias
[MIT](https://choosealicense.com/licenses/mit/)