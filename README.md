# Documentación

URL: **https://auth-test.imassclick.com**

## Autenticación

POST **/oauth/token**

#### Request

param | value
------------ | -------------
grant_type | client_credentials
client_id | **CLIENT_ID**
client_secret | **SECRET**

Los datos de la API se encuentran desde el menú `API Keys`.


#### Response

```json
{
    "token_type": "Bearer",
    "expires_in": 1296000,
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciO..."
}
```

#### Response si faltan datos

```json
{
    "error": "invalid_request",
    "message": "The request is missing a required parameter, includes an invalid parameter value, includes a parameter more than once, or is otherwise malformed.",
    "hint": "Check the `client_id` parameter"
}
```

#### Response con datos inválidos

````json
{
    "error": "invalid_client",
    "message": "Client authentication failed"
}
````


## Información del usuario

GET **/api/me**

#### Response

````json
{
    "id": 1,
    "name": "Test User",
    "email": "test@imass.com.mx",
    "email_verified_at": null,
    "created_at": "2022-09-01T03:09:35.000000Z",
    "updated_at": "2022-09-01T03:09:35.000000Z"
}
````



PUT **/api/password**

#### Response

````json
{
    "password": "MYCURRENT_PASSWORD",
    "new_password": "NEW_PASSWORD",
    "new_password_confirmation": "NEW_PASSWORD"
}
````