<h1 align="center">Teste-upLexis</h1>
<p align="center"><img src="https://user-images.githubusercontent.com/38003078/66393799-d98aae00-e9a9-11e9-8bdd-122119ae875e.png"></p>

<h3>Sobre o teste</h3>
<p>Aplicação desenvolvida em Laravel que faz a captura de artigos no blog da upLexis</p>

<h3>O que foi usado</h3>
<ul>
    <li>PHP 7.3</li>
    <li>Laravel 5.7</li>
    <li>MySQL</li>
    <li>AJAX</li>
    <li>Bootstrap</li>
</ul>

<h3>Como executar a aplicação</h3>

<h4>Ops! Antes de começar a instalação</h4>
<p>Vá até o arquivo .env-example que está no diretório raiz da aplicação e renomeie para .env</p>
<img src="https://user-images.githubusercontent.com/38003078/66393290-86fcc200-e9a8-11e9-853a-4380001638c0.PNG">
<p>Após isso abra o arquivo</p>
<img src="https://user-images.githubusercontent.com/38003078/66393529-28841380-e9a9-11e9-8b39-a45b2a67e28b.PNG">
<p>Edite as linhas que estão marcadas, colocando as informações do seu banco de dados</p>
<ul>
    <li>
        <p>1° Passo:
            <br>Execute o comando composer install para installar as dependências
        </p>
        <img src="https://user-images.githubusercontent.com/38003078/66400611-2ffee900-e9b8-11e9-81d7-0d13a8be7bba.PNG">
    </li>
    <li>
        <p>2° Passo:
            <br>Execute o comando php artisan key:generate para gerar uma nova chave
        </p>
        <img src="https://user-images.githubusercontent.com/38003078/66400802-879d5480-e9b8-11e9-867f-731784d81e0d.PNG">
    </li>
    <li>
        <p>3° Passo:
            <br>Criar um banco de dados chamado db_uplexis via linha de comando ou pela interface do workbench
            <br>Comando: CREATE DATABASE db_uplexis;
        </p>
        <img src="https://user-images.githubusercontent.com/38003078/66391614-f0c69d00-e9a3-11e9-892f-6f9aaa0fe6dd.PNG">
    </li>
    <li>
        <p>4° Passo:
            <br>Abrir o prompt de comado na raiz do projeto e executar o comando que irá gerar as migrations no banco de             dados
            <br>Comando: php artisan migrate;
        </p>
        <img src="https://user-images.githubusercontent.com/38003078/66392051-29b34180-e9a5-11e9-9c9a-ea63d6c852b7.PNG">
        <p>Sucesso!</p>
        <img src="https://user-images.githubusercontent.com/38003078/66392067-3768c700-e9a5-11e9-9b01-0f1d3431cc09.PNG">
    </li>
    <li>
        <p>5° Passo:
            <br>Ainda no promp de comando, execute o comado para criar as seeders;
            <br>Comando: php artisan db:seed;
        </p>
        <img src="https://user-images.githubusercontent.com/38003078/66392092-46e81000-e9a5-11e9-8ea9-1d209b296920.PNG">
        <p>Sucesso!</p>
        <img src="https://user-images.githubusercontent.com/38003078/66392111-510a0e80-e9a5-11e9-8d0e-14ec38e2bf64.PNG">
    </li>
    <li>
        <p>6° Passo:
            <br>Por último execute o comando para iniciar o servidor;
            <br>Comando: php artisan serve;
        </p>
        <img src="https://user-images.githubusercontent.com/38003078/66392154-726afa80-e9a5-11e9-9640-a60062e2558d.PNG">
        <p>Sucesso!</p>
        <img src="https://user-images.githubusercontent.com/38003078/66392173-7d258f80-e9a5-11e9-924b-1a87853dc187.PNG">
    </li>
</ul>

<h3>Como usar</h3>
<ul>
       <li>
        <p>1° Passo:
            <br>Vá até o navegador e coloque na URL 127.0.0.1:8000;
        </p>
        <img src="https://user-images.githubusercontent.com/38003078/66392197-8adb1500-e9a5-11e9-8cbf-f707c91fcc68.PNG">
        <p>Insira os dados de login
            <br>Usuário: admin
            <br>Senha: admin
        </p>
    </li>
     <li>
        <p>2° Passo:
            <br>Se tudo funcionar, você será direcionado para a página com a lista de artigos salvos;
        </p>
        <img src="https://user-images.githubusercontent.com/38003078/66392236-9a5a5e00-e9a5-11e9-9dd5-0a04d8956d98.PNG">
        <p>Como esse usuário é novo ele ainda não possui nenhum artigo salvo, no menu clique em "BUSCAR ARTIGOS
"</p>
    </li>
    <li>
        <p>3° Passo:
            <br>Após clicar em "BUSCAR ARTIGOS" você será direcionado para a página de busca, digite um valor no campo e clique em buscar;
        </p>
        <img src="https://user-images.githubusercontent.com/38003078/66392248-a34b2f80-e9a5-11e9-948b-90944eb98ef9.PNG">
        <p>Para visualizar os artigos clique no menu "ARTIGOS"</p>
    </li>
    <li>
        <p>4° Passo:
            <br>Se tudo deu certo será listado todos os artigos relacionado a sua pesquisa, com o titulo e o link
        </p>
        <img src="https://user-images.githubusercontent.com/38003078/66392258-aa723d80-e9a5-11e9-82f1-514909c33b1a.PNG">
    </li>
</ul>


