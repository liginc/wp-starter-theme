export const tab = () => {
    const btns = document.querySelectorAll(".js-tab-btn");

  btns.forEach((btn) => {
    btn.addEventListener("click", (e) => {
      const targetBtn = e.currentTarget;
      const tabId = targetBtn?.dataset.tab;
      const targetContent = document.querySelector(`#${tabId}`);
      const tabContents = document.querySelectorAll(".js-tab-contents");

            // reset
            btns.forEach((btn) => {
                btn.classList.remove("is-active");
            });
            tabContents.forEach((tabContent) => {
                tabContent.classList.remove("is-active");
            });

      // add
      targetContent?.classList.add("is-active");
      targetBtn?.classList.add("is-active");
    });
};
