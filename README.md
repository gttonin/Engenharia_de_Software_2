## Universidade Federal da Fronteira Sul

![Logo UFFS](https://i.ibb.co/sKC2Nsy/logo-uffs.png)

#### Ciência da Computação




#### Engenharia de Software 2

**Profª** Dra. Graziela Simone Tonin ([Lattes](http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4138361P7 "Lattes"))

**Autores**:
- Claiton Trindade
- Cleiton Piccini
- Daniel Knapik Brum
- Daniel Welter da Silva
- Felipe Augusto da Silva
- Hesron Paulo Bressiani
- Igor Luiz Gonçalves Tomaz
- Rodolfo Trevisol
- Roseli Wenzel
- Vinicius Lira

---

# iPesquisa

## Instruções para  execução do projeto

### Requisitos:
* XAMPP instalado na maquina.
* PHP instalado na maquina, versão 7 ou superior.

### Configurando o ambiente
Primeiro é necessário abrir o xampp e iniciar os servidores Apache e Mysql para que o banco de dados começe a rodar e o servidor PHP também. 
O projeto precisa estar salvo dentro da pasta ```htdocs``` da sua instalação do xampp. Caso queira deixar em uma pasta separada do xampp pode ser utilizado o server built-in do PHP ([instruções de uso](http://rberaldo.com.br/como-usar-o-servidor-nativo-do-php-5-4/)), mas nesse caso, o Apache e o MySql devem ambos estar rodando no XAMPP para que o banco de dados funcione de forma correta.
Feito isso, é necessário criar o banco de dados e as tabelas, para isso, acesse o seguinte link em seu navegador:
```
http://localhost/phpmyadmin/
```
Nesse link estará rodando a interface do banco de dados. 
Clique na aba 'Importar', na página voce irá encontrar uma opção para importar um arquivo sql, importe o arquivo que está no projeto, dentro da pasta ```/database``` com o nome de ```script.sql``` e clique em executar. Feito isso você terá o banco de dados configurado.

### Executando a aplicação
Após seguir os passos anteriores, o seu ambiente já estará configurado. Para testar acesse o seguinte link em seu navegador (```nomeDaPasta``` deve ser substituido pelo nome que voce escolher para salvar o projeto dentro das pastas do xampp) :
```
http://localhost:8080/nomeDaPasta
```
Caso você tenha optado por usar o server built-in do php, acesse pelo navegador o link e a porta que você escolheu para rodar seu projeto. Exemplo: Caso tenha executado o servidor com o comando:
```
php -S localhost:3000
```
No seu navegador, basta acessar o link:
```
http://localhost:3000
```
