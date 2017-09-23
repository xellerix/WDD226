<?php

/**
 *  Global variable for class Tools
 * 
 * The main function of Tools is to house the global
 * properties that tool extensions use. These are the 
 * properties that all html elements have available.
 * 
 * @since 9/14/17
 * @author Matt Markwald <mmarkwald01@gmail.com>
 * 
*/
# /*TOGGLE
class Tools
{
	public $globals = array(
	"accesskey"=>NULL,
	"className"=>NULL,
	"contextMenu"=>NULL,
	"dataGet"=>NULL,
	"dir"=>NULL,
	"draggable"=>NULL,
	"dropzone"=>NULL,
	"hidden"=>NULL,
	"id"=>NULL,
	"lang"=>NULL,
	"spellcheck"=>NULL,
	"style"=>NULL,
	"tabindex"=>NULL,
	"title"=>NULL,
	"translate"=>NULL
	);
	
}
#*/

/**
 * Get and Set used to create and store values of a table in html
 * 
 * The table class uses a series of methods to create and populate 
 * an Html table object. This is accomplished by first setting the 
 * the thead, tbody, and tfoot properties. The Thead and Tfoot can
 * be set by using the set_Thead() and set_Foot() methods which 
 * take an arbitrary amount of args to create the header and footer
 * for the table. The tBody property can be set using the set_Tbody
 * method which can either take a full array of arrays, rows, or by
 * providing an arbitrary amount of arrays. In all cases the amount
 * items in the head, body->rows, and foot needs to be the same.
 * 
 * @author Matt Markwald <mmarkwald01@gmail.com>
 * @since 9/14/17
 * 
*/

class Table extends Tools 
{
	private $sortable;
	private $thead;
	private $tbody;
	private $tfoot;

/**
 * Tests whether function calls are working
*/
# /*TOGGLE
	public function test() {
		echo "test test test test test";
	}
#*/

/**
 * Set property methods
 * 
 * Following methods are used to set the properties of 
 * the class.
 * 
 * @since 9/14/17
*/
# /* TOGGLE
	public function set_Thead() {
		$headerRow = func_get_args();
		$this->thead = $this->addTh($headerRow);
	}
	public function set_Tbody() {
		$rows = array(func_get_args());
		// grabs as arrays as array
		// will need a function to change each array into a list

	}
	public function set_Tfoot() {
		$this->thead = array(func_get_args());
	}
#*/

/**
 * Get property methods
 * 
 * Following methods are used to get the property
 * values of the class
 * 
 * @since 9/14/17
*/
# /*TOGGLE
	public function get_Thead() {
		if (isset($this->thead)) {
			return $this->thead;
		}
		else {
			return "not set";
		}
	}
#*/

/**
 * Construct <th> HTML tags
 * 
 * This function creates a <th> tag for each item
 * in the array it is passed. 
 * 
 * @since 9/14/17
 * @param array $headerData Row data 
 * @var string $htmlString holds the html for return 
 * @return string $htmlString Returns formatted html string with data nested in <th></th> 
 * 
*/  
# /* TOGGLE
	private function addTh($headerData) {
		$htmlString = "<tr>\n";
		foreach ($headerData as $th) {
			$htmlString .= "	<th>" . $th . "</th>\n";
		}
		$htmlString .= "</tr>\n";
		return $htmlString;
	}
#*/	 

/**
 * Construct <td> HTML tags
 * 
 * this function creates a <td> tag for each item
 * in the array it is passed
 * 
 * @since 9/14/17
 * @author Matt Markwald <mmarkwald01@gmail.com>
 * @param array $headerData Row data 
 * @var string $htmlString holds the html for return 
 * @return string $htmlString Returns formatted html string with data nested in <th></th>
 *  
*/  
# /* TOGGLE
	private function addTd($headerData) {
		$htmlString = "<tr>\n";
		foreach ($headerData as $td) {
			$htmlString .= "	<td>" . $th . "</td>\n";
		}
		$htmlString .= "</tr>\n";
		return $htmlString;
	}	
}#End Class Table

// TESTS: 
# /*TOGGLE
 # TEST001  
 #
 # Checks the ability to call extension 'Table'
 # Checks set_Thead works with variable args
 # Checks get_Thead()
 # 

$petTable = new Table;
$petTable->set_Thead("Name", "Type", "Age");
echo $petTable->get_Thead(); 
# */

?>