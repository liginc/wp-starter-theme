/**
 * デフォルトのイベントを禁止させる
 * @param {object} e イベントオブジェクト
 */
const preventEvent = (e) => {
    e.preventDefault();
};

/**
 * @description スクロール禁止
 */
const scrollEventNone = () => {
    document.addEventListener("wheel", preventEvent, { passive: false });
    document.addEventListener("scroll", preventEvent, { passive: false });
    document.addEventListener("touchmove", preventEvent, { passive: false });
    document.addEventListener("keydown", preventEvent, { passive: false });
};

/**
 * @description スクロール解除
 */
const scrollEventAuto = () => {
    document.removeEventListener("wheel", preventEvent, { passive: false });
    document.removeEventListener("scroll", preventEvent, { passive: false });
    document.removeEventListener("touchmove", preventEvent, { passive: false });
    document.removeEventListener("keydown", preventEvent, { passive: false });
};

/**
 * 背景固定切り替え機能
 * @description 背景固定を切り替えられるが、コンテンツの中身をスクロールさせたい場合は追加で実装するかfixedで固定させる必要があります。
 * @param {boolean} state スクロールを禁止するか解除するかを切り替える真偽値。true=>固定 / false=>解除。
 */
export const disableNativeScroll = (state: boolean) => {
  state ? scrollEventNone() : scrollEventAuto();
};
