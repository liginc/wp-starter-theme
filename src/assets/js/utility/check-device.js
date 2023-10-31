import { BREAKPOINT } from "../constants";

const ua = navigator.userAgent.toLowerCase();

let tab = false;
let ipad = false;
let sp = false;

sp = (ua.indexOf("iphone") !== -1 || (ua.indexOf("android") !== -1 && ua.indexOf("mobile") !== -1)) && window.innerWidth < BREAKPOINT;
ipad = ua.indexOf("ipad") !== -1 || (ua.indexOf("macintosh") !== -1 && "ontouchend" in document);
tab = !sp && (ipad || ua.indexOf("android") !== -1);

export const isSp = sp;
export const isTab = tab;
