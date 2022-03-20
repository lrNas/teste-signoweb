# Utilizado:#
## Backend, para API rest:##
NPM, Nodejs, Express, Sequelize, Mysql2 driver, Mysql server.
Para rodar, instale todas as dependências necessárias e execute seu banco de dados. Se necessário, mude a senha do banco de dados em /src/Controllers/connector.js
Nenhum comando SQL será necessário antes de rodar, já está sendo utilizado o Sequelize de ORM.

Funcionando 100%. O arquivo de teste contém todas instruções que podem ser enviadas.
Faz as funções de um crud + contagem.

## Frontend: ##
Utilizado PHP 8 sem nenhum framework, Javascript e CSS. Ainda inacabado. Na pasta frontphp tem os arquivos que podem ser associados ao XAMPP ou qualquer outro stack da sua preferência. A idéia é fazer uma Single Page Application, conforme a imagem do protótipo.
### Considerações ###
Na minha opinião, terminar esse trabalho da melhor forma que eu sei fazer de 72h, sem contar a configuração de ambiente de desenvolvimento do PHP, e mesmo incompleto ele já deve servir como teste de competências. Gostei bastante da idéia da ferramenta. Vou continuar desenvolvendo nesse projeto de qualquer forma mesmo após o teste, pra treinar minhas habilidades.

Comparando à meu ultimo API que fiz para um teste, a qualidade desse está abaixo do que eu gostaria de entregar. Assim que puder divulgá-lo (se puder), o colocarei aqui.
### A fazer:
-Criar o método de carregamento de informações de enquete para atualizar no front
-Criar um botão de excluir
-Colocar as abas para funcionar, filtrando
-Colocar o searchbar para funcionar abrindo o popup do id inserido
-Utilizar um método de comunicação mais eficiente e seguro que cookies.
-Padronizar retornos da api.
-Tratar erros de inserção e validar entradas.
