import { slider } from "./modules/slider";
import { anchorLink } from "./modules/anchor-link";
import { tab } from "./modules/tab";
import { modal } from "./modules/modal";
import { hamburgerMenu } from "./modules/hamburger-menu";
import { accordion } from "./modules/accordion";
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
