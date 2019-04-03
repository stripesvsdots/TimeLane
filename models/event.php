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
    0 => new Event("lovelife", "./assets/images/hearts.png"), 
    1 => new Event("friendship", "./assets/images/friends.png"), 
    2 => new Event("education", "./assets/images/education.png"),
    3 => new Event("jobs", "./assets/images/interview.png"),
    4 => new Event("birthday", "./assets/images/birthday.png"),
    5 => new Event("party", "./assets/images/party.png"),
    6 => new Event("vacation", "./assets/images/vacation.png"),
    7 => new Event("concerts", "./assets/images/concert.png"),
    8 => new Event("movies", "./assets/images/movie.png"),
    9 => new Event("books", "./assets/images/open-book.png"),
]
 
?>
