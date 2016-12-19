# CakePHP aplicação de esqueleto com BootStrap

[![License](https://poser.pugx.org/cakephp/app/license.svg)](https://packagist.org/packages/codesites/app-cakephp)

Um esqueleto para criar aplicativos com [CakePHP](http://cakephp.org) 3.x.

O código-fonte framework pode ser encontrada aqui: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Instalação

1. Baixar [Composer](http://getcomposer.org/doc/00-intro.md) ou atualização composer self-update.
2. Execute `php composer.phar create-project --prefer-dist codesites/app-cakephp:dev-master seu-nome-app`

    Se Composer está instalado globalmente, execute
    ```bash
    composer create-project --prefer-dist codesites/app-cakephp:dev-master seu-nome-app
    ```

3. Instalando o Bootstrap via Bower

    Uma maneira rápida de obter os recursos do Bootstrap é usar o [bower].

    ```bash
    bower install
    ```

Agora você deve ser capaz de visitar o caminho para onde você instalou o aplicativo e ver a página inicial padrão.

## Configuração

1. Crie seu banco de dados no MySQL
2. Ler e editar `config/app.php` e configurar seu banco de dados em `Datasources` e qualquer outra
configuração relevantes para a sua aplicação.
3. Ler e editar `config/Migrations/20160117132650_create_admin_seed_migration` e configurar o usuário admin.

## Console Bake

Para criar e popular as tabelas:

```
bin/cake migrations migrate
```

## Direitos autorais e licença

The MIT License (MIT)

Copyright (c) 2016, CodeSites

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

Veja [LICENSE](LICENSE).