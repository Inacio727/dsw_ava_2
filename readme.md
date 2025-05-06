# Projeto - API REST

**Nome completo:** Vinícius Gabriel Inacio
**Data:** 06/05/2025 
**Unidade Curricular:** DESENVOLVER SERVIÇOS WEB

---

## O que é uma API REST?

Uma API REST (Representational State Transfer) é um conjunto de regras que permite a comunicação entre sistemas usando o protocolo HTTP. Ela segue princípios como uso de métodos HTTP (GET, POST, PUT, DELETE), comunicação sem estado (stateless) e troca de dados geralmente no formato JSON. É muito usada em aplicações web e mobile para acessar ou manipular dados de forma padronizada.

---

## Códigos de Erros HTTP

Os códigos de status HTTP são respostas que o servidor envia para indicar o resultado de uma requisição. Alguns exemplos comuns:

- **200 OK**: Requisição bem-sucedida.
- **201 Created**: Recurso criado com sucesso.
- **400 Bad Request**: Erro na requisição enviada pelo cliente.
- **401 Unauthorized**: Falta de autenticação ou token inválido.
- **403 Forbidden**: Acesso negado, mesmo autenticado.
- **404 Not Found**: Recurso não encontrado.
- **500 Internal Server Error**: Erro inesperado no servidor.

---

## Diferença entre JSON, Texto Plano e XML

- **JSON (JavaScript Object Notation):** Formato leve de troca de dados, fácil de ler e escrever por humanos e máquinas. Ex:  
  ```json
  {"nome": "Rafael Carvalho Strauss", "idade": 45}

- **Texto plano** Não possui formatação nem estrutura. Apenas texto simples. Ex:
Rafael Carvalho Strauss, 45 anos


- **XML (eXtensible Markup Language)** Formato estruturado e hierárquico, parecido com HTML, usado para troca de dados. Ex:
<pessoa>
  <nome>Rafael Carvalho Strauss</nome>
  <idade>25</idade>
</pessoa>

## Passo a passo para executar o projeto:

### 1. Clonar o repositório
```bash
git clone https://github.com/seu-usuario/dsw_ava_2.git
cd dsw_ava_2
```

### 2. Instale as devidas dependências com o composer:
```bash
composer install
```

### 3. No terminal, execute o servidor:
```bash
php -S localhost:8080
```

### 4. Execução dos Códigos:

#### /uma-api
##### O que é uma API?

- Método: GET
- Utilize o link: localhost:8080/uma-api
- Execute, e então, será descrito o que é uma API.

#### /codigos
##### Códigos de Resposta HTTP

- Método: GET
- Utilize o link: localhost:8080/codigos
- Execute, e então, será descrito o que são códigos de resposta HTTP, e alguns exemplos.

#### /erro
##### Error 404

- Método: GET
- Utilize o link: localhost:8080/erro
- Execute, e então, será demonstrado um erro proposital.