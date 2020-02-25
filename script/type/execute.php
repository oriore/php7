<?php
// スカラー型を厳密に扱うかどうか 必ずファイルの先頭に書く
// declare(strict_types=1); 

/**
 * 整数値を返す
 * 戻り値の型を指定できるのはphp7.0から
 * 
 * @return integer
 */
function getNumber(): int
{
    return 100;
}

/**
 * 配列を返す
 * 
 * @return array
 */
function getList(): array
{
    return ['a', 'b'];
}

/**
 * 配列 または nullを返す
 * 戻り値のNull許容はphp7.1から
 * 
 * @return integer | null
 */
function getNumberOrNull(bool $isNumber): ?int
{
    return $isNumber ? 1 : null;
}

/**
 * 文字列をキャストして整数を返す
 * declare(strict_types=1)の時はエラーになる
 * 
 * Fatal error: Uncaught TypeError...
 * 
 * @return integer
 */
function converStringToNumber(): int
{
    return '111';
}

echo 'Number : ' . getNumber() . PHP_EOL;
echo 'Array : ' . implode(',', getList()) . PHP_EOL;

echo 'Number : ' . getNumberOrNull(true) . PHP_EOL;
echo 'Null : ' . getNumberOrNull(false) . PHP_EOL;

echo 'Number(cast) : ' . converStringToNumber() . PHP_EOL;
