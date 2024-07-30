import { slider } from "./module/slider";
import { anchorLink } from "./module/anchor-link";
import { tab } from "./module/tab";
import { modal } from "./module/modal";
import { hamburgerMenu } from "./module/hamburger-menu";
import { accordion } from "./module/accordion";
import { viewportFix, viewportSize } from "./utility/viewport";
import { gridHelper } from "./helper/grid";
import { IS_TYPE_LOCAL } from "./variables";

/**
 * viewportに関する処理
 */
window.addEventListener("load", () => {
  viewportSize();
  viewportFix();
});

window.addEventListener("resize", () => {
  viewportSize();
  viewportFix();
});

/**
 * modules
 */
hamburgerMenu();
slider();
anchorLink();
tab();
modal();
accordion();
if (IS_TYPE_LOCAL) gridHelper();
