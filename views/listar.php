<link rel="stylesheet" href="assets/css/style.css">

<div class="container">

    <header class="cabecalho">
        <h1>🌸 Catálogo de Personagens</h1>
        <p>Seu universo favorito em um só lugar!</p>
    </header>

    <div class="topo-listagem">
        <h2>✨ Personagens cadastrados</h2>

        <a class="btn" href="index.php?acao=cadastrar">
            + Cadastrar personagem
        </a>
    </div>

    <div class="tabela-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Universo</th>
                    <th>Poder</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($personagens as $personagem) { ?>
                    <tr>
                        <td>
                            <?php echo htmlspecialchars((string)$personagem["id"]); ?>
                        </td>

                        <td>
                            <?php echo htmlspecialchars($personagem["nome"]); ?>
                        </td>

                        <td>
                            <?php echo htmlspecialchars($personagem["universo"]); ?>
                        </td>

                        <td>
                            <?php echo htmlspecialchars($personagem["poder"]); ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <?php if (empty($personagens)) { ?>
            <p class="vazio">💗 Nenhum personagem cadastrado ainda.</p>
        <?php } ?>
    </div>

</div>