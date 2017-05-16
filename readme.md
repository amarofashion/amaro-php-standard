# Configurar no arquivo composer.json

```js
{
    "require": {
        "amaro/php-standard": "*"
    },
    "scripts": {
        "post-install-cmd": [
            "Amaro\\Composer\\Php::configure"
        ],
        "post-update-cmd": [
            "Amaro\\Composer\\Php::configure"
        ]
    }
}
```
