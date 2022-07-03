<?php 

// Decoretor design pattern
date_default_timezone_set("Asia/Dhaka");
$time_get = date_default_timezone_get();
class Article{
    private $title;
    private $time;

    function __construct($title, $time)
    {
        $this->title = $title;
        $this->time  = $time;
    }

    function getTitle(){
        return $this->title;
    }

    function getTime(){
        return $this->time;
    }

    function display_value(){
        $title = $this->getTitle();
        // $time = date("Y-m-d H:i:s", $this->getTime());

        // echo "{$title} and working time is {$time}\n";
    }

    function display_title(){
        $title = $this->getTitle();
        $time =  $this->to_time_ago(time() - 544444).' '.($this->getTime());
    
        echo "{$title} PHP working time is {$time}";
    }


// PHP program to convert timestamp
// to time ago

function to_time_ago( $time ) {
	
	// Calculate difference between current
	// time and given timestamp in seconds
	$diff = time() - $time;
	
	if( $diff < 1 ) {
		return 'less than 1 second ago';
	}
	
	$time_rules = array (
				12 * 30 * 24 * 60 * 60 => 'year',
				30 * 24 * 60 * 60	   => 'month',
				24 * 60 * 60		   => 'day',
				60 * 60				   => 'hour',
				60					   => 'minute',
				1					   => 'second'
	);

	foreach( $time_rules as $secs => $str ) {
		
		$div = $diff / $secs;

		if( $div >= 1 ) {
			
			$t = round( $div );
			
			return $t . ' ' . $str .
				( $t > 1 ? 's' : '' ) . ' ago';
		}
	}
}

}


class ArticleTitle{
    private $article;

    function __construct(Article $article)
    {
        $this->article = $article;
    }

    function display_title(){
        $title = $this->article->getTitle();
        $time =  $this->to_time_ago(time() - 544444).' '.($this->article->getTime());
    
        echo "PHP working time is {$time}";
    }


// PHP program to convert timestamp
// to time ago

function to_time_ago( $time ) {
	
	// Calculate difference between current
	// time and given timestamp in seconds
	$diff = time() - $time;
	
	if( $diff < 1 ) {
		return 'less than 1 second ago';
	}
	
	$time_rules = array (
				12 * 30 * 24 * 60 * 60 => 'year',
				30 * 24 * 60 * 60	   => 'month',
				24 * 60 * 60		   => 'day',
				60 * 60				   => 'hour',
				60					   => 'minute',
				1					   => 'second'
	);

	foreach( $time_rules as $secs => $str ) {
		
		$div = $diff / $secs;

		if( $div >= 1 ) {
			
			$t = round( $div );
			
			return $t . ' ' . $str .
				( $t > 1 ? 's' : '' ) . ' ago' ." ". date("d-m-Y");
		}
	}
}
}

// $ob = new Article("Hello php",time()-51151562);
$ob = new Article("Hello Rofiq",date("H:i:s"));
$ob->display_value();
$ob->display_title();

echo PHP_EOL;
$articleTime = new ArticleTitle($ob);

echo $articleTime->to_time_ago(time() - 5556898);
