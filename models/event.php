<?php


class Event {
    public function __construct($name, $img_url) {
        $this->name = $name;
        $this->img_url = $img_url;
    }
    public $img_url = '';
    public $name = '';
}

$all_events = [
    0 => Event("lovelife", "assets/..."), 
    1 => Event("worky", "assets/..."), 
]
<option value="1">lovelife</option>
<option value="2">friendship</option>
<option value="3">education</option>
<option value="4">jobs</option>
<option value="5">birthday party</option>
<option value="6">party</option>
<option value="7">concerts</option>
<option value="8">movies</option>
<option value="9">books</option>

?>
