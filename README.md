# DW_Calendarweb
## Descrição do projeto
DW_CalendarWeb é um projeto de site implementado por Igor Túllio e Pedro Paul para auxiliar usuário do site a organizarem seu eventos de maneira simples. 
## Contribuições
o que cada um fez?
## Páginas do site
oque cada pagina faz?
Como funciona o site?
### ``index.php``
É a página de apresentação do site que informa ao usuário as funcionalidades existentes e de como usa-las.
### ``calendario.php``
É a pagina que contem o calendario para adicionar os eventos de usuarios cadastrados.
### ``configuracao.php``
Contém o código em PHP que faz a conexão do site com o servidor e com o banco de dados do site.
### ``cadastro.php``
É a página de solicitação de cadastro que faz a obtenção dos dados requiridos para o cadastramento do usuário no site.
### ``login.php``
É a pagina de requisição de inicio da sessão do usuário cadastrado no site por meio de seu *login* e *senha*.
### ``cadastrar.php``
Contém o código em PHP que insere o usuário no banco de dados do site. Este código é chamado na página ``cadastro.php``.
### ``autenticar.php``
Contém o código em PHP que verifica se o usuário que solicita entrar em seu calendário realmente existe no banco de dados do site. Este código é chamado na página ``login.php``.
## Páginas da área do usuário
### ``public_html/areaUsuario/index.php``
É a página de apresentação do site que informa ao usuário logado no site, as funcionalidades existentes e de como usa-las.
### ``public_html/areaUsuario/calendario.php``
É a pagina que mostra o calendario do usuário logado para adicionar os eventos deste.
### ``public_html/areaUsuario/eventos/conecao.php``
Contém o código em PHP que faz a conexão do usuário logado o banco de dados do site para obter seus eventos, além de adicionar. Este código é chamado na página ``public_html/areaUsuario/eventos/addEvento.php``
### ``public_html/areaUsuario/eventos/addEvento.php``
Contém o código em PHP que insere um evento digitado pelo usuário logado no banco de dados.
### ``public_html/areaUsuario/eventos/getEventos.php``
Contém o código em PHP que obtém no banco de dados os eventos do usuário logado.
## Outras pastas
### ``public_html/css/``
Contém as os arquivos de folhas de estilo utilizada para definir a apresentação das páginas do site. 
### ``public_html/fonts/``
Contém as fontes para a vizualização personalizada dos textos do site.
### ``public_html/js/``
Contém os códigos importados utilizados nas funcionalidades disponíveis no site.
### ``public_html/locale/``
Pasta que faz parte da importação do fullcalendar onde define o idioma do calendário dependendo do arquivo javascript importado em ``calendario.php`` e ``public_html/areaUsuario/calendario.php``.
### ``public_html/sql/``
Contém os arquivos do brModelo que ilustra o modelo conceitual e lógico do banco de dados, além de um aquivo em SQL do modelo físico
