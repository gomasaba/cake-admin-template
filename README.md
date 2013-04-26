# bootstrap base template cakephp for admin

管理画面をPlugin/Adminで構築するときのテンプレート。

Thanks

[https://github.com/todc/todc-bootstrap](https://github.com/todc/todc-bootstrap)


[https://github.com/slywalker/TwitterBootstrap](https://github.com/slywalker/TwitterBootstrap)


## 使い方

submoduleではなくてダウンロードして app/Plugin/Admin　に設置

* 静的ファイルはシンボリックリンクを貼るかコピーする

[http://book.cakephp.org/2.0/ja/plugins.html#plugin-assets](http://book.cakephp.org/2.0/ja/plugins.html#plugin-assets)


* app/Config/bootstrap.php　にプラグインを追加する
<pre>
    CakePlugin::load('TwitterBootstrap');
    CakePlugin::load('Admin', array('bootstrap' => true));
</pre>


