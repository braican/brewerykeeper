import { round } from './index';

export const getDistanceBetween = (lat1, lon1, lat2, lon2) => {
  const R = 3958.8; // Radius of the earth in miles
  const dLat = deg2rad(lat2 - lat1);  // deg2rad below
  const dLon = deg2rad(lon2 - lon1);
  const a =
    Math.sin(dLat / 2) * Math.sin(dLat / 2) +
    Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) *
    Math.sin(dLon / 2) * Math.sin(dLon / 2)
    ;
  const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
  const CONSTANT = 1.1; // a constant to account for road travel
  const d = R * c * CONSTANT; // Distance in miles
  return round(d);
};

function deg2rad(deg) {
  return deg * (Math.PI / 180);
}