# Utilizado: #
## Backend, para API rest: ##
NPM, Nodejs, Express, Sequelize, Mysql2 driver, Mysql server.
Para rodar, instale todas as dependências necessárias e execute seu banco de dados. Se necessário, mude a senha do banco de dados em /src/Controllers/connector.js

Nenhum comando SQL será necessário antes de rodar, já está sendo utilizado o Sequelize de ORM.

Funcionando 100%. O arquivo de teste contém todas instruções que podem ser enviadas.
Faz as funções de um crud + contagem.

## Frontend: ##
Utilizado PHP 8 sem nenhum framework, Javascript e CSS. Na pasta frontphp tem os arquivos que podem ser associados ao XAMPP ou qualquer outro stack da sua preferência.
### Considerações ###
Gostei bastante da idéia da ferramenta. Vou continuar desenvolvendo nesse projeto de qualquer forma mesmo após o teste, pra treinar minhas habilidades.

Comparando à meu ultimo API que fiz para um teste, a qualidade desse está abaixo do que eu gostaria de entregar. Assim que puder divulgá-lo (se puder), o colocarei aqui.

### A fazer:
> Melhorar a apresentação da data,
> Criar um botão de excluir,
> Utilizar um método de armazenar dados mais eficiente e seguro que cookies, talvez sessions,
> Padronizar retornos da api,
> Tratar erros de inserção e validar entradas.

Validadores pendentes e melhorias: 
> Impedir searchbar de abrir ids inexistentes,
> Criar ou alterar somente enquetes presentes ou futuras,
> Não permitir data de inicio maior que data do fim,
> Excluir votos ao alterar enquete,
> Evitar injections nos campos de texto,
> Adicionar maxlenght a todos os inputs;

