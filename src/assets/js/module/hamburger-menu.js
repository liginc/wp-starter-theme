import { disableNativeScroll } from "../utility/disable-native-scroll";

export const hamburgerMenu = () => {
  const body = document.querySelector("body");
  const target = document.querySelector(".js-global-hamburger-menu-btn");
  let isOpen = false;

  target.addEventListener("click", () => {
    isOpen = !isOpen;

    if (isOpen) {
      disableNativeScroll(true);
      body.classList.add("is-hamburger-menu-open");
    } else {
      disableNativeScroll(false);
      body.classList.remove("is-hamburger-menu-open");
    }
  });
};
