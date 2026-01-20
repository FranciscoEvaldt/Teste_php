$(document).ready(function () {

    carregarUsuarios();

    function carregarUsuarios() {
        $.get('buscar.php', function (data) {
            let linhas = '';
            data.forEach(u => {
                linhas += `
                    <tr>
                        <td>${u.nome}</td>
                        <td>${u.email}</td>
                        <td>${u.telefone}</td>
                        <td>
                            <button onclick="editar('${u.id}')">Editar</button>
                            <button onclick="excluir('${u.id}')">Excluir</button>
                        </td>
                    </tr>
                `;
            });
            $('#tabela tbody').html(linhas);
        }, 'json');
    }

    $('#form').submit(function (e) {
        e.preventDefault();

        $.post('salvar.php', {
            id: $('#id').val(),
            nome: $('#nome').val(),
            email: $('#email').val(),
            telefone: $('#telefone').val()
        }, function () {
            $('#form')[0].reset();
            $('#id').val('');
            $('#titulo-form').text('Cadastrar Usuário');
            carregarUsuarios();
        });
    });

    window.editar = function (id) {
        $.get('buscar.php?id=' + id, function (u) {
            $('#id').val(u.id);
            $('#nome').val(u.nome);
            $('#email').val(u.email);
            $('#telefone').val(u.telefone);
            $('#titulo-form').text('Editar Usuário');
        }, 'json');
    }

    window.excluir = function (id) {
        if (confirm('Deseja excluir este usuário?')) {
            $.post('excluir.php', { id }, carregarUsuarios);
        }
    }
});
