"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.getISO = exports.getHumanDateTime = exports.getSecondsAgo = exports.getTimeSinceString = exports.getUnixTimestampInMilliseconds = exports.getUnixTimestampInSeconds = void 0;
function getUnixTimestampInSeconds(dateTimeString) {
    if (!dateTimeString) {
        dateTimeString = new Date().getTime();
    }
    return Math.round(getUnixTimestampInMilliseconds(dateTimeString) / 1000);
}
exports.getUnixTimestampInSeconds = getUnixTimestampInSeconds;
function getUnixTimestampInMilliseconds(dateTimeString) {
    if (!dateTimeString) {
        return new Date().getTime();
    }
    return new Date(dateTimeString).getTime();
}
exports.getUnixTimestampInMilliseconds = getUnixTimestampInMilliseconds;
function getTimeSinceString(unixTimestamp) {
    if (!unixTimestamp) {
        return "never";
    }
    // @ts-ignore
    var secondsAgo = getSecondsAgo(unixTimestamp);
    if (secondsAgo > 2 * 24 * 60 * 60) {
        return Math.round(secondsAgo / (24 * 60 * 60)) + " days ago";
    }
    if (secondsAgo > 2 * 60 * 60) {
        return Math.round(secondsAgo / (60 * 60)) + " hours ago";
    }
    if (secondsAgo > 2 * 60) {
        return Math.round(secondsAgo / (60)) + " minutes ago";
    }
    return secondsAgo + " seconds ago";
}
exports.getTimeSinceString = getTimeSinceString;
function getSecondsAgo(unixTimestamp) {
    return Math.round((getUnixTimestampInSeconds() - unixTimestamp));
}
exports.getSecondsAgo = getSecondsAgo;
function getHumanDateTime(timeAt) {
    return getISO(timeAt);
}
exports.getHumanDateTime = getHumanDateTime;
function getISO(timeAt) {
    var at = new Date();
    if (timeAt) {
        at = new Date(timeAt);
    }
    return at.toISOString();
}
exports.getISO = getISO;
//# sourceMappingURL=qm.time-helper.js.map