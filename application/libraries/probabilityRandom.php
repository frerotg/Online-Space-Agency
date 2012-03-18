<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Probability
 *
 * @author greenpix
 */
 
class probabilityRandom {
	#private vars
	var
		$data = array(),
		$universe = 0;

	#add an item to the list and defines its probability of being chosen
	function add( $data, $probability ){
		$this->data[ $x = sizeof( $this->data ) ] = new stdClass;
		$this->data[ $x ]->value = $data;
		$this->universe += $this->data[ $x ]->probability = abs( $probability );
	}

	#remove an item from the list
	function remove( $index ){
		if( $index > -1 && $index < sizeof( $this->data ) ) {
			$item = array_splice( $this->data, $index, 1 );
			$this->universe -= $item->probability;
		}
	}

	#clears the class
	function clear(){
		$this->universe = sizeof( $this->data = array() );
	}

	#return a randomized item from the list
	function get(){
		if( !$this->universe )
			return null;
		$x = round( mt_rand( 0, $this->universe ) );
		$max = $i = 0;
		do
			$max += $this->data[ $i++ ]->probability;
		while( $x > $max );
		return $this->data[ $i-1 ]->value;
	}
}
?>
