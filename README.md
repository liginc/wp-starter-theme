# wp-starter-theme

## 🛜 WP Environment

WP always gets the latest version. Edit `.wp-env.json` to fix the version at the start of the project.

- WP ver latest
- PHP ver 8.1

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

upload all files under dist

## 😺 Grid System

It is designed by a 60-division grid system.<br>
Auxiliary functions are already in place to facilitate styling.

- Pressing the D key toggles between showing and hiding the gridlines.
- Gridlines are only displayed in development mode.

## 😻 Styling

- BEM is basically adopted for class naming.
- `rem` Used for calculations based on grid lines.
- `px` Used when calculating top and bottom margins, mainly `margin-top` and `margin-bottom`.
- `vw` Other text, mainly used when calculating `font-size`. A `mixin` is provided for easier calculation.

## 🌙 How to reference images from Css

$base-dir is paths change between local and production environments.

```bash
background-image: url($base-dir + "assets/images/icon-blank.svg");
```

## 🍰 IMAGE

use images

```bash
<img src="<?= vite_src_images('sample-01.jpg') ?>" decoding="async" width="1280" height="800" alt="">
```

## 😎 SVG

use svg-sprite

```bash
<?= get_svg_sprite('icon-blank') ?>
```

use image svg

```bash
<img src="<?= vite_src_images('icon-blank.svg') ?>" decoding="async" width="30" height="30" alt="">
```

## ✋ Lint

lint check

```bash
npm run lint:check
```

lint fix

```bash
npm run lint:fix
```

lint check timing vscode save & pre-commit vscode save lint check must plugins

- [prettier](https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode)
- [markuplint](https://marketplace.visualstudio.com/items?itemName=yusukehirao.vscode-markuplint)
- [stylelint](https://marketplace.visualstudio.com/items?itemName=stylelint.vscode-stylelint)
- [eslint](https://marketplace.visualstudio.com/items?itemName=dbaeumer.vscode-eslint)

## 🚗 CI/CD Bitbucket Pipelines

Repository settings ssh key registration `bitbucket-pipelines.yml` Register a value

- $SSH_USER
- $SSH_SERVER
- $SSH_REMOTE_PATH
- $SSH_LOCAL_PATH
- $SSH_PORT

## 👉 Git Flow

Implement CI/CD so that merging into the main branch will trigger the auto-deploy process.

- main: test site
- feature: For adding functions; branch off from main and merge into main as appropriate.

## 👀 Document

- [wp-env](https://ja.wordpress.org/team/handbook/block-editor/reference-guides/packages/packages-env/)
- [vite](https://ja.vitejs.dev/)
