const fs = require("fs");
const path = require("path");
const imagemin = require("imagemin");
const imageminWebp = require("imagemin-webp");

const srcRoot = "./assets";
const distRoot = "./dist/assets";

imagemin(
  [
    `${srcRoot}/**/*.png`,
    `${srcRoot}/**/*.jpg`,
    `${srcRoot}/**/*.jpeg`,
    `${srcRoot}/**/*.gif`,
  ],
  {
    plugins: [imageminWebp()],
  }
).then((files) => {
  files.forEach((file) => {
    // 入力パスから出力パスを計算
    const distPath = file.sourcePath.replace(srcRoot, distRoot);
    // 出力先ディレクトリを作成
    fs.mkdirSync(path.dirname(distPath), { recursive: true });
    // ファイル書き出し
    fs.writeFileSync(
      // 出力パスの拡張子を .webp に変更
      distPath.replace(path.extname(distPath), ".webp"),
      file.data
    );
  });
});
