
import bootstrap from "../../node_modules/bootstrap/dist/js/bootstrap.js";
import tileSwiper from "../components/tile/tile.js";
import speakersSwiper from "../components/speakers/speakers.js";
import reviewSwiper from "../components/speakers/review.js";
import menu from "../components/header/header.js";
import tabs from "../components/UI/tabs/tabs.js";
import toggle from "../components/UI/toggle/toggle.js";
import form from "../components/UI/form/form.js";
import formInputSelect from "../components/UI/form/form-input-select/form-input-select";
import formInputDate from "../components/UI/form/form-input-date/form-input-date";
import formInputFile from "../components/UI/form/form-input-file/form-input-file";
import popup from "../components/UI/popup/popup.js";

window.addEventListener('DOMContentLoaded', function () {
    tileSwiper();
    speakersSwiper();
    reviewSwiper();
    menu();
    tabs();
    toggle();
    popup();
    form();
    formInputSelect();
    formInputDate();
    formInputFile();
});