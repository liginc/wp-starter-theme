# wp-starter-theme

## 🛜 WP Environment

本テンプレートはWordPressのアップデートが常に行われていくこと、運用がLIG以外になる可能性を考慮して互換性に特化したものになっています。<br>
そのため`functions`のカスタムは最小限に留めて、必要な機能はプラグインに任せます。

WordPressは常に最新のバージョンを取得します。プロジェクト開始時に `.wp-env.json` を編集してバージョンを固定してください。

- WP ver latest
- PHP ver 8.1

## 💰 Paid Plugins

有料プラグインについては下記のリンクからダウンロードをして `/plugins`配下に設置してください。Gitで管理されます。

- [advanced-custom-fields-pro](https://bitbucket.org/lig-admin/lig-wordpress-plugins/src/master/admin-columns-pro/)
- [all-in-one-wp-migration-unlimited-extension](https://bitbucket.org/lig-admin/lig-wordpress-plugins/src/master/all-in-one-wp-migration-unlimited-extension/)

## 🐶 Usage Environment

- [Docker Desktop](https://hub.docker.com/editions/community/docker-ce-desktop-mac/)
- Node.js >= 16

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

open <http://localhost:8000/>

- wp login

open <http://localhost:8000/wp-admin>

```bash
user : admin
password : password
```

## 💻 Production Upload

```bash
npm run build
```

アップロードの際は`/dist`以下をアップロードしてください。

## 😺 Grid System

通常の案件では60分割のグリッドシステムによってデザインされています。<br>
スタイリングがしやすいように補助的な役割を担う機能が既に用意されています。

- D キー押下でグリッドラインの表示/非表示が切り替わります。
- グリッドラインが表示されるのは開発モードの時のみです。

## 😻 Styling

クラスの命名については BEM を採用しています。

- `rem` グリッド線に基づいて計算する時に使用します。
- `px` 上下の余白、主に`margin-top`や`margin-bottom`の計算の時に使用します。
- `vw` その他、テキスト、主に`font-size`の計算の時に使用します。計算しやすいように`mixin`が用意されているので、そちらを使用してください。

## 🌙 How to reference images from Css

$base-dir は設定をするとCSSでローカルと本番で異なる参照をすることができます。

```bash
background-image: url($base-dir + "assets/images/icon-blank.svg");
```

## 🍰 IMAGE

```bash
<img src="<?= vite_src_images('sample-01.jpg') ?>" decoding="async" width="1280" height="800" alt="">
```

## 😎 SVG

```bash
<?= get_svg_sprite('icon-blank') ?>
```

```bash
<img src="<?= vite_src_images('icon-blank.svg') ?>" decoding="async" width="30" height="30" alt="">
```

## ✋ Lint

```bash
npm run lint:check
```

```bash
npm run lint:fix
```

Lint はプリコミット時に必ず実行されます。以下の vscode プラグインをインストールすると vscode 保存時にも Lint が実行されます。

- [prettier](https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode)
- [markuplint](https://marketplace.visualstudio.com/items?itemName=yusukehirao.vscode-markuplint)
- [stylelint](https://marketplace.visualstudio.com/items?itemName=stylelint.vscode-stylelint)
- [eslint](https://marketplace.visualstudio.com/items?itemName=dbaeumer.vscode-eslint)

## 🚗 Bitbucket Pipelines

リポジトリの「設定」から SSH キーを登録して `bitbucket-pipelines.yml` の下記の値を登録してください。

- $SSH_USER
- $SSH_SERVER
- $SSH_REMOTE_PATH
- $SSH_LOCAL_PATH
- $SSH_PORT

## 👉 Git Flow

CI / CD が実装されている場合 main ブランチにマージすると自動デプロイの処理が実行されます。

- main: TBD
- feature: 機能の追加用。main から分岐して、main に適宜マージしてください。

## 👀 Document

- [wp-env](https://ja.wordpress.org/team/handbook/block-editor/reference-guides/packages/packages-env/)
- [vite](https://ja.vitejs.dev/)
