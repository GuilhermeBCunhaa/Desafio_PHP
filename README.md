# Desafio de PHP: Extração de dados para arquivo .txt e Pull Request

Seu objetivo neste desafio é criar um algoritmo em PHP que extrai os dados de uma tabela específica de um banco de dados e escrevê-los em um arquivo .txt. Além disso, você deve abrir um pull request por meio de uma fork do repositório no GitHub com o arquivo .txt resultante.

Passos para concluir o desafio:

1. Faça uma fork do repositório:
   - Acesse o repositório do desafio no GitHub: `https://github.com/ByteCarlos/Desafio_PHP.git`.
   - Crie uma fork do repositório para o seu próprio perfil no GitHub clicando no botão "Fork".

2. Conecte-se ao banco de dados:
   - Use o script SQL `dump_desafio_php.sql` para criar o banco de dados para o desafio.
   - Use a biblioteca de conexão adequada para estabelecer a conexão com o banco de dados. Exemplo: PDO, MySQLi, etc.

3. Execute uma consulta para recuperar os dados da tabela:
   - Escreva uma consulta SQL para selecionar os dados desejados da tabela `textos`.
   - Execute a consulta usando os métodos/funções fornecidos pela biblioteca de conexão.

4. Crie um arquivo .txt e escreva os dados:
   - Abra um novo arquivo .txt para escrita.
   - Percorra os resultados da consulta e escreva cada linha de texto no arquivo .txt.
   - Certifique-se de tratar erros de arquivo, como falha ao abrir ou gravar no arquivo.

5. Salve o arquivo .txt:
   - Feche o arquivo para garantir que todos os dados sejam gravados corretamente.

6. Faça o commit e push para a sua fork:
   - Faça o commit das alterações e o push do seu código para a sua fork do repositório.

7. Abra um pull request:
   - Acesse a página do seu repositório fork no GitHub.
   - Clique no botão "New pull request" para abrir uma nova solicitação de pull request.
   - Certifique-se de selecionar o branch correto da sua fork e mencionar o objetivo do desafio na descrição.

8. Aguarde a revisão:
   - Aguarde a revisão do seu pull request.

Lembre-se de documentar seu código adequadamente, seguindo as melhores práticas de programação e fornecendo comentários explicativos sempre que necessário. Boa sorte!
