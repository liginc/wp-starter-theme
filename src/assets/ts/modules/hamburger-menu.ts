import { disableNativeScroll } from "../utility/disable-native-scroll";

export const hamburgerMenu = () => {
    const body = document.querySelector("body");
    const menu = document.querySelector(".js-global-hamburger-menu");
    const btn = document.querySelector(".js-global-hamburger-menu-btn");
    let isOpen = false;

    const openMenu = () => {
        disableNativeScroll(true);
        body?.classList.add("is-hamburger-menu-open");
        btn?.setAttribute("aria-expanded", "true");
        btn?.setAttribute("aria-label", "メニューを閉じる");
        menu?.classList.add("is-open");
        menu?.setAttribute("aria-hidden", "false");
    };

  const closeMenu = () => {
    disableNativeScroll(false);
    body?.classList.remove("is-hamburger-menu-open");
    btn?.setAttribute("aria-expanded", "false");
    btn?.setAttribute("aria-label", "メニューを開く");
    menu?.classList.remove("is-open");
    menu?.setAttribute("aria-hidden", "true");
  };

  btn?.addEventListener("click", () => {
    isOpen = !isOpen;

        if (isOpen) {
            openMenu();
        } else {
            closeMenu();
        }
    });
};
