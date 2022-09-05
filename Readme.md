# Login PHP
## Tabela Banco de Dados:
```sql
CREATE TABLE `user`(
    `id`INT NOT NULL AUTO_INCREMENT,
    `name_user`VARCHAR(50) NOT NULL,
    `email_user`VARCHAR(50) NOT NULL,
    `pass_user`VARCHA(255) NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE (`email_user`)
) ENGINE = InnoDB; 
```