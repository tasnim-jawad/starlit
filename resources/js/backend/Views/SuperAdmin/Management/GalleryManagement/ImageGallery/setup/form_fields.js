export default [
  {
    name: "title",
    label: "Enter your title",
    type: "text",
    value: "",
  },

  {
    name: "image",
    label: "Enter your image",
    type: "file",
    value: "",
  },

  {
    name: "type",
    label: "Enter your type",
    type: "select",
    label: "Select type",
    multiple: false,
    data_list: [
      {
        label: "Image",
        value: "image",
      },
      {
        label: "Video",
        value: "video",
      },
    ],
    value: "",
  },
];
