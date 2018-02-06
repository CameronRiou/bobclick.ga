$('#signUpBut').on('click',function(){
    $('#SignUpModal').css("display","block");
});

$(".UpClose").click(
    function () {
        $("#SignUpModal").css("display", "none");
    }
);

$(window).click(
    function(event){
        if(event.target.id == "SignUpModal"){
            $("#SignUpModal").css("display", "none");
        }
    }
);

$('#logInBut').on('click',function(){
    $('#SignInModal').css("display","block");
});

$(".InClose").click(
    function () {
        $("#SignInModal").css("display", "none");
    }
);

$(window).click(
    function(event){
        if(event.target.id == "SignInModal"){
            $("#SignInModal").css("display", "none");
        }
    }
);