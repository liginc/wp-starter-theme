import { gsap } from "gsap";
import { EASING, DURASION } from "../variables";

export const anchorLink = () => {
    const targets = document.querySelectorAll(".js-anchor-link");

    targets.forEach((target) => {
        target.addEventListener("click", (e) => {
            e.preventDefault();

      const scroll = { value: window.pageYOffset };
      const targetId = e.currentTarget?.hash;
      const targetElm = document.querySelector(targetId);

            if (!targetElm) throw new Error("IDに紐ずくDOMが取得できていません");

            const rectTop = targetElm.getBoundingClientRect().top;
            const top = Math.floor(rectTop + window.pageYOffset);

            gsap.to(scroll, {
                duration: DURASION.SCROLL,
                ease: EASING.TRANSFORM,
                value: top,

                onUpdate: () => {
                    window.scrollTo({
                        top: scroll.value,
                    });
                },
            });
        });
    });
};
