# Teste para vaga de Analista Desenvolvedor PHP

## Projeto
Desenvolver uma aplicação simples de **Controle de Estoques**.

# Requisitos

#### CRUD de Categorias
Criar o gerenciamento de categorias do Sistema, onde seja possível Listar, Criar, Editar e Excluir Categorias.

#### CRUD de Produtos

Criar o gerenciamento de categorias do Sistema, onde seja possível Listar, Criar, Editar e Excluir Produtos.

##### Atributos de uma Categoria são:
- Nome
- Descrição
- Status (Ativo ou Inativo)
- Data/Hora de Cadastro
- Data/Hora da Última Atualização

##### Atributos de um Produto são:
- Nome
- Descrição
- Quantidade
- Preço
- Data/Hora de Cadastro
- Data/Hora da Última Atualização

## Descrição da Aplicação

#### Home

- Uma home simples com um menu para o Controle de **Categorias** e **Produtos**
- Deve apresentar um quadro que mostre todos os produtos que estão com 3 ou menos volumes em estoque.
- Deve apresentar um quadro com os cinco últimos produtos movimentados no estoque.

#### Controle de Categorias

- Um botão no topo para o cadastramento de uma nova **Categoria**.
- Uma listagem com todas as categorias cadastradas no sistema por **ordem alfabética** com os campos id, nome e Ação.
    - A coluna com o nome da categoria deve ser um link que direciona o usuário aos detalhes da categoria (*Pode ser um Modal*).
    - A última coluna Ação deve possuir dois botões, **Editar** e **Excluir**.
        - Botão Editar - Deve direcionar o usuário a uma tela onde o Nome e a Descrição da Categoria possam ser editados.
        - Botão Excluir - Exclui a categoria do Sistema.

#### Controle de Produtos

- Um botão no topo para o cadastramento de um novo **Produto**.
- Um filtro para a listagem que permite filtrar a lista por **Nome** e **Categoria**.
    - Valor padrão para o filtro de **Nome**: Vazio.
    - Valor padrão para o filtro de **Categoria**: Todos.
- Uma listagem com todos os produtos cadastrados no sistema, ordenados por **Categoria**, **Nome** e **Preço**. Os campos que serão apresentados na listagem são: id, nome, quantidade, preço e Ação.
    - A coluna com o nome do produto deve ser um link que direciona o usuário aos detalhes do produto (*Pode ser um MOdal*).
    - A coluna Ação deve possuir dois botões, **Editar**, **Excluir**, **Reduzir Estoque**, **Aumentar Estoque**.
        - Botão Editar - Deve direcionar o usuário a uma tela onde o Nome, Descrição, Preço e Quantidade do produto possam ser Alterados.
        - Botão Excluir - Exclui o Produto do Sistema.
        - Botão Reduzir o Estoque - Deve reduzir em 1 a quantidade do Produto no Estoque.
        - Botão Aumentar o Estoque - Deve aumentar em 1 a quantidade do Produto no Estoque.
    - As linhas onde a quantidade de produtos seja igual ou inferior a 3 devem possuir um destaque a escolha do desenvolvedor.


# Instruções:
- Faça fork desse repositório envie um Pull Request quando estiver pronto.
- Últilizar php 5.6 ou superior
- Últilizar Banco de Dados MySQL ou MariaDB
    - As tabelas devem ser criadas através de Migrations.
- Não é permitido a utilização de **NENHUM** framework php
- Últilizar as bibliotecas `mysqli` ou `pdo` para efetuar a comunicação com o Banco de Dados
- Não será permitido o uso de bibliotecas como Eloquent ou Doctrine.
- Seguir os padrões das PSRs.
- Criar um README com as instruções de como instalar a aplicação.


### Boa Sorte!




