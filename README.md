# ExtractBank
## _CRUD feito com PHP e banco de dados MySQL_

Nesta primeira parte do projeto, o mesmo se baseia em um CRUD simples feito com PHP em sua versão 8 (ou superior), banco de dados MySQL e arquitetura de projeto SINGLETON.

## Orientações de execução do projeto

- Faça o clone do projeto em uma pasta de sua preferencia.


```sh
cd pasta_de_preferencia 
```
(Caso sua configuração seja SSH)
```sh
git clone git@github.com:Pnmoura/extractBank.git 
```
<br>

```sh
cd pasta_de_preferencia
```
(Caso sua configuração seja HTTP)
```sh
cd pasta_de_preferencia
git clone https://github.com/Pnmoura/extractBank.git
```

## Orientações de execução do projeto

- Para executar o projeto, crie um banco de dados local MySQL com a porta 3306 com os seguintes padrões
```sh
HOST = 'localhost:3306';
USER = 'root';  **** (recomendado) ****
PASSWORD = 'senhaDoSeuBancoLocal';
```

- Execute o projeto localmente na sua máquina

```sh
php -S localhost:8080
```

> Observação¹:
Algumas coisas podem estar instanciadas com o endereço local 8080, por isso a orientação de execução na porta acima.
Caso você troque isso, pode ser que o projeto venha a apresentar algum erro de execução.

> Observação²: De acordo com a senha do seu banco de dados local, defina no arquivo 'DatabaseConnection.php' as informações de acordo.

> Observação³: Na possivel 3ª parte do projeto será implementado os métodos HTTP que permitirá via postman manuipular ao menos o DELETE via POSTMAN.

<br>

## Para execução via POSTMAN

- O arquivo 'dadosJson.php' é o "controlador" desta operação, então após iniciar o projeto, dentro do POSTMAN acesse: 
```sh
localhost:8080/model/dadosJson.php
```

Ao executar o mesmo você terá todo o retorno do seu banco de dados em JSON separadamente.

<br>

#### Tecnologias usadas no projeto
[![My Skills](https://skills.thijs.gg/icons?i=php,mysql)](https://skills.thijs.gg)

#### Padrão de arquitetura:
> SINGLETON