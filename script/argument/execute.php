<?php
/**
 * 引数の配列の内容を出力
 * array, callable, クラス名はphp5から引数に指定できる
 * 
 * @param array $values
 * @return void
 */
function outputArray(array $values): void
{
    echo __FUNCTION__ . ' : ' . implode(',', $values) . PHP_EOL;
}

/**
 * 引数の文字列の出力
 * スカラー型(integer, string, bool, float)が引数に指定できるようになったのはphp7から
 * 
 * @param string $value
 * @return void
 */
function outputString(string $value): void
{
    echo __FUNCTION__ . ' : ' . $value . PHP_EOL;
}

/**
 * nullの許容
 * php7.1から?を先頭つけるとnull許容をできるようになった。
 * php7.0でnull許容をする場合は
 *   (string $value = null)
 * と初期値にnullを指定する必要がある
 * 
 * @param string $value
 * @return void
 */
function outputNullOrString(?string $value): void
{
    echo __FUNCTION__ . ' : ' . ($value ? $value : 'null') . PHP_EOL;
}

outputArray(['a', 'b', 'c', 'd', 'e']);
outputString('abcde');
outputNullOrString(null);

echo 'aa';