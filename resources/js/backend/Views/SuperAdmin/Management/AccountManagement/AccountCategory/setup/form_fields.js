export default [
  {
    name: "title",
    label: "  title",
    type: "text",
    value: "",
  },

  {
    name: "type",
    label: "  type",
    type: "select",
    label: "Select type",
    multiple: false,
    data_list: [
      {
        label: "Income",
        value: "income",
      },
      {
        label: "Expense",
        value: "expense",
      },
    ],
    value: "",
  },
];
