# jquery-searchBox
simple search box using jquery

Usage
-----

* include jquery and SearchBar.js in source
* create search box
* create new searchBar

``` 
const search = new SearchBar( getAgentData, "search-box-wrapper", "drop_list_wrapper", listItemSelected, searchButtonClicked);
```

where:
* getAgentData( searchText, callback) function to get droplist data
    * searchText text to search with
    * callback( array_of_objects) pass data back, object { id: some_id, text: "droplist text" }
* search-box-wrapper string id of box wrapper.
    * input and button element are found from this
* drop_list_wrapper used to show/hide the droplist
* listItemSelected called when a select item is selected
* searchButtonClicked called when searchBar button is clicked

Template
-------

```
<div id="search-box-wrapper" >
  <input type="text" />
  <button class="search-button" >&#128269;</button>

  <div id="drop_list_wrapper" class="agent-list-wrapper hide">
    <select size="6" >
    </select>
  </div>
</div>
```

Styling
-------

```
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

```

