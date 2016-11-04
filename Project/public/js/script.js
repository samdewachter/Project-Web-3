$(document).ready(function(){

    // document.getElementById("apply-filter-top").onclick = function() {
    // document.getElementById("filter-form").submit();
    // };

    $( ".console-down" ).hide();
    $( ".genre-down" ).hide();


    $("#toggle-console").click(function(){

        $( ".console-down" ).toggle();
        $( ".console-up" ).toggle();
        $("#consoles-toggle").slideToggle();

    });

    $("#toggle-genre").click(function(){

        $( ".genre-down" ).toggle();
        $( ".genre-up" ).toggle();
        $("#genres-toggle").slideToggle();

    });


    $( ".cross" ).hide();

    $( ".menu-hamburger" ).hide();

    $( ".menu-account" ).hide();

    $( ".hamburger" ).click(function() {

        $( ".menu-hamburger" ).slideToggle( "slow", function() {

            $( ".hamburger" ).hide();

            $( ".cross" ).show();

        });

    });

    $( ".cross" ).click(function() {
    $( ".menu-hamburger" ).slideToggle( "slow", function() {
    $( ".cross" ).hide();
    $( ".hamburger" ).show();
    });
    });

    $( ".dropdown-toggle" ).click(function() {
    $( ".menu-account" ).slideToggle( "slow" );
    });

    $('#search-game').keyup(function(){
    	sZoekstring = $('#search-game').val();

        $.getJSON("http://www.giantbomb.com/api/search/?api_key=896593f259d35acb93a74b9caf22106d57d93241&format=json&query=" + sZoekstring + "&resources=game&limit=3&field_list=name,image,platforms,description", function(oData){
            console.log(oData["results"]);

            $("#picture-game").attr('src', '');

            $("#photo-url-giant").val('');

            $("#photo-url").show();

            results = oData["results"];

            $(".game-name").empty();

            for(i in results){
                games = "<li><a href='#' index="+i+">" + results[i].name +"</a></li>";
                console.log(games);
                $('.game-name').append(games);
            }

            $(".game-name a").click(function(){
                index = $(this).attr("index"); 

                $('#photo-url').hide();

                $('#search-game').val(results[index].name);

                images = results[index].image;

                $("#picture-game").attr('src', images['small_url']);

                $("#photo-url-giant").val(images['small_url']);

                description = results[index].description;

                split1 = description.split('</p>');

                split2 = split1[0].split('</h2>');

                description = split2[1].replace(/(<([^>]+)>)/ig,"");

                console.log(description);

                $("#game-description").val(description);
    		})
    	})
    })    
});