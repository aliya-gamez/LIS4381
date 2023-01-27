<!DOCTYPE HTML>

<html>
	<head>
		<meta charset = "utf-8">
		<title>Using RSS Feeds</title>
		<link rel="icon" href="favicon.ico">
	</head>
	
	<body>
		<?php
		//https://validator.w3.org/feed/docs/rss2.html
		
		$html = "";
		$space = " ";
		$publisher = "Nasa Images of the Day!";
		$url = "https://www.nasa.gov/rss/dyn/lg_image_of_the_day.rss";
		
		$html .= '<h1>'.$publisher.'</h1>';
		$html .= '<a target="_blank" href="' .$url. '">RSS Feed Link:</a>'.$space.$url;
		
		$rss = simplexml_load_file($url);
		$count = 0;
		$html .= '<ul>';
		
		foreach($rss->channel->item as $item)
		{
			$count++;
			if($count > 10)
			{
				break;
			}
			$html .= '<li><strong><a href="'.htmlspecialchars($item->link).'">'.htmlspecialchars($item->title).'</a></strong><br />';
			$html .= htmlspecialchars($item->description).'<br />';
			$html .= '<i>'.htmlspecialchars($item->pubDate).'</i><br /> <br />';
		}
		$html .= '</ul>';
		
		print $html;
		?>
	</body>
</html>