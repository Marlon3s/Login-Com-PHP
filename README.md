# Login Com PHP

### Português
Uma tela de login simples com validação de usuário no banco de dados, validação URL, LogOut de usuário, segurança contra SQLInjection.
Update: tela de cadastro e validação de usuários já cadastrados.

### Inglês
A simple login screen with database user validation, validation URL, user LogOut and SQLInjection security.
Update: screen for registering and validating already registered users.

## 🚀 Começando

### 📋 Pré-requisitos
- MySqlWorkbench.
- PHP.

Crie um banco de dados com os seguintes valores:

```
CREATE DATABASE login;
USE login;

CREATE TABLE usuario(
    usuario_id int primary key auto_increment,
    usuario varchar(200) not null,
    senha varchar(32) not null,
    data_cadastro datetime not null,
    nome varchar(100)
);
INSERT INTO usuario(usuario, senha, data_cadastro, nome) VALUES("Marlon3s", md5("123456"), now(), "Marlom");
INSERT INTO usuario(usuario, senha, data_cadastro, nome) VALUES("Marcon3s", md5("123456"), now(), "Marco");

```
A estrutura de seu banco ficara assim:

| usuario_id | usuario | senha | data_cadastro | nome |
|------------|---------|-------| ------------- | ---- |
| 1          | Marlom  | e10adc3949ba59abbe56e057f20f883e | (data atual) | Marlom |
| 2          | Marco   | e10adc3949ba59abbe56e057f20f883e | (data atual) | Marco |

## ⚙️ Executando

#### Português
Com todo o processo feito, você pode iniciar o servidor de sua escolha e abrir a aplicação 😃.

#### Inglês
With the whole process done, you can start the server of your choice and open the application 😃.

