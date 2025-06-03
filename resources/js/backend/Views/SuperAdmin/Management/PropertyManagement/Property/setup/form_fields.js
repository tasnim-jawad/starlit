export default [
  {
    name: "property_category_id",
    label: "Select property category ",
    type: "select",
    value: "",
    data_list: [],
  },

  {
    name: "property_status",
    label: "Select property status",
    type: "select",
    label: "Select property status",
    data_list: [
      {
        label: "Rent",
        value: "rent",
      },
      {
        label: "Sale",
        value: "sale",
      },
    ],
    value: "",
  },

  // {
  // 	name: "date",
  // 	label: "Enter your date",
  // 	type: "date",
  // 	value: "",
  // },

  {
    name: "property_name",
    label: "Enter your property name",
    type: "text",
    value: "",
  },

  {
    name: "property_address",
    label: "Enter your property address",
    type: "text",
    value: "",
  },

  {
    name: "property_video_url",
    label: "Enter your property video url",
    type: "text",
    value: "",
  },

  {
    name: "map_location_url",
    label: "Enter your map location url",
    type: "text",
    value: "",
  },
  {
    name: "banner_image",
    label: "Enter your banner image",
    type: "file",
    multiple: "true",
    images_list: [],
  },
  {
    name: "gallery",
    label: "Enter your gallery",
    type: "file",
    multiple: "true",
    images_list: [],
  },
  {
    name: "property_description",
    label: "Enter your property description",
    type: "textarea",
    value: "",
  },

  {
    name: "property_detail",
    label: "Enter your property detail",
    type: "textarea",
    value: "",
  },
];
