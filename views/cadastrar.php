<link rel="stylesheet" href="/catalago_personagens_mvc/assets/css/style.css">

<div class="container">

    <header class="cabecalho">
        <h1>🌸 Cadastrar Personagem</h1>
        <p>Adicione um novo personagem ao seu universo favorito!</p>
    </header>

    <?php if ($mensagem != "") { ?>
        <div class="mensagem">
            <?php echo htmlspecialchars($mensagem); ?>
        </div>
    <?php } ?>

    <form method="POST" action="index.php?acao=cadastrar" class="formulario">

        <div class="form-group">
            <label for="nome">Nome do personagem</label>
            <input
                type="text"
                id="nome"
                name="nome"
                placeholder="Digite o nome do personagem"
                required
            >
        </div>

        <div class="form-group">
            <label for="universo">Universo</label>
            <input
                type="text"
                id="universo"
                name="universo"
                placeholder="Ex.: Marvel, DC, Naruto..."
                required
            >
        </div>

        <div class="form-group">
            <label for="poder">Poder</label>
            <input
                type="text"
                id="poder"
                name="poder"
                placeholder="Qual é o poder do personagem?"
                required
            >
        </div>

        <div class="form-acoes">
            <button type="submit">💗 Cadastrar personagem</button>

            <a href="index.php" class="btn btn-secundario">
                Voltar para a lista
            </a>
        </div>

    </form>

</div>