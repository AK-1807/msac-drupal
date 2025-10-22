/**
 * Returns the endpoint based on the current environment
 */
export function geojsonBaseForEnvironment() {
  if (window.location.hostname === "localhost") {
    return "../../geojson";
  } else {
    return `${window.location.origin}/themes/custom/msac/idfive-component-library/src/geojson`;
  }
}
