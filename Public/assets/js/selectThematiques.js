$.ajax({

    url:"assets/templates/GetThematiques.php",
    dataType:"json",
    success:function(response){
        response.forEach(thema => {
            // Affichage de tous les pays dans le Select du formulaire
            $("#selection").append(`
            <option>${thema.title}</option>
            `)
        });
    }

}).fail(function(response){
    console.log(response.statusText)
})