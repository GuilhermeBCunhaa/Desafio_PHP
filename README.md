# Desafio de PHP: Extração de dados para arquivo .txt e Pull Request

Seu objetivo neste desafio é criar um algoritmo em PHP que extrai os dados de uma tabela específica de um banco de dados e escrevê-los em um arquivo .txt. Além disso, você deve abrir um pull request com o arquivo .txt resultante.

Passos para concluir o desafio:

1. Conecte-se ao banco de dados:
   - Certifique-se de ter as credenciais corretas para acessar o banco de dados.
   - Use a biblioteca de conexão adequada para estabelecer a conexão com o banco de dados. Exemplo: PDO, MySQLi, etc.

2. Execute uma consulta para recuperar os dados da tabela:
   - Escreva uma consulta SQL para selecionar os dados desejados da tabela "textos" (nome da tabela do exemplo anterior).
   - Execute a consulta usando os métodos/funções fornecidos pela biblioteca de conexão.

3. Crie um arquivo .txt e escreva os dados:
   - Abra um novo arquivo .txt para escrita usando a função `fopen()`.
   - Percorra os resultados da consulta e escreva cada linha de texto no arquivo .txt usando a função `fwrite()`.
   - Certifique-se de tratar erros de arquivo, como falha ao abrir ou gravar no arquivo.

4. Salve o arquivo .txt:
   - Feche o arquivo usando a função `fclose()` para garantir que todos os dados sejam gravados corretamente.

5. Crie um novo branch e adicione o arquivo .txt:
   - Faça checkout para um novo branch no seu repositório.
   - Adicione o arquivo .txt criado no passo anterior ao branch.

6. Abra um pull request:
   - Faça um push do branch para o repositório remoto.
   - Abra um pull request no repositório, descrevendo suas alterações e mencionando o objetivo do desafio.

7. Aguarde a revisão e resultado:
   - Aguarde a revisão e resultado do seu pull request.

Lembre-se de documentar seu código adequadamente, seguindo as melhores práticas de programação e fornecendo comentários explicativos sempre que necessário. Boa sorte!
