export type Bank = {
  id: number;
  openstreetmap_url: string;
  latitude: number;
  longitude: number;
  name: string;
  properties: BankProperties;
};

export type BankProperties = {
  amenity: string;
  "addr:city": string;
  "addr:city:en": string;
  "addr:country": string;
  "addr:housenumber": string;
  "addr:postcode": string;
  "addr:street": string;
  atm: string;
  building: string;
  "building:levels": string;
  int_name: string;
  "name:en": string;
  office: string;
  opening_hours: string;
  operator: string;
  surveillance: string;
  "surveillance:type": string;
  "contact:website": string;
  email: string;
  phone: string;
};
