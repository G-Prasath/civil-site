$( document ).ready(function() {
    // $(".open-menu img").click(()=>{
    //     $(".hero-navbar ul").css("width","100%");
    //     $(".open-menu img").attr("src", "assets/images/close.png");
    //     $(".open-menu img").css("width","40px");
    //     $(".open-menu img").click(()=>{
    //         $(".hero-navbar ul").css("width","0%");
    //         $(".open-menu img").attr("src", "assets/images/nav-menu.png");
    //     })
    // })
    $(".open-menu img").click(()=>{
    var ot = $(".open-menu img").attr("src");
    
    if(ot == "assets/images/nav-menu.png"){
        $(".hero-navbar ul").css("width","100%");
        $(".open-menu img").attr("src", "assets/images/close.png");
        $(".open-menu img").css("width","40px");

    }
    else{
        $(".hero-navbar ul").css("width","0%");
        $(".open-menu img").attr("src", "assets/images/nav-menu.png");
    }
    
    });

});