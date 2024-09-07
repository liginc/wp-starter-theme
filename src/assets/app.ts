// entry point
// include your assets here

// get styles
import "./scss/app.scss";

// get scripts
import "./ts/app";

// get svg
import.meta.globEager("./svg-sprite/*.svg");

// get images
import.meta.glob(["./images/**"]);
