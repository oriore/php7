## dockerの起動
```
docker-compose up [-d]
```

## dockerのなかに入る
dokcerのなかに入ってphpを実行していきます
```
docker-compose exec php bash
```


## phpのバージョン確認
```
root@6f3c81bc2a83:/var/www/script# php -v 

PHP 7.4.2 (cli) (built: Feb  1 2020 19:33:30) ( NTS )
Copyright (c) The PHP Group
```

## ディレクトリについて
script配下に動作確認用のphpファイルを作っている

### argument下
引数の型指定関係の動作の確認用

実行(docker内)
```
php argument/execute.php 
```

確認したこと
- スカラー型の引数の型指定
    - php7.0から
- スカラー以外(array, callableなど)
    - php5系から
- 引数のnull許容の指定(引数だけじゃないけど)
    - php7.0から (?string)みたいな書き方は7.1から

### type下
戻り値の型指定関係の動作の確認用

実行(docker内)
```
php type/execute.php 
```

確認したこと
- 戻り値の型指定
    - php7.0から
- 戻り値の型指定(Nullの許容)
    - php7.1から
- 関数の引数の型指定
    - スカラー型
        - php7.0から
    - スカラー型以外
        - php5系から
- クラスのプロパティの型指定
    - php7.4から


### property下
プロパティの型指定の動作の確認用
実行(docker内)
```
php property/execute.php 
```

確認したこと
- プロパティの型指定
    - php7.4から

