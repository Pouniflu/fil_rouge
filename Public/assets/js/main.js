// Page de profil
// Liste d'amis
$("#open-list-friend").click(function(){
    $(".profil-main-list-friend").css("display", "flex");
    $(this).css("display", "none");
    $("#close-list-friend").css("display", "block");
});

$("#close-list-friend").click(function(){
    $(".profil-main-list-friend").css("display", "none");
    $(this).css("display", "none");
    $("#open-list-friend").css("display", "block");
});

// Paris en cours
$("#open-list-pari").click(function(){
    $(".profil-main-list-pari").css("display", "flex");
    $(this).css("display", "none");
    $("#close-list-pari").css("display", "block");
});

$("#close-list-pari").click(function(){
    $(".profil-main-list-pari").css("display", "none");
    $(this).css("display", "none");
    $("#open-list-pari").css("display", "block");
});

// Anciens paris
$("#open-list-lastPari").click(function(){
    $(".profil-main-list-lastPari").css("display", "block");
    $(this).css("display", "none");
    $("#close-list-lastPari").css("display", "block");
});

$("#close-list-lastPari").click(function(){
    $(".profil-main-list-lastPari").css("display", "none");
    $(this).css("display", "none");
    $("#open-list-lastPari").css("display", "block");
});

// Paramètres
$("#open-list-param").click(function(){
    $(".profil-main-list-param").css("display", "flex");
    $(this).css("display", "none");
    $("#close-list-param").css("display", "block");
});

$("#close-list-param").click(function(){
    $(".profil-main-list-param").css("display", "none");
    $(this).css("display", "none");
    $("#open-list-param").css("display", "block");
});


// Poll
