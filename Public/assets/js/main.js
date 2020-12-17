// Page de profil
// Liste d'amis

$("#open-list").click(function(){
    $(".profil-main-list-friend").css("display", "flex");
    $(this).css("display", "none");
    $("#close-list").css("display", "block");
});

$("#close-list").click(function(){
    $(".profil-main-list-friend").css("display", "none");
    $(this).css("display", "none");
    $("#open-list").css("display", "block");
});