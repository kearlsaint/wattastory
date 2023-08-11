<?php

/*
*
*	hash (c) kearlsaint@gmail.com
*
*	hash PHP Class, property of Kearl Saint Ong
*	This class is private. Distribution is never allowed.
*
*	This class should be pretty changeable
*	Authentication is easily understood to
*	the common individual at the moment
*
*	This class still needs to be perfected
*
*	Current authentication is not enough
*
*/

class hash{

	const validity = 600;

	protected static $keysA = array(
		0 => 'xA',
		1 => 'Br',
		2 => 'wC',
		3 => 'qD',
		4 => 'Ez',
		5 => 'yF',
		6 => 'Gu',
		7 => 'sH',
		8 => 'Iv',
		9 => 'Jt'
	);

	protected static $keysB = array(
		0 => 'jQ',
		1 => 'iW',
		2 => 'hZ',
		3 => 'Sg',
		4 => 'Tf',
		5 => 'eR',
		6 => 'Vd',
		7 => 'cU',
		8 => 'bX',
		9 => 'Ya'
	);

	protected static $keysC = array(
		'xA' => '0',
		'Br' => '1',
		'wC' => '2',
		'qD' => '3',
		'Ez' => '4',
		'yF' => '5',
		'Gu' => '6',
		'sH' => '7',
		'Iv' => '8',
		'Jt' => '9'
	);

	protected static $keysD = array(
		'jQ' => '0',
		'iW' => '1',
		'hZ' => '2',
		'Sg' => '3',
		'Tf' => '4',
		'eR' => '5',
		'Vd' => '6',
		'cU' => '7',
		'bX' => '8',
		'Ya' => '9'
	);

	public static function timestamp(){
		return intval(strtotime(' '));
	}

	public static function create( $time = null ){
		$keyA = hash::$keysA;
		$keyB = hash::$keysB;
		$key1 = str_shuffle("-ABCDEFGHIJ_KLMNOP-KLMNOP_QRSTUVWXYZ-1234567890_abcdefghij-klmnop_klmnop-qrstuvwxyz_");
		$key1 = substr($key1, 7, 10);
		$key2 = str_shuffle("-ABCDEFGHIJ_KLMNOP-KLMNOP_QRSTUVWXYZ-1234567890_abcdefghij-klmnop_klmnop-qrstuvwxyz_");
		$key2 = substr($key2, 3, 6);
		$key3 = ( $time == null || $time == '' ) ? (string)hash::timestamp() : (string)$time ;
		$key4 = array('','','','','','','','','','','','','','','','');
		$key4[0] = $key1[0];
		$key4[1] = $keyA[intval($key3[0])];
		$key4[2] = $key1[1];
		$key4[3] = $keyB[intval($key3[1])];
		$key4[4] = $key1[2];
		$key4[5] = $keyA[intval($key3[2])];
		$key4[6] = $key1[3];
		$key4[7] = $keyB[intval($key3[3])];
		$key4[8] = $key1[4];
		$key4[9] = $keyA[intval($key3[4])];
		$key4[10] = $key2[0];
		$key4[11] = $keyB[intval($key3[5])];
		$key4[12] = $key2[1];
		$key4[13] = $keyA[intval($key3[6])];
		$key4[14] = $key2[2];
		$key4[15] = $keyB[intval($key3[7])];
		$key4[16] = $key2[3];
		$key4[17] = $keyA[intval($key3[8])];
		$key4[18] = $key2[4];
		$key4[19] = $keyB[intval($key3[9])];
		$key4[20] = $key2[5];
		$key4[21] = $key1[5];
		$key = implode('',$key4);
		return $key;
	}

	public static function decode( $key=null ){
		if( $key == null || $key == '' ) return false;
		$keyA = hash::$keysC;
		$keyB = hash::$keysD;
		$time = array('','','','','','','','','','');
		try{
			$time[0] = ( isset($keyA[$key[1] .$key[2]]) ) ? $keyA[$key[1] .$key[2]] : '0' ;
			$time[1] = ( isset($keyB[$key[4] .$key[5]]) ) ? $keyB[$key[4] .$key[5]] : '0' ;
			$time[2] = ( isset($keyA[$key[7] .$key[8]]) ) ? $keyA[$key[7] .$key[8]] : '0' ;
			$time[3] = ( isset($keyB[$key[10].$key[11]]) ) ? $keyB[$key[10].$key[11]] : '0' ;
			$time[4] = ( isset($keyA[$key[13].$key[14]]) ) ? $keyA[$key[13].$key[14]] : '0' ;
			$time[5] = ( isset($keyB[$key[16].$key[17]]) ) ? $keyB[$key[16].$key[17]] : '0' ;
			$time[6] = ( isset($keyA[$key[19].$key[20]]) ) ? $keyA[$key[19].$key[20]] : '0' ;
			$time[7] = ( isset($keyB[$key[22].$key[23]]) ) ? $keyB[$key[22].$key[23]] : '0' ;
			$time[8] = ( isset($keyA[$key[25].$key[26]]) ) ? $keyA[$key[25].$key[26]] : '0' ;
			$time[9] = ( isset($keyB[$key[28].$key[29]]) ) ? $keyB[$key[28].$key[29]] : '0' ;
		}catch(Exception $e){
			return 0;
		}
		$time = implode( '', $time );
		return $time;
	}

	public static function valid( $key=null , $report=false ){
		if( $key == null || $key == '' ) return false;
		$old = hash::decode( $key );
		$new = hash::timestamp();
		if((intval($old)+1800<hash::timestamp()||intval($old)>hash::timestamp()) && $report==true) return 'error';
		return ( $new - $old <= hash::validity ) ? true : false ;
	}

}

?>