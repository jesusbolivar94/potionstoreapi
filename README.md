# Potion Store API
<hr>

Api para tienda de pociones.

## Instalación
<hr>

Ejecuta los siguientes comandos:

Instala las dependencias:
```bash
composer install
```

Migra las tablas:
```bash
php artisan migrate
```

Opcional, puedes poblar la base de datos con datos iniciales.
```bash
php artisan db:seed
```

## Endpoints
<hr>

### Token

#### GET `/getToken`

Para comenzar, debes solicitar un token de seguridad necesario para interactuar con los endpoint de la API.

Basta con hacer una solicitud GET al endpoint /getToken.

Este endpoint regresa una respuesta HTTP 200 con el token de  seguridad.
Debes guardar este token, pues es necesario para todos los demás endpoints.

```JSON
{
    "access_token": "6wDQjxZGnXW7QQvYTVNpPGNSIj9RA6YMJQlAnwxK"
}
```

El token de acceso tiene un tiempo de vida de 3 horas desde su solicitud por lo que te recomendamos hacer una nueva consulta luego de tres horas para continuar utilizando la API.

### Clientes

#### POST `/client`

Puedes crear un nuevo cliente de la tienda haciendo una solicitud POST. Debes entregar el nombre del cliente en el texto de entrada. Adicionalmente es importante enviar una autorización en la petición de tipo `Bearer Token` con el token de seguridad.

Los nombres de los clientes son únicos, no se pueden repetir.

```JSON
{
    "client_name": "Jesús Bolívar De Freitas"
}
```

El endpoint regresará un objeto `JSON` con los datos del cliente recien creado.

```JSON
{
    "id": 10,
    "client_name": "Jesús Bolívar De Freitas",
    "created_at": "2022-08-07 16:54:02"
}
```

Si no se puede crear el cliente recibirás un objeto JSON con el detalle del error.

```JSON
{
    "message": "Fail data validation",
    "details": {
        "client_name": [
            "The client name has already been taken."
        ]
    }
}
```

### PUT `/client/{id}` 

Si lo necesitas, puedes modificar el nombre del cliente.

Debes hacer una solicitud de tipo PUT pasan como parametro el ID del cliente que quieres modificar. 

Adicionalmente, debes enviar un objeto JSON con los datos a modificar.

Por último debes recordar enviar el token de autorización en tu solicitud.

```JSON
{
    "client_name": "Jesús Bolívar"
}
```

Si la solicitud es exitosa recibirás un objeto JSON con todos los datos del cliente, incluyendo los datos modificados.

```JSON
{
    "id": 10,
    "client_name": "Jesús Bolívar d",
    "created_at": "2022-08-07 16:54:02",
    "updated_at": "2022-08-07 17:09:51"
}
```

Recuerda que los nombres de cliente son únicos, si usas un nombre de cliente ya registrado recibirás un error.

```JSON
{
    "message": "Fail data validation",
    "details": {
        "client_name": [
            "The client name has already been taken."
        ]
    }
}
```

### GET `/client/{id}`

Puedes consulta todos los datos registrados de un cliente haciendo una solicitud GET y enviando como parametro del endpoint el ID del cliente que quieres consultar.

Recibirás un objeto JSON con los datos del cliente. Aquí tambien es obligatorio enviar el token de autorización.

```JSON
{
    "id": 10,
    "client_name": "Jesús Bolívar De Freitas",
    "last_purcharse_at": null,
    "created_at": "2022-08-07T20:54:02.000000Z",
    "updated_at": "2022-08-07T21:14:04.000000Z"
}
```

Si no se encuentra el cliente recibirás una respuesta con error.

```JSON
{
    "message": "Fail data validation",
    "details": {
        "id": [
            "The selected id is invalid."
        ]
    }
}
```

### GET `/clients`

Si lo requieres, puedes consultar todos los clientes registrados. Solo debes enviar una solicitud GET con el token de autorización.

Recibirás un arreglo JSON con todos los clientes registrados.

```JSON
[
    {
        "id": 11,
        "client_name": "Elly Kedward",
        "last_purcharse_at": null,
        "created_at": "2022-08-07 21:20:06",
        "updated_at": "2022-08-07 21:20:06"
    },
    {
        "id": 12,
        "client_name": "Alice Kyteler",
        "last_purcharse_at": null,
        "created_at": "2022-08-07 21:20:06",
        "updated_at": "2022-08-07 21:20:06"
    },
    {
        "id": 13,
        "client_name": "Madame Blavatsky",
        "last_purcharse_at": null,
        "created_at": "2022-08-07 21:20:06",
        "updated_at": "2022-08-07 21:20:06"
    },
    {
        "id": 14,
        "client_name": "Joan Wytte",
        "last_purcharse_at": null,
        "created_at": "2022-08-07 21:20:06",
        "updated_at": "2022-08-07 21:20:06"
    }
]
```

### DELETE `/client/{id}`

Puedes eliminar un cliente haciendo una petición DELETE pasando como parametro del endpoint el ID del cliente que quieres eliminar.

Si la respuesta es exitosa recibirás una respuesta con código 204.

Si la respuesta es incorrecta recibirás un error.

```JSON
{
    "message": "Fail data validation",
    "details": {
        "id": [
            "The selected id is invalid."
        ]
    }
}
```

