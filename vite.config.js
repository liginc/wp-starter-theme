import path from "path";
import { defineConfig } from "vite";
import { viteStaticCopy } from "vite-plugin-static-copy";
import { liveReload } from "vite-plugin-live-reload";
import sassGlobImports from "vite-plugin-sass-glob-import";
import svgSpritePlugin from "vite-plugin-svg-sprite-component";

export default defineConfig({
  plugins: [
    liveReload("./**/*.php"),
    viteStaticCopy({
      targets: [
        {
          src: path.resolve(__dirname + `/assets/static/*`),
          dest: "assets/static",
        },
        {
          src: [path.resolve(__dirname + `/src/` + `[!assets/*]*`)],
          dest: "",
        },
      ],
    }),
    sassGlobImports(),
    svgSpritePlugin(),
  ],
  root: "",
  build: {
    assetsInlineLimit: 0,
    outDir: path.resolve(__dirname, "./dist"),
    emptyOutDir: true,
    target: "es2018",
    rollupOptions: {
      input: {
        app: path.resolve(__dirname + `/src/assets/app.js`),
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
  css: {
    preprocessorOptions: {
      scss: {
        additionalData: `$base-dir: ${
          process.env.NODE_ENV === "development"
            ? "'http://localhost:3000/'"
            : "'/'"
        };`,
      },
    },
  },
  server: {
    cors: true,
    strictPort: true,
    port: 3000,
    https: false,
    hmr: {
      host: "localhost",
    },
  },
});
