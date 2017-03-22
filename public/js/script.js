console.log("We're connected to the JS file")


$(document).ready(function() {

	$('#ombd').submit(function(event){
		event.preventDefault();	

    	// selcecting form elements individually:
	  	 var searchData = {
            't'  : $('input[name=movieSearch]').val()
           
    	};

    	console.log(searchData);

		//AJAX send request
        $.ajax({
	        type        : 'GET', 
	        url         : 'http://www.omdbapi.com', 
	        dataType 	: 'json',
	        data        : searchData,  
	    })
	   

		

        // Info returned either through .done, .fail (or .always for whether the return was succesfull or not)
    	.done(function(data) {
    		if(data['Response']) {
    			console.log('Data is Okidoki!');
    			$("#movie_form #title").val(data['Title']);
    			$("#genre").html('<strong>OMDb suggested genres :</strong> '+data['Genre']+'<br>');
    			$("#movie_form #plot").val(data['Plot']);
    			// extraxt release year from string provided by OMDb
    			var film_release = data['Released'];
    			var film_year = film_release.substr(film_release.length - 4);

    			$("#movie_form #release").val(film_year);

    			$("#movie_form #runtime").val(data['Runtime']);
    			$("#movie_form #director").val(data['Director']);
    			$("#movie_form #actors").val(data['Actors']);
    			$("#movie_form #country").val(data['Country']);
    			$("#movie_form #language").val(data['Language']);
    			$("#movie_form #poster").val(data['Poster']);
    			
    			$("#omdb_poster img").attr("src", data['Poster']);
    			$("#omdb_poster img").attr("width", '200px');

    			$('#movie_form input[type="submit"]').val('ADD OMDb movie');
    			
    			
    			
    			
    	
    		} else {
    			alert("The data ain't no good!");
    		}
            console.log(data); 
        });
    
    });
   });


