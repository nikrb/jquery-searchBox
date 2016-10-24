<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <style>
		.agent-type-heading {
			font-size: 1.2em;
			font-weight: bold;
		}
		#search-box-wrapper {
	    width: 320px;
	    margin: 10px auto;
		}
		.agent-list-wrapper {
	    border: 1px solid #aae;
	    box-shadow: 1px 1px 5px #224;
	    border-radius: 5px;
	    position: absolute;
	    z-index: 1000;
		}

		#search_text {
	    border-radius: 5px;
			padding: 0 1em;
			width: 80%;
		}
		.search-button {
	    background-color: #aac;
	    border-radius: 10px;
	    cursor: pointer;
			padding: 0 5px;
		}
		.search-button:focus {
	    outline: 0;
		}
		.hide {
	    display:none;
		}

  </style>
</head>
<body>


<div id="search-box-wrapper" >
  <input type="text" />
  <button class="search-button" >&#128269;</button>

  <div id="drop_list_wrapper" class="agent-list-wrapper hide">
    <select size="6" >
    </select>
  </div>
</div>
				
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="modules/SearchBar.js"></script>

<script>
  var data = [];
  $(document).ready( function( $){
    const search = new SearchBar( getAgentData, "search-box-wrapper", "drop_list_wrapper", listItemSelected, searchButtonClicked);
  });
  function searchButtonClicked( searchText){
    console.log( "search for agent:", searchText);
    // window.location.replace( "http://greatermonctonrealtors.com/agent-table?searchText="+searchText);
  }
  function listItemSelected( agent_name){
    console.log( "selected agent:", agent_name);
		// window.location.replace( "http://greatermonctonrealtors.com/profile?agent_muid="+agent_name);
  }
  function getAgentData( searchText, callback){
    let pd = [];
    for( var i=0; i < data.length; i++){
      if( data[i].last_name.toLowerCase().indexOf( searchText.toLowerCase()) === 0){
        pd.push( { id: data[i].id, text: data[i].first_name+" "+data[i].last_name});
      }
    }
    callback( pd);
  }
  
  data = [
    {"id":1,"first_name":"Larry","last_name":"Ferguson","email":"lferguson0@myspace.com","gender":"Male","ip_address":"48.244.26.207"},
    {"id":2,"first_name":"Donald","last_name":"Gray","email":"dgray1@reverbnation.com","gender":"Male","ip_address":"34.16.51.194"},
    {"id":3,"first_name":"Walter","last_name":"Henry","email":"whenry2@cafepress.com","gender":"Male","ip_address":"177.143.41.172"},
    {"id":4,"first_name":"Sharon","last_name":"Andrews","email":"sandrews3@youtu.be","gender":"Female","ip_address":"231.224.253.159"},
    {"id":5,"first_name":"Harry","last_name":"Coleman","email":"hcoleman4@google.com","gender":"Male","ip_address":"139.133.156.0"},
    {"id":6,"first_name":"Benjamin","last_name":"Miller","email":"bmiller5@jigsy.com","gender":"Male","ip_address":"236.2.55.163"},
    {"id":7,"first_name":"Carolyn","last_name":"Bowman","email":"cbowman6@buzzfeed.com","gender":"Female","ip_address":"108.28.38.77"},
    {"id":8,"first_name":"Robin","last_name":"Howard","email":"rhoward7@wunderground.com","gender":"Female","ip_address":"248.144.19.8"},
    {"id":9,"first_name":"Matthew","last_name":"Myers","email":"mmyers8@cdc.gov","gender":"Male","ip_address":"8.67.177.45"},
    {"id":10,"first_name":"Stephen","last_name":"Thompson","email":"sthompson9@psu.edu","gender":"Male","ip_address":"53.133.174.167"},
    {"id":11,"first_name":"Marie","last_name":"Tucker","email":"mtuckera@amazon.co.jp","gender":"Female","ip_address":"25.255.166.191"},
    {"id":12,"first_name":"Keith","last_name":"Fox","email":"kfoxb@godaddy.com","gender":"Male","ip_address":"10.107.11.107"},
    {"id":13,"first_name":"Gerald","last_name":"Barnes","email":"gbarnesc@microsoft.com","gender":"Male","ip_address":"80.132.38.62"},
    {"id":14,"first_name":"Kathy","last_name":"Powell","email":"kpowelld@wordpress.org","gender":"Female","ip_address":"161.210.143.162"},
    {"id":15,"first_name":"Maria","last_name":"Garrett","email":"mgarrette@scribd.com","gender":"Female","ip_address":"234.134.223.226"},
    {"id":16,"first_name":"Brandon","last_name":"Carpenter","email":"bcarpenterf@biblegateway.com","gender":"Male","ip_address":"190.171.61.63"},
    {"id":17,"first_name":"John","last_name":"Wilson","email":"jwilsong@vinaora.com","gender":"Male","ip_address":"242.81.81.216"},
    {"id":18,"first_name":"Kathryn","last_name":"Walker","email":"kwalkerh@eepurl.com","gender":"Female","ip_address":"95.132.123.104"},
    {"id":19,"first_name":"Charles","last_name":"Fuller","email":"cfulleri@over-blog.com","gender":"Male","ip_address":"179.228.86.143"},
    {"id":20,"first_name":"Alan","last_name":"Williams","email":"awilliamsj@home.pl","gender":"Male","ip_address":"208.177.203.210"}
  ];

</script>
</body>
</html>