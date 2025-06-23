export default [
  {
    name: "name",
    label: "Enter your name",
    type: "text",
    value: "",
  },

  // {
  // 	name: "property_group_id",
  // 	label: "Enter your property group id",
  // 	type: "select",
  // 	value: "",
  // 	data_list: [],
  // },

	{
		name: "status",
		label: "select status",
		type: "select",
		value: "",
		data_list: [
			{
				label: "Active",
				value: "active",
			},
			{
				label: "Inactive",
				value: "inactive",
			},
		],
	},
];
