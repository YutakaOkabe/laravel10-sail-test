参考：[Laravel10時代のプロジェクトの始め方](https://zenn.dev/imah/articles/5d761f8f8c26fe)

1. `curl -s "https://laravel.build/my-project?php=82&with=pgsql" | bash`
2. プロジェクト名変更
3. .envの内容調整
4. `sail up -d`
5. `sail composer require laravel/breeze --dev`
6. `sail npm run dev`

[これ](https://github.com/YutakaOkabe/laravel10-test/pull/1)と同じセグフォが起こるのでDocker Desktopの4.18.0が必要
