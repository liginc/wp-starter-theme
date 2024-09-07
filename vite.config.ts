import path from "path";
import fs from "fs";
import { defineConfig } from "vite";
import VitePluginBrowserSync from "vite-plugin-browser-sync";
import { viteStaticCopy } from "vite-plugin-static-copy";
import { liveReload } from "vite-plugin-live-reload";
import sassGlobImports from "vite-plugin-sass-glob-import";
import svgSpritePlugin from "vite-plugin-svg-sprite-component";

// srcディレクトリ内のすべてのファイルとディレクトリを取得
const srcDirectoryContents = fs.readdirSync(path.resolve(__dirname, "src"));
// assetsフォルダ以外のファイルとディレクトリを抽出
const nonAssetsContents = srcDirectoryContents.filter((item) => item !== "assets");

export default defineConfig({
  plugins: [
    liveReload("./**/*.php"),
    viteStaticCopy({
      // assetsフォルダ以外のファイルとディレクトリをコピー
      targets: nonAssetsContents.map((item) => ({
        src: `src/${item}`,
        dest: "",
      })),
    }),
    viteStaticCopy({
      targets: [
        {
          src: path.resolve(__dirname + `/src/assets/static/*`),
          dest: "assets/static",
        },
      ],
    }),
    sassGlobImports(),
    svgSpritePlugin(),
    VitePluginBrowserSync({
      bs: {
        port: 3030,
        proxy: "localhost:8000",
        ui: {
          port: 8080,
        },
      },
    }),
  ],
  root: "",
  build: {
    assetsInlineLimit: 0,
    outDir: path.resolve(__dirname, "./dist"),
    emptyOutDir: true,
    target: "es2018",
    rollupOptions: {
      input: {
        app: path.resolve(__dirname + `/src/assets/app.ts`),
        "front-page": path.resolve(__dirname + `/src/assets/front-page.ts`),
      },
      output: {
        entryFileNames: `assets/js/[name].js`,
        chunkFileNames: `assets/js/[name].js`,
        assetFileNames: ({ name }) => {
          if (/\.(gif|jpeg|jpg|png|svg|webp)$/.test(name ?? "")) {
            return "assets/images/[name].[ext]";
          }
          if (/\.css$/.test(name ?? "")) {
            return "assets/css/[name].[ext]";
          }
          if (/\.js$/.test(name ?? "")) {
            return "assets/js/[name].[ext]";
          }
          return "assets/[name].[ext]";
        },
      },
    },
  },
  // CSSでローカルと本番で異なる参照をしたい時に設定してください
  css: {
    preprocessorOptions: {
      scss: {
        additionalData: `$base-dir: ${(() => {
          switch (process.env.NODE_ENV) {
            case "local":
              return "'http://localhost:3000/src/'";
            case "development":
              return "'https://dev.example.com/wp-content/themes/theme-name/'";
            case "staging":
              return "'https://staging.example.com/wp-content/themes/theme-name/'";
            case "production":
              return "'https://www.example.com/wp-content/themes/theme-name/'";
          }
        })()};`,
      },
    },
  },
  server: {
    host: true,
    cors: true,
    strictPort: true,
    port: 3000,
    https: false,
    hmr: {
      host: "localhost",
    },
  },
});
