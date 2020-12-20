$.ajax({

    url:"assets/templates/GetThematiques.php",
    dataType:"json",
    success:function(response){
        response.forEach(thema => {
            // Affichage des thématiques dans la liste déroulante dans la création de pari.
            $("#selection").append(`
                <option>${thema.title}</option>
            `)

            // Affichage des thématiques dans la catégorie thématique.
            // $(document).ready(function() {
            //     $("#thematiques-link").append(`
            //     <li>${thema.title}</li>
            //     `)
            // });
        });
    }

}).fail(function(response){
    console.log(response.statusText)
})