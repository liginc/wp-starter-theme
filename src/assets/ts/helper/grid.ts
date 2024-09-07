// 60-column grid debugger
export const gridHelper = () => {
    const grid = document.querySelector(".js-helper-grid");
    const lines = document.querySelectorAll(".js-helper-grid-line");
    let isPress = true;

    const renderLinePosition = () => {
        lines.forEach((line, index) => {
            if (document.documentElement.clientWidth > 767) {
                line.style.left = `calc(${index + 1} * 100vw / 60)`;
            } else {
                line.style.left = `calc(${index + 1} * 100vw / 25)`;
            }
        });
    };
    renderLinePosition();

  document.addEventListener("keypress", (e) => {
    if (e.code == "KeyD" && isPress == false) {
      grid?.classList.remove("is-hidden");
      isPress = true;
    } else {
      grid?.classList.add("is-hidden");
      isPress = false;
    }
  });
};
