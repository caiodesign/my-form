# Formulário desenvolvido por Caio em resposta de Foster Company

### Installing

Baixe e instale o respositorio em seu servidor.
Crie um banco de dados MYSQL e insira com os seguintes dados:

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
