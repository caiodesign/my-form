## Formulário desenvolvido por Caio em resposta de Foster Company
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

### Desenvolvido com amor por Caio.

