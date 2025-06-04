<template>
  <div>
    <form @submit.prevent="submitHandler">
      <div class="card">
        <div class="card-header d-flex justify-content-between">
          <h5 class="text-capitalize">
            {{
              param_id
                ? `${setup.edit_page_title}`
                : `${setup.create_page_title}`
            }}
          </h5>
          <div>
            <router-link
              v-if="item.slug"
              class="btn btn-outline-info mr-2 btn-sm"
              :to="{
                name: `Details${setup.route_prefix}`,
                params: { id: item.slug },
              }"
            >
              {{ setup.details_page_title }}
            </router-link>
            <router-link
              class="btn btn-outline-warning btn-sm"
              :to="{ name: `All${setup.route_prefix}` }"
            >
              {{ setup.all_page_title }}
            </router-link>
          </div>
        </div>
        <div class="card-body card_body_fixed_height">
          <div class="row">
            <template
              v-for="(form_field, index) in form_fields"
              v-bind:key="index"
            >
              <common-input
                :label="form_field.label"
                :type="form_field.type"
                :name="form_field.name"
                :multiple="form_field.multiple"
                :value="form_field.value"
                :data_list="form_field.data_list"
                :is_visible="form_field.is_visible"
                :row_col_class="form_field.row_col_class"
              />
            </template>

            <!-- for featurese list input start-->
            <div class="col-md-12 pt-3">
              <div
                class="d-flex justify-content-between align-items-center border-bottom pb-2"
              >
                <h5 class="m-0">Add feature</h5>
                <button
                  class="btn btn-sm btn-outline-success"
                  @click.prevent="add_row('features')"
                >
                  Add row
                </button>
              </div>
              <div
                class="row align-items-center"
                v-for="(features, index) in features_data"
                :key="index"
              >
                <div class="col-md-10">
                  <div class="form-group">
                    <label for="">title</label>
                    <div class="mt-1 mb-3">
                      <input
                        class="form-control form-control-square mb-2"
                        type="text"
                        :name="`features[${index}][title]`"
                        v-model="features.title"
                        id="title"
                        :class="{
                          custom_error:
                            errors['features'] &&
                            errors['features'][index] &&
                            errors['features'][index].title,
                        }"
                      />
                    </div>
                    <div
                      v-if="
                        errors['features'] &&
                        errors['features'][index] &&
                        errors['features'][index].title
                      "
                      class="text-danger small"
                    >
                      {{ errors["features"][index].title }}
                    </div>
                  </div>
                </div>
                <div
                  class="col-md-2 d-flex align-items-center justify-content-center"
                >
                  <button
                    class="btn btn-sm btn-outline-danger"
                    :style="{
                      width: '100%',
                      marginTop: !errors['features']?.[index]?.title
                        ? '30px'
                        : '0',
                    }"
                    @click.prevent="delete_row('features', index)"
                  >
                    delete <i class="fa-solid fa-trash"></i>
                  </button>
                </div>
              </div>
            </div>

            <!-- for key_featurese list input start-->
            <div class="col-md-12 pt-3 mt-2">
              <div
                class="d-flex justify-content-between align-items-center border-bottom pb-2"
              >
                <h5 class="m-0">Add key features</h5>
                <button
                  class="btn btn-sm btn-outline-success"
                  @click.prevent="add_row('key_features')"
                >
                  Add row
                </button>
              </div>
              <div
                class="row align-items-center"
                v-for="(key_features, index) in key_features_data"
                :key="index"
              >
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="">icon</label>
                    <div class="mt-1 mb-3">
                      <select
                        class="form-control form-control-square mb-2"
                        :name="`key_features[${index}][icon]`"
                        v-model="key_features.icon"
                        :class="{
                          custom_error:
                            errors['key_features'] &&
                            errors['key_features'][index] &&
                            errors['key_features'][index].icon,
                        }"
                      >
                        <option value="">-- select --</option>
                        <option
                          v-for="(icon, i) in icons"
                          :key="i"
                          :value="icon.class"
                        >
                          {{ icon.title }}
                        </option>
                      </select>
                      <div
                        v-if="
                          errors['key_features'] &&
                          errors['key_features'][index] &&
                          errors['key_features'][index].icon
                        "
                        class="text-danger small"
                      >
                        {{ errors["key_features"][index].icon }}
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="">number</label>
                    <div class="mt-1 mb-3">
                      <input
                        class="form-control form-control-square mb-2"
                        type="number"
                        :name="`key_features[${index}][number]`"
                        v-model="key_features.number"
                        id="number"
                        :class="{
                          custom_error:
                            errors['key_features'] &&
                            errors['key_features'][index] &&
                            errors['key_features'][index].number,
                        }"
                      />
                      <div
                        v-if="
                          errors['key_features'] &&
                          errors['key_features'][index] &&
                          errors['key_features'][index].number
                        "
                        class="text-danger small"
                      >
                        {{ errors["key_features"][index].number }}
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">title</label>
                    <div class="mt-1 mb-3">
                      <input
                        class="form-control form-control-square mb-2"
                        type="text"
                        :name="`key_features[${index}][title]`"
                        v-model="key_features.title"
                        id="title"
                        :class="{
                          custom_error:
                            errors['key_features'] &&
                            errors['key_features'][index] &&
                            errors['key_features'][index].title,
                        }"
                      />
                    </div>
                    <div
                      v-if="
                        errors['key_features'] &&
                        errors['key_features'][index] &&
                        errors['key_features'][index].title
                      "
                      class="text-danger small"
                    >
                      {{ errors["key_features"][index].title }}
                    </div>
                  </div>
                </div>
                <div
                  class="col-md-2 d-flex align-items-center justify-content-center"
                >
                  <button
                    class="btn btn-sm btn-outline-danger"
                    :style="{
                      width: '100%',
                      marginTop:
                        !errors['key_features']?.[index]?.icon &&
                        !errors['key_features']?.[index]?.title &&
                        !errors['key_features']?.[index]?.number
                          ? '30px'
                          : '0',
                    }"
                    @click.prevent="delete_row('key_features', index)"
                  >
                    delete <i class="fa-solid fa-trash"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-light btn-square px-5">
            <i class="icon-lock"></i>
            Submit
          </button>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
import { mapActions, mapState } from "pinia";
import { store } from "../store";
import setup from "../setup";
import form_fields from "../setup/form_fields";
import ImageComponent from "../../../../../../GlobalComponents/FormComponents/ImageComponent.vue";

export default {
  components:{ImageComponent },
  data: () => ({
    setup,
    form_fields,
    param_id: null,

    icons: [
      { class: "fa-solid fa-check", title: "Check" },
      { class: "fa-solid fa-shield", title: "Shield" },
      { class: "fa-solid fa-star", title: "Star" },
      { class: "fa-solid fa-heart", title: "Heart" },
      { class: "fa-solid fa-user", title: "User" },
      { class: "fa-solid fa-cog", title: "Settings" },
      { class: "fa-solid fa-envelope", title: "Envelope" },
      { class: "fa-solid fa-solid fa-phone", title: "Phone" },
      { class: "fa-solid fa-globe", title: "Globe" },
      { class: "fa-solid fa-clock", title: "Clock" },
      { class: "fa-solid fa-thumbs-up", title: "Thumbs Up" },
      { class: "fa-solid fa-camera", title: "Camera" },
      { class: "fa-solid fa-shopping-cart", title: "Shopping Cart" },
      { class: "fa-solid fa-lock", title: "Lock" },
      { class: "fa-solid fa-chart-bar", title: "Chart Bar" },
    ],

    //----------- for features list input ----------
    features_data_object: {
      title: "",
    },
    features_data: [
      {
        title: "",
      },
    ],
    //----------- for features list input ----------

    //----------- for key_features list input ----------
    key_features_data_object: {
      icon: "",
      title: "",
      number: "",
    },
    key_features_data: [
      {
        icon: "",
        title: "",
        number: "",
      },
    ],
    //----------- for key_features list input ----------

    errors: [],
  }),
  created: async function () {
    let id = (this.param_id = this.$route.params.id);
    this.reset_fields();
    if (id) {
      this.set_fields(id);
    }
  },
  methods: {
    ...mapActions(store, {
      create: "create",
      update: "update",
      details: "details",
      get_all: "get_all",
      set_only_latest_data: "set_only_latest_data",
    }),
    reset_fields: function () {
      this.form_fields.forEach((item) => {
        item.value = "";
      });
    },
    set_fields: async function (id) {
      this.param_id = id;
      await this.details(id);
      if (this.item) {
        this.form_fields.forEach((field, index) => {
          Object.entries(this.item).forEach((value) => {
            if (field.name == value[0]) {
              this.form_fields[index].value = value[1];
            }
          });
        });
      }
    },

    submitHandler: async function ($event) {
      if (!this.validate_data()) {
        return; // Stop submission if validation fails
      }

      this.set_only_latest_data(true);
      if (this.param_id) {
        let response = await this.update($event);
        // await this.get_all();
        if ([200, 201].includes(response.status)) {
          window.s_alert("Data successfully updated");
          this.$router.push({ name: `Details${this.setup.route_prefix}` });
        }
      } else {
        let response = await this.create($event);
        // await this.get_all();
        if ([200, 201].includes(response.status)) {
          window.s_alert("Data Successfully Created");
          this.$router.push({ name: `All${this.setup.route_prefix}` });
        }
      }
    },

    //add row for social links
    add_row: function (field_name) {
      if (field_name === "features") {
        this.features_data.push({ ...this.features_data_object });
      } else if (field_name === "key_features") {
        this.key_features_data.push({ ...this.key_features_data_object });
      }
    },
    //delete row for social links
    delete_row(field_name, index) {
      if (field_name === "features") {
        if (this.features_data.length < 2) {
          console.error("cant delete first row");
          return;
        }
        this.features_data.splice(index, 1);
      } else if (field_name === "key_features") {
        if (this.key_features_data.length < 2) {
          console.error("cant delete first row");
          return;
        }
        this.key_features_data.splice(index, 1);
      }
    },
    //validation for social link empty data
    validate_data: function () {
      this.errors = [];
      let valid = true;

      // features json data validation
      this.errors["features"] = [];
      this.features_data.forEach((features, index) => {
        let featuresErrors = {};

        // Validate title field
        if (!features.title) {
          featuresErrors.title = "Title is required";
          valid = false;
        }

        this.errors["features"][index] = featuresErrors;
      });

      // key_features json data validation
      this.errors["key_features"] = [];
      this.key_features_data.forEach((key_features, index) => {
        let key_featuresErrors = {};

        // Validate icon field
        if (!key_features.title) {
          key_featuresErrors.icon = "Icon is required";
          valid = false;
        }
        // Validate title field
        if (!key_features.title) {
          key_featuresErrors.title = "Title is required";
          valid = false;
        }
        // Validate title field
        if (!key_features.number) {
          key_featuresErrors.number = "Number is required";
          valid = false;
        }

        this.errors["key_features"][index] = key_featuresErrors;
      });

      // Log errors for debugging
      console.log(this.errors);

      if (!valid) {
        console.error("Validation failed");
        return false;
      }

      return true;
    },
  },

  computed: {
    ...mapState(store, {
      item: "item",
    }),
  },
};
</script>
