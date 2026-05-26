## 📒 Gestão de Contatos
Aplicação web para gerenciamento de contatos desenvolvida com Laravel 10 e PHP 8.1.

## 🚀 Funcionalidades
- Listagem de todos os contatos com ações de editar e excluir
- Cadastro de novos contatos com validação de formulário
- Visualização completa dos detalhes do contato
- Edição de contatos existentes
- Exclusão suave de contatos (os registros não são removidos permanentemente do banco de dados)
- Autenticação — apenas usuários autenticados podem cadastrar, editar ou excluir contatos
- Validação de unicidade para número de contato e e-mail

## 🛠️ Tecnologias
- PHP 8.1
- Laravel 10
- MySQL
- Blade
- Bootstrap

## 📦 Instalação
**1. Clone o repositório**
```bash
git clone https://github.com/rayllaluiiza/contact-management.git
cd contact-management/html
```

**2. Instale as dependências**
```bash
composer install
```

**3. Configure o ambiente**
```bash
cp .env.example .env
php artisan key:generate
```

Edite o arquivo `.env` com as suas credenciais do banco de dados:
```env
DB_DATABASE=contact_management
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```

**4. Execute as migrations e popule o banco de dados**
```bash
php artisan migrate --seed
```

**5. Inicie a aplicação**
```bash
php artisan serve
```

A aplicação estará disponível em `http://localhost:8000`.

## 🔐 Autenticação

Um usuário administrador padrão é criado via seeder:

| Campo  | Valor           |
|--------|-----------------|
| E-mail | admin@admin.com |
| Senha  | 123456          |

> A listagem de contatos é pública. Cadastrar, editar e excluir contatos requer login.

## 🧪 Executando os Testes
```bash
php artisan test
```
Os testes cobrem erros de validação de formulário ao cadastrar e editar contatos.
