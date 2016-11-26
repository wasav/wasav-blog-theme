var count = 1,
	postIds = {},
	isLoading = false,
	$loadingSign = $("<div></div>").addClass("loading-sign").html("Loading Posts ...");

if(ajaxUrl){
	// if the url is set, attach loader 
	$(window).scroll(function(){
		// trigger loading when scroller hits 35% of page
		var max = $(document).height() - $(window).height(),
			currentPosition = $(window).scrollTop();
		
		if  ( (currentPosition / max) >= 0.35 ){
			loadNextPage();
		}
	}); 
	
	// Trigger an initial loading on first page display
	$(document).ready(function(){
		loadNextPage();
	});
}


// go to the next page
function loadNextPage(){
	// if not already loading a page,
	// or all pages are loaded, return
	if(count < 0 || isLoading){
		return;
	}
	
	loadArticle(count++);
}

// Load a page
function loadArticle(pageNumber){
	isLoading = true;
	
	// Display loading sign
	$(".posts-list").append($loadingSign);
	
	// Send request with URL search queries
	$.ajax({
		url: ajaxUrl,
		type:'POST',
		dataType:"json",
		data: "action=infinite_scroll&page_no="+ pageNumber + (window.location.search.trim() != "" ? "&" + window.location.search.substring(1) : ''), 
		success: function(response){
			$loadingSign.remove();
			generateArticleEntries(response);
			isLoading = false;
		}
	});
	
}

// insert result in the dom
function generateArticleEntries(entries){
	
	if(!entries || !entries.list){
		return;
	}
	
	var toAppend = [];
	entries.list.forEach(function(entry){
		
		if(postIds[entry.postID.toString()]){
			return;
		}
		
		var $entry = $("<article></article>"),
			$title = $("<h3></h3>").append(
				$("<a></a>").attr("href", entry.permaLink)
							.html(entry.title)
			),
			$content = $("<div></div>").addClass("post-content").append( $("<p></p>").html(entry.excerpt)),
			$footer = $("<footer></footer>").addClass("post-category"),
			$userDiv = $("<div></div>").append(
				$(entry.avatar)
			),
			$metaDiv = $("<div></div>").append(
				
				$("<span></span>").html(entry.authorName)
				
			).append($("<span> in </span>"))
			.append(
				$(entry.categories)
			).append(
				$("<span></span>").addClass("glyphicon glyphicon-time")
			).append( 
				$("<span></span>").html(entry.avgReadingTime)
			);
			
		
		$footer.append($("<div></div>").addClass("post-meta")
							.append($userDiv)
							.append($metaDiv));
		
		$entry.append($("<header></header>").append($title));
		$entry.append($content);
		$entry.append($footer);
		$entry.append($("<hr/>"));
		
		postIds[entry.postID.toString()] = entry;
		
		toAppend.push($entry);
		
	});
	
	
	if(toAppend.length){
		$(".posts-list").append(toAppend);	
	}else{
		// no more page
		count = -1;
	}
	
	
}