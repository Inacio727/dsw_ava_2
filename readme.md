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
  {"nome": "João", "idade": 25}

- **Texto plano** Não possui formatação nem estrutura. Apenas texto simples. Ex:
João, 25 anos


- **XML (eXtensible Markup Language)** Formato estruturado e hierárquico, parecido com HTML, usado para troca de dados. Ex:
<pessoa>
  <nome>João</nome>
  <idade>25</idade>
</pessoa>