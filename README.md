# laravel-bootstrap-product-crud
Um aplicativo de gerenciamento de produtos simples, desenvolvido com **Laravel** no backend e **Bootstrap** no frontend. Este projeto demonstra a implementação de um CRUD básico para cadastro de produtos, permitindo a adição, edição, visualização e exclusão de itens utilizando MySQL como banco de dados.

## Funcionalidades

- **Cadastro de Produtos**: Adicione novos produtos facilmente.
- **Edição**: Atualize informações de produtos já cadastrados.
- **Listagem**: Visualize todos os produtos em uma interface amigável.
- **Exclusão**: Remova produtos indesejados com um clique.

## Tecnologias Utilizadas

- **Laravel**: Para o backend, garantindo uma estrutura robusta e segura.
- **Bootstrap**: Para um design responsivo e atraente no frontend.
- **MySQL**: Como sistema de gerenciamento de banco de dados para armazenar as informações dos produtos.

## Como Executar

1. Clone o repositório:
   ```shell
   git clone https://github.com/caaioces/laravel-bootstrap-product-crud.git
   ```

2. Acesse o MySQL e crie uma nova base de dados:

    ```shell
   CREATE DATABASE app1;
   ```

4. Instale as dependências do backend:

   ```shell
   composer install
   ```

6. Instale as dependências do frontend:

    ```shell
   npm install
   ```

8. Crie uma cópia do arquivo .env.example e renomeie para .env
    
9. Configure o arquivo .env com suas credenciais de banco de dados MySQL.

10. Gere a chave de criptografia da aplicação:

    ```shell
    php artisan key:generate
    ```
   
12. Execute as migrações:

    ```shell
    php artisan migrate
    ```

14. Compile os ativos:

    ```shell
    npm run dev
    ```

16. Inicie o servidor local:

    ```shell
    php artisan serve
    ```

Sinta-se à vontade para fazer ajustes ou personalizar ainda mais conforme necessário!
