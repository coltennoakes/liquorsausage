<?php
class classNasty{
/****************************************************************************/
	public function get_drink_name(){
	$name_first = array('Sensible', 'Nerdy', 'Fizzy', 'Naughty', 'Terrible', 'Crazy', 'Dumb', 'Presidential', 'Loose', 'Stiff', 'Wobbly', 'Smoky', 'Unrelenting', 'Smiley', 'Old', 'Fresh', 'Musty', 'Musky', 'Bubbly', 'Salty', 'Risky', 'Mellow', 'Late', 'Good', 'Evil', 'Strict', 'Funky', 'Angry', 'Bewildered', 'Itchy', 'Tiny', 'Nervous', 'Glittery');
	$nmlen = count($name_first)-1;
	$name_second = array('Mistake', 'Nightcap', 'Rock', 'Shoelace', 'Disco Ball', 'DJ', 'Trolley', 'Hedgehog', 'Yogaball', 'Sock', 'Fog', 'Teabag', 'Screentime', 'Belt', 'Bracelet', 'Dog', 'Horse', 'Cat', 'Crossfit Bro', 'Cassette', 'Old Gregg', 'Refrigerator', 'Night Out', 'Hitchhiker', 'Possum','Prospector');
	$nm2len = count($name_second)-1;

	$name = array($name_first, $name_second);

	$realname = $name[0][rand(0, $nmlen)] ." ". $name[1][rand(0, $nm2len)];

	return $realname;

	}
/****************************************************************************/
	public function get_drink($drinkname){
		$oldgregg = FALSE;
		// If Old Gregg is in the title of the drink, it must contain Baileys and be drunk from a shoe.
		if (strpos($drinkname, 'Old Gregg') !== FALSE) {
    		$oldgregg = true;
		}

	$vol = array('1oz', '2oz', '3oz', 'A brandy snifter', 'One pint', 'A splash', 'One eydropper', 'One ladle', 'A dram', '1/4oz', '1/2oz');
	$vollen = count($vol)-1;

	$booze = array('scotch', 'vodka', 'Blue Curacao', 'expensive beer', 'cheap red wine', 'Kahlua', 'mezcal', 'tequila', 'white wine', 'absinthe', 'coffee', 'sake', 'Fireball', 'Drambuie', 'Jack Daniels', 'Irish Mist', 'Grand Marnier', 'Creme de Menthe', 'Peach Schnapps', 'Baileys Irish Cream', 'rum', 'Limoncello', 'pineapple juice', 'tomato juice');
	$boozlen = count($booze)-1;

	$instructions = array('Mix lightly', 'Shake', 'Stir', 'Blend victoriously', 'Pour over ice', 'Pour on the carpet', 'Mix in mason jar', 'Dilute with tears', 'Muddle with blackberries', 'Snort from the blade of a big knife', 'Give to someone you love', 'Serve in a highball glass filled with ice', 'Whisper the name of a loved one across the edge of the glass and drink all at once', 'Serve in a solo cup.');
	$instlen = count($instructions)-1;

	$garnish = array('Garnish with parsley', '');
	$garnlen = count($garnish)-1;

	$num_ingredients = rand(3, 6);
	$dr = array($vol, $booze, $instructions);

	for($i=0; $i<$num_ingredients; $i++) {
		$count = count($dr[1])-1;

		// Pick random array element
		$volume = $dr[0][rand(0, $vollen)];
		$ingredient = $dr[1][rand(0, $count)];

		if ((array_search("Baileys Irish Cream", $dr[1]) != FALSE) and ($oldgregg != FALSE)) { $ingredient = "Baileys Irish Cream";}
		// Display the volume and ingredient
		echo $volume ." of ". $ingredient . "<br>";

		// Search for that ingredient in the array, remove, and reindex
		$pos = array_search($ingredient, $dr[1]);
		unset($dr[1][$pos]);
		$dr[1] = array_values($dr[1]);
		
	}

	echo '<p>'.$dr[2][rand(0, $instlen)].'.  Enjoy!';
	}
/****************************************************************************/
	public function check_for_old_gregg($baileys){

		// If Old Gregg is in the title of the drink, it must contain Baileys and be drunk from a shoe.
		if (strpos($baileys, 'Old Gregg') !== false) {
    		echo 'Serve in a shoe.  Make an assessment.<br><br>';
		}
		else if (strpos($baileys, 'Salty') !== false) {
    		echo 'Salt the rim.<br><br>';
		}

	}
/****************************************************************************/
}

?>
