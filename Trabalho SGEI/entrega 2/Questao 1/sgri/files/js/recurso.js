/**
 * Aqui, foram desenvolvidos as funções dos botões das telas de gerenciamento de recursos.
 * User: Paulo
 * Date: 06/04/12
 * Time: 19:14
 */
$(document).ready(function(){

    /**
     * Inicializa os campos de sala e predio como "readonly", já que, incialmente, o tipo de recurso selecionado é
     * de ambiente.
     */
    $("#sal").attr("readonly", "readonly");
    $("#pre").attr("readonly", "readonly");

    /**
     * Função usada para fazer o tratamento quanto ao tipo de recurso: Caso o tipo de recurso escolhido seja
     * equipamento, os campos de número da sala e número do prédio serão bloqueados. Caso o botão selecionado seja
     * ambiente, então o campo de "Marca" será bloqueado.
     */
    $(":radio").click(function(){
        if($(":radio:checked").attr("id") === "amb")
        {
            $("#sal").attr("readonly", "");
            $("#pre").attr("readonly", "");
            $("#mar").attr("readonly", "readonly");
            $("#mar").val("");
        }
        else
        {
            $("#sal").attr("readonly", "readonly");
            $("#pre").attr("readonly", "readonly");
            $("#mar").attr("readonly", "");
            $("#sal").val("");
            $("#pre").val("");
        }
    });

    /**
     * função usada no botão de salvar, no modo formulario. Este método captura todos os valores dos campos e os envia,
     * via ajax para o método do lado de servidor.
     */
    $("#salvar-form").click(function(){
        codigo      = $("#codigo").val();
        nome        = $("#nom").val();
        marca       = $("#mar").val();
        sala        = $("#sal").val();
        predio      = $("#pre").val();
        informacoes = $("#inf").val();
        tipo        = $(":radio:checked").val();

        $.ajax({
            type: "POST",
            url: "http://localhost/sgri/recurso/salvar",
            data: "codigo="+codigo+"&nome="+nome+"&marca="+marca+"&sala="+sala+"&predio="+predio+"&informacoes="+informacoes+"&tipo="+tipo,
            success: function(html) {
                alert(html);
            }
        });

//        window.location = "http://localhost/sgri/recurso/grid";
    });

    /**
     * Funcao usada no botão para exclusão de registros.
     */
    $("#excluir-form").click(function(){
        var codigo = $("#codigo").val();
        excluirRegistro(codigo, novoRegistro);
    });

	/**
	 * Metodo usado para remoção de registros a partir da visualização em GRID.
	 */
    $("#excluir-grid").click(function(){
        codigo  = $("tr.selected td.codigo").text();
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
        codigoSelected = $("tr.selected td.codigo").text();
        window.location = "http://localhost/sgri/recurso/form?codigo="+codigoSelected;
    });

    /**
     * Abre o modo de visualização em Grid.
     */
    $("#abre-grid").click(function(){
        window.location = "http://localhost/sgri/recurso/grid";
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
        var tipo = $("#tipo").val();
        var nome = $("#nom").val();

        window.location = "http://localhost/sgri/recurso/grid?nome="+nome+"&tipo="+tipo;
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
    window.location = "http://localhost/sgri/recurso/form?codigo=0";
    $("#codigo").val("");
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
        url: "http://localhost/sgri/recurso/excluir",
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