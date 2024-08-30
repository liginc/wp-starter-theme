import { gsap } from "gsap";
import { DURASION, EASING } from "../variables";

export const accordion = () => {
    const btns = document.querySelectorAll(".js-accordion-btn");
    const contents = document.querySelectorAll(".js-accordion-contents");

    btns.forEach((btn, index) => {
        btn.addEventListener("click", () => {
            btn.classList.toggle("is-open");
            contents[index].classList.toggle("is-open");

            if (contents[index].classList.contains("is-open")) {
                gsap.to(contents[index], {
                    duration: DURASION.FULL,
                    ease: EASING.TRANSFORM,
                    height: "auto",
                });
            } else {
                gsap.to(contents[index], {
                    duration: DURASION.FULL,
                    ease: EASING.TRANSFORM,
                    height: 0,
                });
            }
        });
    });
};
