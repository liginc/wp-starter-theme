// entry point
// include your assets here

// get styles
import "./css/app.scss";

// get scripts
import "./js/app.js";

// get svg
import.meta.globEager("./svg-sprite/*.svg");

// get images
import.meta.glob(["./images/**"]);
