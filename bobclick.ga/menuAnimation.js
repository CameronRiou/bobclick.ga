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

$leave = function(){
    console.log('a');
window.addEventListener('beforeunload',function(e){
    $.ajax({
        method: 'post',
        url: 'out.php',
      });
});};

$("#Circle").mouseover(
    function () {
        $("#TopLine").css("transform", "translate(10px,10px) rotate(90deg)");
        $("#BottomLine").css("transform", "translate(-10px,-10px) rotate(90deg)");
        $("#MiddleLine").css("transform", "rotate(90deg)");
        $("html").css({'background': 'rgba(0, 0, 0, 0.75)'});
        $('#but').css('opacity',0.25)
    }
);

$(window).mouseover(
    function(event){
        if(event.target.id === "ShopModal" || event.target.id ==="main"){
			$("#TopLine").css("transform", "translate(0px,0px) rotate(0deg)");
			$("#BottomLine").css("transform", "translate(0px,0px) rotate(0deg)");
			$("#MiddleLine").css("transform", "rotate(0deg)");
			$("html").css('background', 'rgba(0, 0, 0, 0)');
            $('#but').css('opacity',1)
		}
    }
);

