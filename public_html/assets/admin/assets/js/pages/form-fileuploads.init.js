!(function (t) {
    "use strict";
    function e() {
        this.$body = t("body");
    }
    (e.prototype.init = function () {
        (Dropzone.autoDiscover = !1),
            t('[data-plugin="dropzone"]').each(function () {
                var e = t(this).attr("action"),
                    o = t(this).data("previewsContainer"),
                    i = { url: e };
                o && (i.previewsContainer = o);
                var r = t(this).data("uploadPreviewTemplate");
                r && (i.previewTemplate = t(r).html());
                t(this).dropzone(i);
            });
    }),
        (t.FileUpload = new e()),
        (t.FileUpload.Constructor = e);
})(window.jQuery),
    (function () {
        "use strict";
        window.jQuery.FileUpload.init();
    })(),
    0 < $('[data-plugins="dropify"]').length &&
        $('[data-plugins="dropify"]').dropify({
            messages: { default: "Faites glisser et déposez un fichier ici ou cliquez sur", replace: "Glisser-déposer ou cliquer pour remplacer", remove: "Retirer", error: "Oups, quelque chose ne va pas." },
            error: { fileSize: "La taille du fichier est trop grande (1 Mo maximum)." },
        });
