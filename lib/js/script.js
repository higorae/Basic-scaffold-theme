$(document).ready(function(){
    
    $(".navegacao li").click(function(){
        index = $(this).index();
        $(".navegacao li").removeClass('atual');
        $(this).addClass("atual");
        $("#form fieldset").hide();        
        $("#form fieldset").eq(index).show();
    });
    
    x = $(".navegacao li").length;
    $(".navegacao li").each(function(){
        $(this).css({'z-index': x--})
    })
    
    $(".proximo").click(function(){
        index = $(".proximo").index(this) + 1;
        $("#nav li").eq(index).click();
    });
    
    $(".proximo").last().click(function(){
        $("#form-lateral").submit()
    });
    
    $("#nav li").click(function(){
        $("#nav li").removeClass("ativo");
        $(this).addClass("ativo");
        $("#orcamento fieldset").hide();
        $("#orcamento fieldset").eq($(this).index()).show();
    })
	
    //     $(".cep").mask("99.999-999",{
    //         completed:function(){
    //             getEndereco();
    //         }
    //     });
    // 
    // $(".cnpj").mask("99.999.999/9999-99");
    // $(".cpf").mask("999.999.999-99");
    //     $(".fone").mask("(99) 9999-9999");
    //     $(".data").mask("99/99/9999");
    // 
    // $("#buscar").Watermark("Busca");
    // 
    // $("tr:even").css("background-color", "#f7f7f7");
    // 
    // $('.imgs-associados').cycle({ 
    //  fx:    'fade', 
    //  sync:   0, 
    //  timeout: 5000,
    //  delay: -2000 
    // });

});