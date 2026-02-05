# Products API (Laravel)

---

## Tecnologías

- PHP 8+
- Laravel
- Eloquent ORM
- SQLite (configurable a MySQL/PostgreSQL)
- JSON como formato de intercambio

---

## Instalación y configuración

1. Clonar el repositorio
2. Instalar dependencias:

```bash
composer install
```

3. Copiar el archivo de entorno:

```bash
cp .env.example .env
```

4. Generar la clave de la aplicación:

```bash
php artisan key:generate
```

5. Ejecutar migraciones y semillas:

```bash
php artisan migrate:fresh --seed
```

> El proyecto incluye **seeders preconfigurados** para monedas, productos y precios, listos para ser usados en pruebas.

---

## Estructura de entidades

### Product

- id
- name
- description
- price
- currency_id
- tax_cost
- manufacturing_cost
- timestamps

### Currency

- id
- name
- symbol
- exchange_rate
- timestamps

### ProductPrice

- id
- product_id
- currency_id
- price
- effective_date
- timestamps

---

## Rutas de la API

Todas las rutas están prefijadas con:

```
/api
```

### Productos

**GET /products**
Obtiene la lista de productos con su moneda base.

**POST /products**
Crea un nuevo producto.

Body:

```json
{
    "name": "Laptop Gamer",
    "description": "Laptop de alto rendimiento",
    "price": 1200,
    "currency_id": 1,
    "tax_cost": 180,
    "manufacturing_cost": 800
}
```

**GET /products/{id}**
Obtiene un producto por ID con sus precios por divisa.

**PUT /products/{id}**
Actualiza un producto existente.

Body:

```json
{
    "name": "Laptop Gamer Pro",
    "price": 1300
}
```

**DELETE /products/{id}**
Elimina un producto.

---

### Precios por producto

**GET /products/{id}/prices**
Obtiene los precios del producto en distintas divisas.

**POST /products/{id}/prices**
Agrega un nuevo precio al producto.

Body:

```json
{
    "currency_id": 2,
    "price": 1100,
    "effective_date": "2024-01-01"
}
```

---

### Monedas (Currencies)

**GET /currencies**
Obtiene todas las monedas registradas.

**GET /currencies/{id}**
Obtiene una moneda por ID.

**POST /currencies**
Crea una nueva moneda.

Body:

```json
{
    "name": "USD",
    "symbol": "$",
    "exchange_rate": 1.0
}
```

---

## Validaciones y errores

- Validaciones implementadas con `Validator`
- Respuestas JSON consistentes
- Códigos HTTP correctos:
    - 200 OK
    - 201 Created
    - 404 Not Found
    - 422 Unprocessable Entity
    - 500 Internal Server Error

Ejemplo de error de validación:

```json
{
    "message": "Validation errors",
    "errors": {
        "currency_id": ["The selected currency id is invalid."]
    }
}
```

---

## Seeders incluidos

El proyecto incluye semillas listas para su uso:

- Currencies
- Products
- ProductPrices

Ejecutar semillas:

```bash
php artisan db:seed
```

O reiniciar completamente la base de datos:

```bash
php artisan migrate:fresh --seed
```

## Autor

Wilgrey Ravelo Cruz
