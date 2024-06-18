# wp-qa

ワードプレス+CPT で QA のテンプレート。内容は WP の管理画面で管理する。

## 利用方法

### 1. style 登録

- qa.scss を/src のフォルダーに追加
- functions.php で qa の CSS ファイル+対応のページを登録する
  - $stylesheets の追加とページの if
  - ページ一枚あたり複数のスタイルは以下の形：

```
    if(is_page("対応ページ名")) {
        wp_enqueue_style('対応スタイル１');
        wp_enqueue_style('対応スタイル２');
    }
```

### 1.1 画像

- /img にある SVG をコピーしてください
- path が変わったら qa.scss で background-image の url を一緒に変更してください。

### 2. script の登録

-　 qa.js を/js のフォルダーに追加

- functions.php の function load_js() {...} に qa.js を登録。以下の行を追加してください：

```
wp_register_script('qa', get_template_directory_uri() . '/js/qa.js', array(), false, true );

if(is_page("対応ページ名"))
    wp_enqueue_script('qa');
```

### 3. component-qa.php

- component-qa.php を/includes のフォルダーに追加
- 使いところは以下のコードを入力

```
<?php get_template_part('includes/component','qa') ;?>
```

### 4. CPT の設定

- CPT で qa と言うカスタムポストタイプを追加してください -　違う CPT 名希望場合は「component-qa.php 」→ 「post_type」の名前を一緒に調整する必要です。
