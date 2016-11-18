# DW_CalendarWeb
## Descrição do projeto
DW_CalendarWeb é um projeto de site implementado por Igor Túllio e Pedro Paul para auxiliar usuário do site a organizarem seus eventos de maneira simples.

## Contribuições do projeto
Igor Túllio | Pedro Paul
--- | ---
Fez a conexão do site com o banco de dados e as funcionalidades de cadastro e inserção de eventos no banco de dados do site. | Fez a edição de todas as páginas do site, a apresentação em ``index.php`` e a documentação do projeto em ``README.md``.

## Detalhes do projeto
### Páginas do site
#### ``index.php``
É a página de apresentação do site que informa ao usuário as funcionalidades existentes e de como usa-las.
#### ``calendario.php``
É a página que contém o calendário para adicionar os eventos de usuários cadastrados.
#### ``configuracao.php``
Contém o código em PHP que faz a conexão do site com o servidor e com o banco de dados do site.
#### ``cadastro.php``
É a página de solicitação de cadastro que faz a obtenção dos dados requeridos para o cadastramento do usuário no site.
#### ``login.php``
É a página de requisição de início da sessão do usuário cadastrado no site por meio de seu *login* e *senha*.
#### ``cadastrar.php``
Contém o código em PHP que insere o usuário no banco de dados do site. Este código é chamado na página ``cadastro.php``.
#### ``autenticar.php``
Contém o código em PHP que verifica se o usuário que solicita entrar em seu calendário realmente existe no banco de dados do site. Este código é chamado na página ``login.php``.
### Páginas da área do usuário
#### ``public_html/areaUsuario/index.php``
É a página de apresentação do site que informa ao usuário logado no site, as funcionalidades existentes e de como usa-las.
#### ``public_html/areaUsuario/calendario.php``
É a página que mostra o calendário do usuário logado para adicionar os eventos deste.
#### ``public_html/areaUsuario/eventos/conecao.php``
Contém o código em PHP que faz a conexão do usuário logado o banco de dados do site para obter seus eventos, além de adicionar. Este código é chamado na página ``public_html/areaUsuario/eventos/addEvento.php``
#### ``public_html/areaUsuario/eventos/addEvento.php``
Contém o código em PHP que insere um evento digitado pelo usuário logado no banco de dados.
#### ``public_html/areaUsuario/eventos/getEventos.php``
Contém o código em PHP que obtém no banco de dados os eventos do usuário logado.
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
        <i> CADASTRAR</i>
        para entrar na tela de cadastro e 
        preencha o formulário de cadastro.
    </li>
    <li>
        No formulário há os campos de <i>"Nome"</i> que 
        é o nome do usuário, <i>"Login"</i> que é o 
        nome do usuário usado para logar, 
        <i>"Senha"</i> e <i>"Senha Novamente"</i> onde é a 
        senha escolhida pelo usuário sendo estas 
        devendo ser iguais.
    </li>
    <li>
        Por fim, ao apertar o botão <i>"Cadastrar"</i> 
        o usuário inserido no banco de dados do 
        site e redirecionado para a página de 
        login.
    </li>
</ol>
### Acesso ao calendário
<ol>
    <li>
        O acesso ao calendário só é permitido 
        aos usuários cadastrados. <br>
        Caso já tenha feito o cadastro, clique em 
        <i>LOGIN</i>.
    </li>
    <li>
        Preencha os campos de <i>"Login"</i> e <i>"Senha"</i>
        corretamente.
    </li>
    <li>
        E clique em 
        <i>Entrar</i>
        e serás redirecionado para seu calendário.
    </li>
</ol>
### Adicionar eventos ao calendário
<ol>
    <li>
        Clique no dia que deseja adicionar o 
        evento. Ao fazer isso, uma caixa de 
        dialogo irá aparecer.
    </li>
    <li>
        Digite algo sobre o evento e 
        clique em <i>"OK"</i>. Assim os dados que foram 
        digitados serão inseridos no banco de 
        dados.
    </li>
</ol>

## Referências
* [Bootstrap](http://getbootstrap.com/)
* [FullCalendar](https://fullcalendar.io/)