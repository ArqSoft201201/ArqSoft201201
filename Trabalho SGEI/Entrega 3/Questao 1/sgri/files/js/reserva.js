/**
 * Created by JetBrains PhpStorm.
 * User: Paulo
 * Date: 10/06/12
 * Time: 11:51
 * To change this template use File | Settings | File Templates.
 */
$(document).ready(function(){
    $("#datini").datepicker();
    $("#datfim").datepicker();
    $("#datini").datepicker("option", "dateFormat", "dd/mm/yy");
    $("#datfim").datepicker("option", "dateFormat", "dd/mm/yy");

    $("#caditem").click(function(){
        alert("teste");
    });

    $("#codtur").change(function(){
        codtur = $(this).val();
        atualizarHorario(codtur);
        atualizarSala(codtur);
    });

    $("#salvar-form").click(function(){
        codres = $("#codres").val();
        codtur = $("#codtur").val();
        codhor = $("#codhor").val();
        codsal = $("#codsal").val();
        datini = $("#datini").val();
        datfim = $("#datfim").val();
        desoco = $("#desoco").val();
        itemres = $("#itemres").val();
        codfun = $("#codfun").val();

        $.ajax({
            type: "POST",
            url: "http://localhost/sgri/reserva/salvar",
            data: "codres="+codres+"&codtur="+codtur+"&codhor="+codhor+"&codsal="+codsal+"&datini="+datini+"&datfim="+
                   datfim+"&desoco="+desoco+"&idtipres=A&itemres="+itemres+"&codfun="+codfun+"&nomeve=",
            success: function(html) {
                alert(html);
            }
        });
    });

    $("#buscar").click(function(){
        datini = $("#datini").val();
        datfim = $("#datfim").val();

        window.location = "http://localhost/sgri/reserva/grid?datini="+datini+"&datfim="+datfim;
    });

    $("#abre-form").click(function(){
        codigoSelected = $("tr.selected td.codigo").text();
        window.location = "http://localhost/sgri/reserva/form?codigo="+codigoSelected;
    });

    $("#abre-grid").click(function(){
        window.location = "http://localhost/sgri/reserva/grid";
    });

    $("#novo").click(function(){
        novoRegistro();
    });

    $("#excluir-grid").click(function(){
        codigo  = $("tr.selected td.codigo").text();
        excluirRegistro(codigo, atualizaTela);
    });

    $("#datfim").change(function(){
        datini = $("#datini").val();
        datfim = $("#datfim").val();

        $.ajax({
            type: "POST",
            url: "http://localhost/sgri/reserva/obterRecursosDisponiveis",
            data: "datini="+datini+"&datfim="+datfim,
            success: function(html) {
                $("#itemres").html(html);
            }
        });
    });

});

function atualizarHorario(codtur)
{
    $.ajax({
        type: "POST",
        url: "http://localhost/sgri/reserva/obterHorarioAula",
        data: "codtur="+codtur,
        success: function(html) {
            $("#codhor").html(html);
        }
    });
}

function atualizarSala(codtur)
{
    $.ajax({
        type: "POST",
        url: "http://localhost/sgri/reserva/obterSala",
        data: "codtur="+codtur,
        success: function(html) {
            $("#codsal").html(html);
        }
    });
}

/**
 * Inicializa todos os campos da visualização em modo formulário como vazios.
 */
function novoRegistro()
{
    window.location = "http://localhost/sgri/reserva/form?codigo=0";
    $("#codres").val("");
}

function excluirRegistro(codigo, funcao)
{
    $.ajax({
        type: "POST",
        url: "http://localhost/sgri/reserva/excluir",
        data: "codigo=" + codigo,
        success: function(html) {
            alert(html);
            funcao();
        }
    });
}

function atualizaTela() {
    window.location.reload();
}