# Race Results API

Esta aplicação foi desenvolvida para processar e exibir informações relacionadas a resultados de corridas de kart, incluindo as as seguintes informações: Posição Chegada, Código Piloto, Nome Piloto,
Quantidade de Voltas Completadas e Tempo Total de Prova, melhor volta de cada piloto, melhor volta da corrida, velocidade média de cada piloto durante toda a corrida e quanto tempo cada piloto chegou após o vencedor.
<br>Como resposta ao desafio para programador Backend do Grupo Criar

## Padrões Adotados
No presente desafio, foi optado por manter a leitura dos dados fornecidos pelo Grupo Criar, de forma simples, por isso, tais dados são usados via um arquivo json.
<br><br>
Quanto aos padrões adotados, cada um dos cálculos foram separados em camandas, para facilitar o entendimento do código, bem como mantê-lo organizado.
<br><br>
Optou-se por utilizar as camadas de: 
<br>Controller, responsável apenas por lídar com a requisição.
<br>Service, responsável por cuidar da lógica da aplicação, bem como lidar com os dados vindos da camada de Repository
<br>Repository, responsável por retornar os dados de entrada que serão utilizados para os cálculos
<br>Action, seguindo os padrões mais recentes de organização de código, principalmente adotados nas comunidades do Laravel e PHP, para permitir encapsular funcionalidades específicas em classes separadas, melhorando a organização e a reutilização do código, bem como deixando apenas o necessário na camada Service.

## Endpoints Criados


### 1. [GET] /race/result
Descrição:<br>
Este endpoint exibe o resultado geral da corrida, incluindo:
- **Posição Chegada**
- **Código do piloto**
- **Nome Piloto**
- **Quantidade de Voltas Completadas**
- **Tempo Total de Prova**
- **Velocidade Média**

### 2. [GET] /race/best-lap-in-race

Descrição:<br>
Este endpoint exibe a melhor volta da corrida inteira, identificando:
- **Código do piloto**
- **Nome Piloto**
- **Melhor Volta**
- **Número da Volta**

### 3. [GET] /race/best-lap
Descrição:<br>
Este endpoint exibe a melhor volta de cada piloto, incluindo:
- **Código do piloto**
- **Nome Piloto**
- **Melhor Volta**
- **Número da Volta**

### 4. [GET] /race/diff-winner
Descrição:<br>
Este endpoint exibe o tempo de chegada de cada piloto após o vencedor, incluindo:
- **Código do piloto**
- **Nome Piloto**
- **Tempo Total (Segundos)**
- **Tempo Após o Vencedor**


## Como Rodar a Aplicação
### 1. Clone o repositório:

```
git clone https://github.com/lins-dev/criar-group-test.git
```
### 2. Instale as dependências:

```
composer install
```
### 3. Execute o servidor integrado do Laravel:
```
php artisan serve
```
### 4. Acesse os endpoints:

No navegador ou ferramenta como Postman, acesse os endpoints acima.
## Dependências
```
"php" >= 8.2,
"laravel/framework" >= 11
```
##

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
