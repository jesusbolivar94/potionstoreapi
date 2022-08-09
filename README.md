# Potion Store API

Api para tienda de pociones.

## Instalación

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

Si no quieres ejecutar la migración puedes ejecutar las consultas en la carpeta **SCRIPTS** para crear las tablas y poblarlas con datos.

También, puedes agregar el parametro de configuración APP_TIMEZONE al archivo de configuración `.env` para que las fechas de la base de datos sean configuradas correctamente según la zona de venta de la tienda de pociones. 

Por ejemplo:

```dotenv
APP_TIMEZONE=America/Santiago
```

Si no agregas el parametro entonces la zona horaria por defecto será `UTC`

## Endpoints

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

#### PUT `/client/{id}` 

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

#### GET `/client/{id}`

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

#### GET `/clients`

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

#### DELETE `/client/{id}`

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

#### GET `/client/{id}/sells`

Consulta este endpoint para obtener todas las ventas asociadas a un cliente.

Debes autorizar esta solicitud enviando el token de autorización.

```JSON
[
    {
        "id": 2,
        "client_id": 1,
        "sell_at": "2021-09-13 20:48:48",
        "created_at": "2022-08-08 22:43:20"
    },
    {
        "id": 3,
        "client_id": 1,
        "sell_at": "2021-09-15 13:28:12",
        "created_at": "2022-08-08 22:43:20"
    },
    {
        "id": 4,
        "client_id": 1,
        "sell_at": "2021-09-15 13:28:12",
        "created_at": "2022-08-08 22:43:20"
    },
    {
        "id": 6,
        "client_id": 1,
        "sell_at": "2021-09-15 18:06:10",
        "created_at": "2022-08-08 22:43:20"
    },
    {
        "id": 14,
        "client_id": 1,
        "sell_at": "2021-09-22 20:59:28",
        "created_at": "2022-08-08 22:43:20"
    },
    {
        "id": 17,
        "client_id": 1,
        "sell_at": "2021-09-23 18:08:52",
        "created_at": "2022-08-08 22:43:20"
    },
    {
        "id": 22,
        "client_id": 1,
        "sell_at": "2021-10-01 19:35:59",
        "created_at": "2022-08-08 22:43:20"
    },
    {
        "id": 26,
        "client_id": 1,
        "sell_at": "2021-10-06 17:34:33",
        "created_at": "2022-08-08 22:43:20"
    },
    {
        "id": 30,
        "client_id": 1,
        "sell_at": "2021-10-10 16:43:11",
        "created_at": "2022-08-08 22:43:20"
    },
    {
        "id": 31,
        "client_id": 1,
        "sell_at": "2021-10-11 16:43:11",
        "created_at": "2022-08-08 22:43:20"
    },
    {
        "id": 38,
        "client_id": 1,
        "sell_at": "2021-10-12 18:37:00",
        "created_at": "2022-08-08 22:43:20"
    },
    {
        "id": 42,
        "client_id": 1,
        "sell_at": "2021-10-17 22:00:03",
        "created_at": "2022-08-08 22:43:20"
    },
    {
        "id": 45,
        "client_id": 1,
        "sell_at": "2021-10-18 20:49:23",
        "created_at": "2022-08-08 22:43:20"
    }
]
```

### Ingredientes

#### GET `/ingredient/{id}`

Puedes consultar la información de un ingrediente de pociones haciendo una solicitud GET y pasando como parametro del endpoint el id del ingrediente.
Es necesario autorizar la solicitud con el token.

```JSON
{
    "id": 1,
    "name": "petalos",
    "stock": 10,
    "price": 2000,
    "created_at": "2022-08-08 00:13:06",
    "updated_at": "2022-08-08 00:13:06"
}
```

#### GET `/ingredients`

También puedes consultar un listado de todos los ingredientes disponibles.
Es necesario autorizar la solicitud con el token.

```JSON
[
    {
        "id": 1,
        "name": "petalos",
        "stock": 10,
        "price": 2000
    },
    {
        "id": 2,
        "name": "sal de mar",
        "stock": 10,
        "price": 3000
    },
    {
        "id": 3,
        "name": "vino",
        "stock": 10,
        "price": 6000
    },
    {
        "id": 4,
        "name": "polvo magico",
        "stock": 10,
        "price": 30000
    },
    {
        "id": 5,
        "name": "cenizas",
        "stock": 10,
        "price": 2500
    },
    {
        "id": 6,
        "name": "aloe vera",
        "stock": 10,
        "price": 1500
    },
    {
        "id": 7,
        "name": "lagrima de gato",
        "stock": 10,
        "price": 9000
    },
    {
        "id": 8,
        "name": "jugo magico",
        "stock": 10,
        "price": 27000
    },
    {
        "id": 9,
        "name": "sanguijuelas",
        "stock": 10,
        "price": 13000
    },
    {
        "id": 10,
        "name": "polvo de cuerno de bicornio",
        "stock": 10,
        "price": 65000
    }
]
```

### Pociones

#### GET `/potions`

Consulta la información de todas las pociones registradas.

```JSON
[
    {
        "id": 1,
        "name": "poción de amor",
        "crafting_cost": 1000,
        "created_at": "2022-08-08 04:29:53",
        "updated_at": "2022-08-08 04:29:53"
    },
    {
        "id": 2,
        "name": "poción alisadora",
        "crafting_cost": 1000,
        "created_at": "2022-08-08 04:29:53",
        "updated_at": "2022-08-08 04:29:53"
    },
    {
        "id": 3,
        "name": "poción multijugos",
        "crafting_cost": 1000,
        "created_at": "2022-08-08 04:29:53",
        "updated_at": "2022-08-08 04:29:53"
    }
]
```

#### GET `/potion/{id}`

Consulta la información de una poción enviando el id como parametro del endpoint. Debes autorizar la solicitud con el token.

```JSON
{
    "id": 1,
    "name": "poción de amor",
    "crafting_cost": 1000
}
```

Todas las pociones tienen un coste de fabricación especificado en el campo `crafting_cost` consideralo al momento de calcular el coste de una poción.

#### GET `/potion/{id}/recipe`

Consulta este endpoint para conocer la receta de las pociones. Envia como parametro el id de la poción, el resultado contiene información de los ingredientes y cantidad de cada uno que son necesarios para fabricar la poción.

```JSON
[
    {
        "id": 1,
        "potion_id": 1,
        "ingredient_id": 1,
        "quantity": 2
    },
    {
        "id": 2,
        "potion_id": 1,
        "ingredient_id": 2,
        "quantity": 1
    },
    {
        "id": 3,
        "potion_id": 1,
        "ingredient_id": 3,
        "quantity": 4
    },
    {
        "id": 4,
        "potion_id": 1,
        "ingredient_id": 4,
        "quantity": 3
    }
]
```

### Ventas

#### GET `/sells`

Consulta todas las ventas registradas. Es necesario autorizar la solicitud con el token de autorización.

Devuelve un arreglo de ventas registradas.

```JSON
[
    {
        "id": 1,
        "client_id": 3,
        "sell_at": "2021-09-13 20:48:48",
        "created_at": "2022-08-08 22:43:20"
    },
    {
        "id": 2,
        "client_id": 1,
        "sell_at": "2021-09-13 20:48:48",
        "created_at": "2022-08-08 22:43:20"
    },
    {
        "id": 3,
        "client_id": 1,
        "sell_at": "2021-09-15 13:28:12",
        "created_at": "2022-08-08 22:43:20"
    },
    {
        "id": 4,
        "client_id": 1,
        "sell_at": "2021-09-15 13:28:12",
        "created_at": "2022-08-08 22:43:20"
    }
]
```

#### GET `/sell/{id}`

Obtiene los datos de una venta. Autoriza la solicitud con el token de autorización.

```JSON
{
    "id": 1,
    "client_id": 3,
    "sell_at": "2021-09-13 20:48:48",
    "created_at": "2022-08-08 22:43:20"
}
```

#### GET `/sell/{id}/detail`

Por último, puedes obtener todas las pociones de una compra consultando a este endpoint. Debes enviar el id de la venta como parametro del endpoint y autorizar la solicitud con el token de autorización.

Esta solicitud devuelve un arreglo de pociones con la cantidad comprada.

```JSON
[
    {
        "id": 7,
        "sell_id": 7,
        "potion_id": 2,
        "quantity": 12,
        "created_at": "2022-08-09T02:43:21.000000Z",
        "updated_at": "2022-08-09T02:43:21.000000Z"
    },
    {
        "id": 8,
        "sell_id": 7,
        "potion_id": 1,
        "quantity": 5,
        "created_at": "2022-08-09T02:43:21.000000Z",
        "updated_at": "2022-08-09T02:43:21.000000Z"
    }
]
```
