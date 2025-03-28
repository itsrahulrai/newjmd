$(function () {
    "use strict";
    var i = Quill.import("ui/icons");
    (i.bold = '<i class="fa fa-bold" aria-hidden="true"></i>'),
        (i.italic = '<i class="fa fa-italic" aria-hidden="true"></i>'),
        (i.underline = '<i class="fa fa-underline" aria-hidden="true"></i>'),
        (i.strike = '<i class="fa fa-strikethrough" aria-hidden="true"></i>'),
        (i.list.ordered = '<i class="fa fa-list-ol" aria-hidden="true"></i>'),
        (i.list.bullet = '<i class="fa fa-list-ul" aria-hidden="true"></i>'),
        (i.link = '<i class="fa fa-link" aria-hidden="true"></i>'),
        (i.image = '<i class="fa fa-image" aria-hidden="true"></i>'),
        (i.video = '<i class="fa fa-film" aria-hidden="true"></i>'),
        (i["code-block"] = '<i class="fa fa-code" aria-hidden="true"></i>');
    var l = [
        [{ header: [1, 2, 3, 4, 5, 6, !1] }],
        ["bold", "italic", "underline", "strike"],
        [{ list: "ordered" }, { list: "bullet" }],
        ["link", "image", "video"],
    ];
    new Quill("#quillEditor", { modules: { toolbar: l }, theme: "snow" }),
        new Quill("#quillEditorModal", {
            modules: { toolbar: l },
            theme: "snow",
        }),
        new Quill("#quillEditorModal2", {
            modules: { toolbar: l },
            theme: "snow",
        }),
        new Quill("#quillInline", {
            modules: {
                toolbar: [
                    ["bold", "italic", "underline"],
                    [{ header: 1 }, { header: 2 }, "blockquote"],
                    ["link", "image", "code-block"],
                ],
            },
            bounds: "#quillInline",
            scrollingContainer: "#scrolling-container",
            placeholder: "Write something...",
            theme: "bubble",
        }),
        new PerfectScrollbar("#scrolling-container", { suppressScrollX: !0 });
});
