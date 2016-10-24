
class SearchBar {
  constructor( getData, searchBoxDiv, dropListDiv, listItemSelected, searchButtonClicked){
    this.searchTextChange = this.searchTextChange.bind(this);
    this.searchButtonClick = this.searchButtonClick.bind(this);
    this.itemSelected = this.itemSelected.bind(this);
    this.updateListDropdown = this.updateListDropdown.bind(this);
    this.getData = getData;
    this.searchBoxDiv = $('#'+searchBoxDiv);
    this.dropListDiv = $('#'+dropListDiv);
    const inputBox = this.searchBoxDiv.find( 'input');
    inputBox.keyup( this.searchTextChange);

    const searchButton = this.searchBoxDiv.find( 'button');
    searchButton.on( 'click', this.searchButtonClick);

    this.selectList = this.dropListDiv.find( 'select');
    this.selectList.on( 'change', this.itemSelected);
    
    this.callbackItemSelected = listItemSelected;
    this.callbackSearchButton = searchButtonClicked;
    this.current_search_text = "";
  }

  updateListDropdown( data){
		this.dropListDiv.show( 100);
    this.selectList.empty(); // find( 'option').remove();
    for( var i=0; i<data.length; i++){
      var item = data[i];
      this.selectList.append( "<option value='"+item.id+"' >"+
                      item.text + "</option>");
    }
  }
  searchTextChange(e){
    if( e.target.value.length > 0){
      this.current_search_text = e.target.value;
      const list_items = this.getData( this.current_search_text);
      this.updateListDropdown( list_items);
    }
  }
  itemSelected( e){
		this.dropListDiv.hide( 100);
		this.callbackItemSelected( e.target.value);
  }
  searchButtonClick( e){
		this.dropListDiv.hide( 100);
		this.callbackSearchButton( this.current_search_text);
  }
}

