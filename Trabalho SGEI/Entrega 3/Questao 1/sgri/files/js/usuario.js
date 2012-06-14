/**
 * Aqui, foram desenvolvidos as funções dos botões das telas de gerenciamento de usuários.
 * Date: 29/04/12
 * Time: 20:01
 */
$(document).ready(function(){
    $("#salvar-form").click(function(){
        codigo      = $("#codigo").val();
        funcionario = $("#funcionario").val();
        login       = $("#login").val();
        senha       = $("#senha").val();
        confirmacao = $("#confirmacao").val();
        status = $("#status:checked").val();
        if (status.length == 'on')
        {
            status = "A";
        }
        else
        {
            status = "I";
        }
//
        $.ajax({
            type: "POST",
            url: "http://localhost/sgri/usuario/salvar",
            data: "codigo="+codigo+"&funcionario="+funcionario+"&login="+login+"&senha="+senha+"&confirmacao="+confirmacao+"&status="+status,
            success: function(html) {
                alert(html);
            }
        });
    });

    /**
     * Funcao usada no botão para exclusão de registros.
     */
    $("#excluir-form").click(function(){
        var codigo = $("#codusu").val();
        excluirRegistro(codigo, novoRegistro);
    });

    /**
     * Metodo usado para remoção de registros a partir da visualização em GRID.
     */
    $("#excluir-grid").click(function(){
        codigo  = $("tr.selected td.codusu").text();
        excluirRegistro(codigo, atualizaTela);
    });

    /**
     * Função usada no botão "novo": Este limpa todos os campos
     */
    $("#novo-form").click(function(){
        novoRegistro();
    });

    /**
     * Abre o modo de visualização de formulario.
     */
    $("#abre-form").click(function(){
        // Codigo da linha selecionada no grid.
        codigoSelected = $("tr.selected td.codusu").text();
        console.log(codigoSelected);
        window.location = "http://localhost/sgri/usuario/form?codigo="+codigoSelected;
    });

    /**
     * Abre o modo de visualização em Grid.
     */
    $("#abre-grid").click(function(){
        window.location = "http://localhost/sgri/usuario/grid";
    });

    /**
     * Volta para a tela anterior.
     */
    $("#voltar").click(function(){
        history.go(-1);
    });

    /**
     * Abre o modo de visualização em formulário com todos os campos vazios, a fim de que seja salvo um novo registro.
     */
    $("#novo").click(function(){
        novoRegistro();
    });

    /**
     * Reconstrói a tela em modo de visualização em Grid, filtrando os resultados de acordo com a pesquisa feita.
     */
    $("#buscar").click(function(){
        nome = $("#nome").val();
        window.location = "http://localhost/sgri/usuario/grid?login="+nome;
    });

    /**
     * Reconstrói a tela em modo de visualizalção em Grid, apresentando todos os resultados, ou seja, limpa os resultados refinados pelo filtro e apresenta todos.
     */
    $("#limpa-filtro").click(function(){
        window.location = "http://localhost/sgri/recurso/grid";
    });

});

/**
 * Inicializa todos os campos da visualização em modo formulário como vazios.
 */
function novoRegistro()
{
    window.location = "http://localhost/sgri/usuario/form?codigo=0";
    $("#codusu").val("");
}

/**
 * Metodo usado para remover um registro. Este metodo é chamado pelos métodos de exclusão em grid e em formulario.
 *
 * @param codigo Codigo do registro a ser removido.
 * @param funcao Função usada após a remoção.
 */
function excluirRegistro(codigo, funcao)
{
    $.ajax({
        type: "POST",
        url: "http://localhost/sgri/usuario/excluir",
        data: "codigo=" + codigo,
        success: function(html) {
            alert(html);
            funcao();
        }
    });
}

/**
 * Metodo auxiliar, usado para atualizar a tela. Ele foi criado (ao invés de usar diretamente a função
 * window.location.reload), para que pudesse ser usado como parametro.
 */
function atualizaTela() {
    window.location.reload();
}