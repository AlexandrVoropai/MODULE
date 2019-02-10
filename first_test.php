<?php

    require_once("utils.php");

    /**
     * Function receives an array with integer numbers,
     * should return its sum. It is not alowed to use built-in php functions.
     *
     * Функция получает на вход массив чисел, должна вернуть сумму этих чисел.
     * Не использовать встроенные функции суммирования php.
     *
     * @param array $arr
     * @return integer
     */
	 //$arr = [1, 4, 56, 38];
function my_sum($arr) {
$sum = 0;
foreach ($arr as $key => $value)
{
$sum += $value;
}
return $sum;
}
//echo my_sum($arr);

	 
        //...wite your code here
    


    /**
     * Function receives a long string with many words.
     * It should return the same string, but words,
     * larger then 6 symbols, should be changed, symbols
     * after the sixth one should be replaced by symbol *
     *
     * Функция получает на вход длинную строку с множеством слов.
     * Она должна вернуть ту же строку, но в словах, которые длиннее 6 символов,
     * функция должна вместо всех символов после шестого поставить одну звездочку.
     * Пример: Из слова 'verwijdering' должно получиться 'verwij*'
     *
     * @param string $shortMe
     * @return string
     */
	 
	

function shortener($shortMe) {
        $words = explode(' ', $shortMe);
        foreach ($words as $key => $word) {
             if (strlen($word) > 6) {
                 $word = substr($word, 0, 6) . '*';
                 $arr[$key] = $word;
             }
            $arr[$key] = $word;
         } 
         $shorted = implode(' ', $arr);
         return $shorted;
    }
    //print_r(shortener('verwijdering'));
     
        //...wite your code here
    

    /**
     * Function receives an array of strings.
     * Please return number of strings, which
     * length is at least 2 symbols and first character
     * is equal to the last character
     *
     * Функция получает на вход массив строк. Вернуть надо количество строк,
     * которые не короче двух символов и у которых первый и последний
     * символ совпадают.
     *
     * @param array $arr
     * @return number
     */
   
    function compare_ends($arr) {
		$counter = 0;
		foreach ($arr as $str){
			
			if ((strlen($str) >=2) && ($str[0] == $str[strlen($str)-1])){
				$counter++;			
			}
		}
		return $counter;
	}
    //print_r(compare_ends(['1', '23', 'asa', 'azxcva', 'agvbjhbjknhi  ja']));



    /**
     * Function receives a string, should return this string reversed.
     *
     * Функция получает на вход строку, должна вернуть ее перевернутой.
     *
     * @param string $str
     * @return string
     */
    function reverse_string($str)
	{
		$arr = str_split($str);
		$arrReverse = array_reverse($arr);
		$reverseString = implode($arrReverse);
		return $reverseString;		
    }
   // print_r(reverse_string('asdfghjkl'));

//test_shortener();

//test_compare_ends();

//test_my_sum();

//test_reverse_string();











