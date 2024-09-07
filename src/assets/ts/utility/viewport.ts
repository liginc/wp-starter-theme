const viewport = document.querySelector('meta[name="viewport"]');

/**
 * @description 375px以下のビューポートを固定
 */
export const viewportFix = () => {
  const value = window.outerWidth > 375 ? "width=device-width,initial-scale=1" : "width=375";
  if (viewport?.getAttribute("content") !== value) viewport?.setAttribute("content", value);
};

/**
 * @description ビューポートのサイズを取得する
 */
export const viewportSize = () => {
    const vw = window.innerWidth * 0.01;
    const vh = window.innerHeight * 0.01;

    document.documentElement.style.setProperty("--vw", `${vw}px`);
    document.documentElement.style.setProperty("--vh", `${vh}px`);
};
