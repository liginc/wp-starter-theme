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
