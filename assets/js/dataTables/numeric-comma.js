jQuery.extend(jQuery.fn.dataTableExt.oSort, {
    "numeric-comma-pre": function (i) {
        i = $.trim($('<i>' + i + '</i>').text());
        return typeof i === 'string' ? (i.replace(/[\ R$.%]/g, '')).replace(/[\,]/g, '.') * 1 : typeof i === 'number' ? i : 0;
    },
    "numeric-comma-asc": function (a, b) {
        return ((a < b) ? -1 : ((a > b) ? 1 : 0));
    },
    "numeric-comma-desc": function (a, b) {
        return ((a < b) ? 1 : ((a > b) ? -1 : 0));
    }
});