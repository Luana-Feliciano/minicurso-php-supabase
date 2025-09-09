# 🚀 Projeto Minicurso: CRUD com PHP e Supabase

Este é o projeto de exemplo desenvolvido para o minicurso de integração entre PHP e Supabase. A aplicação consiste em um sistema de pós-venda simplificado, onde usuários se autenticam e podem gerenciar produtos associados à sua fábrica específica.

## 🛠️ Tecnologias Utilizadas
* **Backend:** PHP 8+
* **Banco de Dados & Autenticação:** [Supabase](https://supabase.io/)
* **Gerenciador de Dependências:** [Composer](https://getcomposer.org/)
* **Frontend:** HTML5 com [Bootstrap 5](https://getbootstrap.com/)
* **Servidor Local:** [XAMPP](https://www.apachefriends.org/pt_br/index.html)

---

## 📋 Pré-requisitos

Para rodar este projeto localmente, você precisará ter as seguintes ferramentas instaladas:

1.  **XAMPP:** Fornece o ambiente com Servidor Apache e PHP. [Faça o download aqui](https://www.apachefriends.org/pt_br/index.html).
2.  **Composer:** O gerenciador de dependências para PHP. [Faça o download aqui](https://getcomposer.org/download/).

---

## ⚙️ Guia de Instalação e Configuração

Siga estes passos para configurar o ambiente e rodar o projeto.

### 1. Preparar o Servidor Local (XAMPP)
Se ainda não tiver, instale o XAMPP em seu computador. A instalação padrão geralmente é suficiente.

### 2. Adicionar o Projeto no XAMPP
Copie ou clone a pasta deste projeto para dentro da pasta `htdocs` do XAMPP.
* O caminho geralmente é: `C:\xampp\htdocs\`
* Ao final, você terá uma estrutura como: `C:\xampp\htdocs\minicurso-php-supabase\`

### 3. Instalar o Composer
Se ainda não tiver, instale o Composer. O instalador para Windows (`Composer-Setup.exe`) torna o processo muito simples.

### 4. Instalar as Dependências do Projeto
Agora, precisamos instalar a biblioteca do Supabase para PHP.

* Abra um terminal.
* Navegue até a pasta do projeto dentro do `htdocs`:
    ```bash
    cd C:\xampp\htdocs\minicurso-php-supabase
    ```
* Execute o seguinte comando para que o Composer baixe a biblioteca do Supabase:
    ```bash
    composer require supabase/supabase-php
    ```
    *Este comando irá criar a pasta `vendor/` e os arquivos `composer.json` e `composer.lock`.*

### 5. Configurar as Credenciais do Supabase
O projeto precisa se conectar à sua conta do Supabase.

* Na raiz do projeto, localize o arquivo `config.php`.
* Abra este arquivo e insira a **URL** e a **Chave de API (`anon key`)** do seu projeto Supabase.

    ```php
    // config.php
    <?php
    require 'vendor/autoload.php';

    use Supabase\CreateClient;

    $supabaseUrl = 'SUA_URL_DO_PROJETO_SUPABASE'; // Substitua aqui
    $supabaseKey = 'SUA_CHAVE_ANON_SUPABASE'; // Substitua aqui

    $supabase = new CreateClient($supabaseUrl, $supabaseKey);
    ```

---

## ▶️ Como Executar o Projeto

Com tudo configurado, basta iniciar o servidor e acessar a aplicação.

### 1. Iniciar o Apache no XAMPP
* Abra o **Painel de Controle do XAMPP**.
* Clique no botão **"Start"** ao lado do módulo **Apache**.
* Ele deve ficar com o fundo verde, indicando que o servidor web está no ar.

### 2. Abrir no Navegador
* Abra seu navegador de preferência (Chrome, Firefox, etc.).
* Acesse o seguinte endereço:
    ```
    http://localhost/minicurso-php-supabase/
    ```
    *(Lembre-se de substituir `minicurso-php-supabase` pelo nome exato da pasta do seu projeto, caso seja diferente).*

✅ **Pronto!** A tela de login da aplicação deverá aparecer, e você já pode testar o sistema.
