## Formulário desenvolvido por Caio em resposta de Foster WPP Group
### Conexão com o banco de dados

Baixe e instale o respositorio em seu servidor.
Crie um banco de dados MYSQL e insira os seguintes dados:

```
CREATE TABLE `formularios` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nome` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `cpf` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `ddd` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `celular` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
```

Acesse o arquivo ```connect.php``` dentro da pasta ```includes```, e altere os dados de acesso ao banco de dados.

```
 $dbhost = "localhost"; //endereço do servidor
 $dbuser = "root"; //usuário
 $dbpass = ""; //senha
 $dbname = "form"; //nome do banco
 ```

### Configuração de disparo de e-mails

Acesse o arquivo ```enviaFormulario.php``` dentro da pasta ```includes```, e altere os endereços de e-mails para os de seu servidor.

```
$email_servidor = "email@servidor.com" // Altere Aqui;
$para = "seu@email.com" // Altere Aqui;
$de = "seu@email.com" // Altere Aqui;
```

### Alteração do Logotipo

Para alterar o logotipo das páginas, acesse o arquivo ```functions.php```, localizado dentro da página ```includes``` e altere a ```string``` da variável ```$logoUrl``` dentro da função ```logotipo()```.

```
function logotipo(){
  $logoUrl = "http://www.foster.com.br/images/logo-foster-home.png"; // Altere Aqui
  echo $logoUrl;
}
```

### Arquivos JS & CSS

* [style.css](https://github.com/caiodesign/my-form/blob/master/public/css/style.css) - versão completa.
* [style.css](https://github.com/caiodesign/my-form/blob/master/public/css/style.min.css) - versão minificada.
* [functions.js](https://github.com/caiodesign/my-form/blob/master/public/js/functions.js) - versão completa.
* [functions.js](https://github.com/caiodesign/my-form/blob/master/public/js/functions.min.js) - versão minificada.

### Ferramentas utilizadas

- Bootstrap 3.3.7;
- Font Awesome;

### Linguagens utilizadas;

- HTML5;
- CSS3;
- PHP & MYSQL;
- JavaScript;

### Observações

Mobile First. Para melhor visualização do projeto, aperte ```F12``` para abrir o console do Google Chrome e depois pressione ```CTRL + SHIFT + M``` para abrir a função de devices do navegador. Não esqueça de atualizar a página ```F5```.

Os layouts utilizados neste projeto, foram disponibilizados por Foster WPP Group. 
* [Layouts](https://github.com/ogilvy-subscriptionsbrazil/web-developer-1/tree/master/_layout) - Clique aqui para ser redirecionado.


Desenvolvido com amor por Caio.

