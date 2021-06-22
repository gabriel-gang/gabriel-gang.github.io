$(document).ready(function(){
    
    $(".text_bar2,.text_bar3").slideUp(0);
    
    $(".flechecompetence1").click(function(){
        $(".text_bar").slideDown(500);
        $(".text_bar2,.text_bar3").slideUp(500);
        
        $(".competence1 img:last-of-type").attr("src","medias/images/flechehaut.png");
        
        $(".competence2 img:last-of-type").attr("src","medias/images/flechebas.png");
        $(".competence3 img:last-of-type").attr("src","medias/images/flechebas.png");
    });
    
    $(".flechecompetence2").click(function(){
        $(".text_bar2").slideDown(500);
        $(".text_bar,.text_bar3").slideUp(500);
        
        $(".competence2 img:last-of-type").attr("src","medias/images/flechehaut.png");
        
        $(".competence1 img:last-of-type").attr("src","medias/images/flechebas.png");
        $(".competence3 img:last-of-type").attr("src","medias/images/flechebas.png");
    });
    
    $(".flechecompetence3").click(function(){
        $(".text_bar3").slideDown(500);
        $(".text_bar,.text_bar2").slideUp(500);
        
        $(".competence3 img:last-of-type").attr("src","medias/images/flechehaut.png");
        
        $(".competence1 img:last-of-type").attr("src","medias/images/flechebas.png");
        $(".competence2 img:last-of-type").attr("src","medias/images/flechebas.png");
    });
    
});