<template>
  <tr
    v-for="(item, dataindex) in data"
    :key="item.id"
    :class="`table_rows table_row_${item.id}`"
  >
    <td>
      <table-row-action :item="item"></table-row-action>
    </td>
    <td>
      <select-single :data="item" />
    </td>
    <template v-for="(row_item, index) in setup.table_row_data" :key="index">
      <td v-if="row_item == 'id'">
        {{ dataindex + 1 }}
      </td>
      <td v-else-if="row_item === 'icon'" class="text-wrap max-w-120">
        <a
          v-if="item[row_item]"
          :href="item[row_item]"
          data-lightbox="gallery"
          :data-title="item.title || ''"
        >
          <img
            :src="item[row_item]"
            alt="Image"
            style="max-width: 80px; max-height: 80px; object-fit: contain"
          />
        </a>
        <span v-else>No Image</span>
      </td>
      <td v-else class="text-wrap max-w-120">
        {{ trim_content(item[row_item], row_item) }}
      </td>
    </template>
  </tr>
</template>

<script>
import setup from "../../setup";
import SelectAll from "./select_data/SelectAll.vue";
import TableRowAction from "./TableRowAction.vue";
import SelectSingle from "./select_data/SelectSingle.vue";
export default {
  props: ["data"],
  data: () => ({
    setup,
  }),
  components: {
    SelectAll,
    TableRowAction,
    SelectSingle,
  },

  methods: {
    trim_content(content, row_item = null) {
      if (typeof content == "string") {
        if (row_item == "created_at" || row_item == "updated_at") {
          return new Intl.DateTimeFormat("en-US", {
            year: "numeric",
            month: "2-digit",
            day: "2-digit",
            hour: "2-digit",
            minute: "2-digit",
            second: "2-digit",
          }).format(new Date(content));
        }
        return content.length > 50 ? content.substring(0, 50) + "..." : content;
      }
      if (content && typeof content === "object") {
        for (const key of Object.keys(content)) {
          if (key === "title" && content.title) {
            return content.title;
          }
          if (key === "name" && content.name) {
            return content.name;
          }
        }
      }

      return content || "";
    },
  },
};
</script>

<style scoped>
.max-w-120 {
  max-width: 120px;
}
</style>
