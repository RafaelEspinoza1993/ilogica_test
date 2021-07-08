Buen dia, esto era planeado hacer en docker pero tuve complicaciones.

Primeros pasos:
    - Tener php >= 7.2.5 
    - BCMath PHP Extension
    - Ctype PHP Extension
    - Fileinfo PHP extension
    - JSON PHP Extension
    - Mbstring PHP Extension
    - OpenSSL PHP Extension
    - PDO PHP Extension
    - Tokenizer PHP Extension
    - XML PHP Extension
    - Composer
    - NodeJs/NPM
Segundo paso:
    - Esta configurado para enviar correo, solo necesita las credenciales para su mail driver de preferencia
    - copiar .env.example  como .env
    - Realizar con composer los siguientes scripts: 
        * composer install
    -Realizar con npm los siguientes scripts:
        * npm install
Tercer paso:
    -Solo necesita correr para pruebas lo siguiente:
        * php artisan serve
        * npm run dev

Con estos pasos deberia poder probar sin problema la pagina web.
