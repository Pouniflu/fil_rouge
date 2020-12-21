$.ajax({

    url:"assets/templates/GetThematiques.php",
    dataType:"json",
    success:function(response){
        response.forEach(thema => {
            // Affichage des thématiques dans la liste déroulante dans la création de pari.
            $("#selection").append(`
                <option>${thema.title}</option>
            `)
        });
    }

}).fail(function(response){
    console.log(response.statusText)
})