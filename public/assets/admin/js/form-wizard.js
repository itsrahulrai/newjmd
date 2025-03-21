!(function (a) {
    "use strict";
    a("#wizard1").steps({
        headerTag: "h3",
        bodyTag: "section",
        autoFocus: !0,
        titleTemplate:
            '<span class="number">#index#</span> <span class="title">#title#</span>',
    }),
        a("#wizard2").steps({
            headerTag: "h3",
            bodyTag: "section",
            autoFocus: !0,
            titleTemplate:
                '<span class="number">#index#</span> <span class="title">#title#</span>',
            onStepChanging: function (t, e, s) {
                if (!(e < s)) return !0;
                if (0 === e) {
                    var i = a("#firstname").parsley(),
                        n = a("#lastname").parsley();
                    if (i.isValid() && n.isValid()) return !0;
                    i.validate(), n.validate();
                }
                if (1 === e) {
                    var r = a("#email").parsley();
                    if (r.isValid()) return !0;
                    r.validate();
                }
            },
        }),
        a("#wizard3").steps({
            headerTag: "h3",
            bodyTag: "section",
            autoFocus: !0,
            titleTemplate:
                '<span class="number">#index#</span> <span class="title">#title#</span>',
            stepsOrientation: 1,
        });
    var t = {
        mode: "wizard",
        autoButtonsNextClass: "btn btn-primary float-end",
        autoButtonsPrevClass: "btn btn-light",
        stepNumberClass: "badge rounded-pill bg-primary me-1",
        onSubmit: function () {
            return alert("Form submitted!"), !0;
        },
    };
    a("#form").accWizard(t);
})(jQuery);
