# Login Com PHP

### Português
Uma tela de login simples com validação de usuário no banco de dados, validação URL, LogOut de usuário e segurança contra SQLInjection.

### Inglês
A simple login screen with database user validation, validation URL, user LogOut and SQLInjection security.

## 🚀 Começando

Essas instruções permitirão que você obtenha uma cópia do projeto em operação na sua máquina local para fins de desenvolvimento e teste.

Consulte **Implantação** para saber como implantar o projeto.

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
    senha varchar(32) not null
);
INSERT INTO usuario(usuario, senha) VALUES("Marlom", md5("123456"));
INSERT INTO usuario(usuario, senha) VALUES("Marco", md5("123456"));

```
A estrutura de seu banco ficara assim:

| usuario_id | usuario | senha |
|------------|---------|-------|
| 1          | Marlom  | e10adc3949ba59abbe56e057f20f883e |
| 2          | Marco   | e10adc3949ba59abbe56e057f20f883e |

## ⚙️ Executando

#### Português
Com todo o processo feito, você pode iniciar o servidor de sua escolha e abrir a aplicação 😃.

#### Inglês
With the whole process done, you can start the server of your choice and open the application 😃.

