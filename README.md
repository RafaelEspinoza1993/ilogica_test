# Prueba para ilogica

_Buen dia, esto planeaba intentarlo con docker y themosis pero se acorto el tiempo y fue realizado con laravel 7.X. Se implemento vuejs para el formulario y asi hacer un ajax para el envio de correos._

## Comenzando 🚀

_Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para propósitos de desarrollo y pruebas._

### Instalación 🔧

* **copiar .env.example  como .env y recuerde configurar el mail host, username y clave  en .env para poder enviar correos**
* **Realizar preparativos de docker**
```
docker-compose build app
docker-compose up -d

```
* **Realizar con composer los siguientes scripts:**
```
    docker-compose exec app composer install
```
* **Realizar con npm los siguientes scripts:**
```
    docker-compose exec app npm install
    docker-compose exec app npm run dev
```
* **Crear key con:**
```
    docker-compose exec app php artisan key:generate
```
* **Ya puede iniciar a probar el proyecto http://localhost:8000/**

## Expresiones de Gratitud 🎁

* Gracias por el interes y la buena onda 📢 