<table class="table table-striped table-hover shadow">
    <thead>
        <tr>
            <th><a href="titulo">Título</a></th>
            <th><a href="descricao">Descrição</a></th>
            <th><a href="ordem?or=0">Lançamento</a></th>
            <th><a href="ordem?or=1">Duração</a></th>
            <th><a href="ordem?or=2">Locação</a></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $d) : ?>
            <tr>
                <th><?= $d['titulo'] ?></th>
                <th><?= $d['descricao'] ?></th>
                <th><?= $d['ano_de_lancamento'] ?></th>
                <th><?= $d['duracao_do_filme'] ?></th>
                <th><?= $d['preco_da_locacao'] ?></th>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>