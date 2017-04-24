Aplicação laravel para sistema com crud
================

## Requisitos

Este tutorial toma como base que vc tem conhecimento previo sobre:

`prompt(DOS)`
`laravel`
`gerenciamento de banco de dados`

Tambem leva em consideração que sua maquina tem instalado os seguintes serviços.

`composer`
`nodejs`
`bower`
`banco de dados de sua escolha compativel com larael`

## Sobre o documento

Este documento demonstra como usar a aplicação, assim como a mesma está organizada. Tal organização é a basica de um CRUD com paginas da web para as devidas funções.
Ao baixar este documento vc precisará realizar algumas alterações para assim poder usar e visualizar o trabalho em paginas da web.
Esta aplicação existe com o proposito de cadastrar artigos para plantas solares permitindo a pesquisadores em geral poder pesquisar e saber a eficiencia com base na localização geografica.

## Configurando o sistema a suas definições.

Primeiramente vc precisa configurar o arquivo .env para o tipo de banco que vc estiver usando(usando os limites do laravel), assim como a base de dados e o login e senha. Sendo os devidos campos.

`DB_CONNECTION=tipo_deBanco`

`DB_DATABASE=Nome_da_database`

`DB_USERNAME=Nome_de_Usuario`

`DB_PASSWORD=PassWord_do_banco`

Apos a configuração será necessario instalar as definições para a aplicação funcionar devidamente, sendo a primeira delas o compose, execute o seguinte comando no prompt dentro da pasta.

`composer install`

O comando acima irá instalar o laravel e algumas necessidades para que o mesmo rode, estas definições estão dentro do arquivo:composer.json.

Apos a execução deste comando que irá demorar de acordo com sua net e processador, será necessario instalar algumas dependencias node_module definidas dentro do arquivo package.json. Rode o sequinte comando

`npm install`

## Modo de uso

para o uso como desenvolvedor, apenas em sua maquina, use os seguintes comandos em terminais separados.

`php artisan serve`

`npm run watch`

Para visualizar acesse o endereço: <http://localhost:8000/>, neste endereço vc encontrará a pagina inicial da aplicação que pouco tem a mostrar. Porem, há os endereços do mapa, e de gerenciamento do crud, os mesmo estarão definidos abaixo.

mapa: <http://localhost:8000/mapa>
Artigo
Cadastro: <http://localhost:8000/artigo/create>
edição: http://localhost:8000/artigo/{id}/edit
visualização: http://localhost:8000/artigo/{id}
Exclusão: A ser definido na pagina de visualização.

Note que, para ser possivel visualizar a aplicação na forma mapa, é necessario ter internet, pois a mesma usa as definições da `GOOGLE Api` que funciona em servidor online.

## Sobre as tecnologias usadas.
Foi usada as seguintes tecnologias no desenvolvimento da aplicação.
Laravel e suas ferramentas internas - Framework base para o desenvolvimento da aplicação.
Jquery - Necessario para a Google Api
Sublime_text - Editor de Texto
Figma - Prototipagem das telas.
Google Api - Para geração do mapa.

## Pendencias

Falta ser observado se a eficiencia será dada em numero, como foi pedido, isto é, cada eficiencia ser colocada em numero, ou se, pela natureza de poder ser observado por pessoas, a eficiencia ficar embutida no campo resultados. Isto pode resultar na remoção de um dos atributos no model, ou ser definido que o valor de eficiencia é a eficiencia principal.

Verificar se será necessario adicionar um campo resumo.