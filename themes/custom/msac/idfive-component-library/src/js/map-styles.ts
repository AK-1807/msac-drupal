const styles = [
  {
    elementType: "geometry",
    stylers: [{ color: "#F5F5F5" }],
  },
  {
    featureType: "administrative",
    elementType: "geometry.stroke",
    stylers: [{ color: "#000000" }, { weight: 3 }],
  },
  {
    featureType: "poi",
    elementType: "labels.text.fill",
    stylers: [{ color: "#444444" }],
  },
  {
    featureType: "poi",
    elementType: "labels.icon",
    stylers: [{ hue: "#B9B9B9" }, { saturation: -100 }, { lightness: 50 }],
  },
  {
    featureType: "poi.park",
    elementType: "geometry.fill",
    stylers: [{ color: "#FFFFFF" }],
  },
  {
    featureType: "road",
    elementType: "geometry.fill",
    stylers: [{ color: "#E5E5E5" }],
  },
  {
    featureType: "road",
    elementType: "labels.icon",
    stylers: [{ hue: "#B9B9B9" }, { saturation: -100 }, { lightness: 50 }],
  },
  {
    featureType: "transit",
    elementType: "labels.icon",
    stylers: [{ hue: "#B9B9B9" }, { saturation: -100 }, { lightness: 50 }],
  },
  {
    featureType: "transit",
    elementType: "labels.text.fill",
    stylers: [{ color: "#444444" }],
  },
  {
    featureType: "transit",
    elementType: "labels.text.stroke",
    stylers: [{ color: "#FFFFFF" }],
  },
  {
    featureType: "water",
    elementType: "geometry.fill",
    stylers: [{ color: "#1A1A1A" }],
  },
  {
    featureType: "water",
    elementType: "labels.text.fill",
    stylers: [{ color: "#F5F5F5" }],
  },
  {
    featureType: "water",
    elementType: "labels.text.stroke",
    stylers: [{ color: "#FFFFFF" }],
  },
];

export default styles;
