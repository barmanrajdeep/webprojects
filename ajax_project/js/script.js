
$('#form-container').submit(function () {

    var $body = $('body');
    var $wikiElem = $('#wikipedia-links');
    var $nytHeaderElem = $('#nytimes-header');
    var $nytElem = $('#nytimes-articles');
    var $greeting = $('#greeting');
    var $wikiErr = $('#wikipedia-header');

    // clear out old data before new request
    $wikiElem.text("");
    $nytElem.text("");

    // load streetview

    // YOUR CODE GOES HERE!
    var addressInput = $('#street').val();
    var cityInput = $('#city').val();
    var address = addressInput + ', ' + cityInput;

    $(".greeting").text('So, you want to live at ' + address + '?');

    var bgImgURL = 'http://maps.googleapis.com/maps/api/streetview?size=640x640&location=' + address + '';

    $body.append('<img class="bgimg" src="' + bgImgURL +'">');
    $("img").css("height","100%");
    $("img").css("width","100%");

    var yourl = 'http://api.nytimes.com/svc/search/v2/articlesearch.json?q='+cityInput+'&sort=newest&api-key=db1411b8e6688664b5c76014642b1fd3:19:70207663';

    $.getJSON( yourl , function( data ) {

      $nytHeaderElem.text('New York Times Articles About ' + cityInput);

    articles = data.response.docs;
    for (var i = 0; i < articles.length; i++ ) {
      var article = articles[i];
      $nytHeaderElem.append('<li class="article">'+'<a href="'+article.web_url+'">'+article.headline.main+'</a>'+'<p>'+article.snippet+'</p>'+'</li>');
    }
  }).error(function(e){
       $nytHeaderElem.text("Request failed.");
    });

    $.ajax({
      url: 'en.wikipedia.org/w/api.php?action=query&list=allpages&format=json&apfrom=London&aplimit=10&rawcontinue=&titles='+cityInput,
      dataType: 'json',

    }).error(function(e){
         $wikiErr.text("Request failed.");
      });

    return false;
});
