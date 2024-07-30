# wp-starter-theme

## 🛜 WP Environment

本テンプレートはWordPressのアップデートが常に行われていくこと、運用が第三者になる可能性を考慮して互換性に特化したものになっています。<br>
そのため`functions`のカスタムは最小限に留めて、必要な機能はプラグインに任せる方針になっています。

WordPressは常に最新のバージョンを取得します。プロジェクト開始時に `.wp-env.json` を編集してバージョンを固定してください。

- WP ver latest
- PHP ver 8.1

## 💰 Paid Plugins

下記の有料のプラグインを使用したい場合は運用者に連絡をしてください。リンクがダウンロードできるようになるので `/plugins`配下に設置してください。

- [advanced-custom-fields-pro](https://bitbucket.org/lig-admin/lig-wordpress-plugins/src/master/admin-columns-pro/)
- [all-in-one-wp-migration-unlimited-extension](https://bitbucket.org/lig-admin/lig-wordpress-plugins/src/master/all-in-one-wp-migration-unlimited-extension/)

## 🐶 Usage Environment

- [Docker Desktop](https://hub.docker.com/editions/community/docker-ce-desktop-mac/)
- Node.js >= 18

## 😌 Local Environment Setup

1. package install

```bash
npm ci or npm install
```

2. wp start up & db import

```bash
npm run wp:setup
```

3. frontend build start

```bash
npm run dev
```

open <http://localhost:3030/>

- wp login

open <http://localhost:3030/wp-admin>

```bash
user : admin
password : password
```

## 💻 Production Upload

```bash
npm run build
```

アップロードの際は`/dist`以下をアップロードしてください。

## 🏠 Browser Sync

ネットワーク経由でのアクセスをする場合は`.wp-env.json`の`VITE_SERVER`の値を自身のローカルIPに変更してください。<br>
こちらは暫定対応で`.wp-env.json`はGit管理されているのでこちらの値を上書きしてコミットしないように注意してください。

```bash
"VITE_SERVER": "http://0.0.0.0:3000"
```

## 😺 Grid System

案件によっては60分割のグリッドシステムによってデザインされています。<br>
スタイリングがしやすいように補助的な役割を担う機能が既に用意されています。

- D キー押下でグリッドラインの表示/非表示が切り替わります。
- グリッドラインが表示されるのは開発モードの時のみです。

## 😻 Styling

クラスの命名については基本的に BEM を採用しています。

- ネスト機能の多用は可読性と検索性が落ちるので控えるようにしてください。

```scss
// NG
.hoge {
  &__title {
    color: black;
  }
}

// OK
.hoge__title {
  color: black;
}
```

固定値か相対値でコーディングするかはプロジェクトやデザインによって変わってくるので、最初に協議するようにしてください。

- 相対値を使用する場合は`vw`関数を使用するようにしてください。

```scss
.hoge {
  font-size: vw(16);
}
```

- グリッドの値を参照したい場合は`rem`関数を使用するようにしてください。

```scss
.hoge {
  width: rem(1); // 1グリッド
}
```

## 🌙 How to reference images from Css

$base-dir は設定をするとCSSでローカルと本番で異なる参照をすることができます。

```scss
background-image: url($base-dir + "assets/images/icon-blank.svg");
```

## 😎 Svg Sprite

```php
<?= get_svg_sprite('logo', 'LIG') ?>
```

## 👟 Image

画像最適化用に`picture.php`を用意しています。こちらを使用すると`.avif`または`.webp`で画像が配信されます。

```php
<?php get_template_part("./parts/picture", null, [
  "images" => [
      "src" => "sample-01.jpg",
      "width" => "1280",
      "height" => "600",
      "alt" => "",
  ],
]); ?>
```

## 🍰 Assets

ローカル環境ではVITEの開発サーバー、本番環境ではテーマのルートを参照する必要があるため基本的に`vite-config.php`の関数を使用してAssetsにアクセスしてください。

```php
<img src="<?= vite_src_images('sample-01.jpg') ?>" decoding="async" width="1280" height="800" alt="">
```

```php
<img src="<?= vite_src_images('icon-blank.svg') ?>" decoding="async" width="30" height="30" alt="">
```

## ✋ Lint

```bash
npm run lint:check
```

```bash
npm run lint:fix
```

Lint はプリコミット時に必ず実行されます。以下の vscode プラグインをインストールすると vscode 保存時にも Lint を実行することができるので便利です。

- [prettier](https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode)
- [markuplint](https://marketplace.visualstudio.com/items?itemName=yusukehirao.vscode-markuplint)
- [stylelint](https://marketplace.visualstudio.com/items?itemName=stylelint.vscode-stylelint)
- [eslint](https://marketplace.visualstudio.com/items?itemName=dbaeumer.vscode-eslint)

## 👉 Git Flow

開発段階では基本的にfeatureブランチを作成して、mainにマージしてください。CICDが実装されている場合 main ブランチにマージすると自動デプロイの処理が実行されるので誤って本番サーバーにアップしないように注意してください。

## 👀 Document

- [wp-env](https://ja.wordpress.org/team/handbook/block-editor/reference-guides/packages/packages-env/)
- [vite](https://ja.vitejs.dev/)
