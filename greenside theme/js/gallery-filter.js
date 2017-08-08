jQuery(document).ready(function(){
	var items = jQuery('#gallery li'),
		itemsByTags = {};
		
	//Loop through tags
	items.each(function(i){
		var elem = jQuery(this),
		tags = elem.data('tags').split(',');
		
		//Add data attribute for quicksand
		elem.attr('data-id',i);
		
		jQuery.each(tags,function(key,value){
			//Remove whitespace
			value = jQuery.trim(value);
			
			if(!(value in itemsByTags)){
				//Add empty value
				itemsByTags[value] = [];
			}
			
			//Add image to array
			itemsByTags[value].push(elem);
		});
	});
	
	//Create "All Items" option
	createList('All Items',items);
	
	jQuery.each(itemsByTags, function(k, v){
		createList(k, v);
	});
	
	//Click Handler
	jQuery('#navbar a').live('click', function(e){
		var link = jQuery(this);
		
		//Add active class
		link.addClass('active').siblings().removeClass('active');
		
		jQuery('#gallery').quicksand(link.data('list').find('li'));
		e.preventDefault();
	});
	
	jQuery('#navbar a:first').click();
	
	//Create the lists
	function createList(text,items){
		//Create empty ul
		var ul = jQuery('<ul>',{'class':'hidden'});
		
		jQuery.each(items, function(){
			jQuery(this).clone().appendTo(ul)
		});
		
		//Add gallery div
		ul.appendTo('#gallery');
		
		//Create menu item
		var a = jQuery('<a>',{
			html:text,
			href:'#',
			data:{list:ul}
		}).appendTo('#navbar');
	}
});