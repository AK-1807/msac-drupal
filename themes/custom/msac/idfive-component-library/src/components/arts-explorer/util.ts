export function transformAPIDataToPolygonData(apiData) {
  const features = apiData?.features?.[0];
  if (!!features) {
    return {
      id: features.attributes?.OBJECTID,
      polygons: features.geometry?.rings?.map((points) => {
        return points.map((point) => ({
          lat: point[1],
          lng: point[0],
        }));
      }),
    };
  }
}
