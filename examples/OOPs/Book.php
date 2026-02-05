<?php

class Book
{
public $name;
public $author;
    // consrtuct() function starts with 2 underscores
    /* when we use construct no need to call set method separately
    it is automatically called each time new object is created
    */
    function __construct($name, $author)
    {
        $this->name = $name;
        $this->author = $author;
    }

    function get_details()
    {
        echo "Book Details : " . $this->name . " - " . $this->author . "\n";
    }
}
$Book1 = new Book('Sky view', 'Phillips');
$Book2 = new Book('Mysterious island', 'Henry');

$Book1->get_details();
$Book2->get_details();
?>

/*Feature	Class (The Blueprint)	Object (The House)
Definition	Written once.	Created many times.
Purpose	Defines the "rules" and structure.	Holds the actual data (e.g., "Sky view").
Location	Usually kept in a separate file.	Created in the main part of your app


Why create objects outside the class?
Think of a Class as a Blueprint and an Object as the House built from that blueprint.
The Blueprint (Class): Tells you what a "Book" looks like (it has a name and an author). It doesn't represent a specific book yet.
The House (Object): Is a real, specific instance.

*/
