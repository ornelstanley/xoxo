// https://github.com/moment/moment-timezone/blob/develop/moment-timezone.js#L212
function getTimeZoneAbbr() {
    var abbr = "";

    try {
        abbr = new Intl.DateTimeFormat().resolvedOptions().timeZone;
    } catch (e) {
        abbr = ""
    }

    return abbr || "";
}