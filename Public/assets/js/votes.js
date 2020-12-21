// Fonction qui récupère les paramètres GET de l'URL, copiée d'un stack overflow
function $_GET(param) {
    let vars = {};
    window.location.href.replace( location.hash, '' ).replace( 
        /[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
        function( m, key, value ) { // callback
            vars[key] = value !== undefined ? value : '';
        }
    );

    if ( param ) {
        return vars[param] ? vars[param] : null;
    }
    return vars;
}

function score(){
    $.ajax({

        url:"?page=poll&sondage_id=" + $_GET("sondage_id") + "&function=vote",
        dataType:"json",
        success:function(response){
            console.log(response);
            $vote1 = response[0]['votes'];
            $vote2 = response[1]['votes'];
            $vote3 = response[2]['votes'];
            $vote4 = response[3]['votes'];
    
            $('#div1').html($vote1);
            $('#div2').html($vote2);
            $('#div3').html($vote3);
            $('#div4').html($vote4);
    
            $(".submit1").click(function(){
                $('#div1').html($vote1);
                $('#div2').html($vote2);
                $('#div3').html($vote3);
                $('#div4').html($vote4);
            });
            $(".submit2").click(function(){
                $('#div1').html($vote1);
                $('#div2').html($vote2);
                $('#div3').html($vote3);
                $('#div4').html($vote4);
            });
            $(".submit3").click(function(){
                $('#div1').html($vote1);
                $('#div2').html($vote2);
                $('#div3').html($vote3);
                $('#div4').html($vote4);
            });
            $(".submit4").click(function(){
                $('#div1').html($vote1);
                $('#div2').html($vote2);
                $('#div3').html($vote3);
                $('#div4').html($vote4);
            });
        }
    
    }).fail(function(response){
        console.log(response.statusText)
    })
}

setInterval(score, 5000);