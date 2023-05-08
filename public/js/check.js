"use strict";

export function check(text) {
  var value = text.toLowerCase()
  if (
    value.includes("sex") ||
    value.includes("sexy") ||
    value.includes("fucking") ||
    value.includes("fuck") ||
    value.includes("pussy") ||
    value.includes("bobs") ||
    value.includes("sucking") ||
    value.includes("hot girl") ||
    value.includes("nonsense")
  ) {
    return false;
  } else {
    return true;
  }
}
