$(document).ready(function(){
    // Posicionando o ponteiro do grid na primeira posicao.
    var lines = $("tr:not(tr.header)")[0];
    $(lines).addClass("selected");

    // Alternando as linhas selecinadas do grid.
    $("tr").click(function(){
        if ($(this).attr("class") != "header") {
            $("tr.selected").removeClass("selected");
            $(this).addClass("selected");
        }
    });
});