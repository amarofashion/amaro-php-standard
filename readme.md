#Configurar no arquivo composer.json
'''js
{
    "repositories": [
        {
            "type": "vcs",
            "url": "Repositorio do git"
        }
    ],
    "scripts": {
        "post-install-cmd": [
            "Amaro\\Composer\\Php::configure"
        ],
        "post-update-cmd": [
            "Amaro\\Composer\\Php::configure"
        ]
    }
}
'''