# DW_CalendarWeb
## Descrição do projeto
DW_CalendarWeb é um projeto de site implementado por Igor Túllio e Pedro Paul para auxiliar o usuário a organizar seus eventos de maneira simples e rápida.

## Contribuições do projeto
Igor Túllio | Pedro Paul
--- | ---
Fez as funcionalidades de cadastro e login, a conexão com o banco de dados e as inserções de eventos. | Fez a edição de todas as páginas do site, a apresentação em ``index.php`` e a documentação do projeto em ``README.md``.

## Detalhes do projeto
### Páginas do site
#### ``public_html/index.php``
É a página de apresentação do site que informa ao usuário as funcionalidades existentes e de como usá-las.
#### ``public_html/calendario.php``
É a página que contém um exemplo do calendário usado pelos usuário cadastrados.
#### ``public_html/configuracao.php``
Contém o código em PHP que faz a conexão com o banco de dados.
#### ``public_html/cadastro.php``
É a página de solicitação de cadastro que faz a obtenção dos dados requeridos para o cadastramento do usuário no site.
#### ``public_html/login.php``
É a página de requisição de início da sessão do usuário cadastrado no site por meio de seu *login* e *senha*.
#### ``public_html/cadastrar.php``
Contém o código em PHP que insere o usuário no banco de dados. Este código é chamado na página ``public_html/cadastro.php``.
#### ``public_html/autenticar.php``
Contém o código em PHP que verifica se o usuário que solicita entrar em seu calendário realmente está cadastrado. Este código é chamado na página ``public_html/login.php``.
### Páginas da área do usuário
#### ``public_html/areaUsuario/index.php``
É a página de apresentação do site que informa ao usuário logado no site, as funcionalidades existentes e de como usá-las.
#### ``public_html/areaUsuario/calendario.php``
É a página que mostra o calendário do usuário logado para adicionar os eventos deste.
#### ``public_html/areaUsuario/eventos/conecao.php``
Contém o código em PHP que faz a conexão com o banco de dados. Este código é chamado nas páginas ``public_html/areaUsuario/eventos/addEvento.php`` e ``public_html/areaUsuario/eventos/getEventos.php``
#### ``public_html/areaUsuario/eventos/addEvento.php``
Contém o código em PHP que insere um evento digitado pelo usuário logado no banco de dados.
#### ``public_html/areaUsuario/eventos/getEventos.php``
Contém o código em PHP que obtém do banco de dados os eventos do usuário.
### Outras pastas
#### ``public_html/css/``
Contém as os arquivos de folhas de estilo utilizada para definir a apresentação das páginas do site. 
#### ``public_html/fonts/``
Contém as fontes para a visualização personalizada dos textos do site.
#### ``public_html/js/``
Contém os códigos importados utilizados nas funcionalidades disponíveis no site.
#### ``public_html/locale/``
Pasta que faz parte da importação do fullcalendar onde define o idioma do calendário dependendo do arquivo javascript importado em ``calendario.php`` e ``public_html/areaUsuario/calendario.php``.
#### ``public_html/sql/``
Contém os arquivos do brModelo que ilustra o modelo conceitual e lógico do banco de dados, além de um arquivo em SQL do modelo físico

## Como usar o site
### Cadastro de usuários
<ol>
    <li>
        Clique em 
        <a href="cadastro.php"><i class="fa fa-user-plus"></i> CADASTRAR</a>
        para entrar na tela de cadastro e 
        criar seu cadastro conosco através do formulário.
    </li>
    <li>
        No formulário digite os dados solicitados, como um nome de usuário, 
		que será sua forma de entrar em seu calendário. 
    </li>
    <li>
        Por fim, ao apertar "Cadastrar" 
        o usuário é inserido no banco de dados e 
		redirecionado para a página de login.
    </li>
</ol>
### Acesso ao calendário
<ol>
    <li>
        A adição de eventos no calendário só é permitido 
        aos usuarios cadastrados. <br>
        Caso já tenha feito o cadastro, clique em 
        <a href="login.php"><i class="fa fa-sign-in"></i> LOGIN</a>
    </li>
    <li>
        Preencha os campos de "Login" e "Senha"
        corretamente.
    </li>
    <li>
        E clique em 
        <i class="fa fa-sign-in color-blue"> Entrar</i>
        e serás redirecionado para seu calendario.
    </li>
</ol>
### Adicionar eventos ao calendário
<ol>
    <li>
        Clique no dia, ou selecione vários dias, 
		que deseja adicionar o evento evento. Ao fazer 
		isso, uma caixa de dialogo irá aparecer.
    </li>
    <li>
        Digite um título para o evento e 
        clique em "OK".
    </li>
	<li>
        Pronto, seu evento já estará cadastrado!
    </li>
</ol>

## Referências
* [Bootstrap](http://getbootstrap.com/)
* [FullCalendar](https://fullcalendar.io/)
