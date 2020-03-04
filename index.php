<?php 
if(empty($_GET['f'])){
    $file=fopen('list.txt','r');
    while(!feof($file)){
        $line = fgets($file);
        echo "<a href='index.php?f=$line'>$line</a><br/>";
    }
    fclose($file);
    exit();
}




?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<link  href="static/epub/css/normalize.css" rel="stylesheet">
		<link  href="static/epub/css/main.css" rel="stylesheet">
		<link  href="static/epub/css/popup.css" rel="stylesheet">	
		<link  href="static/app/custom.css" rel="stylesheet">	
	</head>
	<body>
		<div id="sidebar">
			<div id="panels">
				<a id="show-Toc" class="show_view icon-list-1 active" data-view="Toc">TOC</a>
				<a id="show-Bookmarks" class="show_view icon-bookmark" data-view="Bookmarks">Bookmarks</a>
				<a id="show-Notes" class="show_view icon-edit" data-view="Notes">Notes</a>
			</div>
			<div id="tocView" class="view"></div>
			<div id="searchView" class="view">
				<ul id="searchResults"></ul>
			</div>
			<div id="bookmarksView" class="view">
				<ul id="bookmarks"></ul>
			</div>
			<div id="notesView" class="view">
				<div id="new-note">
					<textarea id="note-text"></textarea>
					<button id="note-anchor">Anchor</button>
				</div>
				<ol id="notes"></ol>
			</div>
		</div>
		<div id="main">
			<div id="titlebar">
				<div id="opener">
					<a id="slider" class="icon-menu">Menu</a>
				</div>
				<div id="metainfo">
					<span id="book-title"></span>
					<span id="title-seperator">&nbsp;&nbsp;–&nbsp;&nbsp;</span>
					<span id="chapter-title"></span>
				</div>
				<div id="title-controls">
					<a id="bookmark" class="icon-bookmark-empty">Bookmark</a>
					<a id="setting" class="icon-cog">Settings</a>
					<a id="fullscreen" class="icon-resize-full">Fullscreen</a>
				</div>
			</div>

			<div id="divider"></div>
			<div id="prev" class="arrow">‹</div>
			<div id="viewer"></div>
			<div id="next" class="arrow">›</div>
			<div id="loader"><img src="static/epub/img/loader.gif"></div>
		</div>
		<div class="modal md-effect-1" id="settings-modal">
			<div class="md-content">
				<h3>Settings</h3>
				<div>
					<p><input type="checkbox" id="sidebarReflow" name="sidebarReflow">Reflow text when sidebars are open.</p>
				</div>
				<div class="closer icon-cancel-circled"></div>
			</div>
		</div>
		<div class="overlay"></div>
	</body>

	<script type="text/javascript"> 
		var appOptions = {
			filePath:"/epub/<?php echo urlencode($_GET['f']);?>",
			epubStatic:"/static/epub/",
		}
	</script>
	<script src="static/epub/js/libs/jquery.min.js"></script>
	<script src="static/epub/js/libs/zip.min.js"></script>
	<script src="static/epub/js/libs/localforage.min.js"></script>
	<script src="static/epub/js/libs/screenfull.min.js"></script>
	<script src="static/epub/js/epub.js"></script>
	<script src="static/epub/js/hooks.min.js"></script>
	<script src="static/epub/js/reader.min.js"></script>
	<script src="static/app/page.js"></script>
</html>
