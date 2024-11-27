/**
 * Convert images to webp and avif
 * 
 * sharpを使用して画像をwebpとavifに変換します。
 * https://sharp.pixelplumbing.com/
 * 
 * このスクリプトは、指定されたディレクトリ内の画像ファイルを対象に、
 * JPEG と PNG 画像を WebP と AVIF 形式に変換して出力ディレクトリに保存します。
 * また、変換後もオリジナルの画像を保存し、その他の形式のファイルもそのままコピーします。
 */

import sharp from "sharp";
import { globSync } from "glob";
import path from "path";
import fse from "fs-extra";

const sharpOption = {
  effort: 0,
  quality: 60,
};

const srcDir = "src/assets/images";
const distDir = "dist/assets/images";

(async () => {
  await fse.emptyDirSync(distDir);
  const images = globSync(`${srcDir}/*`);

  for (const image of images) {
    const parse = path.parse(image);
    const name = parse.name;
    const extension = parse.ext;

    if (extension === ".jpg" || extension === ".jpeg" || extension === ".png") {
      const webpFile = `${distDir}/${name}.webp`;
      const avifFile = `${distDir}/${name}.avif`;

      await sharp(image).webp(sharpOption).toFile(webpFile);
      await sharp(image).avif(sharpOption).toFile(avifFile);
      await fse.copySync(image, `${distDir}/${parse.base}`);
    } else {
      await fse.copySync(image, `${distDir}/${parse.base}`);
    }
  }
})();
