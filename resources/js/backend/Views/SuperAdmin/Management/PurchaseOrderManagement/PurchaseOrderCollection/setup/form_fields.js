// export default [
// 	{
// 		name: "purchase_order_id",
// 		label: "  purchase order id",
// 		type: "number",
// 		value: "",
// 	},

// 	{
// 		name: "amount",
// 		label: "  amount",
// 		type: "number",
// 		value: "",
// 	},

// 	{
// 		name: "reference",
// 		label: "  reference",
// 		type: "text",
// 		value: "",
// 	},
// ];

export default [
  {
    name: "purchase_order_id",
    label: "Select purchase order",
    type: "select",
    value: "",
    data_list: [],
    onchangeAction:
      "get_purchase_order_collection_history_by_purchase_order_id",
  },

  {
    name: "amount",
    label: "  amount",
    type: "number",
    value: "",
  },
  {
    name: "reference",
    label: "  reference",
    type: "text",
    value: "",
    row_col_class: "col-md-6",
  },
];
